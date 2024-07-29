<?php
include('init.php');

if(!isset($_SERVER['HTTP_X_PJAX'])) {
    include('head.php');
}
?>
<div class="menu-tab">
    <div class="search-section">
     <span class="title">Menu</span>
     <input type="text" navi_mouse navi_no_reset  navi_target class="search_input" placeholder="Search for programs or actors..." vino_suggest/>
     <a href="javascript:void(0)" navi_mouse data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" navi_target class="search-options" data-sound="SE_A_DECIDE_TOUCH_OFF">Search Options</a>
  </div>
  <div class="buttons-section">
    <a navi_mouse data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" href="javascript:void(0)" navi_target class="favorites_settings" data-sound="SE_A_DECIDE_TOUCH_OFF">Favorites Settings</a>
    <a navi_mouse data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" href="javascript:void(0);" navi_target class="electronic_manual" data-sound="SE_A_DECIDE_TOUCH_OFF">Electronic Manual</a>
    <a navi_mouse data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" href="javascript:void(0);" navi_target class="app_settings" data-sound="SE_A_DECIDE_TOUCH_OFF">App Settings</a>
    <a navi_mouse data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" href="javascript:void(0);" navi_target class="back_button accesskey-b" data-sound="SE_CLOSE_TOUCH_OFF"> Back</a>
  </div>
</div>


<div class="app-setting-selection none">
<header class="top-bar no-after full menu-section">App Settings</header>

<div class="app-setting-selection-container">
  <a navi_mouse data-hover data-sound="SE_A_DECIDE_TOUCH_OFF" data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON"  navi_target href="javascript:void(0)" class="setting-option pc">Parental Controls Settings</a>
  <a navi_mouse data-hover data-sound="SE_A_DECIDE_TOUCH_OFF" -hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON"  navi_target href="javascript:void(0)" class="setting-option mv">Miiverse Settings</a>
  <a navi_mouse data-hover data-sound="SE_A_DECIDE_TOUCH_OFF" data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON"  navi_target href="javascript:void(0)" class="setting-option apd">Auto Power Down Settings</a>
  <a navi_mouse data-hover data-sound="SE_A_DECIDE_TOUCH_OFF" data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON"  navi_target href="javascript:void(0)" class="setting-option other">Other Settings</a>
</div>

<a navi_target navi_mouse data-hover href="javascript:void(0)" class="back_white_button accesskey-b" data-sound="SE_RETURN_TOUCH_OFF"></a>
</div>

<div class="manual-modal none">

</div>

<div class="favorites-settings-modal none">

</div>

<div class="app-settings none">

<div class="menu-container">
  <header class="top-bar no-after full menu-section">App Settings</header>

  <ul>
    <li>
      <div class="settings-option">
        <span class="settings-label">Parental Controls Settings</span>
        <span class="important">Parental Controls are enabled on the console</span>
        <br>
          <div class="pc-setting none">
          <p>Configure Parental Controls for programs that can or can not be recommended/shown in the application.
          <br><br>
          Select the TV rating you want to set.<br>
          (Uses TV Parental Guidelines system) <a href="javascript:void(0)" navi_target navi_no_reset class="tvus-hyperlink">More info</a>
        </p>
        <div class="age-ratings program">
          <span class="age-ratings-label">TV Rating System</span>
          <label navi_target navi_no_reset navi_mouse class="age tv-y selected">
            <span class="tip">Appropiate for preschool/all ages</span>
            <input type="radio" name="pc_age" value="TV-Y">
          </label>
          <label navi_target navi_no_reset navi_mouse class="age tv-g">
          <span class="tip">Appropiate for general audiences</span>
            <input type="radio" name="pc_age" value="TV-G">
          </label>
          <label navi_target navi_no_reset navi_mouse class="age tv-y7">
          <span class="tip">Appropiate for kids 7 and older</span>
            <input type="radio" name="pc_age" value="TV-Y7">
          </label>
          <label navi_target  navi_no_reset navi_mouse class="age tv-pg">
          <span class="tip">Requieres parental guidance</span>
            <input type="radio" name="pc_age" value="TV-PG">
          </label>
          <label navi_target navi_no_reset navi_mouse class="age tv-14">
          <span class="tip">Appropiate for kids 14 and older</span>
            <input type="radio" name="pc_age" value="TV-14">
          </label>
          <label navi_target navi_no_reset navi_mouse class="age tv-ma">
          <span class="tip">Appropiate for mature audiences only</span>
            <input type="radio" name="pc_age" value="TV-MA">
          </label>
        </div>
          <p>Select the movie rating you want to set.<br>
          (Uses MPA Rating system) <a href="javascript:void(0)" navi_target navi_no_reset class="mpa-hyperlink">More info</a></p>
        <div class="age-ratings film">
        <span class="age-ratings-label">Movie Rating System</span>
          <label navi_target navi_no_reset navi_mouse class="age g selected">
          <span class="tip">Appropiate for all ages</span>
            <input type="radio" name="pc_age_film" value="G">
          </label>
          <label navi_target navi_no_reset navi_mouse class="age pg">
          <span class="tip">Requieres parental guidance</span>
            <input type="radio" name="pc_age_film" value="PG">
          </label>
          <label navi_target navi_no_reset navi_mouse class="age pg13">
          <span class="tip">Appropiate for kids 13 and older</span>
            <input type="radio" name="pc_age_film" value="PG-13">
          </label>
          <label navi_target navi_no_reset navi_mouse class="age r">
          <span class="tip">Appropiate for mature audiences only</span>
            <input type="radio" name="pc_age_film" value="R">
          </label>
        </div>
     </div>

     <div class="pin-ask">
      <p>Please input your PIN to get access to the Parental Controls Settings</p>
      <span class="pin-input" navi_target navi_mouse data-sound="SE_OPEN_TEXT">Please input your PIN...</span>

     </div>

      </div>
    </li>
    <li>
      <div class="settings-option">
      <span class="settings-label">Miiverse Settings</span>
      </div>
    </li>
    <li>
      <div class="settings-option">
      <span class="settings-label">Crossposting Settings</span>
      </div>
    </li>
    <li>
      <div class="settings-option">
      <span class="settings-label">Auto Power Down Settings</span>
      </div>
    </li>
    <li>
      <div class="settings-option">
      <span class="settings-label">Other Settings</span>
      </div>
    </li>
  </ul>

  <a navi_target navi_mouse data-hover href="javascript:void(0)" class="back_white_button accesskey-b" data-sound="SE_RETURN_TOUCH_OFF"></a>

</div>

</div>

<?php
if(!isset($_SERVER['HTTP_X_PJAX'])) {
    include('footer.php');
}
?>