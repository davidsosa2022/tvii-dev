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
     <a href="javascript:void(0)" navi_mouse data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" navi_target class="search-options" data-sound="SE_A_DECIDE_TOUCH_OFF">Search Options</a>
  </div>
  <div class="buttons-section">
    <a navi_mouse data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" href="javascript:void(0)" navi_target class="favorites_settings" data-sound="SE_A_DECIDE_TOUCH_OFF">Favorites Settings</a>
    <a navi_mouse data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" href="javascript:void(0);" navi_target class="electronic_manual" data-sound="SE_A_DECIDE_TOUCH_OFF">Electronic Manual</a>
    <a navi_mouse data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" href="javascript:void(0);" navi_target class="app_settings" data-sound="SE_A_DECIDE_TOUCH_OFF">App Settings</a>
    <a navi_mouse data-hover data-hover-out-sound="SE_CMN_TOUCH_CANCEL" data-hover-sound="SE_CMN_TOUCH_ON" href="javascript:void(0);" navi_target class="back_button accesskey-b" data-sound="SE_CLOSE_TOUCH_OFF"> Back</a>
  </div>
</div>

<?php
if(!isset($_SERVER['HTTP_X_PJAX'])) {
    include('footer.php');
}
?>