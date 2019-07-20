<!DOCTYPE html>
<!-- shared head elements-->
<?php include("imports/shared-head.php"); ?>

    <!-- Custom -->
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <title>RPA | Our Faculty</title>

</head> 

<body>

<div class="wrapper">
    <!-- shared navigation menu-->
    <?php include("imports/shared-navigation.php"); ?>

    <!--=== Content Part ===-->
    <?php include("imports/our_faculty-content.php"); ?>


    <!-- shared footer elements-->
    <?php include("imports/shared-footer.php"); ?>
    <?php include("imports/shared-copyright.php"); ?>
</div><!--/wrapper-->

<!-- shared code libraries-->
<?php include("imports/shared-code.php"); ?>

<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<!-- JS Page Level -->
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();        
    });
</script>

</body>
</html> 