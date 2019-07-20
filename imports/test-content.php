<!--=== Banner ===-->
<div class="breadcrumbs">
    <h2 class="pull-right text-info pbbanner"><strong>Newsletter</strong></h2>
</div>
<!--/Banner-->


<!--=== Content Part ===-->
<div class="container content lead">
    <div class="row-fluid privacy">

<script type="text/javascript">
 window.onload = function(){
 var liLabel = '<i class="fa fa-lock"> NEWSLETTER';
 changeSelected(liLabel);
 //Side Menu
 <?php include("shared-side-nav-parents.php"); ?>
 

</script> <!-- PLACEHOLDER TAG-->

<script>
 // force select--if have icon
var tempList = document.getElementById("side-nav").children;
var tmpItem = tempList[2].getElementsByTagName("A")[0];
var parentLi = tmpItem.parentNode;
parentLi.className = parentLi.className + " active";
</script>


<div class=" privacy col-md-9">
	<div class="row">
<iframe src="imports/newsletter-content2.php" width="100%" height="600" frameborder="0" scrolling="no" >
  <p>Your browser does not support iframes.</p>
</iframe>
    </div>
    </div>
    </div> <!--end row --> 
</div><!--/container-->
<!--=== End Content Part ===-->