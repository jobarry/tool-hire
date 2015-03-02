 <?php
include("header.php"); 
include("navBar.php"); 
?>

<div class="container">
    <div class="row">
      	<div style="padding-top:50px" class="col-md-10">
	        <div id = "my_page" class = " panel panel-default">
	          	<div class="panel-heading">
	                <div class="panel-title">
	                          	My Page
	                </div>
          		</div>
	            <div class="panel-body" >

				    <ul style="padding-top:20px" class="nav nav-tabs">

				        <li class="active"><a data-toggle="tab" href="#my_tool">MyTools</a></li>

				        <li><a data-toggle="tab" href="#my_profile">MyProfile</a></li>

				        <li><a data-toggle="tab" href="#my_account">MyAccount</a></li>

				    </ul>
				    <div class="tab-content">
				        <div id="my_tool" class="tab-pane fade in active">
				        	<div style = " padding-top:20px">
				        		<div class="page-header"><h3>Owned Tools</h3></div>

								<div   class=" panel panel-default" >
									<div style = " padding-top:10px"  class="panel-body" >
										<div style = " padding-top:20px"  class = "col-md-3">
											
											<img class= "tool1" src="img/screwdriver.jpg">

										</div>
										<div class= "col-md-8"> 		
											<div class="panel-body" >
												<p><strong>Title: </strong>Standard drill</br>
													<strong>Category:</strong> Power tool</br>
													<strong>Tool: </strong>Drill</br>
													<strong>Description:</strong> Wattage: 500W.
														Usage: Suitable for wood, metal and stone.
														Features: Lock off function, and keyless chuck.
														Speed: 3,000rpm.
														Grip details:Soft grip.</br>
														<strong>Condition:</strong> Used</br>
														<strong>Price:</strong> £2 per day</p>
												

											</div>	
										</div>
										<div style = "padding-top: 140px;" class= "col-md-1">
													<button  style= " float:right; "type="button" class="btn btn-primary" >Edit</button>
												</div>
									</div>            
								</div>


								<div  class=" panel panel-default" >
									<div style = " padding-top:10px"  class="panel-body" >
										<div style = " padding-top:20px" class = "col-md-3">
											
											<img class= "tool1" src="img/screwdriver_set.jpg">

										</div>
										<div class= "col-md-8"> 		
											<div class="panel-body" >
												<p><strong>Title:</strong> Set of 4 Screwdrivers</br>
													<strong>Category:</strong> Manual tool</br>
													<strong>Tool: </strong>Screwdriver</br>
													<strong>Description:</strong> set of 4 screwdrivers for wood.
														Mixture of philips and flathead
														Grip details: Soft grip.</br>
														<strong>Condition:</strong> Used</br>
														<strong>Price:</strong> £2.50 per day</p>
												<!-- <div>
													<button  style= "float:right;"type="button" class="btn btn-primary" >Edit</button>
												</div> -->

											</div>	

										</div>
										<div style = "padding-top: 140px;" class= "col-md-1">
													<button  style= " float:right; "type="button" class="btn btn-primary" >Edit</button>
												</div>
									</div>            
								</div>

								<div class="page-header"><h3>Rented Tools</h3></div>
								<div  class=" panel panel-default" >
									<div style = " padding-top:10px"  class="panel-body" >
										<div style = " padding-top:20px" class = "col-md-3">
											
											<img class= "tool1" src="img/Framing_hammer.jpg">

										</div>
										<div class= "col-md-8"> 		
											<div class="panel-body" >
												<p><strong>Title: </strong>Wooden hammer</br>
													<strong>Category:</strong> Manual tool</br>
													<strong>Tool: </strong>Hammer</br>
													<strong>Description:</strong> This a large hammer. Useful for hammering large objects...</br>
														<strong>Condition: </strong>Used</br>
														<strong>Price:</strong> £2 per day</p>
												
											</div>	
										</div>
										<div style = "padding-top: 140px;" class= "col-md-1">
													<a href="writeReview.php"><button  style= " float:right; "type="button" class="btn btn-primary" >Review</button></a>
												</div>
									</div>            
								</div>

				           </div>
				        </div>
				        <div id="my_profile" class="tab-pane fade">
					        <div style="padding-top:20px"> 




					        	
						    </div>
				        </div>
				        <div id="my_account" class="tab-pane fade">
					        <div style="padding-top:20px"> 
						        <div id  = "update_user" class="well well-sm well_hover" data-toggle = "modal" data-target = "#edituserModal">Update User Information<span style="float:right"class="glyphicon glyphicon-plus-sign"></span></div>
						        <div class="well well-sm well_hover" data-toggle = "modal" data-target = "#passwordModal">Change Password<span style="float:right"class="glyphicon glyphicon-plus-sign"></span></div>
						        <div class="well well-sm well_hover"data-toggle = "modal" data-target = "#addpayment" >Add Payment<span style="float:right"class="glyphicon glyphicon-plus-sign"></span></div>
						        <div class="well well-sm well_hover" data-toggle = "modal" data-target = "#terminate">Terminate Account<span style="float:right"class="glyphicon glyphicon-plus-sign"></span></div>
						    </div>
				        </div>
			    	</div>
				</div>
				
			</div>
		</div>
	</div>
</div>



