<!--=== Banner ===-->
<div class="breadcrumbs">
    <h2 class="pull-right text-info pbbanner"><strong>RPA | School Directory</strong></h2>
</div>
<!--/Banner-->


<!--=== Content Part ===-->
<div class="container content lead">
    <div class="row-fluid privacy">

<script type="text/javascript">
 window.onload = function(){
 var liLabel = '<i class="fa fa-lock"> DIRECTORY';
 changeSelected(liLabel);
 //Side Menu
 <?php include("shared-side-nav-parents.php"); ?>
 
</script> <!-- PLACEHOLDER TAG-->

<script>
 // force select--needed if have icon
var tempList = document.getElementById("side-nav").children;
var tmpItem = tempList[4].getElementsByTagName("A")[0];
var parentLi = tmpItem.parentNode;
parentLi.className = parentLi.className + " active";
</script>

<div class=" privacy col-md-9">
	<div class="row">
<iframe src="imports/directory-content2.php" width="100%" height="600" frameborder="0" scrolling="no" >
  <p>Your browser does not support iframes.</p>
</iframe>
    </div>
    </div>
    </div> <!--end row --> 
</div><!--/container-->
<!--=== End Content Part ===-->






<!--=== Content Part ===-->
<div class="container content lead">
    <div class="row-fluid privacy">
       <META http-equiv="refresh" content="5;URL=http://www.reginapacisacademy.org/assets/downloads/RPA-DIRECTORY.pdf">
           <center>You will be redirected to the Adobe PDF version of the directory automatically in 5 seconds. If you are not automitically redirected, you may also click
            <a href="http://www.reginapacisacademy.org/assets/downloads/RPA-DIRECTORY.pdf">HERE</a>.
    </center>

    </div><!--/row-fluid-->
</div><!--/container-->
<!--=== End Content Part ===-->