<?php
include('init.php');

if(!isset($_SERVER['HTTP_X_PJAX'])) {
    include('head.php');
}
?>

<?php
$conn = new mysqli(CONFIG_DB_SERVER, CONFIG_DB_USER, CONFIG_DB_PASS, CONFIG_DB_NAME);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$program_id = null;
$image = null;
$name = null;
$genre = null;
$platforms = null;
$year = null;
$rating = null;
$country = null;
$trailer_url = null;
$extra_url = null;
$description = null;
$actors_html = null;

// Check if program_id is provided in the URL
if(isset($_GET['program'])) {
    // Sanitize the input to prevent SQL injection
    $program_id = htmlspecialchars($_GET['program']);
    
    // Query to retrieve the program from the database
    $sql = "SELECT * FROM programs WHERE program_id = ?";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);
    
    if (!$stmt) {
        die("Error in preparing statement: " . $conn->error);
    }
    
    // Bind the parameter
    $stmt->bind_param('s', $program_id);
    
    // Execute the statement
    $success = $stmt->execute();
    
    if (!$success) {
        die("Error in executing statement: " . $stmt->error);
    }
    
    // Get the result
    $result = $stmt->get_result();
    
    if (!$result) {
        die("Error in getting result set: " . $conn->error);
    }
    
    // Fetch the program
    $program = $result->fetch_assoc();
    
    // Check if program exists
    if($program) {
        $image = $program['program_image'];
        $name = $program['program_name'];
        $description = $program['program_description'];
        $year = $program['program_year'];
        $genre = $program['program_genre'];

        switch ($genre) {
            case "1":
              $genreText = localize("vino.program.genre.comedy");
                break;
            case "2":
              $genreText = localize("vino.program.genre.crime");
                break;
            case "3":
              $genreText = localize("vino.program.genre.drama");
                break;
            case "4":
              $genreText = localize("vino.program.genre.action");
                break;
            case "5":
              $genreText = localize("vino.program.genre.documental");
                break;
            case "6":
              $genreText = localize("vino.program.genre.musical");
                break;
            case "7":
              $genreText = localize("vino.program.genre.sports");
                break;
            case "8":
              $genreText = localize("vino.program.genre.horror");
                break;
            case "9":
              $genreText = localize("vino.program.genre.daytime");
              break;
            case "10":
              $genreText = localize("vino.program.genre.latenight");
              break;
            case "11":
              $genreText = localize("vino.program.genre.artedu");
              break;
            case "12":
              $genreText = localize("vino.program.genre.preschool");
              break;
            case "13":
              $genreText = localize("vino.program.genre.cooking");
              break;
            case "14":
              $genreText = localize("vino.program.genre.music");
              break;
            case "15":
              $genreText = localize("vino.program.genre.reality");
              break;
            case "16":
              $genreText = localize("vino.program.genre.religious");
              break;
            case "17":
              $genreText = localize("vino.program.genre.sci-fi");
              break;
            case "18":
              $genreText = localize("vino.program.genre.opera");
              break;
            case "19":
              $genreText = localize("vino.program.genre.infomercials");
              break;
            case "20":
              $genreText = localize("vino.program.genre.special");
              break;
            case "21":
              $genreText = localize("vino.program.genre.other");
              break;
            default:
              $genreText = localize("vino.program.genre.other");
        }

        $rating = $program['program_rating'];
        $country = $program['program_country'];
        $platforms = $program['program_streaming_services'];
                // Retrieve actors for the program
                $actor_ids = explode(',', $program['program_actors']); // Assuming actor IDs are comma-separated
        
                // Loop through actor IDs
                foreach ($actor_ids as $actor_id) {
                    // Query to retrieve actor details from the database
                    $sql_actor = "SELECT * FROM actors WHERE actor_id = ?";
                    
                    // Prepare the statement
                    $stmt_actor = $conn->prepare($sql_actor);
                    
                    if (!$stmt_actor) {
                        die("Error in preparing statement: " . $conn->error);
                    }
                    
                    // Bind the parameter
                    $stmt_actor->bind_param('s', $actor_id);
                    
                    // Execute the statement
                    $success_actor = $stmt_actor->execute();
                    
                    if (!$success_actor) {
                        die("Error in executing statement: " . $stmt_actor->error);
                    }
                    
                    // Get the result
                    $result_actor = $stmt_actor->get_result();
                    
                    if (!$result_actor) {
                        die("Error in getting result set: " . $conn->error);
                    }
                    
                    // Fetch the actor
                    $actor = $result_actor->fetch_assoc();
                    
                    // Check if actor exists
                    if($actor) {
                        // Append HTML for actor to $actors_html
                        $actors_html .= '<a href="javascript:void(0)" data-actor-name="' . $actor['actor_name'] . '" data-actor-id="' . $actor['actor_id'] . '" data-sound="SE_FACE" navi_target class="actor">';
                        $actors_html .= '<span class="actor_image" style="background-image:url(' . htmlspecialchars($actor['actor_image'] ? $actor['actor_image'] : '/img/no-image.png') . ')"></span>';
                        $actors_html .= '<span class="actor_name">' . $actor['actor_name'] . '</span>';
                        $actors_html .= '</a>';
                    }
                }
    } else {
        die("Program not found.");
    }
}
?>

  <menu class="menu-buttons">
    <header class="top-bar no-after full"><?php echo htmlspecialchars($name); ?></header>
    <a navi_target navi_mouse navi_no_reset data-hover class="favoritebtn"></a>
    <a navi_target navi_mouse data-hover href="javascript:void(0);" class="toppagebtn accesskey-minus" data-sound="SE_TOP_TOUCH_OFF"><?php echo localize("vino.program.top") ?></a>

    <a data-hover navi_target data-hover-sound="SE_MOVEPAGE_SELECT" href="javascript:void(0);" style="display:none;" class="before_page_button accesskey-l accesskey-zl"></a>
    <a data-hover navi_target data-hover-sound="SE_MOVEPAGE_SELECT" href="javascript:void(0);" class="next_page_button accesskey-r accesskey-zr"></a>

    <div class="fixed-left-buttons">
    <a navi_target navi_mouse data-hover href="javascript:void(0)" class="back_white_button accesskey-b" data-sound="SE_RETURN_TOUCH_OFF"></a>
    <a navi_target navi_mouse data-hover href="javascript:void(0)" class="remote accesskey-x" data-sound="SE_RETURN_TOUCH_OFF">Remote Control</a>
    </div>

  <div class="info-tab program">
  <?php echo localize("vino.program.info-tab") ?>
  <a href="javascript:void(0)" navi_target data-hover class="miiverse-button" data-sound="SE_POPUP_TOUCH_OFF"></a>
  <div class="day-info">
    <div class="date-day-name"></div>
    <div class="date-day"></div>
    <div class="date-time"></div>
  </div>
