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

        <div class="day-container">
            <span class="label-day"></span>
            <span class="day sun">4
                <span class="name">Sun</span>
            </span>

            <a href="javascript:void(0)" navi_target navi_no_reset class="day-select selected">
            <span>12:00AM</span>
            <select name="day0" id="day0">
                <option selected value="00:00">12:00AM</option>
                <option value="01:00">1:00AM</option>
                <option value="02:00">2:00AM</option>
                <option value="03:00">3:00AM</option>
                <option value="04:00">4:00AM</option>
                <option value="05:00">5:00AM</option>
                <option value="06:00">6:00AM</option>
                <option value="07:00">7:00AM</option>
                <option value="08:00">8:00AM</option>
                <option value="09:00">9:00AM</option>
                <option value="10:00">10:00AM</option>
                <option value="11:00">11:00AM</option>
                <option value="12:00">12:00PM</option>
                <option value="13:00">1:00PM</option>
                <option value="14:00">2:00PM</option>
                <option value="15:00">3:00PM</option>
                <option value="16:00">4:00PM</option>
                <option value="17:00">5:00PM</option>
                <option value="18:00">6:00PM</option>
                <option value="19:00">7:00PM</option>
                <option value="20:00">8:00PM</option>
                <option value="21:00">9:00PM</option>
                <option value="22:00">10:00PM</option>
                <option value="23:00">11:00PM</option>
            </select>
            </a>
        </div>
        
        <div class="day-container">
            <span class="label-day"></span>
            <span class="day mon">29
                <span class="name">Mon</span>
            </span>

            <a href="javascript:void(0)" navi_target navi_no_reset class="day-select">
            <span>12:00AM</span>
            <select name="day1" id="day1">
                <option selected value="00:00">12:00AM</option>
                <option value="01:00">1:00AM</option>
                <option value="02:00">2:00AM</option>
                <option value="03:00">3:00AM</option>
                <option value="04:00">4:00AM</option>
                <option value="05:00">5:00AM</option>
                <option value="06:00">6:00AM</option>
                <option value="07:00">7:00AM</option>
                <option value="08:00">8:00AM</option>
                <option value="09:00">9:00AM</option>
                <option value="10:00">10:00AM</option>
                <option value="11:00">11:00AM</option>
                <option value="12:00">12:00PM</option>
                <option value="13:00">1:00PM</option>
                <option value="14:00">2:00PM</option>
                <option value="15:00">3:00PM</option>
                <option value="16:00">4:00PM</option>
                <option value="17:00">5:00PM</option>
                <option value="18:00">6:00PM</option>
                <option value="19:00">7:00PM</option>
                <option value="20:00">8:00PM</option>
                <option value="21:00">9:00PM</option>
                <option value="22:00">10:00PM</option>
                <option value="23:00">11:00PM</option>
            </select>
            </a>
        </div>

        <div class="day-container">
            <span class="label-day"></span>
            <span class="day tue">30
                <span class="name">Tue</span>
            </span>

            <a href="javascript:void(0)" navi_target navi_no_reset class="day-select">
                <span>12:00AM</span>
                <select name="day2" id="day2">
                <option selected value="00:00">12:00AM</option>
                <option value="01:00">1:00AM</option>
                <option value="02:00">2:00AM</option>
                <option value="03:00">3:00AM</option>
                <option value="04:00">4:00AM</option>
                <option value="05:00">5:00AM</option>
                <option value="06:00">6:00AM</option>
                <option value="07:00">7:00AM</option>
                <option value="08:00">8:00AM</option>
                <option value="09:00">9:00AM</option>
                <option value="10:00">10:00AM</option>
                <option value="11:00">11:00AM</option>
                <option value="12:00">12:00PM</option>
                <option value="13:00">1:00PM</option>
                <option value="14:00">2:00PM</option>
                <option value="15:00">3:00PM</option>
                <option value="16:00">4:00PM</option>
                <option value="17:00">5:00PM</option>
                <option value="18:00">6:00PM</option>
                <option value="19:00">7:00PM</option>
                <option value="20:00">8:00PM</option>
                <option value="21:00">9:00PM</option>
                <option value="22:00">10:00PM</option>
                <option value="23:00">11:00PM</option>
            </select>
            </a>
        </div>

        <div class="day-container">
            <span class="label-day"></span>
            <span class="day wed">31
                <span class="name">Wed</span>
            </span>

            <a href="javascript:void(0)" navi_target navi_no_reset class="day-select">
            <span>12:00AM</span>
            <select name="day3" id="day3">
                <option selected value="00:00">12:00AM</option>
                <option value="01:00">1:00AM</option>
                <option value="02:00">2:00AM</option>
                <option value="03:00">3:00AM</option>
                <option value="04:00">4:00AM</option>
                <option value="05:00">5:00AM</option>
                <option value="06:00">6:00AM</option>
                <option value="07:00">7:00AM</option>
                <option value="08:00">8:00AM</option>
                <option value="09:00">9:00AM</option>
                <option value="10:00">10:00AM</option>
                <option value="11:00">11:00AM</option>
                <option value="12:00">12:00PM</option>
                <option value="13:00">1:00PM</option>
                <option value="14:00">2:00PM</option>
                <option value="15:00">3:00PM</option>
                <option value="16:00">4:00PM</option>
                <option value="17:00">5:00PM</option>
                <option value="18:00">6:00PM</option>
                <option value="19:00">7:00PM</option>
                <option value="20:00">8:00PM</option>
                <option value="21:00">9:00PM</option>
                <option value="22:00">10:00PM</option>
                <option value="23:00">11:00PM</option>
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
            <select name="day4" id="day4">
                <option selected value="00:00">12:00AM</option>
                <option value="01:00">1:00AM</option>
                <option value="02:00">2:00AM</option>
                <option value="03:00">3:00AM</option>
                <option value="04:00">4:00AM</option>
                <option value="05:00">5:00AM</option>
                <option value="06:00">6:00AM</option>
                <option value="07:00">7:00AM</option>
                <option value="08:00">8:00AM</option>
                <option value="09:00">9:00AM</option>
                <option value="10:00">10:00AM</option>
                <option value="11:00">11:00AM</option>
                <option value="12:00">12:00PM</option>
                <option value="13:00">1:00PM</option>
                <option value="14:00">2:00PM</option>
                <option value="15:00">3:00PM</option>
                <option value="16:00">4:00PM</option>
                <option value="17:00">5:00PM</option>
                <option value="18:00">6:00PM</option>
                <option value="19:00">7:00PM</option>
                <option value="20:00">8:00PM</option>
                <option value="21:00">9:00PM</option>
                <option value="22:00">10:00PM</option>
                <option value="23:00">11:00PM</option>
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
            <select name="day5" id="day5">
                <option selected value="00:00">12:00AM</option>
                <option value="01:00">1:00AM</option>
                <option value="02:00">2:00AM</option>
                <option value="03:00">3:00AM</option>
                <option value="04:00">4:00AM</option>
                <option value="05:00">5:00AM</option>
                <option value="06:00">6:00AM</option>
                <option value="07:00">7:00AM</option>
                <option value="08:00">8:00AM</option>
                <option value="09:00">9:00AM</option>
                <option value="10:00">10:00AM</option>
                <option value="11:00">11:00AM</option>
                <option value="12:00">12:00PM</option>
                <option value="13:00">1:00PM</option>
                <option value="14:00">2:00PM</option>
                <option value="15:00">3:00PM</option>
                <option value="16:00">4:00PM</option>
                <option value="17:00">5:00PM</option>
                <option value="18:00">6:00PM</option>
                <option value="19:00">7:00PM</option>
                <option value="20:00">8:00PM</option>
                <option value="21:00">9:00PM</option>
                <option value="22:00">10:00PM</option>
                <option value="23:00">11:00PM</option>
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
            <select name="day6" id="day6">
                <option selected value="00:00">12:00AM</option>
                <option value="01:00">1:00AM</option>
                <option value="02:00">2:00AM</option>
                <option value="03:00">3:00AM</option>
                <option value="04:00">4:00AM</option>
                <option value="05:00">5:00AM</option>
                <option value="06:00">6:00AM</option>
                <option value="07:00">7:00AM</option>
                <option value="08:00">8:00AM</option>
                <option value="09:00">9:00AM</option>
                <option value="10:00">10:00AM</option>
                <option value="11:00">11:00AM</option>
                <option value="12:00">12:00PM</option>
                <option value="13:00">1:00PM</option>
                <option value="14:00">2:00PM</option>
                <option value="15:00">3:00PM</option>
                <option value="16:00">4:00PM</option>
                <option value="17:00">5:00PM</option>
                <option value="18:00">6:00PM</option>
                <option value="19:00">7:00PM</option>
                <option value="20:00">8:00PM</option>
                <option value="21:00">9:00PM</option>
                <option value="22:00">10:00PM</option>
                <option value="23:00">11:00PM</option>
            </select>
            </a>
        </div>

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