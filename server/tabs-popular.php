<?php
include('init.php');

if(!isset($_SERVER['HTTP_X_PJAX'])) {
    include('head.php');
}
?>
    <menu class="menu-buttons">

      <header class="top-bar loading-el" data-page-first-load="0" no-touch>
        <a href="javascript:void(0)" disabled class="label popular selected"
          data-sound="SE_A_TAB_TOUCH_OFF"><?php echo localize("vino.program.label.popular") ?></a>
        <a href="javascript:void(0)" class="label guide"
          data-sound="SE_A_TAB_TOUCH_OFF"><?php echo localize("vino.program.label.program-guide") ?></a>
        <a href="javascript:void(0)" class="label favorites"
          data-sound="SE_A_TAB_TOUCH_OFF"><?php echo localize("vino.program.label.favorite") ?></a>
      </header>

      <a navi_target navi_margin="4" data-hover
        href="javascript:void(0);" class="menubtn loading-el accesskey-y" data-sound="SE_POPUP_TOUCH_OFF"><?php echo localize("vino.program.menu") ?></a>
      <a navi_target navi_margin="4" data-hover
        href="javascript:void(0);" class="exitbtn loading-el" data-sound="SE_COMMON_FINISH_TOUCH_OFF"></a>

    <div class="fixed-left-buttons">
    <a navi_target navi_mouse data-hover href="javascript:void(0)" class="remote accesskey-x" data-sound="SE_RETURN_TOUCH_OFF">Remote Control</a>
    </div>

      <div class="info-tab" no_touch><span class="loading-el"><?php echo localize("vino.program.info-tab2") ?></span>
      <div class="day-info">
        <div class="date-day-name"></div>
        <div class="date-day"></div>
        <div class="date-time"></div>
      </div>
     </div>

    </menu>

    <section class="program-preview loading-el">

      <div class="program-metadata">
        <span class="show-services"></span>
        <div class="program-title">
        <span class="show-rating"></span>
        <span class="show-title"></span>
        </div>
        <span class="show-year"></span>
      </div>

      <div class="program-metadata">
        <span class="show-description"></span>
      </div>
      
    </section>

    <section class="scroll-programs loading-el">
        <div class="daily-tip">
          <span class="tips-title"><?php echo localize("vino.program.tips.tips-title") ?></span>
          <span class="tip-content"></span>
          <span class="tip-ending">----------------------</span>
        </div>
<?php
$conn = new mysqli(CONFIG_DB_SERVER, CONFIG_DB_USER, CONFIG_DB_PASS, CONFIG_DB_NAME);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute SQL query to fetch 20 programs
$sql = "SELECT * FROM programs LIMIT 20";
$result = $conn->query($sql);

// Check if there is a result
if ($result) {
  if ($result->num_rows > 0) {
      // Loop through each program
      while ($row = $result->fetch_assoc()) {
          // Determine class based on program type
          switch ($row['program_type']) {
              case "1":
                $typeText = localize("vino.program.type.program");
                  break;
              case "2":
                $typeText = localize("vino.program.type.movie");
                  break;
              case "3":
                $typeText = localize("vino.program.type.sports");
                  break;
              case "4":
                $typeText = localize("vino.program.type.event");
                  break;
              default:
                $typeText = localize("vino.program.type.program");
          }

          switch ($row['program_genre']) {
            case "1":
              $genreClass = "pink";
              $genreText = localize("vino.program.genre.comedy");
                break;
            case "2":
              $genreClass = "red";
              $genreText = localize("vino.program.genre.crime");
                break;
            case "3":
              $genreClass = "red";
              $genreText = localize("vino.program.genre.drama");
                break;
            case "4":
              $genreClass = "blue";
              $genreText = localize("vino.program.genre.action");
                break;
            case "5":
              $genreClass = "blue";
              $genreText = localize("vino.program.genre.documental");
                break;
            case "6":
              $genreClass = "pink";
              $genreText = localize("vino.program.genre.musical");
                break;
            case "7":
              $genreClass = "green";
              $genreText = localize("vino.program.genre.sports");
                break;
            case "8":
              $genreClass = "lightblue";
              $genreText = localize("vino.program.genre.horror");
                break;
            case "9":
              $genreClass = "yellow";
              $genreText = localize("vino.program.genre.daytime");
              break;
            case "10":
              $genreClass = "lightblue";
              $genreText = localize("vino.program.genre.latenight");
              break;
            case "11":
              $genreClass = "purple";
              $genreText = localize("vino.program.genre.artedu");
              break;
            case "12":
              $genreClass = "yellow";
              $genreText = localize("vino.program.genre.preschool");
              break;
            case "13":
              $genreClass = "white";
              $genreText = localize("vino.program.genre.cooking");
              break;
            case "14":
              $genreClass = "purple";
              $genreText = localize("vino.program.genre.music");
              break;
            case "15":
              $genreClass = "lightgreen";
              $genreText = localize("vino.program.genre.reality");
              break;
            case "16":
              $genreClass = "yellow";
              $genreText = localize("vino.program.genre.religious");
              break;
            case "17":
              $genreClass = "green";
              $genreText = localize("vino.program.genre.sci-fi");
              break;
            case "18":
              $genreClass = "red";
              $genreText = localize("vino.program.genre.opera");
              break;
            case "19":
              $genreClass = "white";
              $genreText = localize("vino.program.genre.infomercials");
              break;
            case "20":
              $genreClass = "yellow";
              $genreText = localize("vino.program.genre.special");
              break;
            case "21":
              $genreClass = "black";
              $genreText = localize("vino.program.genre.other");
              break;
            default:
              $genreClass = "black";
              $genreText = localize("vino.program.genre.other");
        }
          
          // Output the program div with appropriate attributes and classes
          echo '<div class="live-program"' .
               'data-image="' . htmlspecialchars($row['program_image'] ? $row['program_image'] : '/img/no-image.png') . '"' .
               'data-program-id="' . htmlspecialchars($row['program_id']) . '" ' .
               'data-program-name="' . htmlspecialchars($row['program_name']) . '" ' .
               'data-streaming="' . htmlspecialchars($row['program_streaming_services']) . '" ' .
               'data-program-description="' . htmlspecialchars($row['program_description']) . '" ' .
               'data-program-rating="' . htmlspecialchars($row['program_rating']) . '" ' .
               'data-program-year="' . htmlspecialchars($row['program_year']) . '">' .
               '<span class="show-genre '  . $genreClass . '">' . $genreText . '</span>' .
               '<span class="streaming-service">' . htmlspecialchars($row['program_streaming_services']) . '</span>' .
               '<span class="program-name">' . htmlspecialchars($row['program_name']) . '</span>' .
               '<span class="show-type">' . htmlspecialchars($typeText) . '</span>' .
               '</div>';
      }
  } else {
      echo "No programs found";
  }
} else {
  echo "Error: " . $conn->error;
}

// Close connection
$conn->close();
?>
    </section>

<?php
if(!isset($_SERVER['HTTP_X_PJAX'])) {
    include('footer.php');
}
?>