<link rel="stylesheet" href="/alba/css/header/info.css" media="screen" title="no title" charset="utf-8">
<div class="info_menu">
  <h2 class="blind">사용자메뉴</h2>

  <ul>
    <li>
      <a href="javascript:;" class="cart data_btn btn_info vertical" data-plus-id="mycart">
        장바구니
      </a>
      <!-- 장바구니 -->
      <?php include("cart.php"); ?>
      <!-- //장바구니 -->
    </li>
    <li>
      <a href="javascript:;" class="mypage data_btn btn_info vertical" data-plus-id="mypage_info">
        마이페이지
      </a>
      <!-- 마이페이지 -->
      <?php include("mypage_info.php"); ?>
      <!-- //마이페이지 -->
    </li>
    <li class="info_massage">
      <a href="javascript:;" class="massage data_btn btn_info vertical" data-plus-id="mymassage">
        메세지
      </a>
      <em class="count">12</em>
      <!-- 쪽지 -->
      <?php include("mymassage.php"); ?>
      <!-- //쪽지 -->
    </li>
    <li class="loginAccount">
      <a href="javascript:;" class="data_btn vertical btn_info" data-plus-id="myaccount">
        <img src="/alba/img/ico/ico_cmn_user.png" alt="사용자메뉴" width="100%" />
      </a>
      <?php include("account_info.php"); ?>
      <!-- //로그인후 -->
    </li>
    <li class="login">
      <a href="javascript:;" class="login popOpen" data-member-id="member_login_w">
        <span class="button red" style="width:75px;">로그인</span>
      </a>
    </li>
  </ul>
</div>
