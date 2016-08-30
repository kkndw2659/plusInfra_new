<div class="grid item_box">
  <div class="pd_img">
    <a href="#"><img src="/alba/img/item/demo3.jpg" alt="상품명"><span class="Over"></span></a>
  </div>
  <!-- //pd_img -->

  <div class="pd_sec">
    <dl>
      <dt><a href="#">회원일때</a></dt>
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
        	<a href="javascript:;" class="viewSeller">
	        	<img src="/alba/img/ico/ico_viewMember.png" alt="이 상품을 본 회원"> <em class="count">1</em>
	        </a>
        </li>
        <li>
          <a href="javascript:;" class="">
            <img src="/alba/img/ico/ico_viewMassage.png" alt="상품 문의글"> <em class="count">1</em>
          </a>
        </li>
        <li>
          <a href="javascript:;" data-plus-id="item_tag"  class="data_btn vertical tag">
            <img src="/alba/img/ico/ico_tag.png" alt="태그추가하기">
          </a>
          <a href="javascript:;" class="Mtag">
            <img src="/alba/img/ico/ico_tag.png" alt="태그추가하기">
          </a>
          <?php include("./inc/item_tag.php"); ?>
        </li>
        <li>
          <a href="javascript:;" data-plus-id="item_share"  class="data_btn vertical shared">
            <img src="/alba/img/ico/ico_share.png" alt="상품공유하기">
          </a>
          <?php include("./inc/item_share.php"); ?>
          <?php include("./inc/item_share_fr.php"); ?>
          <?php include("./inc/item_share_note.php"); ?>
          <?php include("./inc/item_share_link.php"); ?>
        </li>
      </ul>
    </div>
	<!--   //pick   -->
  </div>
  <!--  //pd_sec  -->

  <?php include("./inc/item_viewSeller.php"); ?>
</div>
