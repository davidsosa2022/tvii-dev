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
        <span class="title">Change guide date and hour</span>
        <span class="title-label">When you select a day with an hour, this will show 6 hours of content starting from the hour of the day you just selected.</span>
        <div class="day-list">

        <div class="day-container">
            <span class="label-day">Today</span>
            <span class="day tue">30
                <span class="name">Tue</span>
            </span>

            <a href="javascript:void(0)" navi_target navi_no_reset class="day-select selected">
                <span>12:00AM</span>
            <select name="day1" id="day1">
                <option selected value="12AM">12:00AM</option>
                <option value="1AM">1:00AM</option>
                <option value="2AM">2:00AM</option>
                <option value="3AM">3:00AM</option>
                <option value="1AM">4:00AM</option>
                <option value="2AM">5:00AM</option>
                <option value="3AM">6:00AM</option>
                <option value="1AM">7:00AM</option>
                <option value="2AM">8:00AM</option>
                <option value="3AM">9:00AM</option>
                <option value="1AM">10:00AM</option>
                <option value="2AM">11:00AM</option>
                <option value="3AM">12:00PM</option>
                <option value="1AM">1:00PM</option>
                <option value="2AM">2:00PM</option>
                <option value="3AM">3:00PM</option>
                <option value="1AM">4:00PM</option>
                <option value="2AM">5:00PM</option>
                <option value="3AM">6:00PM</option>
                <option value="1AM">7:00PM</option>
                <option value="2AM">8:00PM</option>
                <option value="3AM">9:00PM</option>
                <option value="1AM">10:00PM</option>
                <option value="2AM">11:00PM</option>
            </select>
            </a>
        </div>

        <div class="day-container">
            <span class="label-day">Tomorrow</span>
            <span class="day wed">31
                <span class="name">Wed</span>
            </span>

            <a href="javascript:void(0)" navi_target navi_no_reset class="day-select">
            <span>12:00AM</span>
            <select name="day2" id="day2">
                <option selected value="12AM">12:00AM</option>
                <option value="1AM">1:00AM</option>
                <option value="2AM">2:00AM</option>
                <option value="3AM">3:00AM</option>
                <option value="1AM">4:00AM</option>
                <option value="2AM">5:00AM</option>
                <option value="3AM">6:00AM</option>
                <option value="1AM">7:00AM</option>
                <option value="2AM">8:00AM</option>
                <option value="3AM">9:00AM</option>
                <option value="1AM">10:00AM</option>
                <option value="2AM">11:00AM</option>
                <option value="3AM">12:00PM</option>
                <option value="1AM">1:00PM</option>
                <option value="2AM">2:00PM</option>
                <option value="3AM">3:00PM</option>
                <option value="1AM">4:00PM</option>
                <option value="2AM">5:00PM</option>
                <option value="3AM">6:00PM</option>
                <option value="1AM">7:00PM</option>
                <option value="2AM">8:00PM</option>
                <option value="3AM">9:00PM</option>
                <option value="1AM">10:00PM</option>
                <option value="2AM">11:00PM</option>
            </select>
            </a>
        </div>

        <div class="day-container">
            <span class="label-day"></span>
            <span class="day thu">1
                <span class="name">Thu</span>
            </span>

            <a href="javascript:void(0)" navi_target navi_no_reset class="day-select">
            <span>12:00AM</span>
            <select name="day3" id="day3">
                <option selected value="12AM">12:00AM</option>
                <option value="1AM">1:00AM</option>
                <option value="2AM">2:00AM</option>
                <option value="3AM">3:00AM</option>
                <option value="1AM">4:00AM</option>
                <option value="2AM">5:00AM</option>
                <option value="3AM">6:00AM</option>
                <option value="1AM">7:00AM</option>
                <option value="2AM">8:00AM</option>
                <option value="3AM">9:00AM</option>
                <option value="1AM">10:00AM</option>
                <option value="2AM">11:00AM</option>
                <option value="3AM">12:00PM</option>
                <option value="1AM">1:00PM</option>
                <option value="2AM">2:00PM</option>
                <option value="3AM">3:00PM</option>
                <option value="1AM">4:00PM</option>
                <option value="2AM">5:00PM</option>
                <option value="3AM">6:00PM</option>
                <option value="1AM">7:00PM</option>
                <option value="2AM">8:00PM</option>
                <option value="3AM">9:00PM</option>
                <option value="1AM">10:00PM</option>
                <option value="2AM">11:00PM</option>
            </select>
            </a>
        </div>

        <div class="day-container">
            <span class="label-day"></span>
            <span class="day fri">2
                <span class="name">Fri</span>
            </span>

            <a href="javascript:void(0)" navi_target navi_no_reset class="day-select">
            <span>12:00AM</span>
            <select name="day4" id="day4">
                <option selected value="12AM">12:00AM</option>
                <option disabled value="1AM">1:00AM</option>
                <option value="2AM">2:00AM</option>
                <option value="3AM">3:00AM</option>
                <option value="1AM">4:00AM</option>
                <option value="2AM">5:00AM</option>
                <option value="3AM">6:00AM</option>
                <option value="1AM">7:00AM</option>
                <option value="2AM">8:00AM</option>
                <option value="3AM">9:00AM</option>
                <option value="1AM">10:00AM</option>
                <option value="2AM">11:00AM</option>
                <option value="3AM">12:00PM</option>
                <option value="1AM">1:00PM</option>
                <option value="2AM">2:00PM</option>
                <option value="3AM">3:00PM</option>
                <option value="1AM">4:00PM</option>
                <option value="2AM">5:00PM</option>
                <option value="3AM">6:00PM</option>
                <option value="1AM">7:00PM</option>
                <option value="2AM">8:00PM</option>
                <option value="3AM">9:00PM</option>
                <option value="1AM">10:00PM</option>
                <option value="2AM">11:00PM</option>
            </select>
            </a>
        </div>

        <div class="day-container">
            <span class="label-day"></span>
            <span class="day sat">3
                <span class="name">Sat</span>
            </span>

            <a href="javascript:void(0)" navi_target navi_no_reset class="day-select">
            <span>12:00AM</span>
            <select name="day5" id="day5">
                <option selected value="12AM">12:00AM</option>
                <option disabled value="1AM">1:00AM</option>
                <option value="2AM">2:00AM</option>
                <option value="3AM">3:00AM</option>
                <option value="1AM">4:00AM</option>
                <option value="2AM">5:00AM</option>
                <option value="3AM">6:00AM</option>
                <option value="1AM">7:00AM</option>
                <option value="2AM">8:00AM</option>
                <option value="3AM">9:00AM</option>
                <option value="1AM">10:00AM</option>
                <option value="2AM">11:00AM</option>
                <option value="3AM">12:00PM</option>
                <option value="1AM">1:00PM</option>
                <option value="2AM">2:00PM</option>
                <option value="3AM">3:00PM</option>
                <option value="1AM">4:00PM</option>
                <option value="2AM">5:00PM</option>
                <option value="3AM">6:00PM</option>
                <option value="1AM">7:00PM</option>
                <option value="2AM">8:00PM</option>
                <option value="3AM">9:00PM</option>
                <option value="1AM">10:00PM</option>
                <option value="2AM">11:00PM</option>
            </select>
            </a>
        </div>

        
        <div class="day-container">
            <span class="label-day"></span>
            <span class="day sun">4
                <span class="name">Sun</span>
            </span>

            <a href="javascript:void(0)" navi_target navi_no_reset class="day-select">
            <span>12:00AM</span>
            <select name="day6" id="day6">
                <option selected value="12AM">12:00AM</option>
                <option disabled value="1AM">1:00AM</option>
                <option value="2AM">2:00AM</option>
                <option value="3AM">3:00AM</option>
                <option value="1AM">4:00AM</option>
                <option value="2AM">5:00AM</option>
                <option value="3AM">6:00AM</option>
                <option value="1AM">7:00AM</option>
                <option value="2AM">8:00AM</option>
                <option value="3AM">9:00AM</option>
                <option value="1AM">10:00AM</option>
                <option value="2AM">11:00AM</option>
                <option value="3AM">12:00PM</option>
                <option value="1AM">1:00PM</option>
                <option value="2AM">2:00PM</option>
                <option value="3AM">3:00PM</option>
                <option value="1AM">4:00PM</option>
                <option value="2AM">5:00PM</option>
                <option value="3AM">6:00PM</option>
                <option value="1AM">7:00PM</option>
                <option value="2AM">8:00PM</option>
                <option value="3AM">9:00PM</option>
                <option value="1AM">10:00PM</option>
                <option value="2AM">11:00PM</option>
            </select>
            </a>
        </div>

        <div class="day-container">
            <span class="label-day"></span>
            <span class="day mon">5
                <span class="name">Mon</span>
            </span>

            <a href="javascript:void(0)" navi_target navi_no_reset class="day-select">
            <span>12:00AM</span>
            <select name="day7" id="day7">
                <option selected value="12AM">12:00AM</option>
                <option disabled value="1AM">1:00AM</option>
                <option value="2AM">2:00AM</option>
                <option value="3AM">3:00AM</option>
                <option value="1AM">4:00AM</option>
                <option value="2AM">5:00AM</option>
                <option value="3AM">6:00AM</option>
                <option value="1AM">7:00AM</option>
                <option value="2AM">8:00AM</option>
                <option value="3AM">9:00AM</option>
                <option value="1AM">10:00AM</option>
                <option value="2AM">11:00AM</option>
                <option value="3AM">12:00PM</option>
                <option value="1AM">1:00PM</option>
                <option value="2AM">2:00PM</option>
                <option value="3AM">3:00PM</option>
                <option value="1AM">4:00PM</option>
                <option value="2AM">5:00PM</option>
                <option value="3AM">6:00PM</option>
                <option value="1AM">7:00PM</option>
                <option value="2AM">8:00PM</option>
                <option value="3AM">9:00PM</option>
                <option value="1AM">10:00PM</option>
                <option value="2AM">11:00PM</option>
            </select>
            </a>
        </div>

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

    <div class="segment-hour" id="7">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title"><span class="full-hour">7:00PM</span>Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="8">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="9">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
    </div>

    <div class="segment-hour" id="10">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
        <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title"><span class="full-hour">10:30PM</span>TMJ4 News at 10</span>
            <span class="program-description">Local, national and international news coverage.</span>
    </a>
    </div>

    
    <div class="segment-hour" id="11">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title"><span class="full-hour">11:05PM</span>2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

    <div class="segment-hour" id="12">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title">2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