</div>
  
 </menu>

<div class="program-content">

<div class="program-page">

<img src="<?php echo htmlspecialchars($image ? $image : '/img/no-image.png'); ?>" class="program-image">

<div class="program-metadata">
  <span class="show-services"><?php echo localize("vino.program.synopsis") ?></span>
  <span class="show-description"><?php echo $description; ?></span>
</div>

</div>

<div class="program-page">

<div class="extra-information">
<div class="program-more-details">

<?php if (!empty($genre)) : ?>
<span class="program-genre">
    <span><?php echo localize("vino.program.genre") ?></span>
    <?php echo $genreText; ?>
</span>
<?php endif; ?>

<?php if (!empty($platforms)) : ?>
    <span class="program-plataform">
        <span><?php echo localize("vino.program.platforms") ?></span>
        <?php echo $platforms; ?>
    </span>
<?php endif; ?>

<?php if (!empty($year)) : ?>
<span class="details">
    <span class="title"><?php echo localize("vino.program.year") ?></span>
    <span class="value"><?php echo $year; ?></span>
</span>
<?php endif; ?>

<?php if (!empty($rating)) : ?>
<span class="details">
    <span class="title"><?php echo localize("vino.program.rating") ?></span>
    <span class="value"><?php echo $rating; ?></span>
</span>
<?php endif; ?>

