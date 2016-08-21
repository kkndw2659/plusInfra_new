<!-- info_detaile -->
<div id="mymassage" class="info_detail jmodal vertical">
  <div class="bgTop"></div>
  <div class="bgMid">
    <h3 class="blind">메세지</h3>

    <div class='tabbed_content'>
      <div class='tabs'>
        <div class='moving_bg'>&nbsp;</div>
        <span class='tab_item active'>공지사항</span>
        <span class='tab_item center'>알&nbsp;&nbsp;림</span>
        <span class='tab_item'>쪽&nbsp;&nbsp;지</span>
      </div>
      <!-- //tabs -->

      <div class='slide_content'>
        <div class='tabslider'>

          <div class="massage_list">
            <?php include("massage_notice.php"); ?>
          </div>
          <!-- //공지사항 -->

          <div class="massage_list">
            <?php include("massage_alarm.php"); ?>
          </div>
          <!-- //알림 -->

          <div class="massage_list">
            <?php include("massage_note.php"); ?>
          </div>
          <!-- //쪽지 -->

        </div>
        <!-- //tabslider -->



      </div>
      <!-- //slide_content -->
    </div>
    <!-- //tabbed_content -->
  </div>
  <div class="bgBtm"></div>
</div>
<!-- //info_detaile -->
