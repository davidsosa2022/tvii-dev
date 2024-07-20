<?php
include('init.php');

if(!isset($_SERVER['HTTP_X_PJAX'])) {
    include('head.php');
}
?>
<div class="menu-tab">
    <div class="search-section">
     <span class="title">Menu</span>
     <input type="text" navi_mouse navi_no_reset href="javascript:void(0)" navi_target class="search_input" placeholder="Search for programs or actors..." vino_suggest/>
     <a href="javascript:void(0)" navi_mouse data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" navi_target class="watch-party" data-sound="SE_A_DECIDE_TOUCH_OFF">TV Tag Room</a>
  </div>
  <div class="buttons-section">
    <a navi_mouse data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" href="javascript:void(0)" navi_target class="favorites_settings" data-sound="SE_A_DECIDE_TOUCH_OFF">Favorites Settings</a>
    <a navi_mouse data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" href="javascript:void(0);" navi_target class="electronic_manual" data-sound="SE_A_DECIDE_TOUCH_OFF">Electronic Manual</a>
    <a navi_mouse data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" href="javascript:void(0);" navi_target class="app_settings" data-sound="SE_A_DECIDE_TOUCH_OFF">App Settings</a>
    <a navi_mouse data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" href="javascript:void(0);" navi_target class="back_button accesskey-b" data-sound="SE_CLOSE_TOUCH_OFF"> Back</a>
  </div>
</div>

<div class="manual-modal none">

</div>

<div class="favorites-settings-modal none">

</div>

<div class="app-settings none">

<div class="menu-container">
  <header class="settings-header">App Settings</header>

  <ul>
    <li>
      <div class="settings-option">
        <span class="settings-label">Parental Controls Settings</span>
        <span class="important">Parental Controls are enabled on the console</span>
        <p>Configure Parental Controls for programs that can or can not be recommended/shown in the application.</p>
        <div class="age-ratings">
          <label class="age">
            <input type="radio" name="pc_age" value="TV-Y">
          </label>
          <label class="age">
            <input type="radio" name="pc_age" value="TV-G">
          </label>
          <label class="age">
            <input type="radio" name="pc_age" value="TV-Y7">
          </label>
          <label class="age">
            <input type="radio" name="pc_age" value="TV-PG">
          </label>
          <label class="age">
            <input type="radio" name="pc_age" value="TV-14">
          </label>
          <label class="age">
            <input type="radio" name="pc_age" value="TV-MA">
          </label>
        </div>

        <div class="age-ratings">
          <label class="age">
            <input type="radio" name="pc_age_film" value="G">
          </label>
          <label class="age">
            <input type="radio" name="pc_age_film" value="PG">
          </label>
          <label class="age">
            <input type="radio" name="pc_age_film" value="PG-13">
          </label>
          <label class="age">
            <input type="radio" name="pc_age_film" value="R">
          </label>
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
      <span class="settings-label">SpotPass Settings</span>
      </div>
    </li>
    <li>
      <div class="settings-option">
      <span class="settings-label">Other Settings</span>
      </div>
    </li>
  </ul>

  <a navi_target navi_mouse data-hover href="javascript:void(0)" class="back_white_button accesskey-b" data-sound="SE_RETURN_TOUCH_OFF">
    Save and Back
  </a>

</div>

</div>

<?php
if(!isset($_SERVER['HTTP_X_PJAX'])) {
    include('footer.php');
}
?>