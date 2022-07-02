<html>
    <head>
    <meta name="csrf-token" content="{{csrf_token()}}"/>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<!--
<script>
$(document).ready(function() {
	$.ajax({
		url: "View_ajax.php",
		type: "POST",
		cache: false,
		success: function(dataResult){
			$('#table').html(dataResult); 
		}
	});
	$(document).on("click", ".delete", function() { 
		var $ele = $(this).parent().parent();
		$.ajax({
			url: "delete_ajax.php",
			type: "POST",
			cache: false,
			data:{
				id: $(this).attr("data-id")
			},
			success: function(dataResult){
				var dataResult = JSON.parse(dataResult);
				if(dataResult.statusCode==200){
					$ele.fadeOut().remove();
				}
			}
		});
	});
});
</script>
<script>
$(document).on('click','#btn-add',function(e) {
		var data = $("#user_form").serialize();
		$.ajax({
			data: data,
			type: "post",
			url: "backend/save.php",
			success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$('#addEmployeeModal').modal('hide');
						alert('Data added successfully !'); 
                        location.reload();						
					}
					else if(dataResult.statusCode==201){
					   alert(dataResult);
					}
			}
		});
	});
	$(document).on('click','.update',function(e) {
		var id=$(this).attr("data-id");
		var name=$(this).attr("data-name");
		var email=$(this).attr("data-email");
		var phone=$(this).attr("data-phone");
		var city=$(this).attr("data-city");
		$('#id_u').val(id);
		$('#name_u').val(name);
		$('#email_u').val(email);
		$('#phone_u').val(phone);
		$('#city_u').val(city);
	});
	
	$(document).on('click','#update',function(e) {
		var data = $("#update_form").serialize();
		$.ajax({
			data: data,
			type: "post",
			url: "backend/save.php",
			success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$('#editEmployeeModal').modal('hide');
						alert('Data updated successfully !'); 
                        location.reload();						
					}
					else if(dataResult.statusCode==201){
					   alert(dataResult);
					}
			}
		});
	});
	$(document).on("click", ".delete", function() { 
		var id=$(this).attr("data-id");
		$('#id_d').val(id);
		
	});
	$(document).on("click", "#delete", function() { 
		$.ajax({
			url: "backend/save.php",
			type: "POST",
			cache: false,
			data:{
				type:3,
				id: $("#id_d").val()
			},
			success: function(dataResult){
					$('#deleteEmployeeModal').modal('hide');
					$("#"+dataResult).remove();
			
			}
		});
	});
	$(document).on("click", "#delete_multiple", function() {
		var user = [];
		$(".user_checkbox:checked").each(function() {
			user.push($(this).data('user-id'));
		});
		if(user.length <=0) {
			alert("Please select records."); 
		} 
		else { 
			WRN_PROFILE_DELETE = "Are you sure you want to delete "+(user.length>1?"these":"this")+" row?";
			var checked = confirm(WRN_PROFILE_DELETE);
			if(checked == true) {
				var selected_values = user.join(",");
				console.log(selected_values);
				$.ajax({
					type: "POST",
					url: "backend/save.php",
					cache:false,
					data:{
						type: 4,						
						id : selected_values
					},
					success: function(response) {
						var ids = response.split(",");
						for (var i=0; i < ids.length; i++ ) {	
							$("#"+ids[i]).remove(); 
						}	
					} 
				}); 
			}  
		} 
	});
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
		var checkbox = $('table tbody input[type="checkbox"]');
		$("#selectAll").click(function(){
			if(this.checked){
				checkbox.each(function(){
					this.checked = true;                        
				});
			} else{
				checkbox.each(function(){
					this.checked = false;                        
				});
			} 
		});
		checkbox.click(function(){
			if(!this.checked){
				$("#selectAll").prop("checked", false);
			}
		});
	});
	</script-->
<body>
<form method="post" action="">
<input type="text" name="id" value="95"/>
<button type="button" id="sub" class="fallback-text">
									<span class="js-qty__adjust js-qty__adjust--minus icon-fallback-text"><b>-</b></span></button>
   
    <input type="text" name="quantity" value="1"  min="1" max="50" />
	<button type="button" id="adds" class="fallback-texts">
