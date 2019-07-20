<!DOCTYPE html>
<!-- shared head elements-->
<?php include("imports/shared-head.php"); ?>


<title>RPA | Event Calendar</title>
</head>

<body>


<div class="wrapper">
    <!-- shared navigation menu-->
    <?php include("imports/shared-navigation.php"); ?>
    <!--=== Content Part ===-->
	<div class="container">
	<div class="row">
	<div class="col-xs-12">
	<br>
    <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=rpa.cna%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FNew_York" style="display:block;  text-align:center; border-width:0; margin-top: 50px;" width="100%" height="600" frameborder="0" scrolling="no" ></iframe>
	</div>
	</div>
</div>

<!--Notes Content Start-->
<iframe style="background-color: green; display:block; margin: 0 auto;" width=850 height=500 frameborder="0" scrolling="no" src="https://docs.google.com/document/pub?id=1oqzmTU7k-q3jU9ROVgL_JPh2kZNRGMav0H5pUVTMgyE&amp;embedded=true"></iframe>
<!--Notes Content End-->


    <!-- shared footer elements-->

    <?php include("imports/shared-copyright.php"); ?>
</div><!--/wrapper-->

<!-- shared code libraries-->
<?php include("imports/shared-code.php"); ?>

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>


</body>
</html> 