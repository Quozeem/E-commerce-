<?php echo $__env->make('layouts.side', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>					
<script>
	//validate registration
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
										  </script> <!-- Main Content -->
		<main class="main-content">
			<div class="wrapper">
				<div id="top-home-blocks" class="grid--full grid--table">
					<div class="grid__item one-quarter shop-by-collections medium-down--hide">
						<div class="sidebar-collections">
							<div class="sdcollections-title sb-title">
								<i class="fa fa-list"></i>
								<span>All Collections</span>
							</div>
							<div class="sdcollections-content">
								<ul class="sdcollections-list">
									<li class="sdc-element vetical-menu1 site-nav--has-dropdown" aria-haspopup="true">
										<a href="page7_form" class="site-nav__link">
											<div class="element-main">
												<div class="collection-icon">
													<img src="assets/images/book.png" alt="collection icon">
												</div>
												<div class="collection-area have-icons">
													<div class="collection-name">
														
													AGRICULTURE & FOOD  (<?php echo e($Agriculture->count()); ?>)
                                                        
													</div>
												</div>
											</div>
											<span class="icon icon-arrow-right" aria-hidden="true"></span>
										</a>
										<ul class="site-nav__dropdown vetical__dropdown vetical__dropdown1">
											<li class="nav-links nav-links01 grid__item large--one-half">
												<ul>
													<li class="list-title">Usefull links</li>
													<li class="list-unstyled nav-sub-mega">
													<a href="page7_form">Farm Machinery & equipment</a>
													</li>
													<li class="list-unstyled nav-sub-mega">
													<a href="page7_form">Feeds,Supplements & Seeds</a>
													</li>
													<li class="list-unstyled nav-sub-mega">
													<a href="page7_form">Livestock & Poultry</a>
													</li>
													<li class="list-unstyled nav-sub-mega">
													<a href="page7_form">Meals & Drinks</a>
													</li>
													
												</ul>
											</li>
											<li class="grid__item large--one-half">
												<ul>
													<li class="list-title">New Arrivals</li>
													<li class="list-product">
													<div class="list-product-image">
														<a href="page7_form"><img src="assets/images/poultry and livestockhen.jpeg" alt="Example Book"></a>
													</div>
												
												
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="sdc-element vetical-menu2 site-nav--has-dropdown" aria-haspopup="true">
										<a href="page3_form" class="site-nav__link">
											<div class="element-main">
												<div class="collection-icon">
													<img src="assets/images/beauty-health.png" alt="collection icon">
												</div>
												<div class="collection-area have-icons">
													<div class="collection-name">
														 Beauty &amp; Health (<?php echo e($health->count()); ?>  )
													</div>
												</div>
											</div>
											<span class="icon icon-arrow-right" aria-hidden="true"></span>
										</a>
										<ul class="site-nav__dropdown vetical__dropdown vetical__dropdown1">
											<li class="nav-links nav-links01 grid__item large--one-half">
												<ul>
													<li class="list-title">Usefull links</li>
													<li class="list-unstyled nav-sub-mega">
													<a href="page3_form">Bath & Body</a>
													</li>
													<li class="list-unstyled nav-sub-mega">
													<a href="page3_form">Fragrance</a>
													</li>
													<li class="list-unstyled nav-sub-mega">
													<a href="page3_form">Skin Care</a>
													</li>
													<li class="list-unstyled nav-sub-mega">
													<a href="page3_form">Perfumes</a>
													</li>
													<li class="list-unstyled nav-sub-mega">
													<a href="page3_form">Vitamins & Supplements</a>
													</li>
													<li class="list-unstyled nav-sub-mega">
													<a href="">Health Care</a>
													</li>
													<li class="list-unstyled nav-sub-mega">
													<a href="page3_form">Salon Equipment</a>
													</li>
												</ul>
											</li>
											<li class="grid__item large--one-half">
												<ul>
													<li class="list-title">New Arrivals</li>
													<li class="list-product">
													<div class="list-product-image">
														<a href="page3_form"><img src="assets/images/demo2_210x210.jpg" alt="Demo Product Sample"></a>
													</div>
												
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="sdc-element">
										<a href="page1_form">
											<div class="element-main">
												<div class="collection-icon">
													<img src="assets/images/homelife.png" alt="collection icon">
												</div>
												<div class="collection-area have-icons">
													<div class="collection-name">
													HOME & GARDEN ( <?php echo e($home->count()); ?> )
													</div>
												</div>
											</div>
										</a>
									</li>
								
									<li class="sdc-element vetical-menu3 site-nav--has-dropdown" aria-haspopup="true">
										<a href="page2_form" class="site-nav__link">
											<div class="element-main">
												<div class="collection-icon">
												<img src="assets/images/smartphones.png" alt="collection icon">
												</div>
												<div class="collection-area have-icons">
													<div class="collection-name">
													MOBILE PHONES & TABLETS ( <?php echo e($mobile->count()); ?> )
													</div>
												</div>
											</div>
											<span class="icon icon-arrow-right" aria-hidden="true"></span>
										</a>
										<ul class="site-nav__dropdown vetical__dropdown vetical__dropdown1">
											<li class="nav-links nav-links01 grid__item large--one-half">
												<ul>
													<li class="list-title">Usefull links</li>
													<li class="list-unstyled nav-sub-mega">
													<a href="page2_form">iOS</a>
													</li>
													<li class="list-unstyled nav-sub-mega">
													<a href="page2_form">Android</a>
													</li>
													<li class="list-unstyled nav-sub-mega">
													<a href="page2_form">iPad</a>
						</li>
													<li class="list-unstyled nav-sub-mega">
													<a href="page2_form">Tablet</a>
													</li>
													<li class="list-unstyled nav-sub-mega">
													<a href="page2_form">Smartwatches</a>
													</li>
												</ul>
											</li>
											<li class="grid__item large--one-half">
												<ul>
													<li class="list-title">New Arrivals</li>
													<li class="list-product">
													<div class="list-product-image">
														<a href="page2_form"><img src="assets/images/demo3_210x210.jpg" alt="Etiam dan lorem quis"></a>
													</div>
													<!---<div class="list-product-name">
														Etiam dan lorem quis
													</div>
													<div class="list-product-link">
														<a href="product.html">More Detail</a>
													</div---->
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="sdc-element">
										<a href="page5_form">
											<div class="element-main">
												<div class="collection-icon">
													<img src="assets/images/camera.png" alt="collection icon">
												</div>
												<div class="collection-area have-icons">
													<div class="collection-name">
													ELECTRONICS ( <?php echo e($Electronics->count()); ?>  )
													</div>
												</div>
											</div>
										</a>
									</li>
									<li class="sdc-element">
										<a href="page4_form">
											<div class="element-main">
												<div class="collection-icon">
													<img src="assets/images/clothing.png" alt="collection icon">
												</div>
												<div class="collection-area have-icons">
													<div class="collection-name">
														 Fashion (
			
				 <?php echo e(($fashion->count() )); ?>

			
				)
													</div>
												</div>
											</div>
										</a>
									</li>
									<li class="sdc-element">
										<a href="page6_form">
											<div class="element-main">
												<div class="collection-icon">
													<img src="assets/images/kids-baby.png" alt="collection icon">
												</div>
												<div class="collection-area have-icons">
													<div class="collection-name">
														 Kids &amp; Baby ( <?php echo e($baby->count()); ?>  )
													</div>
												</div>
											</div>
										</a>
									</li>
									<li class="sdc-element">
										<a href="page8_form">
											<div class="element-main">
												<div class="collection-icon">
													<img src="assets/images/sport.png" alt="collection icon">
												</div>
												<div class="collection-area have-icons">
													<div class="collection-name">
														 Sport &amp; Outdoor ( <?php echo e($sport->count()); ?>

															
															
													 )
													</div>
												</div>
											</div>
										</a>
									</li>
								
								</ul>
							</div>
						</div>
					</div>
					<div class="grid__item small--one-whole medium--one-whole three-quarters main-slideshow">
						<div class="main_slideshow_wrapper">
							<div id="slider" class="flexslider">
								<ul class="slides">
									<li>
										<img src="assets/images/pu3.jpeg" alt="" />
									</li>
									<li>
										<img src="assets/images/pu4.jpeg" alt="" />
									</li>
									<li>
										<img src="assets/images/shopnow1.jpeg" alt="" />
									</li>
									<li>
										<img src="assets/images/QOZZ.jpg" alt="" />
									</li>
									<li>
										<img src="assets/images/ZTORE.jpg" alt="" />
									</li>
									<!---<li>
										<img src="assets/images/demo6_885x450.jpg" alt="" />
									</li--->
								</ul>
							</div>
							<div id="carousel" class="flexslider">
								<ul class="slides">
									<li>
										<div>
											<img src="assets/images/pu3.jpeg" alt="">
											<span class="cr-title"><a href="#" onclick="location.href = ''">Cosmetics and Makeup</a></span>
											<span class="cr-desc">Online Shopping Hub</span>
										</div>
									</li>
									<li>
										<div>
											<img src="assets/images/pu4.jpeg" alt="">
											<span class="cr-title"><a href="#" onclick="location.href = ''">Beautiful woman</a></span>
											<span class="cr-desc">high-end products fashion and lifestyle</span>
										</div>
									</li>
									<li>
										<div>
											<img src="assets/images/shopnow1.jpeg" alt="">
											<span class="cr-title"><a href="#" onclick="location.href = ''">shop now</a></span>
											<span class="cr-desc">buying and selling</span>
										</div>
									</li>
									<li>
										<div>
											<img src="assets/images/QOZZ.jpg" alt="">
											<span class="cr-title"><a href="#" onclick="location.href = ''">Skin Care</a></span>
											<span class="cr-desc">beauty product</span>
										</div>
									</li>
									<li>
										<div>
											<img src="assets/images/ZTORE.jpg" alt="">
											<span class="cr-title"><a href="" onclick="location.href = ''">Gadget</a></span>
											<span class="cr-desc">Gadget</span>
										</div>
									</li>
							<!---<li>
										<div>
											<img src="assets/images/demo6_50x50.jpg" alt="">
											<span class="cr-title"><a href="collection.html" onclick="location.href = 'collection.html'">Happy New Year</a></span>
											<span class="cr-desc">Happy New Year</span>
										</div>
									</li--->
							</div>
						</div>
					</div>
				</div>
				
				<?php if(Session::has('msg')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(Session::get('msg')); ?>

                        </div>
                    <?php endif; ?>
	<!----------------------search query------------------>
	
	<!------------------------------------>
			<div id="beauty-health-blocks" class="beauty-health-wrapper grid--full grid--table grid-block-full">
					<div class="beauty-health-inner">
						<div class="bh-top home-block-title">
							<div class="collection-name">
								<a href="#">
									Related Items</a>
							</div>
							<div class="collection-tags">
								<ul class="bh-tags">
									<li class=""><a href="page7_form">Livestock & Poultry</a></li>
									<li class=""><a href="page6_form">Babies Toy</a></li>
									<li class=""><a href="page3_form">Health & Beauty</a></li>
									<li class=""><a href="page2_form">Smart Watches</a></li>
									<li class=""><a href="page5_form">Video Game Consoles</a></li>
									<li class=""><a href="page4_form">Jewelry</a></li>
									<li class=""><a href="page1_form">Home Accessories</a></li>
								</ul>
							</div>
						</div>
						<div class="bh-btm">
							<div class="grid__item three-quarters bh-left small--one-whole medium--one-whole">
								<div class="home-slideshow-block bh-slideshow">
									<div class="home-gallery-slider">
										<div><a href="page3_form"><img src="assets/images/demo1_slide1_880x2851.jpg" alt=""></a></div>
										<div><a href="page3_form"><img src="assets/images/skin cares1.jpeg" alt=""></a></div>
										<div><a href="page3_form"><img src="assets/images/demo1_slide1_880x2851.jpg" alt=""></a></div>    
									</div>
								</div>
								<div class="home-products-block bh-products">
									<div class="home-products-block-title">
										<span>Trending</span>
									</div>
									<div class="home-products-block-content">
										<div class="home-products-slider">
										   
											<div class="grid__item">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="page2_form">
															<img src="assets/images/Series Watchs.jpeg" alt="Demo Product Sample">
														</a>
														<div class="quickview">
															<div class="product-ajax-cart hidden-xs hidden-sm">
																<div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
																	
																</div>
															</div>
														</div>
													</div>
													<div class="rating-star">
														<span class="spr-badge" id="spr_badge_3008529987" data-rating="0.0">
															<span class="spr-starrating spr-badge-starrating">
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
															</span>
															<span class="spr-badge-caption">No reviews </span>
														</span>
													</div>
													<p class="h6 product-title">
														<a href="page2_form">Series Watch</a>
													</p>
													<p class="product-price">
														<strong>On Sale</strong>
														<span class="money" data-currency-usd="$19.99">#130,000</span>
														<span class="visually-hidden">Regular price</span>
														<s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
													</p>
													<ul class="action-button">
														<li class="add-to-cart-form">
															<form action="page2_form" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
																<div class="effect-ajax-cart">
																	<input type="hidden" name="quantity" value="1">
																	<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
																		<span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
																	</button>
																</div>
															</form>
														</li>
														<li class="wishlist">
															<a class="wish-list btn" href=""><i class="fa fa-heart" title="Wishlist"></i></a>
														</li>
														
													</ul>
												</div>
											</div> 
											<div class="grid__item">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="page4_form">
															<img src="assets/images/men slides.jpeg" alt="Demo Product Sample">
														</a>
														<div class="quickview">
															<div class="product-ajax-cart hidden-xs hidden-sm">
																<div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
																	<!---<a href="#quick-shop-modal" class="btn quick_shop">
																		<i class="fa fa-eye" title="Quick View"></i--->																
																	</a>
																</div>
															</div>
															
														</div>
													</div>
													<div class="rating-star">
														<span class="spr-badge" id="spr_badge_3008529987" data-rating="0.0">
															<span class="spr-starrating spr-badge-starrating">
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
															</span>
															<span class="spr-badge-caption">No reviews </span>
														</span>
													</div>
													<p class="h6 product-title">
														<a href="page4_form">men slides</a>
													</p>
													<p class="product-price">
														<strong>On Sale</strong>
														<span class="money" data-currency-usd="$19.99">#20,000</span>
														<span class="visually-hidden">Regular price</span>
														<s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
													</p>
													<ul class="action-button">
														<li class="add-to-cart-form">
															<form action="page4_form" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
																<div class="effect-ajax-cart">
																	<input type="hidden" name="quantity" value="1">
																	<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
																		<span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
																	</button>
																</div>
																
															</form>
														</li>
														<li class="wishlist">
															<a class="wish-list btn" href=""><i class="fa fa-heart" title="Wishlist"></i></a>
														</li>
													
													</ul>
												</div>
											</div> 
											<div class="grid__item">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="page4_form">
															<img src="assets/images/Gucci libertybag.jpeg" alt="Demo Product Sample">
														</a>
														<div class="quickview">
															<div class="product-ajax-cart hidden-xs hidden-sm">
																<div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
																	
																</div>
															</div>
														</div>
													</div>
													<div class="rating-star">
														<span class="spr-badge" id="spr_badge_3008529987" data-rating="0.0">
															<span class="spr-starrating spr-badge-starrating">
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
															</span>
															<span class="spr-badge-caption">No reviews </span>
														</span>
													</div>
													<p class="h6 product-title">
														<a href="page4_form">Gucci bag</a>
													</p>
													<p class="product-price">
														<strong>On Sale</strong>
														<span class="money" data-currency-usd="$19.99">#28,500</span>
														<span class="visually-hidden">Regular price</span>
														<s><span class="money" data-currency-usd="$24.99">$20.99</span></s>
													</p>
													<ul class="action-button">
														<li class="add-to-cart-form">
															<form action="page4_form" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
																<div class="effect-ajax-cart">
																	<input type="hidden" name="quantity" value="1">
							<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
																		<span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
																	</button>
																</div>
															</form>
														</li>
														<li class="wishlist">
															<a class="wish-list btn" href=""><i class="fa fa-heart" title="Wishlist"></i></a>
														</li>
														
													</ul>
												</div>
											</div> 
											
											<div class="grid__item">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="page4_form">
															<img src="assets/images/New Balance SNEAKERS.jpeg" alt="Demo Product Sample">
														</a>
														<div class="quickview">
															<div class="product-ajax-cart hidden-xs hidden-sm">
																<div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
																	
																</div>
															</div>
														</div>
													</div>
													<div class="rating-star">
														<span class="spr-badge" id="spr_badge_3008529987" data-rating="0.0">
															<span class="spr-starrating spr-badge-starrating">
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
															</span>
															<span class="spr-badge-caption">No reviews </span>
														</span>
													</div>
													<p class="h6 product-title">
														<a href="page4_form">New Balance SNEAKERS</a>
													</p>
													<p class="product-price">
														<strong>On Sale</strong>
														<span class="money" data-currency-usd="$19.99">#46,500</span>
														<span class="visually-hidden">Regular price</span>
														<s><span class="money" data-currency-usd="$24.99">$25.99</span></s>
													</p>
													<ul class="action-button">
														<li class="add-to-cart-form">
															<form action="page4_form" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
																<div class="effect-ajax-cart">
																	<input type="hidden" name="quantity" value="1">
																	<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
																		<span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
																	</button>
																</div>
															</form>
														</li>
														<li class="wishlist">
															<a class="wish-list btn" href=""><i class="fa fa-heart" title="Wishlist"></i></a>
														</li>
														
													</ul>
												</div>
											</div> 
											<div class="grid__item">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="page3_form">
															<img src="assets/images/human hair.jpeg" alt="Demo Product Sample">
														</a>
														<div class="quickview">
															<div class="product-ajax-cart hidden-xs hidden-sm">
																<div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
																	
																</div>
															</div>
														</div>
													</div>
													<div class="rating-star">
														<span class="spr-badge" id="spr_badge_3008529987" data-rating="0.0">
															<span class="spr-starrating spr-badge-starrating">
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
															</span>
															<span class="spr-badge-caption">No reviews </span>
														</span>
													</div>
													<p class="h6 product-title">
														<a href="page3_form">human hair</a>
													</p>
													<p class="product-price">
														<strong>On Sale</strong>
														<span class="money" data-currency-usd="$19.99">#20,000</span>
														<span class="visually-hidden">Regular price</span>
														<s><span class="money" data-currency-usd="$24.99">$16.99</span></s>
													</p>
													<ul class="action-button">
														<li class="add-to-cart-form">
															<form action="page3_form" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
																<div class="effect-ajax-cart">
																	<input type="hidden" name="quantity" value="1">
																	<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
																		<span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
																	</button>
																</div>
															</form>
														</li>
														<li class="wishlist">
															<a class="wish-list btn" href=""><i class="fa fa-heart" title="Wishlist"></i></a>
														</li>
													
													</ul>
												</div>
											</div> 
										</div>	
									</div>											           
								</div>
							</div>
							<div class="grid__item one-quarter bh-right small--one-whole medium--one-whole">
								<div class="brands-area">
								<ul class="brands-elements">
										<li class="">
											<a href="page3_form"><img src="assets/images/hair beautys.jpeg" alt=""></a>
								
										</li>
										<li class="">
											<a href="page8_form"><img src="assets/images/Nike kit bag 9000.jpeg" alt=""></a>
										</li>
										<li class="">
											<a href="page8_form"><img src="assets/images/demo1_product20_208x208.jpg" alt=""></a>
										</li>
										<li class="">
											<a href="page2_form"><img src="assets/images/wrist watch.jpeg" alt=""></a>
										</li>
										<li class="">
											<a href="page4_form"><img src="assets/images/slides.jpeg" alt=""></a>
										</li>
										<li class="">
											<a href="page4-form"><img src="assets/images/Gucci bag.jpeg" alt=""></a>
										</li>
										<li class="">
											<a href="page6-form"><img src="assets/images/toy.jpeg" alt=""></a>
										</li>
										<li class="">
											<a href="page4-form"><img src="assets/images/shoessss.jpeg" alt=""></a>
										</li>         
									</ul>
								</div>
								<div class="banner-area">
									<a href="page2_form"><img src="assets/images/Smart watch.jpeg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			<!--------------------product-------------->
			
				

            <div class="container" style="width:100%;padding-left:15px;padding-right:15px">
        <div class="row" style=" display:left;
flex-direction:wrap;">
        <div class="col-lg-2" style="width:33.33%;margin-bottom:3%;padding-left:3px;padding-right:3px">
		
       <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	  
		
                 <div style="">
                           <div>
                                        <a href="<?php echo e(url('productdetails/'.$row->id )); ?>">
                                           <img src="advert_pic/compress_<?php echo e($row->file); ?>" class="compressimg" alt="Demo Product Sample">
                                       </a>
                                   
                           </div>
                           <div style="border:2px solid #e7e7e7;">
                                   <div class="rating-star" style="width:100%">
                                       <span class="spr-badge" id="spr_badge_3008529987" data-rating="0.0">
                                           <span class="spr-starrating spr-badge-starrating">
                                               <i class="spr-icon spr-icon-star-empty" style=""></i>
                                               <i class="spr-icon spr-icon-star-empty" style=""></i>
                                               <i class="spr-icon spr-icon-star-empty" style=""></i>
                                               <i class="spr-icon spr-icon-star-empty" style=""></i>
                                               <i class="spr-icon spr-icon-star-empty" style=""></i>
                                           </span>
                                           <span class="spr-badge-caption"> </span>
                                       </span>
                                   </div>
                                   <p class="" style="100%;font-size:16px;line-height:1;padding-left:6px"><?php echo e($row->brand); ?>

                                   </p>
                                   <p class="product-price" style="margin-top:-10px;padding-left:6px;color:#fa5555">
                                       <strong>On Sale</strong>
                                       <span class="money" data-currency-usd="$19.99">#
										   <?php
										   $money=$row->price;
										   $my_s=str_split($money);
										   $arrycounted =count($my_s);
										   if(($money <= 999))
										   {
										   echo  $money;
										   } 
										   elseif(($money >= 1000) AND ($money <= 9999))
										   {
										   $pos=1;$d=',';array_splice($my_s,$pos,0,$d);
										   echo implode('',$my_s);
										   } 
										   elseif(($money >= 10000) AND ($money <= 99999))
										   {
										   $pos=2;$d=',';array_splice($my_s,$pos,0,$d);
										   echo implode('',$my_s);
										   } 
										   elseif(($money >= 100000) AND ($money <= 999999))
										   {
										   $pos=3;$d=',';array_splice($my_s,$pos,0,$d);
										   echo implode('',$my_s);
										   }  elseif(($money >= 1000000) AND ($money <= 9999999))
										   {
										   $pos=1;$d=',';array_splice($my_s,$pos,0,$d);
										   echo implode('',$my_s);
										   } 
										   else
										   {
										   $pos=2;$d=',';array_splice($my_s,$pos,0,$d);
										   echo implode('',$my_s);
										   }  ?>
										   </span>
                            <!--<s><span class="money" data-currency-usd="$24.99">$24.99</span></s---->
                                   </p>
                                   
                                   <ul class="action-button">
                                       <li class="add-to-cart-form">
                                                               
                                               <div class="effect-ajax-cart" style="width:100%">
       <a href="<?php echo e(url('addtocart/'.$row->id )); ?>">                                           
<button type="submit"  style="border:2px solid
#fa5555;background-color:#fa5555 ;color:white;text-align:center;
        font-size:13px;width:100%" 
          class="btn btn-1 add-to-cart" title="Buy Now">
                                                       <span id="AddToCartText">
                                                       <i class="fa fa-shopping-cart"></i>Add to Cart</span>
                                                   </button></a>
                                               </div>
                                       
                                       </li>
                                   
                                   </ul>
                           </div>
                           </div> </div>
                            
                           <div class="col-lg-2" style="
width:33.33%;margin-bottom:3%;padding-left:3px;padding-right:3px">

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                   </div>
                            <div class="col-lg-2" style="width:33.33%;margin-bottom:3%;padding-left:3px;padding-right:3px">
                                
                       </div>
                        <div class="col-lg-2" style="width:33.33%;margin-bottom:3%;padding-left:3px;padding-right:3px">
                                
                       </div>
                        <div class="col-lg-2" style="width:33.33%;margin-bottom:3%;padding-left:3px;padding-right:3px">
                                
                       </div>
                        <div class="col-lg-2" style="width:33.33%;margin-bottom:3%;padding-left:3px;padding-right:3px">
                                
                       </div>
                       </div>
                       </div>
						 <!----------------------->
														 </form>	
			<!------newsletter query---------->
<?php
	//	function validate(){
		/*	include "config.php";
			if(isset($_POST['subscribeD'])){
			    $subscribe=mysqli_real_escape_string($con,$_POST['EMAIL']);
			      $pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$^";
    if(!preg_match($pattern,$subscribe)){
      // echo "Email is not valid";
       echo "<script> alert('Email is not valid');
     window.location = 'index?Email is not valid';
     </script>";
     return false;
    }
			    $insert="INSERT INTO newsletter (EMAIL) VALUES (' $subscribe')";
			    $result=mysqli_query($con,$insert);
			     if(!$result){
                   die ("failed").mysqli_connect_error();
               }
			}
	//	}*/
			
			
			?>
	
		
			 <footer class="site-footer">       
			<div class="grid__item footer_newsletter">
				<div class="wrapper">
					<h3><i class="fa fa-envelope"></i> Make sure you don't miss interesting happenings by joining our newsletter program</h3>
					<form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" class="input-group">
						<input type="email"  placeholder="Enter your email here ..." name="EMAIL" id="mail" class="input-group-field" required>
						<div style="color:red"></div>
						<span class="input-group-btn">
						<input type="submit"  class="btn" name="subscribeD" id="subscribe" value="signup">
						</span>
					</form>
				</div>
			</div>
	

            <div class="footer-wrap pt-190 pb-40" data-background="img/bg/footer_bg.jpg" style="margin-top:-4%">
                <div class="container-fluid" style="width:100%">
                    <div class="row" style="padding-left:5px;padding-right:5px">
                        <div  class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="footer-logo mb-35">
                              <a href="#"><img src="img/logo/QOZTORE FINAL1.png" class="mobile-logo" alt="Logo"></a>
                           
                                </div>
                                <div class="footer-text" style="width:100%">
                                    <p style="line-height:1.5">Have you thought of how to make your Businesses grown globally register with us. As a seller, producer or wholesaler or even retailer, you get to market your product to a larger audience by registering on our website.
                                    As a buyer with just a click you see all what you want.  
                                    </p>
                                </div>
                                <div class="footer-social" style="width:100%">
                                    <ul>
                                        <li>
                      <a href="https://www.facebook.com/qoztore" style="color: #949697;
    background: darkred;font-size:15px"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a style="color: #949697;
    background: darkred;font-size:15px" href="https://www.twitter.com/Qoztore"><i class="fab fa-twitter"></i></a></li>
                                        <li><a style="color: #949697;
    background: darkred;font-size:15px" href="https://www.instagram.com/qoztore/"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div  class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-30">
                                    <h5>RECENT POSTS</h5>
                                </div>
                                <div class="f-rc-post">
                                    <ul>
                                        <li>
                                            <div class="f-rc-thumb">
                                               <a href="#"><img src="img/gallery/download (2).jfif" alt="img" style="width:100px"></a>
                                            </div>
                                            <div class="f-rc-content" style="width: 100%;">
                                                <span>01 May, 2022</span>
                                            
                                            </div>
                                        </li>
                                        <li>
                                            <div class="f-rc-thumb">
                                                <a href="#"><img src="img/gallery/OIP (4).jfif" alt="img" style="width:100px"></a>
                                            </div>
                                            <div class="f-rc-content">
                                               <span>29 Apr, 2022</span>
                                              
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-30">
                                    <h5>USEFUL LINKS</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#" style="font-size:16px"><i class="fa fa-caret-right"></i>Home</a></li>
                                        <li><a href="aboutus" style="font-size:16px"><i class="fa fa-caret-right"></i>About Us</a></li>
                                        <li><a href="login" style="font-size:16px"><i class="fa fa-caret-right"></i>Account</a></li>
                                        <li><a href="contact" style="font-size:16px"><i class="fa fa-caret-right"></i> Contact Us</a></li>
                                    
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-30">
                                  <form action="#" class="mc-form" method="post">
                                            <input  type="text" name="message" placeholder="Type Messages..." style="width: 70%;padding: 9px;"><br /><br />
                                            <span class="hidden-xs" style="color:#ec552c;font-size: 15px;width:30%;"><input type="checkbox" name="agree">
                                            Add your comment by sending us your messsages!
                                            </span><br>
                                            <button  type="submit" style="background-color:darkred;border:none;color:white" name="submit" class="btn">comment</button><br />
                                            
                                        </form>  
                                            <?php
                if (isset($_POST['submit'])){
               
                // $from='advertgroup@mail.com';
                  $message=$_POST['message'];
                  $to="qoStorebiz@gmail.com";
                  $toname="Ademola";
                  $subject="Comments";
                  $from='comment@gmail.com';
                  
                  $header='From: '.$from."\r\n";
                  if(!empty($message)){
                    mail($to,$subject, $header,$message);
                  }
                
                }
                ?>
                                </div>
                                <div class="f-support-content">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="copyright-text">
                        <h6 style="color: white;width:100%">Copyright  &#169; <?php echo date('Y');?> <span><a class="btn-fill btn-blue sanbg"
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
	<?php echo \Livewire\Livewire::scripts(); ?>

</body><?php /**PATH C:\Users\DELL\Documents\laravel\shopify\resources\views/welcome.blade.php ENDPATH**/ ?>