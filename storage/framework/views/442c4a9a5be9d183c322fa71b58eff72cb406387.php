
<?php echo $__env->make("layouts.side", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
 								<script>
function myFunction() {
  var x = document.getElementById("CreatePassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
									
<script>
function validateForm() {
  var first_name = document.forms["myForm"]["first_name"].value;
    var email=document.forms["myForm"]["email"].value;
       var password=document.forms["myForm"]["CreatePassword"].value;
        var file=document.forms["myForm"]["file"].value;
  if (first_name == "") {
   document.getElementById("fname").innerHTML="Fullname is required*";
    return false;
  }
   if (email == "") {
   document.getElementById("mail").innerHTML="Email is required*";
    return false;
  }
	 if (password == "") {
   document.getElementById("word").innerHTML="Password is required*";
    return false;
  }
  if (file == "") {
   document.getElementById("files").innerHTML="Image is required*";
    return false;
  }
}
</script>

									<script>
											function showRecoverPasswordForm() {
											  $('#recover-password').css("display",'block');
											  $('#lightboxlogin').css("display",'none');
											  $('#create_accountBox').css("display",'none');
											}
											function hideRecoverPasswordForm() {
											  $('#recover-password').css("display",'none');
											  $('#lightboxlogin').css("display",'block');
											  $('#create_accountBox').css("display",'none');
											}
											function showCreateAccountForm(){
											  $('#recover-password').css("display",'none');
											  $('#lightboxlogin').css("display",'none');
											  $('#create_accountBox').css("display",'block');
											}
										  </script>    <!-- Main Content -->
    
    
		<main class="main-content">
			<div class="breadcrumb-wrapper">
				<nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
					<a href="/" title="Back to the frontpage">Home</a>
					<span aria-hidden="true">&rsaquo;</span>
					<span>Contact Us</span>
				</nav>
				<h1 class="section-header__title">Contact us</h1>
			</div>
                        </main>
                         <!-- support-area -->
           <!-- <div class="support-area support-bg pt-110 pb-120" style="margin-top:-6%"---->
                <div class="container-fluid" style="width:100%;padding-left:7%;padding-right:7%">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-10">
                            <div class="s-section-title text-center mb-60">
                                <h2 style="margin-top:-9%">Get In Touch</h2>
                            
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10" style="width:100%">
                            <div class="support-form text-center">
                               <form  action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <input type="text" placeholder="First Name *"  style=" box-shadow:0px 4px 6px #ecf5ff;"  name="fname" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Last Name *" style=" box-shadow:0px 4px 6px #ecf5ff;" name="lname" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" placeholder="Your E-mail *"  style=" box-shadow:0px 4px 6px #ecf5ff;" name="email" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Subject *"  style=" box-shadow:0px 4px 6px #ecf5ff;" name="subject" required="">
                                        </div>
                                    </div>
                                    <textarea name="message" placeholder="Message" required="" style=" border: 2px solid black;"></textarea>
                                    <button class="btn red-btn" name="submit" style="margin-bottom:3%;background-color:#fa5555;color:white;border:none">Send Message</button>
                                </form>
                            </div>
                       
                    </div>
                </div>
            </div>
             <?php
                if (isset($_POST['submit'])){
                $name=$_POST['fname'];
                 $from=$_POST['email'];
                  $message=$_POST['message'];
                  $to="qoStorebiz@gmail.com";
                   $subject=$_POST['subject'];
                  
                  $header="FROM: $name "."<".$from.">"; 
               //  $header='From: '.$from."\r\n"; 
                  if(!empty( $from)){              
                    mail($to,$subject,$header,$message);
                  }
                
                } 
                ?>
            <!-- support-area-end -->

            <!-- contact-area -->
            <section class="contact-area primary-bg pt-70 pb-15">
                <div class="container" style="width:100%;padding-left:5px;padding-right:5px">
                    <div class="row">
                        <div class="col-lg-3"  style="width:50%;padding-left:1px;padding-right:1px">
                            <div class="single-contact-box mb-50">
                                <div class="contact-icon mb-30">
                                    <img src="img/icon/contact_box_icon01.png" alt="img">
                                </div>
                                <div class="contact-content">
                                    <h5>Find Location</h5>
                                    <span>Olorunkemi street Academy,Ibadan</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3"  style="width:50%;padding-left:1px;padding-right:1px">
                            <div class="single-contact-box mb-50">
                                <div class="contact-icon mb-30">
                                    <img src="img/icon/contact_box_icon02.png" alt="img">
                                </div>
                                <div class="contact-content" style="width:100%">
                                    <h5>Phone Number</h5>
                                    <span>+234 703-900-1643</span>
                                    <span>+234 802-426-7830</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3"  style="width:50%;padding-left:1px;padding-right:1px">
                            <div class="single-contact-box mb-50">
                                <div class="contact-icon mb-30">
                                    <img src="img/icon/contact_box_icon03.png" alt="img">
                                </div>
                                <div class="contact-content">
                                    <h5>email informing</h5>
                                    <span><a href="https://qoStorebiz@gmail.com" class="__cf_email__" data-cfemail="7c15121a133c0f081d0e08190f17">[email&#160;protected]</a>@gmail.com</span>
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-3"  style="width:50%;padding-left:1px;padding-right:1px">
                            <div class="single-contact-box mb-50">
                                <div class="contact-icon mb-30">
                                    <img src="img/icon/contact_box_icon04.png" alt="img">
                                </div>
                                <div class="contact-content">
                                    <h5>email informing</h5>
                                    <span>Olorunkemi street Academy,Ibadan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

            <!-- contact-map -->
            <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.0877428166727!2d3.9160384142691744!3d7.344043615118813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1039921aedb8a833%3A0xa0482986aa91ce84!2sOlorunkemi%20St%2C%20Ibadan!5e0!3m2!1sen!2sng!4v1614432553153!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> </section>
    
            </div>
            <!-- contact-map-end -->

        </main>
        <!-- main-area-end -->

<footer>
               
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="copyright-text">
                        <h6 style="color: white;width:100%">Copyright  &#169; <?php echo date('Y');?> <span><a class="btn-fill btn-blue sanbg"
                                         href="https://api.whatsapp.com/send?phone=+234 703 900 1643&amp;
                                         text=Hi there! :)" style="color: red ;">qoZTORE</i> </a>
                                </span> | All Rights Reserved.</h46>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
      
			
			<script type="text/javascript">
			  $(function () {
				$(".fi-title").click(function(){
				  $(this).toggleClass('opentab');
				});
			  });
			</script>         
		</footer>
	

	<div id="scroll-to-top" title="Scroll to Top" class="off">
		<i class="fa fa-caret-up"></i>
	</div>

    
    <script>
		var tada_index,tada_autosearchcomplete,tada_swiftype,tada_ads,tada_adsspeed,tada_slideshowtime,tada_block1gallery=false,tada_block1product=false, tada_newsletter=false;
		  tada_index=1;
		  tada_ads=1;
		  tada_adsspeed=5000;
		  tada_slideshowtime = 30000;
		  tada_block1gallery = true;
		  tada_block1product = true;
		  tada_newsletter = true;
    </script>
  
	<script src="assets/js/modernizr.min.js" type="text/javascript"></script>
	<script src="assets/js/timber.js" type="text/javascript"></script>
  
	<div id="quick-shop-modal" class="modal quick-shop" style="display:none;">
		<div class="modal-dialog fadeIn">
			<div class="modal-content">
				<div class="modal-body">
					<div class="quick-shop-modal-bg">
					</div>
					<div class="grid__item one-half qs-product-image">
						<div id="quick-shop-image" class="product-image-wrapper">
							<div id="featuted-image" class="main-image featured">
								<img class="img-zoom img-responsive image-fly" src="assets/images/demo1_qs_480x480.jpg" data-zoom-image="assets/images/demo1_qs_480x480.jpg" alt="">
							</div>
							<div id="gallery_main_qs" class="product-image-thumb scroll scroll-mini">
								<div class="qs-vertical-slider product-single__thumbnails">
										<a class="image-thumb active thumb__element"><img src="assets/images/demo1_qs1_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="assets/images/demo1_qs2_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="assets/images/demo1_qs3_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="assets/images/demo1_qs4_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="assets/images/demo1_qs5_100x100.jpg" alt="" /></a>										
								</div>
							</div>
							<div class="vertical-slider product-single__thumbnails" style="opacity: 0;">
							</div>
						</div>
					</div>
					<div class="grid__item one-half qs-product-information">
						<div id="quick-shop-container">
							<h3 id="quick-shop-title"><a href="product.html">Corporis suscipit laboriosam</a></h3>
							<div class="rating-star">
								<span class="shopify-product-reviews-badge" data-id="3008529923"></span>
							</div>
							<div class="description">
								<div id="quick-shop-description" class="text-left">
									<p>
										Quisque vel enim quis purus ultrices consequat, sed tincidunt massa blandit ipsum interdum tristique cras dictum, lacus eu molestie elementum nulla est auctor. Etiam dan lorem quis ligula elementum porttitor quisem. Duis eget purus urna fusce sed scelerisque ante. Lorem ipsum dolor sit amet conse...
									</p>
								</div>
							</div>
							<form action="#" method="post" class="variants" id="AddToCartForm" enctype="multipart/form-data">
								<div id="quick-shop-price-container" class="detail-price">
									<span class="price"><span class="money">$89.00</span></span>
								</div>
								<div class="quantity-wrapper clearfix">
									<label class="wrapper-title">Quantity</label>
									<div class="wrapper">
										<span class="qty-down" title="Decrease" data-src="#qs-quantity">
										<i class="fa fa-minus"></i>
										</span>
										<input type="text" id="qs-quantity" size="5" class="item-quantity" name="quantity" value="1">
										<span class="qty-up" title="Increase" data-src="#qs-quantity">
										<i class="fa fa-plus"></i>
										</span>
									</div>
								</div>
								<div id="quick-shop-variants-container" class="variants-wrapper" style="display: block;">
									<div class="selector-wrapper">
										<label for="#quick-shop-variants-3008529731-option-0">Size</label>
										<select class="single-option-selector" data-option="option1" id="#quick-shop-variants-3008529731-option-0">
											<option value="XS">XS</option>
											<option value="S">S</option>
											<option value="M">M</option>
											<option value="L">L</option>
											<option value="XL">XL</option>
										</select>
									</div>
									<div class="selector-wrapper">
										<label for="#quick-shop-variants-3008529731-option-1">Color</label>
										<select class="single-option-selector" data-option="option2" id="#quick-shop-variants-3008529731-option-1">
											<option value="Black">Black</option>
											<option value="Red">Red</option>
											<option value="Green">Green</option>
											<option value="Blue">Blue</option>
											<option value="White">White</option>
										</select>
									</div>
								</div>
								<div class="others-bottom">
									<input id="AddToCart" class="btn btn-1 small add-to-cart" type="submit" name="add" value="Buy Now">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">	  
	  jQuery(document).ready(function($) {  
		if($('.quantity-wrapper').length){
		  $('.quantity-wrapper').on('click', '.qty-up', function() {
			var $this = $(this);
			var qty = $this.data('src');
			$(qty).val(parseInt($(qty).val()) + 1);
		  });
		  $('.quantity-wrapper').on('click', '.qty-down', function() {
			var $this = $(this);
			var qty = $this.data('src');
			if(parseInt($(qty).val()) > 1)
			  $(qty).val(parseInt($(qty).val()) - 1);
		  });
		}	 			 
	  });
	</script>
	
</body><?php /**PATH C:\Users\DELL\Documents\laravel\shopify\resources\views/contact.blade.php ENDPATH**/ ?>