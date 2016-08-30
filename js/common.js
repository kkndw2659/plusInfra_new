$(function(){
  // jmodal(팝업 + 네비 2차메뉴)
  $('a[data-plus-id]').click(function(e){
	  e.stopPropagation();
	  var plus = $(this),
			allPlus = $('a[data-plus-id]'),
			plusData = plus.attr('data-plus-id'),
			allData = allPlus.attr('data-plus-id'),
			plusPop = $('#' + plusData),
			allPop = $('#' + allData),
			cPlus = plusPop.find('a[data-plus-id]'),
			cData = cPlus.attr('data-plus-id'),
			cPop = $('#' + cData),
			plusHas = plus.hasClass('on'),
			plusHasV = plus.hasClass('vertical'),
			plusHasA = plus.hasClass('allCate'),
			plusHasM = plus.hasClass('sendM'),
			sendTop = $(this).offset().top,
			sendLeft = $(this).offset().left,
			plusHeight = parseInt(plusPop.prevAll('.data_btn').height()),
			plusWidth = parseInt(plus.outerWidth());


	$('a[data-plus-id]').removeClass('on')
	$('.nav4list').hide();
    if(plusHasV == true){
      //vertical 일때
  		if(plusHas == true){
  			plus.removeClass('on');
  			plusPop.css({'opacity': 0, 'visibility': 'hidden'});
  		}else{
  			$('.jmodal').css({'opacity': 0, 'visibility': 'hidden'});
  			allPlus.removeClass('on');
  			plus.addClass('on');
  			plusPop.css({'top': plusHeight + 20 + 'px', 'opacity': 0, 'visibility': 'visible'});
  			plusPop.delay(300).animate({'top': plusHeight - 7 + 'px', 'opacity': 1, 'visibility': 'visible'});
      	};
     }else if(plusHasA == true){
	     //allCategory
	     if(plusHas == true){
		     plus.removeClass('on');
		     plusPop.css({'opacity': 0, 'visibility': 'hidden'});
	     }else{
		     $('.jmodal').css({'opacity': 0, 'visibility': 'hidden'});
		     plus.addClass('on');
		     plusPop.css({'height': '1px', 'opacity': 0, 'visibility': 'visible'});
		     plusPop.animate({'height': '494px', 'opacity': 1, 'visibility': 'visible'}, 800);
	     };
	 }else if(plusHasM == true){
		 //판매자메세지
		 if(plusHas == true){
		     plus.removeClass('on');
		     plusPop.css({'opacity': 0, 'visibility': 'hidden'});
	     }else{
		     $('.jmodal').css({'opacity': 0, 'visibility': 'hidden'});
  			allPlus.removeClass('on');
  			plus.addClass('on');
  			plusPop.css({'top': sendTop + 20 + 'px', 'left': sendLeft, 'opacity': 0, 'visibility': 'visible'});
  			plusPop.delay(300).animate({'top': sendTop + 25 + 'px', 'opacity': 1, 'visibility': 'visible'});
	     };
     }else{
	     //horizontal 일때
	     if(plusHas == true){
		     plus.removeClass('on');
		     plusPop.css({'opacity': 0, 'visibility': 'hidden'});
		 }else{
			 cPop.css({'opacity': 0, 'visibility': 'hidden'});
			 $(this).parent('li').parent('ul').find('li a').removeClass('on');
			 plus.addClass('on');
			 plusPop.css({'left': 0, 'opacity': 0, 'visibility': 'visible'});
			 plusPop.animate({'left': plusWidth + 1 + 'px', 'opacity': 1, 'visibility': 'visible'});
		 }
	 };
  });
  $('.jmodal .close a').click(function(){
    var closePop = $(this).parents('.jmodal'),
        closePlus = closePop.prev('a[data-plus-id]');
        closeSeller = closePop.prev('a[data-seller-id]');

    closePop.css({'opacity': 0, 'visibility': 'hidden'});
    $('a[data-plus-id]').removeClass('on');
    $('a[data-seller-id]').removeClass('on');
  });
  // jmodal.event end

  // data-plus-id 이외에 클릭시 이벤트
  $(document).click(function(event) {
    if (!$(event.target).closest(".jmodal, a[data-plus-id], .jmodal_seller, a[data-seller-id], .nav4list, .Depth03s a, #MallCate, .MallCate, .Mtag, .mshare, .info_sch, #Mitem").length) {
      $('body').css('overflow', 'auto');
      $('#wrap').css('overflow', 'auto');
      $('a[data-plus-id]').removeClass('on');
      $('.jmodal').css({'opacity': 0, 'visibility': 'hidden'});
      $('.jmodal_seller').hide();
      $('.nav4list').hide();
      $('#MallCate').css({'box-shadow': 'none', 'left': - $('#MallCate').width() + 'px'});
      $('.muser_account').css({'left': - $('#MallCate').width() + 'px'});
      $('#wrap').css({'margin-left': '0'});
      $('#header').css({'left': '0', 'z-index': '999'});
    }else{
      //이벤트발생하면 안됨
    }
  });
  //body click event

  //슬라이딩 팝업(로그인 및 회원가입 등 )
  $(".popOpen").click(function(){
  	var boxOne = $(this).attr("data-member-id");
  		boxId = $("#" + boxOne);
  		boxIdTop = parseInt($(boxId).css('top'));

      $('html, body').css({'overflow': 'auto', 'height': '100%'});
      $('html,body').animate({
	  		scrollTop: boxIdTop - 147 + 'px'
  		});
  		$("#mask").fadeIn("fast", function(){
  			boxId.fadeIn("slow");
  			/* 옆에서 나오는 애니메이션
  			boxId.css({"left": "100%", "visibility": "visible", "opacity": 0});
  			boxId.animate({"left": "50%", "opacity": 1}, 500);
  			*/
  		});
  		//$('html, body').css({'overflow': 'hidden', 'height': '100%'});
  		$("#mask").click(function(){
  			$('.member_w').fadeOut("fast");
  			$('.member_wz').fadeOut("fast");
  			$("#mask").fadeOut("fast");
  			//$('html, body').css({'overflow': 'auto', 'height': '100%'});
  			/* 옆으로 들어가는 애니메이션
  			boxId.css("position","absolute");
  			boxId.animate({"left": "-100%"}, 500, function(){
  				boxId.css({"position": "fixed", "left": "100%", "visibility": "hidden", "opacity": 0});
  				$("#mask").fadeOut("fast");
  				$('html, body').css({'overflow': 'auto', 'height': '100%'});
  			});
  			*/
  		});
  });
  // 슬라이딩팝업 닫기

  //임시 로그인,로그아웃
  $(".btn_MLogin").click(function(){
  	$("#member_login_w").fadeOut("fast");
  	$("#mask").fadeOut("fast");
  	$(".info_menu li.login").css("display","none");
  	$(".info_menu li.loginAccount").css("display","inline-block");
  	//$('html, body').css({'overflow': 'auto', 'height': '100%'});
  });
  $(".btn_MLogout").click(function(){
  	$(".info_detail").css({'top': '35px', 'opacity' : 1, 'visibility' : 'hidden'});
  	$(".info_menu li").removeClass("on");
  	$(".info_menu li.loginAccount").css("display","none" );
  	$(".info_menu li.login").css("display","inline-block");
  });

  $('.schIdPw').click(function(){
  	$('#member_login_w').fadeOut('fast');
  	$('#member_idpw_w').fadeIn();
  });
  $('.btn_join').click(function(){
  	$('#member_login_w').fadeOut('fast');
  	$('#member_join01').fadeIn();
  });
  $('.join_part02').click(function(){
  	$('#member_join01').fadeOut('fast');
  	$('#member_join02').fadeIn();
  });
  $('.join_part03').click(function(){
  	$('#member_join02').fadeOut('fast');
  	$('#member_join03').fadeIn();
  });
  $('.join_part04').click(function(){
  	$('#member_join03').fadeOut('fast');
  	$('#member_join04').fadeIn();
  });
  $('.join_cmpt').click(function(){
  	$('#member_join04').fadeOut('fast');
  	$("#mask").fadeOut("fast");
  });
  //임시로그인 끝


  //메세지 삭제 버튼
  	$('a.delete').mouseenter(function(){
  		$(this).stop().animate({'width': '39px'}, 150);
  	}).mouseleave(function(){
  		$(this).stop().animate({'width': '15px'}, 300);
  	});
  	//메세지 삭제 버튼 end

  //사이드메뉴
  $(function(){
	/*스크롤 탑*/
	$("div.side_button").fadeOut("slow");
		$(window).scroll(function(){
			setTimeout(scroll_top, 1000);//화살표가 반응하여 생기는 시간
		});


		$("#goTop").click(function(){
			$("html, body").animate({ scrollTop: 0 }, 600);//화살표 클릭시 화면 스크롤 속도
				return false;
    	});
	})

	/*스크롤 탑*/
	function scroll_top(){
		if($(window).scrollTop()<=1) {
			$("div.side_button").fadeOut("slow");
		}
		else {
			$("div.side_button").fadeIn("slow");
		}
	}
  	//사이드메뉴 end

  	//판매자 보기
  	$('a[data-seller-id]').click(function(){

	  	$('#' + $(this).attr('data-seller-id')).toggle();

  	});
  	//판매자 보기 end

  	//카테고리
  	$('.Depth03s a').click(function(){
	  	var snavWidth = parseInt($(this).width());
	  	      sWdith = parseInt($(this).next('.nav4list').width());
	  	      halfWidth = snavWidth/2 - sWdith/2 + 14;

	  	$(this).next('.nav4list').css({'margin-left': halfWidth + 'px'});
	  	$(this).next('.nav4list').toggle();
  	});

  	$(document).ready(function(){
	  	$('.sch_btn .sod_list').find('li').each(function(i, e){
		  	$(this).addClass('total' + i);
		  	$(this).click(function(){
			  	var thisBack = $(this).css('background-image');
			  	console.log(thisBack);
			  	$('.sch_btn .sod_label').css({'background-image': thisBack});
		  	});
		  });
  	});


  	$('.ico_ani').click(function(){
	  	$('.jmodal').css({'opacity': 0, 'visibility': 'hidden'});
	  	$('a[data-plus-id]').removeClass('on')
	  	$(this).parents('.aniA').find('.ani_btn').toggleClass('Ani_on');
	  	$(this).parents('.aniA').find('.ani').css({'visibility': 'visible', 'opacity': 1});
	  	$(this).parents('.aniA').find('.ani').animate({'opacity': '0', 'visibility': 'visible'}, 800);
  	});

  	$('.fr_list li').click(function(){
	  	$(this).toggleClass('on');
  	});
  	$('.allfr').click(function(){
	  	$('.fr_list li.fr').toggleClass('on');
  	});


  	//모바일 네비
  	var NlineWidth = $('.nav1depthM .Depth01:first-child .topNav').outerWidth();
  	$("#navbg span").css({"width": NlineWidth + "px"});
  	$(".nav1depthM .Depth01 .topNav").click(function(){
	  	var NlineLeft = parseInt($(this).offset().left),
	  		NlineW = parseInt($(this).outerWidth());

	  	$('.nav1depthM .Depth01 .topNav').removeClass('on');
	  	$(this).addClass('on');
	  	$("#navbg span").animate({"left": NlineLeft - 10 + "px", "width": NlineW + "px" }, 250);
  	});

    //모바일 전체 카테고리
    $('.MallCate').click(function(){
      $('body').css('overflow-y','hidden');
      $('#MallCate').css('box-shadow','0 0 30px #666');
      $('#MallCate').stop().animate({'left': '0'});
      $('.muser_account').stop().animate({'left': '0'});
      $('#wrap').stop().animate({'margin-left': $('#MallCate').width() + 'px' });
      $('#header').stop().animate({'left': $('#MallCate').width() + 'px', 'z-index': '999'});
    });

    //모바일 카테고리 열고 닫기
    $(function(){
      $('.subCate').slideUp();
      $('.subCate').prev('a').addClass('btcn');
      $('.btcn em').text('+');

      $('.btcn').click(function(){
        if($(this).hasClass('on') == true){
          $(this).find('em').text('+');
          $(this).parent().find('.btcn').removeClass('on');
          $(this).parent().find('.subCate').slideUp();
          $(this).parent().find('.btcn em').text('+');
        }else{
          $(this).find('em').text('-');
          $(this).addClass('on');
          $(this).next().slideDown();
        };
      });
    });

    //모바일 join 관심사
    $(function(){
      $('.chk_list strong em').text('+');
      $('.chk_list strong').click(function(){
        if($(this) == $('on')){
          $(this).find('em').text('+');
          $(this).removeClass('on');
          $(this).next().slideUp();
        }else{
          $('.chk_list strong em').text('+');
          $('.chk_list strong').removeClass('on');
          $('.chk_list strong').next().slideUp();
          $(this).addClass('on');
          $(this).find('em').text('-');
          $(this).next().slideDown();
        };
      });
    });

    //모바일 태그
    $(function(){
      $('.Mtag').click(function(){
        $('.mtag_box').css('visibility', 'visible');
        $('body').css({'height': '100%', 'overflow-y': 'hidden'});
      });
      $('.mshare').click(function(){
        $('.mshare_box').css('visibility', 'visible');
        $('body').css({'height': '100%', 'overflow-y': 'hidden'});
      });
      $('.info_menu .info_sch').click(function(){
        $('.msearch').css('visibility', 'visible');
        $('body').css({'height': '100%', 'overflow-y': 'hidden'});
      });
      $('.mitem_tit a.back').click(function(){
        $(this).parents('#Mitem').css('visibility', 'hidden');
        $('body').css({'height': '100%', 'overflow-y': 'auto'});
      });
    });

});