</div>

<div class="channel-container">
    
    <span class="channel-name"><span class="bold">4</span>WTMJ</span>

    <div class="segment-hour" id="7">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title"><span class="full-hour">7:00PM</span>Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="8">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="9">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
    </div>

    <div class="segment-hour" id="10">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
        <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title"><span class="full-hour">10:30PM</span>TMJ4 News at 10</span>
            <span class="program-description">Local, national and international news coverage.</span>
    </a>
    </div>

    
    <div class="segment-hour" id="11">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title"><span class="full-hour">11:05PM</span>2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

    <div class="segment-hour" id="12">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title">2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

</div>

<div class="channel-container">
    
    <span class="channel-name"><span class="bold">4</span>WTMJ</span>

    <div class="segment-hour" id="7">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title"><span class="full-hour">7:00PM</span>Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="8">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="9">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
    </div>

    <div class="segment-hour" id="10">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
        <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title"><span class="full-hour">10:30PM</span>TMJ4 News at 10</span>
            <span class="program-description">Local, national and international news coverage.</span>
    </a>
    </div>

    
    <div class="segment-hour" id="11">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title"><span class="full-hour">11:05PM</span>2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

    <div class="segment-hour" id="12">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title">2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

</div>

<div class="channel-container">
    
    <span class="channel-name"><span class="bold">4</span>WTMJ</span>

    <div class="segment-hour" id="7">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title"><span class="full-hour">7:00PM</span>Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="8">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="9">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
    </div>

    <div class="segment-hour" id="10">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
        <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title"><span class="full-hour">10:30PM</span>TMJ4 News at 10</span>
            <span class="program-description">Local, national and international news coverage.</span>
    </a>
    </div>

    
    <div class="segment-hour" id="11">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title"><span class="full-hour">11:05PM</span>2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

    <div class="segment-hour" id="12">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title">2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

