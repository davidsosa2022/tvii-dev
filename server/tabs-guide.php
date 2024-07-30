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

      <div class="info-tab" no_touch><span><?php echo localize("vino.program.info-tab2") ?></span>
      <div class="day-info">
        <div class="date-day-name"></div>
        <div class="date-day"></div>
        <div class="date-time"></div>
      </div>
    </div>

    </menu>

    <div class="program-guide-container">

<div class="time-labels">
    <span class="segment eight">PM<br><span class="bold">8</span></span>
    <span class="segment nine">PM<br><span class="bold">9</span></span>
    <span class="segment ten">PM<br><span class="bold">10</span></span>
    <span class="segment eleven">PM<br><span class="bold">11</span></span>
    <span class="segment twelve">PM<br><span class="bold">12</span></span>
</div>

<div class="channel-container">
    
    <span class="channel-name">Fox</span>

    <div class="segment-hour">
    <div class="program thirty">
            <span class="program-title">The amazing adventure of Braden Kun</span>
            <span class="program-description">Braden has an amazing day with his friends</span>
        </div>
        <div class="program thirty">
            <span class="program-title">The amazing adventure of Braden Kun</span>
            <span class="program-description">Braden has an amazing day with his friends</span>
        </div>
    </div>

    <div class="segment-hour">
    <div class="program sixty">
            <span class="program-title">The amazing adventure of Braden Kun</span>
            <span class="program-description">Braden has an amazing day with his friends</span>
        </div>
    </div>

    <div class="segment-hour">
    <div class="program thirty">
            <span class="program-title">The amazing adventure of Braden Kun</span>
            <span class="program-description">Braden has an amazing day with his friends</span>
        </div>
        <div class="program thirty">
            <span class="program-title">The amazing adventure of Braden Kun</span>
            <span class="program-description">Braden has an amazing day with his friends</span>
        </div>
    </div>

    <div class="segment-hour">
    <div class="program sixty">
            <span class="program-title">The amazing adventure of Braden Kun</span>
            <span class="program-description">Braden has an amazing day with his friends</span>
        </div>
    </div>
    
    <div class="segment-hour">
    <div class="program sixty">
            <span class="program-title">The amazing adventure of Braden Kun</span>
            <span class="program-description">Braden has an amazing day with his friends</span>
        </div>
    </div>

</div>

</div>


<?php
if(!isset($_SERVER['HTTP_X_PJAX'])) {
    include('footer.php');
}
?>