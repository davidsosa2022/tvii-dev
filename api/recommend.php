<?php

require_once '../config.php';

$conn = new mysqli(CONFIG_DB_SERVER, CONFIG_DB_USER, CONFIG_DB_PASS, CONFIG_DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['query']) && !is_null($_GET['query']) && strlen($_GET['query']) > 1) {
    $query = $_GET['query'];

    // Split the query into individual words
    $words = explode(" ", $query);

    // Prepare arrays to hold conditions for programs and actors
    $conditions_programs = array();
    $conditions_actors = array();
    $types_programs = '';
    $types_actors = '';
    $placeholders_programs = '';
    $placeholders_actors = '';

    // Build the conditions for programs and actors separately, allowing partial matches
    foreach ($words as $index => $word) {
        $conditions_programs[] = "program_name LIKE ?";
        $conditions_actors[] = "actor_name LIKE ?";
        $types_programs .= 's';
        $types_actors .= 's';
        $placeholders_programs .= "%$word%";
        $placeholders_actors .= "%$word%";
        if ($index < count($words) - 1) {
            $placeholders_programs .= ' ';
            $placeholders_actors .= ' ';
        }
    }

    // Construct the SQL query for programs using prepared statements
    $sql_programs = "SELECT * FROM programs WHERE " . implode(" AND ", $conditions_programs) . " LIMIT 10";

    // Prepare and bind parameters for programs query
    $stmt_programs = $conn->prepare($sql_programs);
    if (!empty($query)) {
        $stmt_programs->bind_param($types_programs, ...array_fill(0, count($words), $placeholders_programs));
    }
    
    // Execute the programs query
    $stmt_programs->execute();
    $result_programs = $stmt_programs->get_result();

    // Construct the SQL query for actors using prepared statements
    $sql_actors = "SELECT * FROM actors WHERE " . implode(" AND ", $conditions_actors) . " LIMIT 10";

    // Prepare and bind parameters for actors query
    $stmt_actors = $conn->prepare($sql_actors);
    if (!empty($query)) {
        $stmt_actors->bind_param($types_actors, ...array_fill(0, count($words), $placeholders_actors));
    }

    // Execute the actors query
    $stmt_actors->execute();
    $result_actors = $stmt_actors->get_result();

    // Create the XML element
    $xml = new SimpleXMLElement('<suggest></suggest>');

    // Add matched program names to XML
    while ($row_programs = $result_programs->fetch_assoc()) {
        $match = $xml->addChild('match');
        $match->addChild('type', 'program');
        $match->addChild('name', htmlspecialchars($row_programs['program_name']));
        $match->addChild('genre', htmlspecialchars($row_programs['program_genre']));
        $match->addChild('id', htmlspecialchars($row_programs['program_id']));
    }

    // Add matched actor names to XML
    while ($row_actors = $result_actors->fetch_assoc()) {
        $match = $xml->addChild('match');
        $match->addChild('type', 'actor');
        $match->addChild('name', htmlspecialchars($row_actors['actor_name']));
        $match->addChild('id', htmlspecialchars($row_actors['actor_id']));
    }

    header('Content-Type: text/xml');
    echo $xml->asXML();
} else {
    header('Content-Type: text/xml');
    echo "<suggest></suggest>";
}

$conn->close();

?>