</div>

<div class="channel-container">
    
    <span class="channel-name"><span class="bold">4</span>WTMJ</span>

    <div class="segment-hour" id="7">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title"><span class="full-hour">7:00PM</span>Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="8">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="9">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
    </div>

    <div class="segment-hour" id="10">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
        <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title"><span class="full-hour">10:30PM</span>TMJ4 News at 10</span>
            <span class="program-description">Local, national and international news coverage.</span>
    </a>
    </div>

    
    <div class="segment-hour" id="11">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title"><span class="full-hour">11:05PM</span>2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

    <div class="segment-hour" id="12">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title">2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

</div>

<div class="channel-container">
    
    <span class="channel-name"><span class="bold">4</span>WTMJ</span>

    <div class="segment-hour" id="7">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title"><span class="full-hour">7:00PM</span>Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="8">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="9">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
    </div>

    <div class="segment-hour" id="10">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
        <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title"><span class="full-hour">10:30PM</span>TMJ4 News at 10</span>
            <span class="program-description">Local, national and international news coverage.</span>
    </a>
    </div>

    
    <div class="segment-hour" id="11">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title"><span class="full-hour">11:05PM</span>2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

    <div class="segment-hour" id="12">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title">2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

</div>

<div class="channel-container">
    
    <span class="channel-name"><span class="bold">4</span>WTMJ</span>

    <div class="segment-hour" id="7">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title"><span class="full-hour">7:00PM</span>Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="8">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="9">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
    </div>

    <div class="segment-hour" id="10">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
        <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title"><span class="full-hour">10:30PM</span>TMJ4 News at 10</span>
            <span class="program-description">Local, national and international news coverage.</span>
    </a>
    </div>

    
    <div class="segment-hour" id="11">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title"><span class="full-hour">11:05PM</span>2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

    <div class="segment-hour" id="12">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title">2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