<?php if (!empty($country)) : ?>
<span class="details">
    <span class="title"><?php echo localize("vino.program.country") ?></span>
    <span class="value"><?php echo $country; ?></span>
</span>
<?php endif; ?>

</div>
<div class="program-more-buttons">
<a href="javascript:void(0)" data-sound="SE_WAVE_OK" class="jump-browser" navi_target><span><?php echo localize("vino.program.jump.wave") ?></span></a>
<a href="javascript:void(0)" data-sound="SE_WAVE_OK" class="open-trailer-modal" navi_target><?php echo localize("vino.program.jump.trailer") ?></a>
</div>

</div>


<div class="actors">
<span class="slabel"><?php echo localize("vino.program.actors") ?></span>
<?php
if (!empty($actors_html)) {
    echo $actors_html;
} else {
    echo '<span class="no-actors">' . localize("vino.program.no-actors") . '</span>';
}
?>
</div>

<div class="related-programs">
  <span class="slabel">Related Programs</span>
<div class="live-program">
  <span class="show-genre pink">Comedy</span>
  <span class="streaming-service">Amazon Prime Video, Hulu</span>
  <span class="program-name">Adam Sandler's Eight Crazy Nights</span>
<span class="show-type">Movie</span></div>
</div>

</div>

</div>

<div class="trailer-modal-div none">
  <video class="program-trailer" width="563" height="316" src="/img/no-image.png">
  </video>
  <a href="javascript:void(0)"  data-sound="SE_RETURN_TOUCH_OFF" data-hover navi_target class="exit-trailer"><?php echo localize("vino.program.jump.trailer.close") ?></a>
</div>

<div class="remote-modal-div none">
  <div class="remote-content">
  </div>
</div>

<div class="miiverse-posts program">
<header class="posts-top-bar miiverse-with-attributes-top-bar" data-miiverse-app-data="<?php echo $userData['mii_user_bio'] ?>"  data-miiverse-search-key="<?php echo $program_id ?>"  data-miiverse-topic-tag="<?php if (strlen($name) > 50) { $name = substr($name, 0, 47) . "..."; echo htmlspecialchars($name); } else { echo htmlspecialchars($name); } ?>"><?php echo localize("vino.program.olv.viewer.header", ["%s" => htmlspecialchars($name)]); ?></header>
<span class="loading_miiverse"></span>
<a href="javascript:void(0)" data-hover navi_target class="back_white_button miiverse-back accesskey-b" data-sound="SE_RETURN_TOUCH_OFF"></a>
<a data-hover navi_target href="javascript:void(0)" data-sound="SE_POST_TOUCH_OFF" class="post-button"><?php echo localize("vino.program.olv.viewer.post-button") ?></a>
<menu class="tab-header">
<a href="javascript:void(0)" navi_target navi_no_reset data-sound="SE_WAVE_BALLOON_OPEN" data-miiverse-tab="posts" class="tab selected"><?php echo localize("vino.program.olv.viewer.tab-posts") ?></a>
<a href="javascript:void(0)" navi_target navi_no_reset data-sound="SE_WAVE_BALLOON_OPEN" data-miiverse-tab="polls" class="tab"><?php echo localize("vino.program.olv.viewer.tab-poll") ?></a>
<a href="javascript:void(0)" navi_target navi_no_reset data-sound="SE_WAVE_BALLOON_OPEN" data-miiverse-tab="recommend" class="tab"><?php echo localize("vino.program.olv.viewer.tab-recommend") ?></a>
</menu>

<div class="post-list">
</div>

<div class="post-confirm-modal none">
  <h1 class="confirm-header"><?php echo localize("vino.program.olv.solv.confirm.header") ?></h1>
  <p1 class="confirm-text"><?php echo localize("vino.program.olv.solv.confirm.text") ?></p1>
<div class="message-content">
  <img class="mii-img" data-sound="SE_WORD_MII" src="/img/no-image.png">
  <p class="user-text none"></p>
  <div class="user-memo none">
  <img class="memo" src="img/memo.png"/>
  </div>
</div>


<span class="spoilers-status"></span>

