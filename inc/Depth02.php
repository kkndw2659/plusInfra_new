<div id="nav01" class="nav2depth jmodal vertical">
  <div class="nav_top"></div>

  <div class="nav_mid">
    <h3 class="nav_tit">메뉴명</h3>

    <div class="nav_boxW">
      <ul class="depth02_list">
        <!-- 2nd_nav -->
        <li class="Depth02 subDepth">
          <a href="#" class="subNav data_btn horizontal" data-plus-id="nav0101" >2차메뉴명</a>
          <!-- nav3depth -->
          <?php include("Depth03.php"); ?>
          <!-- //nav3depth -->
        </li>
        <!-- //2nd_nav -->
      </ul>

      <!-- navBanner -->
      <?php include("navBanner.php"); ?>
      <!-- navBanner -->
    </div>
    <!-- //nav_box -->

    <div class="close">
      <a href="javascript:;"><img src="/alba/img/common/nav_close.png" alt="메뉴닫기" /></a>
    </div>

  </div>
  <!-- //nav_mid -->
  <div class="nav_btm"></div>
</div>
