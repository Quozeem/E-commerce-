@extends('layouts.addressbar')

@section('content')
          <div class="card mb-3">
            <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
            <!--/.bg-holder-->
            
          </div>
   
      @if((session('address')))
     
      <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-0" data-anchor="data-anchor" style="color: #ff6a00;">YOUR ADDRESS</h5>
            </div>
            <div class="card-body bg-light">
            <p class="mb-0 mt-2">{{session('address')}}</p>
           <p class="mb-0 mt-2">{{session('lga')}} {{session('state')}},{{session('country')}}.</p><h5 style="color: #ff6a00;">Order Number :{{session('orderNumber')}}</h5>
            </div>
          </div>
    
      @endif
      
         <!------------->
          <div class="card mb-3">
            <div class="card-header">
              <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                  <h5 class="mb-0" data-anchor="data-anchor" style="color:#ff6a00;">Billing Address</h5>
                  <h4 style="color: red;"><?php //echo validate();?></h4>
                </div>
                <div class="col-auto ms-auto">
                  <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist"><button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-18f7c841-c845-4cf2-844b-115f6a925e39" type="button" role="tab" aria-controls="dom-18f7c841-c845-4cf2-844b-115f6a925e39" aria-selected="true" id="tab-dom-18f7c841-c845-4cf2-844b-115f6a925e39">Order</button><a href="http://localhost/quotoric/qoztore/admin/app/chat" class="btn btn-sm" ><i class="fa fa-comment" aria-hidden="true"></i>  Chat Support</a></div>
                </div>
              </div>
            </div>
          

            <div class="card-body bg-light">
              <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-18f7c841-c845-4cf2-844b-115f6a925e39" id="dom-18f7c841-c845-4cf2-844b-115f6a925e39">
