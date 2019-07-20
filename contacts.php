<!DOCTYPE html>
<!-- shared head elements-->
<?php include("imports/shared-head.php"); ?>

<title>RPA | Contacts</title>
</head>

<body>


<div class="wrapper">
    <!-- shared navigation menu-->
    <?php include("imports/shared-navigation.php"); ?>

    <!--=== Content Part ===-->
    <?php include("imports/contacts-content.php"); ?>

    <!-- shared footer elements-->
    <?php include("imports/shared-copyright.php"); ?>
    <!--=== End Footer Large ===-->
</div><!--/wrapper-->

<!-- shared code libraries-->
<?php include("imports/shared-code.php"); ?>

<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="assets/js/pages/page_contacts.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();                
        ContactPage.initMap();        
    });
</script>


</body>
</html> 