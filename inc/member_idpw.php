<script type="text/javascript" src="http://panda2659.cafe24.com/alba/js/tab.js" charset="utf-8"></script>

<div id="member_idpw_w" class="member_w">
  <!-- 아이디비번찾기 -->
  <h3 class="member_title">Plusinfra 아이디/비번찾기</h3>
  <div id="member_idpw" class="member_pop">
    <div class='tabbed_content'>
      <div class='tabs'>
        <div class='moving_bg'>&nbsp;</div>
        <span class='first tab_item active'>ID 찾기</span>
        <span class='tab_item'>PW 찾기</span>
      </div>
      <!-- //tabs -->

      <div class='slide_content'>
        <div class='tabslider'>
          <div class="id_sch idpwBox">
            <?php include("member_id_sch.php"); ?>
          </div>
          <!-- //id_sch -->

          <div class="pw_sch idpwBox">
            <?php include("member_pw_sch.php"); ?>
          </div>
          <!-- //pw_sch -->
        </div>
        <!-- //tabslider -->

      </div>
      <!-- //slide_content -->
    </div>
    <!-- //tabbed_content -->
  </div>
  <!-- //아이디비번찾기 -->
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('.cb_w .idSchbox').first().show();
  $('.cbp_w .pwSchBox').first().show();
  var radiocontent = $('.cb_w .idSchbox');
  var radiocontent2 = $('.cbp_w .pwSchBox');
  $('.idSchR').click(function(){
    $('.idSch label').removeClass('checked');
    radiocontent.hide();
    radiocontent.eq($(".idSchR").index(this)).show();
  });
  $('.pwSchR').click(function(){
    $('.pwSch label').removeClass('checked');
    radiocontent2.hide();
    radiocontent2.eq($(".pwSchR").index(this)).show();
  });
});
</script>