<form name="form1" class="row g-3" onsubmit="return validate()" method="post" action="{{route('orderitem')}}">
             @csrf
                    <div class="col-md-4"><label class="form-label">Full name</label>
                        <input class="form-control"  type="text" name="name" 
                        value="@if(Auth::guard('customer')->user() != null) {{ Auth::guard('customer')->user()->fname }} @else {{session('name')}} @endif" required="" />
                      <div class="valid-feedback">Looks good!</div>
                    </div>
        
                    <div class="col-md-4"><label class="form-label">Phone</label>
                    <input class="form-control"  type="tel" name="phone" value="@if((session('phone'))) {{session('phone')}}@endif" required="" />
                      <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="col-md-4"><label class="form-label">Email</label>
                      <div class="input-group has-validation"><span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input class="form-control"  name="email" 
                      value=" @if(Auth::guard('customer')->user() != null){{ Auth::guard('customer')->user()->email }} @else {{session('email')}} @endif" type="text" aria-describedby="inputGroupPrepend" required="" />
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>
                    <div class="col-md-6"><label class="form-label">Address</label>
                    <input class="form-control"  type="text" name="address" value="@if((session('address'))) {{session('address')}}@endif" required="" />
                      <div class="invalid-feedback">Please provide a valid city.</div>
                    </div>
                    @php $total = 0;  $i=0;$i +=1; @endphp	
                    @if((session('cart')))
  @foreach((session('cart')) as $id=>$product_details)
  
					@php	$total +=$product_details['price'] * $product_details['quantity'] @endphp   
                   @endforeach @endif
                    <div class="col-md-3"><label class="form-label">Order Amount</label>
                        <input class="form-control"  type="text"
                        value="# <?php
										   $money=$total;
										   $my_s=str_split($money);
										  // $arrycounted =count($my_s);
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
										   echo '#'.implode('',$my_s);
										   } 
										   else
										   {
										   $pos=2;$d=',';array_splice($my_s,$pos,0,$d);
										   echo '#'.implode('',$my_s);
										   }  ?>" required="" disabled="">

                      <div class="valid-feedback">Looks good!</div>
                    </div>
                     <div class="col-md-3"><label class="form-label">Country</label>
                     	<select  class="form-control" id="address_country" name="country" data-default="United States" required="">
                            
						 <option value="Nigeria" data-provinces="[]">Nigeria</option>
							</select>
                     
                     </div>
                     <div class="col-md-4"><label class="form-label">State</label>
                      <select onchange="toggleLGA(this);" name="state" id="state" class = "form-control" required="">
                                       
                   <option value="">- Select -</option>
                    @foreach($shipping as $state_name) 
                    <option value= "{{$state_name->states_name}}">{{$state_name->states_name}} State</option>
                  
                  @endforeach                    </select>
  
                     </div>
                      <div class="col-md-4"><label class="form-label">L.G.A *</label>
                      <select  name="lga" class="form-control select-lga" id="lga" required="">
                      @if((session('lga')))  <option>{{session('lga')}}</option>
                       @endif
                                    </select>
                                    </div>
                                     <div class="col-md-4">
                                     <label class="form-label">Shipping Price*</label>
                      <select class="form-control select-lga" name="name_city" id="name_city"
                       disable="disable">
                       @if((session('shipping')))  <option>#{{session('shipping')}}</option>
                       @else
                       <option>Pick State first*</option>@endif</select>
    
  
                                    </select>
                                    </div>
                              
                   
                    <div class="col-12">
                      <div class="form-check"><input class="form-check-input" type="checkbox" value="" required="" /><label class="form-check-label mb-0" for="invalidCheck">Agree to terms and conditions</label>
                        <div class="invalid-feedback mt-0">You must agree before submitting.</div>
                      </div>
                    </div>
                  
                    <div class="col-12">
                    <input type="submit" name="submit" style="color:white;background-color:#ff6a00;border-color: #ff6a00;" value="Continue" />
                    <!---<button class="btn btn-primary" name="submit" type="submit"
                     style="background: orange;border-color: orange;">Next</button--></div>
                  </form>
                </div>
      
              </div>
            </div>
          </div>
  
          
           <div class="card mb-3">
           
       
           
               
            </div--->
             <?php //}}?>
            </div>
            <div class="card mb-3">
            <div class="card-header">
              <div class="row flex-between-end">
              
              <div class="col-auto align-self-center" style="width: 100%;">
              <div class="container-fluid" style="width: 100%;">
                <div class="row">
                
                  <div class="col-lg-6" style="width: 50%;">
                <button class="btn btn-sm active" style="padding:2%;font-size:17px;width: 100%;background-color:#ff6a00;border-color: #ff6a00"> 
               <a  style="color:white"  href="cart">
               Continue Shopping</a></button>
               </div>
                 <div class="col-lg-6" style="width: 50%;">
          
             @if(((session('cart')) == null))<button disabled="disabled" class="btn btn-sm active" style="padding:2%;font-size:17px;width: 100%;background-color:#ff6a00;border-color: #ff6a00"> 
               <a  style="color:white" href="orderdetails"><i class="fas fa-shopping-cart" aria-hidden="true">
               </i>
               Checkout</a></button> 
               @elseif(((session('address')) == null))<button disabled="disabled" class="btn btn-sm active" style="padding:2%;font-size:17px;width: 100%;background-color:#ff6a00;border-color: #ff6a00"> 
               <a  style="color:white" href="orderdetails"><i class="fas fa-shopping-cart" aria-hidden="true">
               </i>
               Checkout</a></button> 
               @else<button class="btn btn-sm active" style="padding:2%;font-size:17px;width: 100%;background-color:#ff6a00;border-color: #ff6a00"> 
               <a  style="color:white" href="orderdetails"><i class="fas fa-shopping-cart" aria-hidden="true">
            </i>   Checkout</a></button> @endif
               </div>      
                </div>
                <div class="col-auto ms-auto">
                  <div class="nav nav-pills nav-pills-falcon flex-grow-1 mt-2" role="tablist">
               <!--   <a class="btn btn-sm active" href="http://localhost/quotoric/qoztore/admin/app/e-commerce/checkout">
               Payment</a><a  class="btn btn-sm active" href="tel:07039001643"><i class="fa fa-phone" aria-hidden="true">
               </i> Call To Order</a---></div>
               
               </div>
            </div> </div>
                </div>
            </div>
            </div>
         <footer class="footer">
            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 ckol-sm-auto text-center">
                <p class="mb-0 text-600"><span class="d-none d-sm-inline-block">
                 </span><br class="d-sm-none" /> Copyright  &#169; <?php echo date('Y') ?> <a class="btn-fill btn-blue sanbg"
                                         href="https://api.whatsapp.com/send?phone=+234 703 900 1643&amp;
                                         text=Hi there! :)" style="color: orange ;">qoztore</i> </a>
                                </span> | All Rights Reserved.</p>
              </div>
              <div class="col-12 col-sm-auto text-center">
               
              </div>
            </div>
          </footer>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-index-1 light">
                  <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                  <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body py-4 px-5">
                <form>
                  <div class="mb-3"><label class="form-label" for="modal-auth-name">Name</label><input class="form-control" type="text" autocomplete="on" id="modal-auth-name" /></div>
                  <div class="mb-3"><label class="form-label" for="modal-auth-email">Email address</label><input class="form-control" type="email" autocomplete="on" id="modal-auth-email" /></div>
                  <div class="row gx-2">
                    <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-password">Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-password" /></div>
                    <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-confirm-password">Confirm Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" /></div>
                  </div>
                  <div class="form-check"><input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" /><label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div>
                  <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button></div>
                </form>
                <div class="position-relative mt-5">
                  <hr class="bg-300" />
                  <div class="divider-content-center">or register with</div>
                </div>
                <div class="row g-2 mt-2">
                  <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                  <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
      <div class="offcanvas-header settings-panel-header bg-shape">
        <div class="z-index-1 py-1 light">
          <h5 class="text-white"> <span class="fas fa-palette me-2 fs-0"></span>Settings</h5>
          <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
        </div><button class="btn-close btn-close-white z-index-1 mt-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body scrollbar-overlay px-card" id="themeController">
        <h5 class="fs-0">Color Scheme</h5>
        <p class="fs--1">Choose the perfect color mode for your app.</p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/falcon-mode-default.jpg" alt=""/></span><span class="label-text">Light</span></label></div>
            <div class="col-6"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../assets/img/generic/falcon-mode-dark.jpg" alt=""/></span><span class="label-text"> Dark</span></label></div>
          </div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-start"><img class="me-2" src="../../assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
            <div class="flex-1">
              <h5 class="fs-0">RTL Mode</h5>
              <p class="fs--1 mb-0">Switch your language direction </p><a class="fs--1" href="../../documentation/customization/configuration.html">RTL Documentation</a>
            </div>
          </div>
          <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" /></div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-start"><img class="me-2" src="../../assets/img/icons/arrows-h.svg" width="20" alt="" />
            <div class="flex-1">
              <h5 class="fs-0">Fluid Layout</h5>
              <p class="fs--1 mb-0">Toggle container layout system </p><a class="fs--1" href="../../documentation/customization/configuration.html">Fluid Documentation</a>
            </div>
          </div>
          <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" /></div>
        </div>
        <hr />
        <div class="d-flex align-items-start"><img class="me-2" src="../../assets/img/icons/paragraph.svg" width="20" alt="" />
          <div class="flex-1">
            <h5 class="fs-0 d-flex align-items-center">Navigation Position </h5>
            <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
            <div>
              <div class="form-check form-check-inline"><input class="form-check-input" id="option-navbar-vertical" type="radio" name="navbar" value="vertical" data-theme-control="navbarPosition" /><label class="form-check-label" for="option-navbar-vertical">Vertical</label></div>
              <div class="form-check form-check-inline"><input class="form-check-input" id="option-navbar-top" type="radio" name="navbar" value="top" data-theme-control="navbarPosition" /><label class="form-check-label" for="option-navbar-top">Top</label></div>
              <div class="form-check form-check-inline me-0"><input class="form-check-input" id="option-navbar-combo" type="radio" name="navbar" value="combo" data-theme-control="navbarPosition" /><label class="form-check-label" for="option-navbar-combo">Combo</label></div>
            </div>
          </div>
        </div>
        <hr />
        <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
        <p class="fs--1 mb-0">Switch between styles for your vertical navbar </p>
        <p> <a class="fs--1" href="../components/navs-and-tabs/vertical-navbar.html#navbar-styles">See Documentation</a></p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="../../assets/img/generic/default.png" alt="" /><span class="label-text"> Transparent</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="../../assets/img/generic/inverted.png" alt="" /><span class="label-text"> Inverted</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img class="img-fluid img-prototype" src="../../assets/img/generic/card.png" alt="" /><span class="label-text"> Card</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="../../assets/img/generic/vibrant.png" alt="" /><span class="label-text"> Vibrant</span></label></div>
          </div>
        </div>
        <div class="text-center mt-5"><img class="mb-4" src="../../assets/img/icons/spot-illustrations/47.png" alt="" width="120" />
          <h5>Like What You See?</h5>
          <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class="mb-3 btn btn-primary" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a>
        </div>
      </div>
    </div>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{asset ('assets/js/shipping.js') }}"></script>
    <script src="../../vendors/popper/popper.min.js"></script>
    <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../vendors/is/is.min.js"></script>
     <script src="jsss/lga.min.js"></script>
    <script src="../../vendors/prism/prism.js"></script>
    <script src="../../vendors/fontawesome/all.min.js"></script>
    <script src="../../vendors/lodash/lodash.min.js"></script>
    <script src="../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="../../vendors/list.js/list.min.js"></script>
    <script src="../../assets/js/theme.js"></script>
 @endsection