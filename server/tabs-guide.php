<?php
include('init.php');

if(!isset($_SERVER['HTTP_X_PJAX'])) {
    include('head.php');
}
?>
    <menu class="menu-buttons">

      <header class="top-bar" data-page-first-load="0">
        <a href="javascript:void(0)" class="label accesskey-l popular"
          data-sound="SE_A_TAB_TOUCH_OFF"><?php echo localize("vino.program.label.popular") ?></a>
        <a href="javascript:void(0)" no_touch class="label guide selected"
        ><?php echo localize("vino.program.label.program-guide") ?></a>
        <a href="javascript:void(0)" class="label accesskey-r favorites"
          data-sound="SE_A_TAB_TOUCH_OFF"><?php echo localize("vino.program.label.favorite") ?></a>
      </header>

      <a navi_target navi_margin="4" data-hover
        href="javascript:void(0);" class="menubtn accesskey-y" data-sound="SE_POPUP_TOUCH_OFF"><?php echo localize("vino.program.menu") ?></a>
      <a navi_target navi_margin="4" data-hover
        href="javascript:void(0);" class="exitbtn" data-sound="SE_COMMON_FINISH_TOUCH_OFF"></a>

    <div class="fixed-left-buttons">
    <a navi_target navi_mouse data-hover href="javascript:void(0)" class="remote accesskey-x" data-sound="SE_RETURN_TOUCH_OFF">Remote Control</a>
    </div>

      <div class="info-tab">
      <a navi_target navi_margin="1" data-sound="SE_A_DECIDE_TOUCH_OFF" data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON"  data-hover href="javascript:void(0)" class="guide-settings">Change guide date and hour</a>
      <a navi_target  data-sound="SE_DECIDE_TOUCH_OFF" data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON"  data-hover href="javascript:void(0)" class="guide-ad"></a>

      <div class="day-info">
        <div class="date-day-name"></div>
        <div class="date-day"></div>
        <div class="date-time"></div>
      </div>
    </div>

    </menu>

    <div class="program-guide-settings none">
        <span class="title"><?php echo localize("vino.guide.settings.title") ?></span>
        <span class="title-label"><?php echo localize("vino.guide.settings.title.label") ?></span>
    <div class="day-list">
    <?php
// Get the current day of the week (0 = Sunday, 1 = Monday, ..., 6 = Saturday)
$currentDayIndex = date('w');

// Define the days of the week with full names
$daysOfWeek = [
    'sun' => 'Sunday',
    'mon' => 'Monday',
    'tue' => 'Tuesday',
    'wed' => 'Wednesday',
    'thu' => 'Thursday',
    'fri' => 'Friday',
    'sat' => 'Saturday',
];

// Generate the day containers
for ($i = 0; $i < 7; $i++) {
    $dayIndex = ($currentDayIndex + $i) % 7;
    $dayName = array_keys($daysOfWeek)[$dayIndex];
    $dayNumber = ($i + 1); // Example: day number for display, adjust if needed
    $dayLabel = $daysOfWeek[$dayName];
    
    // Get the localized day name
    $localizedDayName = localize("vino.guide.day." . $dayName . ".long");

    echo '<div class="day-container">';
    echo '    <span class="label-day"></span>';
    echo '    <span class="day ' . $dayName . '">' . $dayNumber;
    echo '        <span class="name">' . htmlspecialchars($localizedDayName) . '</span>';
    echo '    </span>';
    echo '    <a href="javascript:void(0)" navi_target navi_no_reset class="day-select">';
    echo '        <span>12:00AM</span>';
    echo '        <select name="day' . $i . '" id="day' . $i . '">';
    for ($hour = 0; $hour < 24; $hour++) {
        $hourFormatted = str_pad($hour, 2, '0', STR_PAD_LEFT) . ':00';
        $amPm = ($hour < 12) ? 'AM' : 'PM';
        $hour12 = ($hour % 12) ?: 12;
        echo '        <option value="' . $hourFormatted . '">' . $hour12 . ':00' . $amPm . '</option>';
    }
    echo '        </select>';
    echo '    </a>';
    echo '</div>';
}
?>

    </div>

        <a href="javascript:void(0)" navi_target navi_mouse navi_margin="2" data-sound="SE_A_CLOSE_TOUCH_OFF" data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" data-hover class="option-button cancel-guide-option accesskey-b"> Cancel</a>
        <a href="javascript:void(0)" navi_target navi_mouse navi_margin="2" data-sound="SE_HELP_TOUCH_OFF" data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" data-hover class="help-guide-button">Help</a>
        <a href="javascript:void(0)" navi_target navi_mouse navi_margin="2" data-sound="SE_A_DECIDE_TOUCH_OFF" data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" data-hover  class="option-button apply-guide-option">Apply</a>
    </div>

    <div class="program-guide-container">

    </div>


<?php
if(!isset($_SERVER['HTTP_X_PJAX'])) {
    include('footer.php');
}
?>