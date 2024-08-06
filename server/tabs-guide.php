<?php
//TEST REDIRECT FOR US TVII, ONLY FOR QUICK TEST
$url = '/us/index.html';

// Send the HTTP Location header to redirect the browser
header('Location: ' . $url);

// Terminate the script
exit;
//TEST REDIRECT ENDS HERE

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

// Get the current hour
$currentHour = date('G'); // 24-hour format without leading zeros

// Generate the day containers
for ($i = 0; $i < 7; $i++) {
    // Calculate the day of the week
    $dayIndex = ($currentDayIndex + $i) % 7;
    $dayName = array_keys($daysOfWeek)[$dayIndex];
    
    // Calculate the date (e.g., today + i days)
    $date = date('m/d/Y', strtotime("+$i day"));
    $dayNumber = date('j', strtotime("+$i day"));

    // Get the localized day name
    $localizedDayName = localize("vino.guide.day." . $dayName . ".short"); // Updated to use long names

    // Determine the label for the day
    if ($i == 0) {
        $labelDay = localize("vino.guide.day.today");
        $additionalClass = 'selected'; // Set class to selected for the first day
    } elseif ($i == 1) {
        $labelDay = localize("vino.guide.day.tomorrow");
        $additionalClass = '';
    } elseif ($i == 6) {
        $labelDay = localize("vino.guide.day.lastday");
        $additionalClass = '';
    } else {
        $labelDay = ''; // No label for intermediate days
        $additionalClass = '';
    }

    // Format the current hour for display
    $hourFormatted = str_pad($currentHour, 2, '0', STR_PAD_LEFT) . ':00';
    $amPm = ($currentHour < 12) ? 'AM' : 'PM';
    $hour12 = ($currentHour % 12) ?: 12;

    echo '<div class="day-container">';
    echo '    <span class="label-day">' . htmlspecialchars($labelDay) . '</span>';
    echo '    <span class="day ' . $dayName . '">' . $dayNumber;
    echo '        <span class="name">' . htmlspecialchars($localizedDayName) . '</span>';
    echo '    </span>';
    echo '    <a href="javascript:void(0)" navi_target navi_no_reset class="day-select ' . $additionalClass . '">';
    echo '        <span>' . $hour12 . ':00' . $amPm . '</span>';
    echo '        <select name="' . htmlspecialchars($date) . '" id="day' . $i . '">';

    for ($hour = 0; $hour < 24; $hour++) {
        $hourFormatted = str_pad($hour, 2, '0', STR_PAD_LEFT) . ':00';
        $amPm = ($hour < 12) ? 'AM' : 'PM';
        $hour12 = ($hour % 12) ?: 12;
        $selected = ($hour == $currentHour) ? ' selected' : '';
        $disabled = ($i == 0 && $hour < $currentHour) ? ' disabled' : ''; // Disable previous hours for the first day

        echo '        <option value="' . $hourFormatted . '"' . $selected . $disabled . '>' . $hour12 . ':00' . $amPm . '</option>';
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

<div class="time-labels">
    <span class="segment eight">PM<br><span class="bold">7</span></span>
    <span class="segment eight">PM<br><span class="bold">8</span></span>
    <span class="segment nine">PM<br><span class="bold">9</span></span>
    <span class="segment ten">PM<br><span class="bold">10</span></span>
    <span class="segment eleven">PM<br><span class="bold">11</span></span>
    <span class="segment twelve">PM<br><span class="bold">12</span></span>
</div>


<div class="channel-container">
    
    <span class="channel-name"><span class="bold">4</span>WTMJ</span>

    <div class="segment-hours">
    <a href="javascript:void(0)" navi_target="" navi_mouse="" data-sound="SE_APPEAR_DETAIL" style="height: 660px;" class="program" id="60">
            <span class="program-title"><span class="full-hour">7:00PM</span>Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>

        <a href="javascript:void(0)" navi_target="" navi_mouse="" data-sound="SE_APPEAR_DETAIL" style="height: 110px;" class="program" id="30">
            <span class="program-title"><span class="full-hour">10:00PM</span><span class="new-label">NEW</span>TMJ4 News at 10</span>
            <span class="program-description">Local, national and international news coverage.</span>
    </a>
    
    <a href="javascript:void(0)" navi_target="" navi_mouse="" data-sound="SE_APPEAR_DETAIL" style="height: 330px;" class="program">
            <span class="program-title"><span class="full-hour">10:35PM</span>2024 Paris Olympics</span>
            <span class="program-episode">Surfing, Basketball 3x3</span>
            <span class="program-description">Coverage of pool play in basketball 3x3, a report on surfing and more.</span>
    </a>

    <a href="javascript:void(0)" navi_target="" navi_mouse="" data-sound="SE_APPEAR_DETAIL" style="height: 660px;" class="program">
            <span class="program-title"><span class="full-hour">12:00PM</span>Primetime in Paris: The Olympics</span>
            <span class="program-episode">Gymnastics, Swimming: Primetime in Paris</span>
            <span class="program-description">Coverage includes the women's all-around final in gymnastics and the women's 200m fly final and more in swimming.</span>
    </a>
    </div>

</div>

<div class="channel-container">
    
    <span class="channel-name"><span class="bold">5</span>WDJT</span>

    <div class="segment-hours">
    <a href="javascript:void(0)" navi_target="" navi_mouse="" data-sound="SE_APPEAR_DETAIL" style="height: 220px;" class="program" id="60">
            <span class="program-title"><span class="full-hour">7:00PM</span>Big Brother</span>
            <span class="program-description">Following a live vote, a houseguest is evicted and interviewed; remaining houseguests compete for power in the next head of household.</span>
     </a>

        <a href="javascript:void(0)" navi_target="" navi_mouse="" data-sound="SE_APPEAR_DETAIL" style="height: 110px;" class="program" id="30">
            <span class="program-title"><span class="full-hour">8:00PM</span><span class="new-label">NEW</span>Young Sheldon</span>
            <span class="program-episode">An Ankle Monitor and a Big Plastic Crap House</span>
            <span class="program-description">Sheldon studies to be Meemaw's lawyer when she is put on house arrest; the Coopers have a plumbing emergency.</span>
    </a>
    
    <a href="javascript:void(0)" navi_target="" navi_mouse="" data-sound="SE_APPEAR_DETAIL" style="height: 110px;" class="program">
            <span class="program-title"><span class="full-hour">8:31PM</span>Ghosts</span>
            <span class="program-episode">Whodunnit</span>
            <span class="program-description">Sam, Jay and the ghosts go into detective mode when Sam's podcast editor gives her one last episode to wrap up Alberta's murder; Trevor, Flower and Pete discover an email from a Nigerian prince asking for help.</span>
    </a>

        
    <a href="javascript:void(0)" navi_target="" navi_mouse="" data-sound="SE_APPEAR_DETAIL" style="height: 220px;" class="program">
            <span class="program-title"><span class="full-hour">9:01PM</span>The Real CSI: Miami</span>
            <span class="program-episode">Game Over</span>
            <span class="program-description">James Barry is murdered in a house full of his loved ones; examination of the murder weapon and an intriguing development involving digital forensics reveals a startling motive.</span>
    </a>

    <a href="javascript:void(0)" navi_target="" navi_mouse="" data-sound="SE_APPEAR_DETAIL" style="height: 110px;" class="program">
            <span class="program-title"><span class="full-hour">10:00PM</span>CBS 58 News at 10pm</span>
            <span class="program-description">The major news events of the day, late-breaking stories, sports, weather and tomorrow's forecast.</span>
    </a>

    <a href="javascript:void(0)" navi_target="" navi_mouse="" data-sound="SE_APPEAR_DETAIL" style="height: 220px;" class="program">
            <span class="program-title"><span class="full-hour">10:35PM</span>The Late Show With Stephen Colbert</span>
            <span class="program-episode">Glen Powell; Charlamagne Tha God</span>
            <span class="program-description">Actor Glen Powell; radio and TV personality Charlamagne Tha God.</span>
    </a>

    <a href="javascript:void(0)" navi_target="" navi_mouse="" data-sound="SE_APPEAR_DETAIL" style="height: 220px;" class="program">
            <span class="program-title"><span class="full-hour">11:37PM</span>After Midnight</span>
            <span class="program-episode">Alex Edelman; Jack McBrayer; Jackie Tohn</span>
            <span class="program-description">Comic Alex Edelman; actor Jack McBrayer; actress Jackie Tohn.</span>
    </a>

    <a href="javascript:void(0)" navi_target="" navi_mouse="" data-sound="SE_APPEAR_DETAIL" style="height: 110px;" class="program">
            <span class="program-title"><span class="full-hour">12:37PM</span>Inside Edition</span>
            <span class="program-episode">Behind the Scenes at Miss USA Pageants</span>
            <span class="program-description">Behind the scenes at Miss Teen and Miss USA pageants.</span>
    </a>



    </div>

</div>


</div>


<?php
if(!isset($_SERVER['HTTP_X_PJAX'])) {
    include('footer.php');
}
?>