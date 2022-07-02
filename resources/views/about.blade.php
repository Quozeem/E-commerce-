
@include ("layouts.side");
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
					<span>About Us</span>
				</nav>
				<h1 class="section-header__title">About us</h1>
			</div>
                        </main>
                        <section id="about">
         <div class="container-fluid" style="margin-top:-5%;width:100%;padding-left:4%;padding-right:4%">
        <header class="section-header">
          <h3 style="color: #EC552C;font-size: 40px;font-family: inherit;
    font-weight: 500;
    line-height: 1.1; width:100%;text-align:center">About Us</h3>
          </header>
<div class="row" style="justify-content:space-around;">
                            <div class="col-lg-6"  style="width:100%">
                                
                               <p style="line-height: 2.1;color:#777;width:100%">
            The company is an online platform that connects sellers to buyers in a quick and efficient way both online and offline. 
                   </p>
            <p style="line-height: 2.1;color:#777;width:100%">
             As a seller, producer or wholesaler or even retailer, you get to market your product to a larger audience by registering on our website. We do this by placing adverts on all our social media pages that has hundreds of followers so be rest assured that we're connecting you to the world.
        </p>
            <p style="line-height: 2.1;color:#777;width:100%">
            As a buyer, you can connect with several sellers all at once by searching for what you want to buy on our website and with just one click, you will arrive at your preferred seller's homepage.
 </p>
  <p style="line-height: 2.1;color:#777;width:100%">
          We are verified and legitimate and do not approve of scams and other illegitimate schemes which accounts
           for our ever growing clientele, and you can be rest assured that we are giving you the best.</p>
              
                            </div>
                             <div class="col-lg-6" style="width:100%">
                                
                                     <img src="assets/images/about-extra-2.svg" class="img-fluid" alt="" height="100%" width="100%;">
                            
                            </div>
                            </div>
                            </div>
                            </section>
							<section id="about">
      <div class="team-area default-padding-bottom bottom-less">
         <div class="container" style="width:100%">
       <h4 style="color: #EC552C;font-size:30px;text-align:center;margin-top:5%">Expert Team</h4>
      <div class="team-items text-center">
                        <div class="row" style="justify-content:space-around;">
                            <div class="col-lg-4"  style="width:100%;margin-bottom:5%">
                   <div class="item">
                            <div class="thumb">
                                 <img src="img/bg/IMG_1520.jpeg" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle" class="share-toggle"  hidden>
                                   <!--- <label for="toggle" class="share-button">
                                        <i class="fa fa-plus" style="font-size:20px;color: #EC552C"></i>
                                    </label--->
                                    <a href="#" class="share-icon facebook" style="margin:5%">
                                       <i class="fa fa-facebook-f"  style="font-size:25px;"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter" style="margin:5%;">
                                        <i class="fa fa-twitter" style="font-size:25px;"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram"  style="margin:5%">
                                        <i  class="fa fa-instagram" style="font-size:25px;"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4 style="font-size:22px">Ademola Quozeem</h4>
                                 <span style="color: #EC552C;font-size:20px">Software Developer</span>
                            </div>
                        </div>
              
                            </div>
                             <div class="col-lg-4" style="width:100%;margin-bottom:5%">
                             <div class="item">
                            <div class="thumb">
                                <img src="img/bg/alli.jpeg" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle-2" class="share-toggle" hidden >
                                    <!---<label for="toggle-2" class="share-button" >
                                        <i class="fa fa-plus" style="font-size:20px;color: #EC552C"></i>
                                    </label---->
                                    <a href="#" class="share-icon facebook" style="margin:5%">
                                       <i class="fa fa-facebook-f"  style="font-size:25px;"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter" style="margin:5%;">
                                        <i class="fa fa-twitter" style="font-size:25px;"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram"  style="margin:5%">
                                        <i  class="fa fa-instagram" style="font-size:25px;"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4 style="font-size:22px">Omolaja Uthman</h4>
                                <span style="color: #EC552C;font-size:20px">Content Developer</span>
                            </div>
                        </div>
                            </div>
                             <div class="col-lg-4" style="width:100%">
                            <div class="item">
                            <div class="thumb">
                               <img src="img/bg/sulai.jpeg" alt="Thumb" width="100%" >
                                <div class="social">
                                    <input type="checkbox" id="toggle-3" class="share-toggle"  hidden>
                                   <!-- <label for="toggle-3" class="share-button">
                                        <i class="fa fa-plus" style="font-size:20px;color: #EC552C"></i>
                                    </label--->
                                     <a href="#" class="share-icon facebook" style="margin:5%">
                                       <i class="fa fa-facebook-f"  style="font-size:25px;"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter" style="margin:5%;">
                                        <i class="fa fa-twitter" style="font-size:25px;"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram" style="margin:5%">
                                        <i class="fa fa-instagram" style="font-size:25px;"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4 style="font-size:22px">Aderemi Babatunde</h4>
                                <span style="color: #EC552C;font-size:20px">Software Developer</span>
                            </div>
                        </div>
                        </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </section>

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

    <!--div id="newsletter_popup" class="modal in fade" style="display: none;">
		<div class="nl-wraper-popup tada-hidden">
			<div class="nl-wraper-popup-inner">
				<form action="#" method="post" name="mc-embedded-subscribe-form" target="_blank">
					<div class="newsletter-popup-content">
						<div class="top-area">
							<span class="head-text1">Subscribe to our Newsletter &amp; receive a coupon for</span>
							<span class="head-text2">10% off</span>
						</div>
						<div class="bottom-area">
							<div class="group_input">
								<input class="form-control" type="email" name="EMAIL" placeholder="Your Email address">
								<button class="btn" type="submit">Get 10% off</button>
							</div>
							<span class="bottom-explain">We will send you a discount code after you confirm your email address.</span>
						</div>
						<div class="nl-social">
							<div class="fi-content inline-list social-icons">
								<a href="#" title="Twitter" class="icon-social twitter" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter-square"></i></a>
								<a href="#" title="Facebook" class="icon-social facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook-square"></i></a>
								<a href="#" title="Google+" class="icon-social google" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus-square"></i></a>
								<a href="#" title="Pinterest" class="icon-social pinterest" data-toggle="tooltip" data-placement="top"><i class="fa fa-pinterest-square"></i></a>
								<a href="#" title="Youtube" class="icon-social youtube" data-toggle="tooltip" data-placement="top"><i class="fa fa-youtube-square"></i></a>
								<a href="#" title="Vimeo" class="icon-social vimeo" data-toggle="tooltip" data-placement="top"><i class="fa fa-vimeo-square"></i></a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div-->    
    
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
	
</body>