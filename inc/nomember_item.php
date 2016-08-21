<div class="grid item_box">
  <div class="pd_img">
    <a href="#"><img src="/alba/img/item/Demo_img.jpg" alt="상품명"><span class="Over"></span></a>
  </div>
  <!-- //pd_img -->

  <div class="pd_sec">
    <dl>
      <dt><a href="#">회원아닐때</a></dt>
      <dd class="productPrice">
        35,000 <span>원</span>
      </dd>
      <dd class="discountInto">
        30%
      </dd>
    </dl>
	<!--   pick   -->
    <div class="pick">
      <ul>
        <li>
          <a href="javascript:;" data-seller-id="item_viewSeller" class="viewSeller data_btn vertical">
            <img src="/alba/img/ico/ico_viewMember.png" alt="이 상품을 본 회원"><em class="count">1</em>
          </a>
        </li>
        <li>
          <a href="javascript:;" class="">
            <img src="/alba/img/ico/ico_viewMassage.png" alt="상품 문의글"> <em class="count">1</em>
          </a>
        </li>
        <li class="plusShop aniA">
          <a href="javascript:;" data-plus-id="item_plus" class="vertical data_btn ani_btn">
            <img src="/alba/img/ico/ico_plusShop.png" alt="플러스샵" class="off">
            <img src="/alba/img/ico/ico_plusShopOn.png" alt="플러스샵" class="on">
            <img src="/alba/img/ico/ico_plusShopA.png" alt="플러스샵" class="ani">
          </a>
          <?php include("./inc/item_plus.php"); ?>
        </li>
        <li class="dib aniA">
          <a href="javascript:;" class="btn_dib ani_btn ico_ani">
            <img src="/alba/img/ico/ico_dib.png" alt="이 상품 찜하기" class="off">
            <img src="/alba/img/ico/ico_dibOn.png" alt="이 상품 찜하기" class="on">
            <img src="/alba/img/ico/ico_dibA.png" alt="이 상품 찜하기" class="ani" >
            <em class="count">1</em>
          </a>
          <?php include("./inc/item_dib.php"); ?>
        </li>
      </ul>
    </div>
    <!--   //pick   -->
  </div>
  <!--  //pd_sec  -->
  <?php include("./inc/item_viewSeller.php"); ?>

</div>
