@include('layouts.side')

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
										  </script>  
	<!-----cart---------->
<main class="main-content">
			<div class="breadcrumb-wrapper">
				<nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
					<a href="{{url('/')}}" title="Back to the frontpage">Home</a>
					<span aria-hidden="true">&rsaquo;</span>
					<span>Shopping Cart Page</span>
				</nav>
				<h1 class="section-header__title">Shopping Cart</h1>
			</div>
			
			<!-----------text------------->
		

								<!--	<script>
					$(document).ready(function(){
						$("#state").change(function() {
							let getState=$("select[name=state]").val();
				//	let	getState= $(this).val();
					$.ajax({
						url:"{{url('searchYourCity')}}/"+getState,
						type: "GET",
						success:function(response){
							$("#name_city").html(response);
							console.log(response);
						},
					});

						});
					});
</script-->

			<!--------------------------->
			<div class="wrapper">
				<form name="form1" method="post" action="" class="cart table-wrap">
                <input type="hidden" name="pid" />
<input type="hidden"  name="command" />

<div id="Updatecart">
	</div>
	
@if(session('cartremove'))
<script type="text/javascript">
window.setTimeout("document.getElementById('displaytime').style.display='none';",4000);</script>
<div class="alert-danger"  id="displaytime" style="width:60%;padding: 1em 2em 1em 3.5em;
    margin: 0 0 2em;
    position: relative;
    background-color: #f7f6f7;
    color: #515151;list-style: none outside;
   
    word-wrap: break-word;">
							{{ session('cartremove')}}
</div>
							@endif
 @if(empty(session('cart')))
 <div class="alert-danger" style="width:60%;padding: 1em 2em 1em 3.5em;
    margin: 0 0 2em;
    position: relative;
    background-color: #f7f6f7;
    color: #515151;list-style: none outside;
   
    word-wrap: break-word;"><i class="fa fa-shopping-bag" aria-hidden="true">
 {{ __('Your Cart Is Currently Empty')}}  </i>
                                        </div>
                                        <input type="button"  style="color:white;background-color:#ff6a00;border-color: #ff6a00;"
										value="Continue Shopping" onclick="window.location='{{url('/')}}'" />

 @else
 <input type="button"  style="color:white;background-color:#ff6a00;border-color: #ff6a00;"value="Continue Shopping"
  onclick="window.location='{{url('/')}}'" />

					<table class="cart-table full table--responsive">
						<thead class="cart__row cart__header-labels">
               <tr bgcolor="#FFFFFF" style="font-weight:bold"><td class="text-center">Serial</td><td class="text-center">Product</td><td class="text-center">Price
                </td><td class="text-center">Quantity</td>
                <td class="text-center">Sizes</td><td class="text-center">Amount</td></tr>
            
                @php $total = 0;  $i=0;$i +=1; @endphp		
  @foreach((session('cart')) as $id=>$product_details)
  
					@php	$total +=$product_details['price'] * $product_details['quantity'] @endphp
						</thead>
						<tbody>
							<tr class="cart__row table__section" data-id="{{$id}}">
                            <td>{{ $i++ }} </td>
								<td class="product-name" data-label="Product">
                               	<div class="img_item">
										<a href="" class="cart__image">
										<img src="advert_pic/compress_{{ $product_details['file'] }}" width="100" alt="Demo Product Sample">
										</a>
									</div>
									<p class="product-title">
										<a href="">{{$product_details['brand']}}</a>
									</p>
									<div class="variant">
									<?php /* if(!empty($s)){
									   echo $s;}else{
									       echo "Nil";
									   } */?>
									
									</div>
					<button type="submit" class="cart__remove">
									<i class="fa fa-remove" aria-hidden="true" style="color:red"></i></button>
							<!--	<form method="post" action="">
										@csrf
						<input type="text" name="productid" value="{{$product_details['id']}}" id="productid">
								<input type="submit" id="formed" value="submit">
									</form--->
								</td>
								<td data-label="Price">
									<span class="h3">
									<span class="money" data-currency-usd="$34.00"># 
									<?php
										   $money=$product_details['price'];
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
										   } 
										   elseif(($money >= 1000000) AND ($money <= 9999999))
										   {
										   $pos=1;$d=',';array_splice($my_s,$pos,0,$d);
										   echo implode('',$my_s);
										   } 
										   else
										   {
										   $pos=2;$d=',';array_splice($my_s,$pos,0,$d);
										   echo implode('',$my_s);
										   } ?>
	 </span>
									</span>
								</td>
								<td data-label="Quantity">
								<div class="js-qty">
							

<button type="button" id="sub" class="fallback-text">
									<span class="js-qty__adjust js-qty__adjust--minus icon-fallback-text" title="Decrease" data-src="#qs-quantity">
										<i class="fa fa-minus"></i>
										</span></button>
    <input type="number" id="quantity" value="{{$product_details['quantity']}}"  min="1" max="50" />
	<button type="button" id="adds" class="fallback-texts">
<span class="js-qty__adjust js-qty__adjust--plus icon-fallback-text"title="Increase" data-src="#qs-quantity">
										<i class="fa fa-plus"></i>
										</span></button>
