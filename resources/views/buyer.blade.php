@extends('layouts.loginbar')

@section('content')
		   <!-- Main Content -->
		
		<main class="main-content">
			<div class="breadcrumb-wrapper">
				<nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
					<a href="{{url('/')}}" title="Back to the frontpage">Home</a>
					<span aria-hidden="true">&rsaquo;</span>
					<span>Cart</span>
				</nav>
				<h1 class="section-header__title"> SHOPPING</h1>
			</div>
                        </main>
			<div class="wrapper">
				<div class="grid">
					<div class="grid__item">
						<div class="grid">
							<div class="grid__item large--one-third push--large--one-third text-center">
							
								<div id="CustomerLoginForm" class="form-vertical">
									<form method="post" action="{{route('logincustomer')}}" id="" name="myForm" onsubmit="return validateForm()" accept-charset="UTF-8">
									@csrf	<input type="hidden" value="customer_login" name="form_type"><input type="hidden" name="utf8" value="✓">
										<h3>Login</h3>
                                          @if(Session::has('errorMessage'))
                                              <div class="alert alert-warning">
                                             {{ Session::get('errorMessage' )}} </div>
                                    
                                        @endif	
			
										<label for="CustomerEmail" class="hidden-label">Email</label>
										<input type="email"  type="email" name="email" id="email" class="input-full" placeholder="Email" autocorrect="off" autocapitalize="off" autofocus="" required="">
								
										<label for="CustomerPassword" class="hidden-label">Password</label>
											
										<input type="password" id="CreatePassword" name="password" class="input-full" placeholder="Password" required="">
										<div class="eyes">
<i class="fa fa-eye" aria-hidden="true" onclick="myFunction()"></i></div>
										<p>
											<input type="submit" class="btn btn2 btn--full" name="LOGIN" value="Sign In">
										</p>
                                        <p class="create">
														<a href="#create_accountBox" style="font-size:18px;font-weight:600;" onclick="showCreateAccountForm();return false;" id="CreateAccountPassword">Create New Account</a>
													</p>
										<p> <div class="alert alert-warning">
										<a href="{{url('customeraddress')}}" id="" style="font-size:18px;font-weight:600;">CONTINUE AS GUEST</a> </div>
											
										</p>
									</form>
                                   <!-- <form method="post" action="customer">
			
                <input type="submit" name="deleteallcart"
			 value="Clear Cart"> </form--->	
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

<div id="create_accountBox" style="display:none;">
										<h3>Create Account</h3>
										<div class="form-vertical">
							<form method="post" action="{{ url('customers')}}" name="myForm" enctype="multipart/form-data" accept-charset="UTF-8">
                            {{ csrf_field() }}
                            	<input type="hidden" value="create_customer" name="form_type"><input type="hidden" name="utf8" value="✓">
												<label for="FirstName" class="hidden-label">Name</label>
												<input type="text" name="fname" 
                                                id="first_name"  class="input-full" placeholder="Full Name" required=""php >
                                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror			
                                		<label for="Email" class="hidden-label">Email</label>
												<input type="email" name="email" id="email" class="input-full" placeholder="Email" required="">
                                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror				<label for="CreatePassword" class="hidden-label">Password</label>
												<input type="password" id="CreatePassword" name="password" class="input-full" placeholder="Password" required="">
												<div class="eyes">
<i class="fa fa-eyee" aria-hidden="true" onclick="myFunction()"></i></div>
@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror		
							<input type="checkbox" name="unique_id" value="0" required=""> I accept the Terms of Use & Privacy Policy.	
												<p>
                 <input type="hidden" name="date" value="<?php date_default_timezone_set('Africa/Lagos');
			$date=date('M d, Y'); echo $date; ?>">
            <input type="hidden" name="rank" value="Customer">
													<input type="submit" name="submit" value="Register" class="btn btn2 btn--full">
												</p>
												<p>
													<span><a class="btn" href="#" onclick="hideRecoverPasswordForm();return false;">Back to Login</a></span>
												</p>
												
											</form>
										</div>
									</div>
	
									<script>
									  $(document).ready(function(){
										  $("a#RecoverPassword").click(function(event){
											event.preventDefault();
											timber.cache.$recoverPasswordForm.show();
											timber.cache.$customerLoginForm.hide();
										  });
									  });
									</script>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		
	
		
    <footer>
               
			   <div class="copyright-wrap">
				   <div class="container">
					   <div class="row align-items-center">
						   <div class="col-lg-12">
							   <div class="copyright-text">
						   <h6 style="color: white;width:100%">Copyright  &#169; <?php echo date ('Y')?> <span><a class="btn-fill btn-blue sanbg"
											href="https://api.whatsapp.com/send?phone=+234 703 900 1643&amp;
											text=Hi there! :)" style="color: red ;">qoZTORE</i> </a>
								   </span> | All Rights Reserved.</h6>
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
	
@endsection