<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<meta http-equiv=Cache-Control content="No-Cache">
    <meta name="format-detection" content="telephone=no, address=no, email=no" />
  	<title></title>
    <!-- css -->
    <link rel="stylesheet" href="/alba/css/common/import.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/alba/css/scrollbar/jquery.mCustomScrollbar.css" media="screen" title="no title" charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="/alba/img/common/favicon.ico" />
    <!-- //css -->
    <!-- script -->
    <!--[if lt IE 9]>
    	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    	<![endif]-->
    <script type="text/javascript" src="/alba/js/jquery-1.12.4.min.js" chartset="utf-8"></script>
    <script type="text/javascript" src="/alba/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="/alba/js/common.js" chartset="utf-8"></script>
    <script type="text/javascript" src="/alba/js/select/jquery.litelighter.js" charset="utf-8"></script>
  	<script type="text/javascript" src="/alba/js/select/selectordie.min.js" charset="utf-8"></script>
  	<script type="text/javascript" src="/alba/js/select/select.js" charset="utf-8"></script>
  	<script type="text/javascript">
  		$("select").selectOrDie({
  			customClass: "custom",
  			customID:    "custom"
  		});
  	</script>
    <!-- script -->
  </head>
  <body>
    <!-- wrap -->
    <div id="wrap_w">
      <div id="wrap">
        <!-- header -->
        <?php include("./inc/header.php"); ?>
        <!-- //header -->
        <style media="screen">
          /*상품상세 페이지에서 snav_w 숨기기*/
          #snav_w{display:none !important;}
        </style>
        <hr>
        <!-- container -->
        <div id="container">
          <h2 class="blind">본문영역</h2>
          <!-- content_start -->
          <div class="content_start">
            <div class="page_navigation">
              <ul>
                <li class="first">현재위치</li>
                <li>네비게이션</li>
              </ul>
            </div>
            <!-- //페이지 네비게이션 -->

            <div class="pd_detail_w">
              <div class="pd_detail">
                <h3 class="blind">상품상세페이지</h3>

                <div class="detail_title">
                  <h4 calss="blind">상품명</h4>
                  <strong></strong>
                  <ul>
                    <li><img src="" alt="상품사진 1장" /></li>
                    <li><img src="" alt="상품사진 2장" /></li>
                    <li><img src="" alt="상품사진 3장" /></li>
                    <li><img src="" alt="상품사진 4장" /></li>
                  </ul>
                </div>
                <!-- //상품타이틀 -->

                <div class="detail_photo">
                  <h4 calss="blind">상품사진</h4>
                  <ul class="detail_slide">
                    <li><img src="" alt="상품사진1" /></li>
                    <li><img src="" alt="상품사진2" /></li>
                    <li><img src="" alt="상품사진3" /></li>
                    <li><img src="" alt="상품사진4" /></li>
                  </ul>
                </div>
                <!-- //상품사진 -->

                <div class="detail_tag">
                  <h4 class="blind">상품연관태그</h4>
                  <ul>
                    <li>#태그명</li>
                    <li>#태그명</li>
                    <li>#태그명</li>
                    <li>#태그명</li>
                  </ul>
                </div>
                <!-- //상품태그 -->

                <div class="detail_price">
                  <h4 class="blind">상품가격</h4>
                  <div class="consumer_price">
                    <strong>소비자가격</strong>
                    <span><em>000,000,000</em> 원</span>
                  </div>

                  <span class="minus"><img src="" alt="빼기" /></span>

                  <div class="infra_discount">
                    <strong>Plusinfra 할인</strong>
                    <span><em class="dis_per">00%</em><em>100,000</em> 원</span>
                  </div>

                  <span class="equal"><img src="" alt="합산은" /></span>

                  <div class="sum_price">
                    <strong>Plusinfra 판매가격</strong>
                    <span><em>000,000,000</em>원</span>
                  </div>
                </div>
                <!-- //상품가격 -->

                <div class="detail_info">
                  <h4 class="tit_dinfo">품목세부정보 <em>(본 상품을 판매중인 셀슈머회원 정보)</em></h4>
                  <table summary="판매수량,최저가격,판매자수,최고가격,상품명,현재 인터넷 최저가격">
                    <colgroup>
                      <col width="25%" />
                      <col width="25%" />
                      <col width="25%" />
                      <col width="*" />
                    </colgroup>
                    <tbody>
                      <tr>
                        <th scope="row">판매수량</th>
                        <td>1,000개</td>
                        <th scope="row">최저가격</th>
                        <td>229,000원</td>
                      </tr>
                      <tr>
                        <th scope="row">판매자수</th>
                        <td>3명</td>
                        <th scope="row">최고가격</th>
                        <td>229,000원</td>
                      </tr>
                      <tr>
                        <th scope="row">상품평</th>
                        <td><img src="" alt="lv1" /><img src="" alt="lv2" /><img src="" alt="lv3" /><img src="" alt="lv4" /><img src="" alt="lv5" /></td>
                        <th scope="row">현재 인터넷 최저가격</th>
                        <td>229,000원</td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- //세부정보  -->

                  <dl class="sellsumer_member_info">
                    <dt>셀슈머회원</dt>
                    <dd>
                      <select class="" name="">
                        <option>8.3</option>
                      </select>
                    </dd>

                    <dt>판촉수수료</dt>
                    <dd>97,000</dd>
                  </dl>
                  <!-- //셍슈머회원 수수료  -->

                  <dl class="fees_guide">
                    <dt>판촉수수료</dt>
                    <dd>
                      * 셀슈머이신 귀하께서 수수료율을 조정해 주십시요. <br>
                      조정폭(%)은 상품별로 다르며, 조정폭에 따라 판매 수수료 및 최종 판매가가 달라집니다
                    </dd>
                  </dl>
                  <!-- //수수료안내 -->
                </div>
                <!-- //품목세부정보 -->

                <div class="reserves_guide">
                  <h4 class="tit_reserves_guide">[적립금 지급 안내]</h4>
                  <ul>
                    <li>
                      기본 적립금(일반회원 / 셀슈머 회원 전체 적용) <br>
                      상품을 구매 하시면 플러스인프라 회원 모두에게 판매가격 기준 2%를 무조건 적립해 드립니다.
                    </li>
                    <li>
                      셀슈머회원 판촉수수료 적립금 <br>
                      셀슈머회원께서 구매 또는 판촉활동을 통해 상품이 판매, 구매완료 시 적립금으로 지급 되는 판촉 수수료로 ㈜플러스인프라 <br>
                      최종판매 가격의 2%~최대 50%까지 상품별로 차등 적용/적립이 됩니다.
                    </li>
                    <li>
                      적립금 및 셀슈머 판촉수수료는 1일부터 30일까지의 판촉수수료 금액을 익월 15일에서 18일 사이에 요청하신 통장으로 <br>
                      세금과 금융수수료를 제한 금액을 입금하여 드립니다.(적립금및 셀슈머 판촉수수는 마이페이지 적립금 환급에서 신청하십시오)
                    </li>
                    <li>
                      적립금 환급시 해당월 적립금 금액이 일금 육백만원 초과시 대한민국 부과세법에 의해 개인사업자로 등록하여야 합니다.(개인 <br>
                      사업자 미전환시 적립금을 환급해 드릴수없음을 공지해드립니다.)
                    </li>
                    <li>
                      판촉수수료의 기준은 ㈜플러스인프라의 판촉 마진을 기준으로 합니다.
                    </li>
                  </ul>
                  <p>
                    * 판촉마진이란 플러스 인프라에서 셀슈머 회원에게만 제공하는 판촉활동에 대한 판촉 수수료입니다.
                  </p>
                </div>
                <!--  //적립금지급안내  -->

                <div class="detail_option">
                  <h4 class="blind">상품옵션</h4>
                  <dl>
                    <dt>상품명/사이즈</dt>
                    <dd>
                      <select class="" name="">
                        <option></option>
                      </select>
                    </dd>

                    <dt>색상옵션</dt>
                    <dd>
                      <select class="" name="">
                        <option></option>
                      </select>
                    </dd>

                    <dt>필수선택</dt>
                    <dd>
                      <select class="" name="">
                        <option></option>
                      </select>
                    </dd>
                  </dl>
                  <!-- //옵션 -->

                  <ul class="all_sum_price">
                    <!-- 선택한상품 -->
                    <li>
                      <dl class="">
                        <dt>상품명</dt>
                        <dd class="quantity"><a href="#">-</a><input type="text" name="name" value="1"><a href="#">+</a></dd>
                        <dd class="price">97,000</dd>
                        <dd class="delete"><a href="#"><img src="" alt="선택한항목삭제" /></a></dd>
                      </dl>
                    </li>
                    <!-- //선택한상품 -->
                  </ul>
                  <!-- 옵션가격 -->
                </div>
                <!-- //상품옵션 -->

                <div class="delivery_price">
                  <h4 class="tit_dinfo">배송비 관련</em></h4>
                  <div class="infra_sell_price">
                    <strong>소비자가격</strong>
                    <span><em>000,000,000</em> 원</span>
                  </div>

                  <span class="plus"><img src="" alt="더하기" /></span>

                  <div class="d_price">
                    <strong>Plusinfra 할인</strong>
                    <span><em class="dis_per">00%</em><em>100,000</em> 원</span>
                  </div>

                  <span class="equal"><img src="" alt="합산은" /></span>

                  <div class="sum_price">
                    <strong>Plusinfra 판매가격</strong>
                    <span><em>000,000,000</em> 원</span>
                  </div>
                </div>
                <!-- //배송비관련 -->

                <div class="last_reserves_fees">
                  <dl class="">
                    <dt>Plusinfra 최종 판매가격으로 구매시 적립되는 판촉수수료 :</dt>
                    <dd><span>판촉수수료</span> <em>97,000</em> <span>원</span></dd>
                  </dl>
                </div>
                <!-- //최종가격 적립 판촉수수료  -->

                <div class="detail_btn_group">
                  <a href="#" class="detail_cart"></a>
                  <a href="#" class="detail_dib"></a>
                  <a href="#" class="detail_buy"></a>
                  <a href="#" class="detail_order"></a>
                  <a href="#" class="detail_plus"></a>
                </div>

              </div>
              <!-- //상품상세 -->

              <div class="shaer_box">
                <h4 class="tit_detail_share">공유하기</h4>
                <ul>
                  <li><a href="#"><img src="" alt="페이스북공유" /></a></li>
                  <li><a href="#"><img src="" alt="트위터공유" /></a></li>
                  <li><a href="#"><img src="" alt="텀블공유" /></a></li>
                  <li><a href="#"><img src="" alt="구글플러스공유" /></a></li>
                  <li><a href="#"><img src="" alt="" /></a></li>
                  <li><a href="#"><img src="" alt="" /></a></li>
                </ul>
              </div>
              <!-- //공유하기 -->

              <div class="detail_banner">
                <a href="#"><img src="" alt="" /></a>
              </div>
              <!-- //배너 -->

              <div class="detail_banner">
                <a href="#"><img src="" alt="" /></a>
              </div>
              <!-- //배너 -->

              <div class="detail_customer">
                <div class="tablist">
                  <ul>
                    <li><a href="#">상세정보</a></li>
                    <li><a href="#">리뷰/사용기</a></li>
                    <li><a href="#">상품Q&amp;A</a></li>
                    <li><a href="#">교환/반품정보</a></li>
                    <li><a href="#">필수정보</a></li>
                  </ul>
                </div>

                <div class="tabcontainer">
                  <div class="tabcontent">
                  </div>
                  <!-- //상세정보 -->
                  <div class="tabcontent">
                  </div>
                  <!-- //리뷰사용기 -->
                  <div class="tabcontent">
                  </div>
                  <!-- //상품Q&A -->
                  <div class="tabcontent">
                  </div>
                  <!-- //교환반품정보 -->
                  <div class="tabcontent">
                  </div>
                  <!-- //필수정보 -->
                </div>
              </div>

            </div>
            <!-- //pd_detail_w -->
          </div>
          <!-- //content_start -->
        </div>
        <!-- //container -->
        <hr>
        <!-- footer -->
        <?php include("./inc/footer.php"); ?>
        <!-- footer -->
      </div>

      <!-- 	 모바일 카테고리  -->
  	  <?php include("./inc/MallCate.php"); ?>
  	  <!-- 	//모바일 카테고리 -->

  	  <!--   side button     -->
  	  <div  class="side_button">
  	  	<ul>
  		  	<li><a href="#"><img src="/alba/img/ico/ico_sideA.png" alt="" /></a></li>
  		  	<li><a href="#" id="goTop"><img src="/alba/img/ico/ico_sideB.png" alt="" /></a></li>
  	  	</ul>
  	  </div>
  	  <!--  //side button   -->

    </div>
    <!-- //wrap -->
    <div id="mask"></div>
    <div id="dum"></div>
    <!-- 멤버 인클루드 -->
    <?php include("./inc/member_login.php"); ?>
    <?php include("./inc/member_idpw.php"); ?>
    <?php include("./inc/member_join01.php"); ?>
    <?php include("./inc/member_join02.php"); ?>
    <?php include("./inc/member_join03.php"); ?>
    <?php include("./inc/member_join04.php"); ?>
    <!-- 멤버 인클루드 -->


    <script type="text/javascript">
      (function($){
        $(window).on("load",function(){
          $(".massage_list").mCustomScrollbar({
            theme:"minimal-dark"
          });
        });
      })(jQuery);
    </script>
  </body>
</html>