<a href="javascript:void(0)" data-hover-sound="SE_COMMON_TOUCH_ON" data-sound="SE_WAVE_CANCEL_TOUCH_OFF" data-hover class="confirm-cancel-post">Cancel</a>
<a href="javascript:void(0)" data-hover-sound="SE_COMMON_TOUCH_ON" data-sound="SE_WAVE_OK_TOUCH_OFF" data-hover class="confirm-finish-post">Post</a>

</div>

<div class="post-input-modal none">
    <header class="post-modal-header"><?php echo localize("vino.program.olv.solv.post") ?></header>
    <a navi_target navi_no_reset data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" data-sound="SE_COMMON_FINISH_TOUCH_OFF" class="cancel-post accesskey-b"></a>
    <a navi_target navi_no_reset data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" data-sound="SE_BAR_BTN_TOUCH_OFF"  class="confirm-post"><?php echo localize("vino.program.olv.solv.send") ?></a>

<div class="modal-content">
    <span class="username"></span>
    <span class="nnid"></span>
    <a no_touch data-sound="SE_WORD_MII" class="user-icon">
        <img class="mii" src="/img/no-image.png">
    </a>

<ul class="feeling-buttons">
<li class="checked">
<input navi_target navi_no_reset no_touch type="radio" name="feeling_id" value="0" class="feeling-button-normal" checked="">
</li>
<li>
<input navi_target navi_no_reset no_touch type="radio" name="feeling_id" value="1" class="feeling-button-happy">
</li>
<li>
<input navi_target navi_no_reset no_touch type="radio" name="feeling_id" value="2" class="feeling-button-like">
</li>
<li>
<input navi_target navi_no_reset no_touch type="radio" name="feeling_id" value="3" class="feeling-button-surprised">
</li>
<li>
<input navi_target navi_no_reset no_touch type="radio" name="feeling_id" value="4" class="feeling-button-frustrated">
</li>
<li>
<input navi_target navi_no_reset no_touch type="radio" name="feeling_id" value="5" class="feeling-button-puzzled">
</li>
</ul>

<span class="topic-tag"></span>
<div class="textarea-container textarea-with-menu">
                    <menu class="textarea-menu">
                        <li>
                            <label navi_target navi_no_reset id="text" class="textarea-menu-text checked">
                                <input autocomplete="off" type="radio" name="_post_type" value="body" checked data-sound="SE_WAVE_CHECKBOX_CHECK">
                            </label>
                        </li>

                        <li class="test-painting-tab">
                            <label navi_target navi_no_reset id="memo" class="textarea-menu-memo">
                                <input autocomplete="off" type="radio" name="_post_type" value="painting" data-sound="SE_WAVE_CHECKBOX_CHECK">
                            </label>
                        </li>

                    </menu>

                <div class="textarea-text">
                    <input autocomplete="off" type="text" data-sound="SE_COMMON_TEXTBOX" name="body"
                    class="textarea-text-input" value="" maxlength="100"
                    placeholder="<?php echo localize("vino.program.olv.solv.placeholder") ?>"/>

                    <div navi_target navi_no_reset class="textarea-text-preview placeholder" data-placeholder="<?php echo localize("vino.program.olv.solv.placeholder") ?>"><?php echo localize("vino.program.olv.solv.placeholder") ?></div>
                </div>

                    <div navi_target navi_no_reset class="textarea-memo none">
                        <div class="textarea-memo-preview" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAABCAIAAAB7QOjdAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAPSURBVBhXY/z//z8DAwMADv8C/3cJ+IQAAAAASUVORK5CYII=)"></div>
                        <input autocomplete="off" type="hidden" class="textarea-memo-value" name="painting" disabled="" autocomplete="off">
                    </div>

                    <label navi_target navi_no_reset data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" class="spoiler-button checkbox-button"><?php echo localize("vino.program.olv.solv.spoiler") ?>
                        <input type="checkbox" name="is_spoiler" value="1">
                    </label>
                </div>

            </div>

</div>

</div>

</div>

<?php
if(!isset($_SERVER['HTTP_X_PJAX'])) {
    include('footer.php');
}
?>