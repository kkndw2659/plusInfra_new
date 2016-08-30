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
        <hr>
        <!-- container -->
        <div id="container">
          <h2 class="blind">본문영역</h2>
          <!-- content_start -->
          <div class="content_start">
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

  	<!--   타일박스   -->
  	<?php include("./inc/item_note.php"); ?>
    <?php include("./inc/Mitem.php"); ?>
  	<!--  //타일박스  -->

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
