<link rel="stylesheet" href="/alba/css/item/item.css"  type="text/css">
<div role="main">
  <ul class="tiles-wrap animated" id="pd_tile">
    <li>
      <?php include("nomember_item.php"); ?>
    </li>
    <li>
      <?php include("member_item.php"); ?>
    </li>
     <li>
      <?php include("nomember_item.php"); ?>
    </li>
    <li>
      <?php include("member_item.php"); ?>
    </li>
     <li>
      <?php include("nomember_item.php"); ?>
    </li>
    <li>
      <?php include("member_item.php"); ?>
    </li>
     <li>
      <?php include("nomember_item.php"); ?>
    </li>
    <li>
      <?php include("member_item.php"); ?>
    </li>
     <li>
      <?php include("nomember_item.php"); ?>
    </li>
    <li>
      <?php include("member_item.php"); ?>
    </li>
     <li>
      <?php include("nomember_item.php"); ?>
    </li>
    <li>
      <?php include("member_item.php"); ?>
    </li>
     <li>
      <?php include("nomember_item.php"); ?>
    </li>
    <li>
      <?php include("member_item.php"); ?>
    </li>
     <li>
      <?php include("nomember_item.php"); ?>
    </li>
    <li>
      <?php include("member_item.php"); ?>
    </li>
     <li>
      <?php include("nomember_item.php"); ?>
    </li>
  </ul>
</div>
<!-- Include the plug-in -->
<script type="text/javascript" src="/alba/js/woomark.js"></script>
<!-- Once the page is loaded, initalize the plug-in. -->
<script type="text/javascript">
  window.onload = function () {
    var wookmark1 = new Wookmark('#pd_tile', {
      outerOffset: 0, // Optional, the distance to the containers border
      offset: 14,
      itemWidth: 237, // Optional, the width of a grid item
      function(){
	      if($('#pd_title li').length > 5){
		     align: 'center'
	      }else{
		     align: 'left'
	      };
      }
    });
  };
</script>
