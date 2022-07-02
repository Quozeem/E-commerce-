
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
										  </script>   <!-- Main Content -->
    
		<main class="main-content">
			<div class="breadcrumb-wrapper">
				<nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
					<a href="/" title="Back to the frontpage">Home</a>
					<span aria-hidden="true">&rsaquo;</span>
					<span>Shop Now</span>
				</nav>
				<h1 class="section-header__title">Shop Now</h1>
			</div>
			<div class="wrapper">
				<div id="filter-loading" style="display:none">
					<img src="assets/images/gears.svg" alt="filter loading">
				</div>
				<div class="grid--rev" id="collection">
					<div class="grid__item large--three-quarters">
						<header class="section-header section-grid">
							<div class="section-header__right section-sorting">
								<div class="form-horizontal">
									<label for="SortBy">Sort by</label>
									<select name="SortBy" id="SortBy">
										<option value="manual">Featured</option>
										<option value="best-selling">Best Selling</option>
										<option value="title-ascending">Alphabetically, A-Z</option>
										<option value="title-descending">Alphabetically, Z-A</option>
										<option value="price-ascending">Price, low to high</option>
										<option value="price-descending">Price, high to low</option>
										<option value="created-descending">Date, new to old</option>
										<option value="created-ascending">Date, old to new</option>
									</select>
								</div>
								<div class="collection-view">
									<button type="button" title="Grid view" class="grid-button change-view change-view--active" data-view="grid">
									<span class="icon-fallback-text">
									<span class="icon icon-grid-view" aria-hidden="true"></span>
									<span class="fallback-text">Grid view</span>
									</span>
									</button>
									<!---<button type="button" title="List view" class="list-button change-view " data-view="list">
									<span class="icon-fallback-text">
									<span class="icon icon-list-view" aria-hidden="true"></span>
									<span class="fallback-text">List view</span>
									</span>
									</button---->
								</div>
							</div>
						</header>
									<div class="grid-uniform grid-uniform-category ">
									    <div class="container" style="width:100%">
									      <div class="row" style="display:left;
    flex-direction:wrap; padding-right:2px;
    padding-left:2px">
									        <div class="col-lg-3" style="width:50%;">
										
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="">
															<img src="assets/images/Smart watch 1300001.jpeg"  alt="Demo Product Sample">
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
														<a href="">Smart watch</a>
													</p>
													<p class="product-price" style="margin-top:-5%">
													
														<span class="money" data-currency-usd="$19.99">#130,000</span>
												
													</p>
												
													<!---<ul class="action-button">
														<li class="add-to-cart-form">
															<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
																<div class="effect-ajax-cart">
																	<input type="hidden" name="quantity" value="1">
																	<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
																		<span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
																	</button>
																</div>
															</form>
														</li>
														<li class="wishlist">
															<a class="wish-list btn" href="wish-list.html"><i class="fa fa-heart" title="Wishlist"></i></a>
														</li>
														<li class="email">
															<a target="_blank" class="btn email-to-friend" href="#"><i class="fa fa-envelope" title="Email to friend"></i></a>
														</li>
													</ul---->
												</div>
											</div> 
											 <div class="col-lg-3" style="width:50%;">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="">
															<img src="assets/images/New Series 6 44mm 130000.jpeg" alt="Demo Product Sample">
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
														<a href="" style="width:100%">New Series 6 44mm</a>
													</p>
													<p class="product-price" style="margin-top:-5%">
												
														<span class="money" data-currency-usd="$19.99">#130,000</span>
													
													</p>
											
												</div>
											</div>
											 <div class="col-lg-3" style="width:50%">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="">
															<img src="assets/images/Samsung Galaxy A1272000.jpeg" alt="Demo Product Sample">
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
														<a href="">Samsung Galaxy A12</a>
													</p>
													<p class="product-price" style="margin-top:-5%">
														<strong>On Sale</strong>
														<span class="money" data-currency-usd="$19.99">#72,000</span>
													
													</p>
											
												</div>
											</div>  <div class="col-lg-3" style="width:50%">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href=""> 
														
															<img src="assets/images/Iphone771000.jpeg" alt="Demo Product Sample">
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
														<a href="">Iphone7</a>
													</p>
													<p class="product-price" style="margin-top:-5%">
														<strong>On Sale</strong>
														<span class="money" data-currency-usd="$19.99">#71,000</span>
														
													</p>
											
												</div>
											</div> 		</div>
										
											
											</div> 
										
												
						</div>
					</div>
					<div class="grid__item large--one-quarter">
						<div class="group_sidebar">
							<div class="sb-wrapper featured-product-wrapper clearfix" data-animate="" data-delay="0">
								<div class="featured-product">
									<h6 class="sb-title">Top Ranking</h6>
									<div class="sb-content featured-product-content">
										<div class="element full_width" data-animate="fadeInUp" data-delay="0">
											<div class="grid__item large--one-quarter medium--one-half">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="" class="grid__image product-image">
														<img src="assets/images/Backwood pouch iphone 1150000.jpeg" alt="Consequuntur magni dolores">
														</a>
														<div class="quickview">
															<div class="product-ajax-cart hidden-xs hidden-sm">
																<div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
																
																</div>
															</div>
														</div>
													</div>
													<div class="rating-star">
														<span class="spr-badge" id="spr_badge_3008529987" data-rating="4.0">
														<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
														
														</span>
													</div>
													<p class="h6 product-title">
														<a href="">Backwood pouch iphone 11</a>
													</p>
													<p class="product-price">
														<strong>On Sale</strong>
														<span class="money" data-currency-usd="$19.99">#5,000</span>
															<span class="visually-hidden">Regular price</span>
														<s><span class="money" data-currency-usd="$24.99">$8.02</span></s>
													
													</p>
												
												
												</div>
											</div>
										</div>
										<div class="element full_width" data-animate="fadeInUp" data-delay="100">
											<div class="grid__item large--one-quarter medium--one-half">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="" class="grid__image product-image">
														<img src="assets/images/iPhone type c charger7000.jpeg" alt="Corporis suscipit laboriosam">
														</a>
														<div class="quickview">
															<div class="product-ajax-cart hidden-xs hidden-sm">
															
															</div>
														</div>
													</div>
													<div class="rating-star">
														<span class="spr-badge" id="spr_badge_3008529923" data-rating="0.0">
														<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
														
														</span>
													</div>
													<p class="h6 product-title">
														<a href="">iPhone type c charger</a>
													</p>
													<p class="product-price">
														<span class="money" data-currency-usd="$89.00">#7,000</span>
															<span class="visually-hidden">Regular price</span>
														<s><span class="money" data-currency-usd="$24.99">$9.77</span></s>
													</p>
													
												
												</div>
											</div>
										</div>
									
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</main>
	<!--------------------------------------->
	<!----------------------search query------------------>
	
	
	  <!--<div class="container" style="width:100%;padding-left:15px;padding-right:15px">
						 <div class="row" style=" display:left;
    flex-direction:wrap;">
						 <div class="col-lg-2" style="width:33.33%;margin-bottom:3%;padding-left:3px;padding-right:3px">
                         <?php   
				/*		  include "config.php";
                         //search process
    if(isset($_GET['searched'])) {
        $search_text = $_GET['searched']; 
    $select = "SELECT * FROM joinall WHERE brand LIKE '%".mysqli_real_escape_string($con, $search_text)."%' ";
    $query = mysqli_query($con,$select)  or die(mysqli_error());
    //$query = mysqli_query($con, "SELECT * FROM advert WHERE brand LIKE '%$search_text' ORDER BY brand") or die(mysqli_error());
					while($row = mysqli_fetch_array($query)){ */
				?>
              
              
											<div style="">
											<div>
														 <a href="profiles?id=<?php// echo $row->id;?>">
															<img src="advert_pic/compress_<?php //echo $row->file; ?>" class="compressimg" alt="Demo Product Sample">
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
													<p class="" style="100%;font-size:16px;line-height:1;padding-left:6px"><?php //echo $row['brand']; ?>
													</p>
													<p class="product-price" style="margin-top:-10px;padding-left:6px;color:#fa5555">
														<strong>On Sale</strong>
														<span class="money" data-currency-usd="$19.99">#<?php //echo $row['price']; ?></span>
											 				            
                                                	<!--<s><span class="money" data-currency-usd="$24.99">$24.99</span></s---->
												<!--	</p>
													
													<ul class="action-button">
														<li class="add-to-cart-form">
																				
																<div class="effect-ajax-cart" style="width:100%">
																	<!---<input type="hidden" name="quantity" value="1"---->
						<!--- <a href="profiles?id=<?php //echo $row['id'];?>"---->
						 <!--<button type="submit" name="submit" style="border:2px solid #fa5555;background-color:#fa5555 ;color:white;text-align:center;
						 font-size:13px;width:100%" name="add" onclick="addtocart(<?php //echo $row['id']?>)"  class="btn btn-1 add-to-cart" title="Buy Now">
																		<span id="AddToCartText"><i class="fa fa-shopping-cart"></i>Add to Cart</span>
																	</button>
																</div>
														
														</li>
													
													</ul>
											</div>
											</div> </div>
											 
											<div class="col-lg-2" style="
      width:33.33%;margin-bottom:3%;padding-left:3px;padding-right:3px">
											      <?php //}}?>  
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
										</div-->
      
	
	<!------------------------------------>
				
			<!--------------------product-------------->
            
		    <div class="container" style="width:100%;padding-left:15px;padding-right:15px">
						 <div class="row" style=" display:left;
    flex-direction:wrap;">
						 <div class="col-lg-2" style="width:33.33%;margin-bottom:3%;padding-left:3px;padding-right:3px">
                         <?php $__currentLoopData = $mobile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<div style="">
											<div>
                                            <a href="<?php echo e(url('productdetails/'.$row->id )); ?>">
															<img src="advert_pic/compress_<?php echo $row->file; ?>" class="compressimg" alt="Demo Product Sample">
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
													<p class="" style="100%;font-size:16px;line-height:1;padding-left:6px"><?php echo $row->brand; ?>
													</p>
													<p class="product-price" style="margin-top:-10px;padding-left:6px;color:#fa5555">
														<strong>On Sale</strong>
														<span class="money" data-currency-usd="$19.99"># <?php
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
										   }  ?></span>
			            				            
                                                	<!--<s><span class="money" data-currency-usd="$24.99">$24.99</span></s---->
													</p>
													
													<ul class="action-button">
														<li class="add-to-cart-form">
																				
																<div class="effect-ajax-cart" style="width:100%">
																	<!---<input type="hidden" name="quantity" value="1"---->
                                                                    <a href="<?php echo e(url('addtocart/'.$row->id )); ?>">   
						 <button type="submit" name="submit" style="border:2px solid #fa5555;background-color:#fa5555 ;color:white;text-align:center;
						 font-size:13px;width:100%"  class="btn btn-1 add-to-cart" title="Buy Now">
																		<span id="AddToCartText"><i class="fa fa-shopping-cart"></i>Add to Cart</span>
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
										
			<!---------------->
							
									
		<!-- Footer -->
		<footer class="site-footer">       
			
			
           
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="copyright-text">
                        <h6 style="color: white;width:100%">Copyright  &#169; <?php echo date('Y')?> <span><a class="btn-fill btn-blue sanbg"
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
	
</body><?php /**PATH C:\Users\DELL\Documents\laravel\shopify\resources\views/pages/page2_form.blade.php ENDPATH**/ ?>