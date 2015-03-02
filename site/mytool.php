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

								<div class="page-header">
									<h3>Rented Tools</h3>
								</div>
								<div  id = "review_panel" class=" panel panel-default" >
									<div style = " padding-top:10px"  class="panel-body" >
										<div style = " padding-top:20px" class = "col-md-3">
											
											<img class= "tool1" src="img/Framing_hammer.jpg">

										</div>
										<div class= "col-md-9"> 		
											<div class="panel-body" >
												<p><strong>Title: </strong>Wooden hammer</br><i style = "float:right;">19/04/15 - 20/04/15</i>
													<strong>Category:</strong> Manual tool</br>
													<strong>Tool: </strong>Hammer</br>
													<strong>Description:</strong> This a large hammer. Useful for hammering large objects...</br>
														<strong>Condition: </strong>Used</br>
														<strong>Price:</strong> £2 per day</p>
												<div style= " float: right; display:inline;">
													<button  type="button" class="btn btn-danger" data-toggle = "modal" data-target = "#reportModal" >Report</button>
													<button   type="button" class="btn btn-primary" data-toggle = "modal" data-target = "#reviewModal">Review</button>

												</div>	
											</div>	
										</div>
										
									</div>            
								</div>
								<div style = "display:none;"  id = "sucess_panel" class=" panel panel-default" >
									<div style = " padding-top:10px"  class="panel-body" >
										<b class = "user">Successfully posted review....</b>
									</div>            
								</div>
								<div style = "display:none;"  id = "report_panel" class=" panel panel-default" >
									<div style = " padding-top:10px"  class="panel-body" >
										<b class = "user">Successfully posted report....</b>
									</div>            
								</div>

				           </div>
				        </div>
				        <div id="my_profile" class="tab-pane fade">
					        <div style="padding-top:20px"> 

					        	<h2 align="center">Lingpho Li</h2>


<div class="container-fluid userbk well span6">
	<div class="row-fluid">
        <div class="span2" >
		    <img align="middle" class= "img-circular" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpf1/t31.0-1/c0.0.1536.1536/10379772_691277004280812_2142439159599644853_o.jpg" class="img-circle">
        </div><br>
        
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name:</td>
                        <td>Lingpho Li</td>
                      </tr>
                       <tr>
                        <td>Username:</td>
                        <td>funnyOne</td>
                      </tr>
                      <tr>
                        <td>User Status:</td>
                        <td>Commercial</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>01/24/1988</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td>Male</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>45 Aston Way, London, UK</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@tool.com</a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
        
        <div class="span2">
            <div class="btn-group">
                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                    Action 
                    <span class="icon-cog icon-white"></span><span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><span class="icon-wrench"></span> Edit Info</a></li>
                    <li><a href="#"><span class="icon-trash"></span> Change User Status</a></li>
                </ul>
            </div>
        </div>
</div>
</div>
</div>
</div>

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


<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Review User</h4>
			</div>
			<div class="modal-body">
				<div class="panel-body" >
				<h4 style="padding-bottom:10px;"  > Please rate your experiance renting a <b class = "user">Wooden Hammer</b> off <b class = "user">JBarry</b> between <b class = "user">19/04/15 - 20/04/15.</b> </h4>

					<h4><b>Rating Out Of 5:</b></h4>
		    		<!-- <input type="number" id="rating" name="rating" min="1" max="5"> -->
		    	
		    		<input id="rating" type="number" class="rating" min="0" max="5" step="0.5" data-size="lg" data-symbol="&#xe005;" data-default-caption="{rating} hearts" data-star-captions="{}">
		    		

		    		<h4><b>Review:</b></h4>
		    		<textarea name="description" id="description" max="10000" rows="5" cols="50" 
		    		placeholder="Write your review here"></textarea>
		    		<br>
				
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="submitReview()">Submit</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Report User</h4>
			</div>
			<div class="modal-body">
				<div class="panel-body" >
				<h4 style="padding-bottom:10px;"  > Please provide a reason for reporting <b class = "user">JBarry</b></b> </h4>
					<div>
					<h4 style="padding-bottom:10px;" ><b>Issue Type: </b></h4>
					<select>
					  <option value="">-select-</option>
					  <option value="">Payment</option>
					  <option value="">Quality</option>
					  <option value="">Time</option>
					  <option value="">Other</option>
					</select> 	
					<h4><b>Description:</b></h4>
		    		<textarea name="description" id="description" max="10000" rows="5" cols="50" 
		    		placeholder="Write your description here"></textarea>
		    		<br>
					</div>
					
				
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal" onclick="submitReport()">Submit</button>
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
function submitReview(){
	 document.getElementById('review_panel').style.display = "none";
	 document.getElementById('sucess_panel').style.display = "block";
	}

function submitReport(){
	 document.getElementById('review_panel').style.display = "none";
	 document.getElementById('report_panel').style.display = "block";
	}
	
</script>

 <?php
 include("footer.php");
 ?>