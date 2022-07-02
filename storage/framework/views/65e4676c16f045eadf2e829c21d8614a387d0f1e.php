<?php
/*
session_start();

include "config.php";
if(isset($_POST['review'])){
    $reviewid=$_GET['reviewid'];
    $author=mysqli_real_escape_string($con,$_POST['author']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $title=mysqli_real_escape_string($con,$_POST['title']);
    $body=mysqli_real_escape_string($con,$_POST['body']);
    $insert=mysqli_query($con,"INSERT INTO review (author,email,title,body,procuctid) VALUES('$author','$email','$title','$body','$reviewid')");
    if(!$insert){
        echo "failed to connect";
    }else{
        echo("<script> location.href='profiles?id=$reviewid'</script>");
    }
} */
?>
<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface">

<!-- Mirrored from demo.tadathemes.com/HTML_Homemarket/demo/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 May 2021 21:12:01 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>qoztore - Online Store</title>
	<!-- Font ================================================== -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700"> 
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,500,600,700">
	<!-- Helpers ================================================== -->
	<meta property="og:type" content="website">
	<link rel="shortcut icon" type="image/x-icon" href="img/logo/good-removebg-preview.png">
	<meta property="og:image" content="../../assets/images/logo.html">
	<meta property="og:image:secure_url" content="../../assets/images/logo.html">
	<meta property="og:url" content="#">
	<meta property="og:site_name" content="Home Market Red">
	<meta name="twitter:site" content="@">
	<meta name="twitter:card" content="summary">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- CSS ================================================== -->
	<link href="assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/swatch.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/flexslider.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/timber.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/home_market.global.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/home_market.style.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/tada.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/spr.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/social-buttons.scss.css" rel="stylesheet" type="text/css" media="all">
	<!-- JS ================================================== -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>	
	<script src="assets/js/jquery.fancybox.min.js" type="text/javascript"></script>
	<script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.tweet.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.optionSelect.js" type="text/javascript"></script>
	<script src="assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.easytabs.min.js" type="text/javascript"></script>
<body>
	<div class="spr-content" style="margin-left: 40px;margin-right:40px">
													<div class="spr-form"  style="">
                                                    <form method="post" action="<?php echo e(route('writerview')); ?>" class="new-review-formx">
													<?php echo csrf_field(); ?>	<h3 class="spr-form-title">Write a review</h3>
															<fieldset class="spr-form-contact">
																<div class="spr-form-contact-name"> 
																	<label class="spr-form-label" for="review_author_3008529923">Name</label>
			<input class="spr-form-input spr-form-input-text" type="text" name="author"
             value="<?php echo e((Auth::guard('customer')->user()->fname)); ?>" placeholder="Enter your name" required="">
																</div>
																<div class="spr-form-contact-email">
																	<label class="spr-form-label" for="review_email_3008529923">Email</label>
		<input class="spr-form-input spr-form-input-email" type="email" name="email" 
        value="<?php echo e((Auth::guard('customer')->user()->email)); ?>" placeholder="smith@example.com" required="">
      <?php $__currentLoopData = (session('productdetails')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php $reviewid=$id->id ;?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <input class="spr-form-input spr-form-input-email" type="hidden" name="procuctid" 
        value="<?php echo e($reviewid); ?>" placeholder="smith@example.com">
																</div>
															</fieldset>
															<fieldset class="spr-form-review">
																<!---<div class="spr-form-review-rating">
																	<label class="spr-form-label" for="review[rating]">Rating</label>
																	<div class="spr-form-input spr-starrating ">
																		<a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="1">&nbsp;</a>
																		<a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="2">&nbsp;</a>
																		<a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="3">&nbsp;</a>
																		<a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="4">&nbsp;</a>
																		<a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="5">&nbsp;</a>
																	</div>
																</div-->
																<div class="spr-form-review-title">
																	<label class="spr-form-label" for="review_title_3008529923">Review Title</label>
			<input class="spr-form-input spr-form-input-text"  type="text" name="title" value="" placeholder="Give your review a title" required="">
																</div>
																<div class="spr-form-review-body">
																	<label class="spr-form-label" for="review_body_3008529923">Body of Review <span class="spr-form-review-body-charactersremaining">(200)</span></label>
																	<div class="spr-form-input">
						<textarea class="spr-form-input spr-form-input-textarea "  maxlength="200" name="body" rows="10" placeholder="Write your comments here" required=""></textarea>
																	</div>
																</div>
															</fieldset>
															<fieldset class="spr-form-actions">
                                                           
				<input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" name="review"  value="Submit Review">
															</fieldset>
														</form>	
                                                        </div></div>
</body></html><?php /**PATH C:\Users\DELL\Documents\laravel\shopify\resources\views/review.blade.php ENDPATH**/ ?>