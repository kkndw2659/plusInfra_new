<script type="text/javascript" src="/alba/js/jquery.bxslider.min.js" charset="utf-8"></script>
<div class="navBanner">
	<h4 class="blind">이벤트배너</h4>
  <!-- NB_slider -->
  <div class="NB_slider">
	  <ul class="bannerList">
	    <li><img src="/alba/img/nav/navBanner_demo.jpg" alt="배너이미지"></li>
	    <li><img src="/alba/img/nav/navBanner_demo.jpg" alt="배너이미지"></li>
	    <li><img src="/alba/img/nav/navBanner_demo.jpg" alt="배너이미지"></li>
	  </ul>
  </div>
  <!-- //NB_slider -->

  <!-- NB_pager -->
  <div id="NB_pager">
    <a href="javascript:;" data-slide-index="0"><img src="/alba/img/nav/navBanner_demo.jpg" alt="배너페이저" width="67" height="67" /></a>
    <a href="javascript:;" data-slide-index="1"><img src="/alba/img/nav/navBanner_demo.jpg" alt="배너페이저" width="67" height="67" /></a>
    <a href="javascript:;" data-slide-index="2"><img src="/alba/img/nav/navBanner_demo.jpg" alt="배너페이저" width="67" height="67" /></a>
  </div>
  <!-- //NB_pager -->
  <script type="text/javascript">
  	$('.bannerList').bxSlider({
	  pagerCustom: '#NB_pager'
	});
  </script>
</div>
