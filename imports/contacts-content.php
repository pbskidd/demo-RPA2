<!--=== Content Part ===-->
<div class="container content">
    <div class="row margin-bottom-30">
        <div class="col-md-9 mb-margin-bottom-30">
            <br>
            <div class="headline"><h2>Regina Pacis Academy</h2></div>

<script src='https://www.google.com/recaptcha/api.js'></script>

            <!-- Google Map -->

            <div id="map" class="map map-box map-box-space margin-bottom-40"></div>
            <!-- End Google Map -->
            <p>Please contact us for more information and to schedule a visit to the school.</p><br />
            <form id="comment_form" action="/mailer/tinymail2.php" method="post">
				
               <label>Name</label>
                <div class="row margin-bottom-20">
                    <div class="col-md-7 col-md-offset-0">
                        <input type="text" name="uname" class="form-control">
                    </div>
                </div>

                <label>Email <span class="color-red">*</span></label>
                <div class="row margin-bottom-20">
                    <div class="col-md-7 col-md-offset-0">
                        <input type="email" class="form-control">
                    </div>
                </div>

                <label>Message</label>
                <div class="row margin-bottom-20">
                    <div class="col-md-11 col-md-offset-0">
                        <textarea rows="8" name="comment" class="form-control"></textarea>
                    </div>
                </div>
<div class="g-recaptcha" data-sitekey="6LdKQhUTAAAAAG-3Q1kLJLPTBJ1uKIe4KsLpw4sj"></div> <!-- registered reCaptcha for reginapacisacademy.com domain -->
<br><br>
                <p><button type="submit" name="submit" class="btn-u">Send Message</button></p>
				
			</form>
			
			
			
        </div><!--/col-md-9-->

        <!-- Picture -->
        <div class="col-md-3 shadow-wrapper md-margin-bottom-20">
            <div class="box-shadow shadow-effect-2">
                <img class="img-responsive" src="assets/img/St.Mary3.jpg" alt="">
            </div>
        </div>

        <div class="col-md-3">

            <!-- Contacts -->
            <div class="headline"><h2>Contact Us</h2></div>

            <!-- shared address-->
			<div class="pbAddressBar">
            <?php include("shared-address-footer.php"); ?>
			</div>
            <!-- Business Hours -->
            
        </div><!--/col-md-3-->
    </div><!--/row-->
</div><!--/container-->
<!--=== End Content Part ===-->