</div>

<div class="channel-container">
    
    <span class="channel-name"><span class="bold">4</span>WTMJ</span>

    <div class="segment-hour" id="7">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title"><span class="full-hour">7:00PM</span>Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="8">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="9">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
    </div>

    <div class="segment-hour" id="10">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
        <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title"><span class="full-hour">10:30PM</span>TMJ4 News at 10</span>
            <span class="program-description">Local, national and international news coverage.</span>
    </a>
    </div>

    
    <div class="segment-hour" id="11">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title"><span class="full-hour">11:05PM</span>2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

    <div class="segment-hour" id="12">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title">2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

</div>

<div class="channel-container">
    
    <span class="channel-name"><span class="bold">4</span>WTMJ</span>

    <div class="segment-hour" id="7">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title"><span class="full-hour">7:00PM</span>Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="8">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="9">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
    </div>

    <div class="segment-hour" id="10">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
        <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title"><span class="full-hour">10:30PM</span>TMJ4 News at 10</span>
            <span class="program-description">Local, national and international news coverage.</span>
    </a>
    </div>

    
    <div class="segment-hour" id="11">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title"><span class="full-hour">11:05PM</span>2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

    <div class="segment-hour" id="12">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title">2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

</div>

<div class="channel-container">
    
    <span class="channel-name"><span class="bold">4</span>WTMJ</span>

    <div class="segment-hour" id="7">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title"><span class="full-hour">7:00PM</span>Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="8">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
     </a>
    </div>

    <div class="segment-hour" id="9">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
    </div>

    <div class="segment-hour" id="10">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
    </a>
        <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title"><span class="full-hour">10:30PM</span>TMJ4 News at 10</span>
            <span class="program-description">Local, national and international news coverage.</span>
    </a>
    </div>

    
    <div class="segment-hour" id="11">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title"><span class="full-hour">11:05PM</span>2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

    <div class="segment-hour" id="12">
    <a href="javascript:void(0)" navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title">2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
    </a>
    </div>

</div>


</div>


<?php
if(!isset($_SERVER['HTTP_X_PJAX'])) {
    include('footer.php');
}
?>