</div>	
                      </td>
					      
                               <td><select>@foreach((session('size')) as $sized)<option> {{ $sized}}</option>@endforeach
							</select></td>
								<td data-label="Total" class="text-center">
									<span class="h3">
									<span class="money" data-currency-usd="$34.00"># 
									<?php
										   $money=$product_details['price'] * $product_details['quantity'];
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
										   }
										   elseif(($money >= 1000000) AND ($money <= 9999999))
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
									</span>
								</td>
                                
							</tr>
                         @endforeach
		
						</tbody>
                        
	</table>
					<div class="grid carti__row">
						<div class="grid__item two-thirds small--onue-whole">
							<label for="CartSpecialInstructions">Special instructions for seller</label>
							<textarea name="note" class="input-full" id="CartSpecialInstructions"></textarea>
						</div>
						<div class="grid__item text-right one-third small--one-whole">
							<p>
								<span class="cart__subtotal-title">Subtotal</span>
								<span class="h3 cart__subtotal"><span class="money" data-currency-usd="$223.00"># 
								<?php
										   $money=$total;
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
										   } 
										   elseif(($money >= 1000000) AND ($money <= 9999999))
{
$pos=1;$d=',';array_splice($my_s,$pos,0,$d);
echo implode('',$my_s);
} 
else
{
$pos=2;$d=',';array_splice($my_s,$pos,0,$d);
echo implode('',$my_s);
} ?>  
		</span></span>
							</p>
							<p>
								<em>Shipping &amp; order amount calculated at checkout</em>
							</p>
        	<!--<input type="button" value="Update Cart" style="color:white;background-color:#ff6a00;border-color: #ff6a00;"
			 class="get-rates btn button" onclick="update_cart()"-->
					
                            	
						</div>
					</div>
				</form>
                <form method="post" action="delectsession">
				@csrf
				<div id="shipping-calculator">
					<!--<h3>Get shipping estimates</h3-->
					<div class="shipping-selector">
					
						
						<p class="field">
			<input type="submit" name="deleteallcart"
			onclick="return confirm('Are you sure you want to clear cart?')"
			 value="Clear Cart" style="color:white;background-color:#ff6a00;border-color: #ff6a00;"class="get-rates btn button" onclick="clear_cart()">
				          	<input type="button" name="ordered" value="Proceed to Checkout" 
							  style="color:white;background-color:#ff6a00;border-color: #ff6a00;" class="get-rates btn button" onclick="window.location.href='customerlogin'">
                               
						</p>
					</div>
                  
					<div id="wrapper-response" style="display: block;">
						<p id="shipping-rates-feedback" class="success">
							
						</p> 
					
					</div>
                    @endif
				</div>
			</div>
            </form>
<script>
	//ajax remove cart items
	$('.cart__remove').click(function(e){
		e.preventDefault();
		var ele=$(this);
		let id=ele.parents("tr").attr("data-id");
		if(confirm('Are you sure you want to delete this item?')){
        $.ajax({
			type:"GET",
            url:'remove-cart/'+id,
			
           success:function(response) {
            console.log(response);
      
		 window.location.reload();
           }
          });
		}
		});

	</script>
<script>
	//Update cart query
		$.ajaxSetup({
																			headers:{
			'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
																			}
																		});
    $(document).ready(function(){
    $('.fallback-texts').click(function () {
        if ($(this).prev().val() < 50) {
          $(this).prev().val(+$(this).prev().val() + 1);
		  var ele=$(this);
						
					  $.ajax({
            type:"patch",
            url:'update-cart',
           data:{
			quantity:ele.parents("tr").find("#quantity").val(),
			id:ele.parents("tr").attr("data-id"),
           },
           success:function(response) {
            console.log(response.updateMsg);
         $("#Updatecart").html(response.updateMsg);
		 window.location.reload();
           }
          });
        }
    });
    $('.fallback-text').click(function () {
        if ($(this).next().val() > 1) {
          if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
		  var ele=$(this);
						
					  $.ajax({
            type:"patch",
            url:'update-cart',
           data:{
			quantity:ele.parents("tr").find("#quantity").val(),
			id:ele.parents("tr").attr("data-id"),
           },
           success:function(response) {
            console.log(response.RemoveupdateMsg);
         $("#Updatecart").html(response.RemoveupdateMsg);
		  window.location.reload();
           }
          });
        }
    });
    });</script>
		</main>
		<footer class="site-footer">       
		
			
			<div class="grid__item footer_copyright">
				<div class="wrapper">
					<div class="grid">
						<div class="grid__item footer-copyright one-half small--one-whole medium--one-whole small--text-center">
							 <h6 style="color: white;width:100%">
							Copyright  &#169; <?php echo date('Y');?> <a class="btn-fill btn-blue sanbg"
											href="https://api.whatsapp.com/send?phone=+234 703 900 1643&amp;
											text=Hi there! :)" style="color: red ;">qoZTORE</i> </a>
								   </span> | All Rights Reserved.
							</h6>
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
	</div>

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
  
    <script src="jsss/lga.min.js"></script>
	<script src="assets/js/modernizr.min.js" type="text/javascript"></script>
	<script src="assets/js/timber.js" type="text/javascript"></script>
	
</body>