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
    <div navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title"><span class="full-hour">7:00PM</span>Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
        </div>
    </div>

    <div class="segment-hour" id="8">
    <div navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
        </div>
    </div>

    <div class="segment-hour" id="9">
    <div navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty" id="60">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
        </div>
    </div>

    <div class="segment-hour" id="10">
    <div navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program thirty" id="30">
            <span class="program-title">Primetime in Paris: The Olympics</span>
            <span class="program-description">Medals are awarded in the women's gymnastics team final, women's 100m backstroke and more in swimming. Plus, coverage of the surfing finals.</span>
        </div>
        <div class="program thirty" id="30">
            <span class="program-title"><span class="full-hour">10:30PM</span>TMJ4 News at 10</span>
            <span class="program-description">Local, national and international news coverage.</span>
        </div>
    </div>

    
    <div class="segment-hour" id="11">
    <div navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title"><span class="full-hour">11:05PM</span>2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
        </div>
    </div>

    <div class="segment-hour" id="12">
    <div navi_target navi_mouse data-sound="SE_APPEAR_DETAIL" class="program sixty">
            <span class="program-title">2024 Paris Olympics</span>
            <span class="program-description">Surfing wraps up in Tahiti, plus coverage from basketball 3x3 pool play and more.</span>
        </div>
    </div>

</div>



</div>


<?php
if(!isset($_SERVER['HTTP_X_PJAX'])) {
    include('footer.php');
}
?>