<div class="modal fade" id="edituserModal" tabindex="-1" role="dialog" aria-labelledby="edituserModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Edit user</h4>
			</div>
			<div class="modal-body">
				<div class="panel-body" >
					<form style="padding-top:10px;" method="post" class="form-horizontal" role="form">

						<div style="padding-top:10px;" class="form-group">
							<label class="col-lg-4 control-label">Username:</label>
							<div class="col-lg-7">
								<input class="form-control" id="user_username" type="text"  value="JBarry" >
							</div>
						</div>

						<div  class="form-group">
							<label style="padding-top:10px;" class="col-lg-4 control-label">First Name:</label>
							<div  style="padding-top:10px;" class="col-lg-7">
								<input class="form-control" id="fName" type="text" value="John" >
							</div>
						</div>

						<div  class="form-group">
							<label style="padding-top:10px;" class="col-lg-4 control-label">Last Name:</label>
							<div style="padding-top:10px;" class="col-lg-7">
								<input class="form-control" id="sName" type="text" value="Barry" >
							</div>
						</div>
						<div  class="form-group">
							<label style="padding-top:10px;" class="col-lg-4 control-label">Contact Number:</label>
							<div style="padding-top:10px;" class="col-lg-7">
								<input class="form-control" id="number" type="text" value="0789123456" >
							</div>
						</div>
						<div  class="form-group">
							<label style="padding-top:10px;" class="col-lg-4 control-label">Email:</label>
							<div style="padding-top:10px;" class="col-lg-7">
								<input class="form-control" id="email" type="email" value="JBarry@bigtool.com" >
							</div>
						</div>
					</form>
				</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
                <button type="button" class="btn btn-primary" id="savechanges" >Save changes</button>
        </div>
    </div>
  </div>

</div>

<div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="passwordModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Change Password</h4>
			</div>
			<div class="modal-body">
				<div class="panel-body" >
					<form style="padding-top:10px;" class="form-horizontal" role="form">
						<div style="padding-top:10px;" class="form-group">
							<label class="col-lg-4 control-label">Current Password:</label>
							<div class="col-lg-7">
								<input class="form-control" id="currentPassword_profile" type="password" value="" >
							</div>
						</div>
						<div  class="form-group">
							<label style="padding-top:10px;" class="col-lg-4 control-label">New Password:</label>
							<div  style="padding-top:10px;" class="col-lg-7">
								<input class="form-control" id="newPassword_profile" type="password" value="" >
							</div>
						</div>
						<div  class="form-group">
							<label style="padding-top:10px;" class="col-lg-4 control-label">Confirm Password:</label>
							<div style="padding-top:10px;" class="col-lg-7">
								<input class="form-control" id="confirmPassword_profile" type="password" value="" >
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" >Save changes</button>
			</div>
		</div>
	</div>
</div>

<div class = "modal fade" id = "addpayment" role = "dialog">
	<div class = "modal-dialog">
		<div class = "modal-content">
			<div class = "modal-header">
				<h4>Add/Modify payment</h4>
			</div>
			<div class = "model-body">
				<div style ="padding-top:20px; padding-left:10px">

					<form style="padding-top:10px;" class="form-horizontal" role="form">
						<div style="padding-top:10px;" class="form-group">
							<label class="col-lg-4 control-label">Name on Card:</label>
							<div class="col-lg-7">
								<input class="form-control" id="currentPassword_profile" type="text" value="" >
							</div>
						</div>
						<div  class="form-group">
							<label style="padding-top:10px;" class="col-lg-4 control-label">Card Number:</label>
							<div  style="padding-top:10px;" class="col-lg-7">
								<input class="form-control" id="newPassword_profile" type="text" value="" >
							</div>
						</div>
						<div  class="form-group">
							<label style="padding-top:10px;" class="col-lg-4 control-label">CVC:</label>
							<div  style="padding-top:10px;" class="col-lg-7">
								<input class="form-control" placeholder='ex. 311' size='4' type="text" value="" >
							</div>
						</div>
						<div class='form-group'>
						
							<label style="padding-top:10px;" class="col-lg-4 control-label">Expiration:</label>
							<div  style="padding-top:10px;" class="col-lg-7">
								
								<input class='form-control card-expiry-month' placeholder='MM-YYYY' size='2' type='text'>
							

							</div>


							<!-- <div class='col-xs-4'>
								<label class='control-label'>Expiration</label>
								<input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
							</div>
							<div class='col-xs-4'>
								<label class='control-label'> </label>
								<input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
							</div> -->
						</div>
					</form>
  				</div>
  			</div>
  			<div class = "modal-footer">
  				<a class = "btn btn-default" data-dismiss = "modal">Cancel</a>
  				<a class = "btn btn-primary">Add</a>
  			</div>
  		</div>
  	</div>
</div>



<div class = "modal fade" id = "terminate" role = "dialog">
  	<div class = "modal-dialog">
  		<div class = "modal-content">
  			<div class = "modal-header">
  				<h4>Terminate Account</h4>
  			</div>
  			<div class = "model-body">
  				<div style ="padding-top:20px; padding-left:10px">
  				<p>Are you sure you wish to terminate your account?</br><small><i>Once terminated you can not undo</i></small></p>
  			</div>
  			</div>
  			<div class = "modal-footer">
  				<a class = "btn btn-default" data-dismiss = "modal">Cancel</a>
  				<a class = "btn btn-danger">Yes</a>
  			</div>
  		</div>
  	</div>
  </div>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script type = 'text/javascript'>

$( "#update_user" ).click(function() {

  console.log("hello");
  
  
});
</script>

 <?php
 include("footer.php");
 ?>