<span class="js-qty__adjust js-qty__adjust--plus icon-fallback-text"><b>+</b></span></button>
 
</form>
<script>
		$.ajaxSetup({
																			headers:{
			'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
																			}
																		});
    $(document).ready(function(){
    $('.fallback-texts').click(function () {
        if ($(this).prev().val() < 50) {
          $(this).prev().val(+$(this).prev().val() + 1);
		  let id=$("input[name=id").val();
						  let quantity=$("input[name=quantity]").val();
					  $.ajax({
            type:"POST",
            url:'update-cart',
           data:{
			quantity:quantity,
			id:id,
           },
           success:function(response) {
            console.log(response);
         // $("#reference").html(data);
           }
          });
        }
    });
    $('.fallback-text').click(function () {
        if ($(this).next().val() > 1) {
          if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
		  let id=$("input[name=id").val();
						  let quantity=$("input[name=quantity]").val();
					  $.ajax({
            type:"POST",
            url:'update-cart',
           data:{
			quantity:quantity,
			id:id,
           },
           success:function(response) {
            console.log(response);
         // $("#reference").html(data);
           }
          });
        }
    });
    });</script>
<!---<script type="text/javascript">
																		$.ajaxSetup({
																			headers:{
			'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
																			}
																		});
								$('#qyts').on('click', function(e) {
						  event.preventDefault();
						 let id=$("input[name=id").val();
						  let quantity=$("input[name=quantity]").val();
					  $.ajax({
            type:"POST",
            url:'update-cart',
           data:{
			quantity:quantity,
			id:id,
           },
           success:function(response) {
            console.log(response);
         // $("#reference").html(data);
           }
          });
		})
        </script--->
    <div id="successMsg">
    
</div><form action="" method="post">
                        
                	<input type="hidden" value="create_customer" name="form_type"><input type="hidden" name="utf8" value="✓">
												<label for="FirstName" class="hidden-label">Name</label>
												<input type="text" name="fname" 
                                                id="fname"  class="input-full" placeholder="Full Name" >
                                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror			
                                		<label for="Email" class="hidden-label">Email</label>
												<input type="email"
												 name="email" id="email" class="input-full" placeholder="Email">
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
												<p>
                 <input type="hidden" name="date" value="<?php date_default_timezone_set('Africa/Lagos');
			$date=date('M d, Y'); echo $date; ?>">
            <input type="hidden" name="rank" value="Customer">
													<input type="submit" id="btn-form" name="submit" value="Register" class="btn btn2 btn--full">
                                                  				</p>
												<p>
													<span><a class="btn" href="#" onclick="hideRecoverPasswordForm();return false;">Back to Login</a></span>
												</p>
												
											</form>
																	<script type="text/javascript">
																		$.ajaxSetup({
																			headers:{
			'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
																			}
																		});
																
					$(document).on('click','#btn-form',function(e) {
						e.preventDefault();
							//var data = $(this).serialize();
							let name=$("input[name=fname]").val();
							let email=$("input[name=email]").val();
							let date=$("input[name=date]").val();
							let password=$("input[name=password]").val();
									
																		$.ajax({
																			data:{
																				fname:name,
																				email:email,
																				date:date,
																				password:password,
																			},
																			type:"POST",
																			url:"{{url('text')}}",
																			success:function(data){
																				console.log(data);
																			},
																		})
																	});
															
																</script>
                                      <!---      <script>
        $(document).ready(function() {
 
            $("#submitted").click(function() {
 
               
                var lastName = $("#fname").val();
                var email = $("#email").val();
          //      var message = $("#message").val();
 
                if(lastName==''||email=='') {
                    alert("Please fill all fields.");
                    return false;
                }
 
                $.ajax({
                    type: "POST",
                    url: "{{ url('text')}}",
                  
                   // cache: false,
                    success: function(data) {
                        alert(data);
                    },
                   
                });
                 
            });
 
        });
    </script-->
						   </body></html>