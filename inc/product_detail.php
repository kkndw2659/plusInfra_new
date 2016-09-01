<link rel="stylesheet" href="/alba/css/item/detail.css" charset="utf-8">
<div class="pd_detail_w">

  <div class="pd_detail">
    <h3 class="blind">상품상세페이지</h3>

    <div class="detail_title">
      <h4 class="blind">상품명</h4>
      <strong>[필립스]전자동에소프레소머신 HD8761</strong>
      <ul>
        <li><img src="/alba/img/detail/detail_img_amount01.gif" alt="상품사진 1장" /></li>
        <li><img src="/alba/img/detail/detail_img_amount02.gif" alt="상품사진 2장" /></li>
        <li><img src="/alba/img/detail/detail_img_amount03.gif" alt="상품사진 3장" /></li>
        <li><img src="/alba/img/detail/detail_img_amount04.gif" alt="상품사진 4장" /></li>
      </ul>
    </div>
    <!-- //상품타이틀 -->

    <div class="detail_photo">
      <h4 class="blind">상품사진</h4>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.detail_slide').bxSlider({});
        });
      </script>
      <ul class="detail_slide">
        <li><img src="/alba/img/detail/demo_product.jpg" alt="상품사진1" /></li>
        <li><img src="/alba/img/detail/demo_product.jpg" alt="상품사진2" /></li>
        <li><img src="/alba/img/detail/demo_product.jpg" alt="상품사진3" /></li>
        <li><img src="/alba/img/detail/demo_product.jpg" alt="상품사진4" /></li>
      </ul>

      <div class="detail_tag">
        <h4 class="blind">상품연관태그</h4>
        <ul>
          <li>#태그명,</li>
          <li>#태그명,</li>
          <li>#태그명,</li>
          <li>#태그명</li>
        </ul>
      </div>
      <!-- //상품태그 -->
    </div>
    <!-- //상품사진 -->

    <div class="detail_price">
      <h4 class="blind">상품가격</h4>
      <div class="consumer_price">
        <strong>소비자가격</strong>
        <span><em>000,000,000</em> 원</span>
      </div>

      <span class="minus"><img src="/alba/img/detail/minus.png" alt="빼기" /></span>

      <div class="infra_discount">
        <strong>Plusinfra 할인</strong>
        <span><em class="dis_per">00%</em><em>100,000</em> 원</span>
      </div>

      <span class="equal"><img src="/alba/img/detail/sum.png" alt="합산은" /></span>

      <div class="sum_price">
        <strong>Plusinfra 판매가격</strong>
        <span class="lprice"><em>000,000,000</em>원</span>
      </div>
    </div>
    <!-- //상품가격 -->

    <div class="detail_info">
      <script type="text/javascript" src="/alba/js/rate.js"></script>
      <script type="text/javascript">
        $(function() {
          $('#rating_dis .ratyli').ratyli({
            full:"<img src='/alba/img/detail/starOn.png'>",
            empty:"<img src='/alba/img/detail/star.png'>",
            disable:true
          });
        });
      </script>
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
            <th scope="row" class="top">판매수량</th>
            <td class="top">1,000개</td>
            <th scope="row" class="top">최저가격</th>
            <td class="end top">229,000원</td>
          </tr>
          <tr>
            <th scope="row">판매자수</th>
            <td>3명</td>
            <th scope="row">최고가격</th>
            <td class="end">229,000원</td>
          </tr>
          <tr>
            <th scope="row">상품평</th>
            <td>
              <!-- rating_disable -->
              <div id="rating_dis" class="rating">
                <span class="ratyli" data-rate="3" date-ratemax="5"></span>
              </div>
              <!-- //rating -->
            </td>
            <th scope="row">현재 인터넷 최저가격</th>
            <td class="end">229,000원</td>
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
          <span>
            판촉수수료:
            <em>97,000</em>
            원
          </span>
        </dd>

        <dt>판촉수수료</dt>
        <dd>
          * 셀슈머이신 귀하께서 수수료율을 조정해 주십시요. <br>
          조정폭(%)은 상품별로 다르며, 조정폭에 따라 판매 수수료 및 최종 판매가가 달라집니다.
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
        *&nbsp;판촉마진이란 플러스 인프라에서 셀슈머 회원에게만 제공하는 판촉활동에 대한 판촉 수수료입니다.
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
            <dd class="quantity">
              <a href="javascript:;" class="dec">-</a>
              <input type='text' name='input_amount' class="input_amount" value='1' size=4 maxlength=4 class=ed autocomplete='off' onkeyup='calc_amount()' style="width:47px;">
              <a href="javascript:;" class="inc">+</a>
              <script type="text/javascript">
                // 위,아래 이미지 클릭으로 수량 조절
                $(document).ready(function() {
                    var $this = $('.quantity .input_amount');
                    $('.quantity .inc').click(function() {
                        if (isNaN (parseInt ($this.val() ) ) ) {
                            $this.val(1);
                        }
                        else {
                            $this.val(parseInt($this.val()) + 1);
                        }
                    }).css('cursor', 'pointer');
                    $('.quantity .dec').click(function() {
                        if (isNaN(parseInt($this.val()))) {
                            $this.val(1);
                        }
                        else {
                            $this.val(parseInt($this.val()) - 1);
                            if ($this.val() < 1) $this.val(1);
                            alert('최소 1개 이상 선택하여야 합니다.')
                        }
                    }).css('cursor', 'pointer');
                });
              </script>
            </dd>
            <dd class="price">97,000</dd>
            <dd class="delete"><a href="#"><img src="/alba/img/detail/delete.gif" alt="선택한항목삭제" /></a></dd>
          </dl>
        </li>
        <!-- //선택한상품 -->
      </ul>
      <!-- 옵션가격 -->
    </div>
    <!-- //상품옵션 -->

    <div class="delivery_price_w">
      <h4 class="tit_dinfo">배송비 관련</h4>

      <div class="delivery_price">

        <div class="infra_sell_price">
          <strong>Plusinfra 판매가격</strong>
          <span><em>000,000,000</em>원</span>
        </div>

        <span class="plus"><img src="/alba/img/detail/plus.png" alt="더하기" /></span>

        <div class="d_price">
          <strong>배송비</strong>
          <span><em>5,000</em>원</span>
        </div>

        <span class="equal"><img src="/alba/img/detail/minus.png" alt="합산은" /></span>

        <div class="sum_price">
          <strong>Plusinfra 최종판매가격</strong>
          <span><em>000,000,000</em>원</span>
        </div>

      </div>

      <div class="delivery_sch">
        01건 / 0,0000원
      </div>
      <!-- //총배송건수  -->

    </div>
    <!-- //배송비관련 -->

    <div class="last_reserves_fees">
      <dl class="">
        <dt>Plusinfra 최종 판매가격으로 구매시 적립되는 판촉수수료 :</dt>
        <dd><span>판촉수수료</span><em>97,000</em><span>원</span></dd>
      </dl>
    </div>
    <!-- //최종가격 적립 판촉수수료  -->

    <div class="detail_btn_group">
      <a href="#" class=" btn_s detail_cart">장바구니</a>
      <a href="javascript:;" class=" btn_s detail_dib"><img src="/alba/img/detail/dib.png" alt="찜하기" class="off" /><img src="/alba/img/detail/dibOn.png" alt="찜하기" class="on" />찜</a>
      <a href="#" class="btn_l detail_buy">구매하기</a>
      <a href="#" class="btn_m detail_order">주문하기</a>
      <a href="#" class="btn_l detail_plus"><span>상품&nbsp;&nbsp;&nbsp;&nbsp;하기</span></a>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.detail_dib').click(function(){
            $(this).toggleClass('on')
          });
        });
      </script>
    </div>


  </div>
  <!-- //상품상세 -->

  <div class="share_box">
    <h4 class="tit_detail_share">공유하기</h4>
    <ul>
      <li><a href="#"><img src="/alba/img/detail/ico_fb.png" alt="페이스북공유" /></a></li>
      <li><a href="#"><img src="/alba/img/detail/ico_tw.png" alt="트위터공유" /></a></li>
      <li><a href="#"><img src="/alba/img/detail/ico_tr.png" alt="텀블공유" /></a></li>
      <li><a href="#"><img src="/alba/img/detail/ico_gp.png" alt="구글플러스공유" /></a></li>
      <li><a href="#"><img src="/alba/img/detail/ico_pi.png" alt="plusinfra공유" /></a></li>
      <li><a href="#"><img src="/alba/img/detail/ico_share.png" alt="공유" /></a></li>
    </ul>
  </div>
  <!-- //공유하기 -->

  <div class="detail_banner">
    <a href="#"><img src="/alba/img/detail/banner_demo01.png" alt="배너" /></a>
  </div>
  <!-- //배너 -->

  <div class="detail_banner">
    <a href="#"><img src="/alba/img/detail/banner_demo02.png" alt="배너" /></a>
  </div>
  <!-- //배너 -->

  <div class="detail_customer">
    <h4 class="blind">고객게시판</h4>
    <div class="tablist">
      <ul>
        <li class="first"><a href="javascript:;" name="tab01">상세정보</a></li>
        <li><a href="javascript:;" name="tab02">리뷰/사용기</a></li>
        <li><a href="javascript:;" name="tab03">상품Q&amp;A</a></li>
        <li><a href="javascript:;" name="tab04">교환/반품정보</a></li>
        <li class="last"><a href="javascript:;" name="tab05">필수정보</a></li>
      </ul>
    </div>

    <div class="tabcontainer">
      <div id="tab01" class="tabcontent">
      </div>
      <!-- //상세정보 -->

      <div id="tab02" class="tabcontent">

        <div class="reivew_list">
          <div class="review_title">
            <strong>현재 평균상품만족도</strong>

            <script type="text/javascript">
              $(function() {
                $('#rating_dis .ratyli_b').ratyli({
                  full:"<img src='/alba/img/detail/star_bOn.png'>",
                  empty:"<img src='/alba/img/detail/star_b.png'>",
                  disable:true
                });
              });
            </script>

            <!-- rating_disable -->
            <div id="rating_dis" class="rating_b">
              <span class="ratyli" data-rate="3" date-ratemax="5"></span>
            </div>
            <!-- //rating -->

            <span class="com_per">75%</span>

            <span class="people">참여인원 <em>3명</em></span>
          </div>
          <!-- //리뷰타이틀 -->

          <div class="pd_review">
            <strong>상품리뷰</strong>

            <div class="review_box_w">
              <script type="text/javascript">
                $(document).ready(function(){
                  $('.rpt').click(function(){
                    $('.btn_rpt').slideToggle();
                  });
                });
              </script>

              <div class="review_box">
                <div class="user_icon">
                  <img src="/alba/img/detail/user_ico_demo.jpg" alt="유저아이콘데모" />
                </div>
                <!-- //사용자아이콘  -->
                <div class="user_info">
                  <div class="user_name">
                    <span>홍길동</span><em>1주전</em>
                  </div>
                  <!-- //사용자명 -->

                  <div class="user_txt">
                    내용내용내용내용내용
                  </div>
                  <!-- 내용 -->

                  <div class="rcd">
                    <ul>
                      <li><a href="#" class="comment">답글 1</a></li>
                      <li class="sec"><a href="#" class="modify">수정</a></li>
                    </ul>
                  </div>
                  <!-- 답글/수정 -->

                </div>
                <!-- //사용자정보  -->

                <div class="report">
                  <a href="javascript:;" class="rpt"><img src="/alba/img/detail/bu_delete.gif" alt="신고하기" /></a>
                  <a href="javascript:;" class="btn_rpt">신고하기</a>
                </div>
                <!-- //신고하기 -->
              </div>
              <!-- //리뷰  -->

              <div class="review_box_re">
                <div class="user_icon">
                  <img src="/alba/img/detail/user_ico_demo.jpg" alt="유저아이콘데모" />
                </div>
                <!-- //사용자아이콘  -->
                <div class="user_info">
                  <div class="user_name">
                    <span>홍길동</span><em>1주전</em>
                  </div>
                  <!-- //사용자명 -->

                  <div class="user_txt">
                    내용내용내용내용내용
                  </div>
                  <!-- 내용 -->

                  <div class="rcd">
                    <ul>
                      <li><a href="#" class="comment">답글 1</a></li>
                      <li class="sec"><a href="#" class="modify">수정</a></li>
                    </ul>
                  </div>
                  <!-- 답글/수정 -->

                </div>
                <!-- //사용자정보  -->

                <div class="report">
                  <a href="javascript:;" class="rpt"><img src="/alba/img/detail/bu_delete.gif" alt="신고하기" /></a>
                  <a href="javascript:;" class="btn_rpt">신고하기</a>
                </div>
                <!-- //신고하기 -->
              </div>
              <!-- //답글  -->

            </div>
            <div class="paging">
              <a href="#" class="page_button"><img src="/alba/img/detail/paging_prev.gif" alt="이전페이지" /></a>

              <strong>1</strong>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>

              <a href="#" class="page_button"><img src="/alba/img/detail/paging_next.gif" alt="다음페이지" /></a>
            </div>
            <!-- //페이징 -->
            <div class="reivew_btn_box">
              <a href="#">후기쓰기</a>
              <a href="#">리뷰쓰기</a>
            </div>
            <!-- //리뷰버튼 -->
          </div>
          <!-- //상품리뷰 -->
        </div>
        <!-- //리뷰리스트 -->

        <div class="review_write">
          <div class="review_title">
            <strong>리뷰쓰기</strong>
          </div>
          <!-- //리뷰쓰기 -->
          <div class="review_pd">
            <div class="pd_photo">
              <img src="/alba/img/detail/sell_demo_l.jpg" alt="상품사진" />
            </div>
            <!-- //상품사진 -->

            <div class="pd_info">
              <span class="name">
                [신상품] 모두투어 사이판 관광
              </span>
              <!--  //상품명 -->
              <span class="price">
                판매가격 : 000,000,000원
              </span>
              <!-- //상품가격  -->
              <span class="date">
                등록일자 2015/00/00
              </span>
            </div>
            <!-- //리뷰하는 상품정보  -->
          </div>

          <div class="rw_top">
            <script type="text/javascript" src="/alba/js/select/select.image.js"></script>
            <dl class="">
              <dt>평가:</dt>
              <dd>
                <select id="ratingSelect" name="ratingSelect" onchange="showValue(this.value)">
                  <option selected="selected">평가점수를 선택해주세요</option>
                  <option title="/alba/img/detail/rating05.png">적극추천</option>
                  <option title="/alba/img/detail/rating04.png">추천</option>
                  <option title="/alba/img/detail/rating03.png">보통</option>
                  <option title="/alba/img/detail/rating02.png">추천안함</option>
                  <option title="/alba/img/detail/rating01.png">기본</option>
                </select>
                <script type="text/javascript">
                $(document).ready(function(e){
                  try {
                    $("#ratingSelect").msDropDown();
                  } catch(e) {
                    alert(e.message);
                  }
                });
                </script>
              </dd>
              <dt class="bdl">제목:</dt>
              <dd class="bdl">
                <input type="text" name="name" value="" style="width:400px;">
              </dd>
            </dl>
          </div>

          <div class="rw_mid">
            <textarea name="name" rows="8" cols="40"></textarea>
          </div>

          <div class="rw_btm">
            <strong>작성시 주의사항</strong>
            <span>등록된 내용은 쇼핑정보에 자동으로 노출되며, 메인페이지, 검색페이지, 상품페이지, 메일 등에도 추가 노출될 수 있습니다.</span>
            <span>상대방에 대한 욕설, 비방, 명예훼손, 불성실한 내용, 반복문자, 특정 효능에 있어 오해의 소지가 있는 내용을 담고 있거나 저작권/초상권 등 타인의 권리를 침해하는 이미지를 사용하면 삭제될 수 있습니다. <br>다만, 상품에 대한 불만, 판매자에게 불리한 내용이라는 이유만으로는 삭제하지 않습니다.</span>
            <span>게시글에 회원님의 이메일, 휴대폰 번호와 같은 개인 정보의 입력은 금지되어 있으며, 발생하는 모든 피해에 대해 plusinfra는 책임지지 않습니다.</span>
            <span>게시글과 관련된 저작권 침해에 대한 책임은 본인에게 있습니다.</span>
          </div>

          <div class="rw_btn_box">
            <a href="#" class="register">등&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;록</a>
            <a href="#" class="cancel">취&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</a>
          </div>
        </div>
        <!-- //리뷰쓰기 -->
      </div>
      <!-- //리뷰사용기 -->

      <div id="tab03" class="tabcontent">
        <div class="qna_title">
          <strong>상품공급자에게 문의하기</strong>
        </div>
        <div class="qna_top">
          <dl class="">
            <dt>문의내용 :</dt>
            <dd>
              <input type="radio" name="qna" value="" id="customer_ch1" checked><label for="customer_ch1" class="rdio">상품</label>
              <input type="radio" name="qna" value="" id="customer_ch2"><label for="customer_ch2" class="rdio">배송</label>
              <input type="radio" name="qna" value="" id="customer_ch3"><label for="customer_ch3" class="rdio">반품/환불/취소</label>
              <input type="radio" name="qna" value="" id="customer_ch4"><label for="customer_ch4" class="rdio">교환/변경</label>
              <input type="radio" name="qna" value="" id="customer_ch5"><label for="customer_ch5" class="rdio">기타</label>
            </dd>
            <dt class="bdl">제&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;목 :</dt>
            <dd class="bdl"><input type="text" name="name" value="" style="width:440px;"></dd>
          </dl>
        </div>
        <!-- //사용자입력란  -->

        <div class="qna_mid">
          <textarea name="name" rows="8" cols="40" placeholder="내용을 입력해주세요"></textarea>
        </div>
        <!-- //에디터  -->

        <div class="qna_btm">
          <strong>알아두세요!</strong>
          <p>
            <span>배송지 주소, 환불계좌정보 등 개인정보가 포함된 글은 비밀글(비공개)로 등록해주시기 바랍니다.</span>
            <span>상품 Q&amp;A에 등록한 게시글은 상품 Q&amp;A에서 확인하실 수 있습니다.</span>
            <span>부적절한 게시물 등록 시 ID이용 제한 및 게시물이 삭제될 수 있습니다
              <em class="first">- 전화번호, 이메일 주소 등 연락처를 기재하여 할인/직거개 등을 유도 등</em>
              <em>- 비방/욕설/명예훼손, 가격비교정보, 물품과 관련 없는 광고글 등</em>
              <em>- 다만 상품에 대한 단순 불만, 판매자에게 불리한 내용이라는 이유만으로는 삭제하지 않습니다.</em>
            </span>
            <span>
              게시글에 회원님의 이메일, 휴대폰번호와 같은 개인 정보의 입력은 금지되어 있으며, 이로 발생하는 모든
              피해에 대해 ㈜플러스인프라는 책임지지 않습니다.
            </span>
          </p>
        </div>
        <!-- //주의사항  -->

        <div class="qna_btn_box">
          <a href="#" class="send">보&nbsp;&nbsp;내&nbsp;&nbsp;기</a>
        </div>

        <div class="infra_qna">
          <span>플러스인프라에 문의하기 <br>상담원이 친절히 답변해드립니다.</span>
          <a href="#">고객센터에 문의하기</a>
        </div>

      </div>
      <!-- //상품Q&A -->

      <div id="tab04" class="tabcontent">
        <div class="swap_title">
          <strong>상품판매자: (주)플러스인프라</strong>
          <p>
            고객센터: 000-000-0000, 이메일: cs@plusinfra.com
          </p>
        </div>
        <!-- //판매자정보 -->

        <div class="swap_info">
          <ul>
            <li>*교환/반품 시 보내실 주소:  이하 주소</li>
            <li>*교환/반품 시 연락처:   000-0000-0000</li>
            <li>*교환/반품 시 배송비:   5000원 / 2500원</li>
            <li>*교환/반품 시 택배사:   KGB택배</li>
          </ul>
        </div>

        <div class="swap_guide">
          <strong>교환 반품 요청시 주의사항</strong>
          <div>
            내용내용내용
          </div>
        </div>

      </div>
      <!-- //교환반품정보 -->

      <div id="tab05" class="tabcontent">
        <div class="essential">
          <table summary="품명,모델명,크기,중량,색상,재질,제품구성,동일모델의 출시년월,제조자,수입자,제조국,상품별 세부사항,품질보증기준,a/s 책임자,전화번호">
            <colgroup>
              <col width="200">
              <col width="*">
            </colgroup>
            <tbody>
              <tr>
                <th scope="row">
                  품명 및 모델명
                </th>
                <td class="top">
                  가벨 익스퍼트
                </td>
              </tr>
              <tr>
                <th scope="row">
                  크기,중량
                </th>
                <td>
                  300mm x 200mm x 150mm(가로x세로x높이), 600g
                </td>
              </tr>
              <tr>
                <th scope="row">
                  색상
                </th>
                <td>
                  그린
                </td>
              </tr>
              <tr>
                <th scope="row">
                  재질
                </th>
                <td>
                  고무재질
                </td>
              </tr>
              <tr>
                <th scope="row">
                  제품구성
                </th>
                <td>
                  상세내용 과 동일
                </td>
              </tr>
              <tr>
                <th scope="row">
                  동일모델의 출시년월
                </th>
                <td>
                  1994/05
                </td>
              </tr>
              <tr>
                <th scope="row">
                  제조자,수입자
                </th>
                <td>
                  (주)크라운 / (주)하얀손
                </td>
              </tr>
              <tr>
                <th scope="row">
                  제조국
                </th>
                <td>
                  필리핀
                </td>
              </tr>
              <tr>
                <th scope="row">
                  상품별 세부사항
                </th>
                <td>
                  상세정보에 기입
                </td>
              </tr>
              <tr>
                <th scope="row">
                  품질보증기준
                </th>
                <td>
                  제조사
                </td>
              </tr>
              <tr>
                <th scope="row">
                  A/S 책임자와 전화번호
                </th>
                <td>
                  (주)하얀손 / (+82)000-1006-1006
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
      <!-- //필수정보 -->
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.tabcontent').first().show();
      $('.tablist ul li').first().addClass('active');
      $('.tablist ul li a').click(function(){
        $('.tablist ul li').removeClass('active');
        $(this).parents('.tablist ul li').addClass('active');
        $('.tabcontent').hide();
        $('#' + $(this).attr('name')).fadeIn();
      });
    });
  </script>

</div>
