
            <div class="container" style="width:100%;padding-left:15px;padding-right:15px">
        <div class="row" style=" display:left;
flex-direction:wrap;">
        <div class="col-lg-2" style="width:33.33%;margin-bottom:3%;padding-left:3px;padding-right:3px">
		
       @foreach($data as $row)
	  
		
                 <div style="">
                           <div>
                                        <a href="{{ url('productdetails/'.$row->id )}}">
                                           <img src="advert_pic/compress_{{$row->file}}" class="compressimg" alt="Demo Product Sample">
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
                                   <p class="" style="100%;font-size:16px;line-height:1;padding-left:6px">{{$row->brand}}
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
       <a href="{{ url('addtocart/'.$row->id )}}">                                           
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

      @endforeach 
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