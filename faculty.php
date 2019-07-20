<!DOCTYPE html>
<!-- shared head elements-->
<?php include("imports/shared-head.php"); ?>

<title>RPA | Faculty</title>
</head>

<body>


<div class="wrapper">
    <!-- shared navigation menu-->
    <?php include("imports/shared-navigation.php"); ?>

    <!--=== Content Part ===-->
    <?php include("imports/faculty-content.php"); ?>

    <!-- shared footer elements-->
    <?php include("imports/shared-footer.php"); ?>
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