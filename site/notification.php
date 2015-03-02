<?php
	include("header.php"); 
	include("navbar.php")
?>


	<div style = " padding-top:50px" class="container">
		<div class="col-md-9 ">

		    <div class="panel panel-default">
		        <div class="panel-heading">
		            <div class="panel-title">
		            	Notifications
		            </div>
		        </div>

		        <div class="panel-body">
		        	
								<div  class=" panel panel-default" >
									<div style = " padding-top:10px"  class="panel-body" >
										<div style = " padding-top:30px" class = "col-md-3">
											
											<img class= "tool1" src="img/screwdriver_set.jpg">

										</div>
										<div class= "col-md-9"> 		
											<div class="panel-body" >
												<h4><b class = "user">STraynor</b> requested to borry your tool listed below between <b class = "user">21/04/15 - 25/04/15</b></h4>
												<p><strong>Title:</strong> Set of 4 Screwdrivers</br>
													<strong>Category:</strong> Manual tool</br>
													<strong>Tool: </strong>Screwdriver</br>
													<strong>Description:</strong> set of 4 screwdrivers for wood.
														Mixture of philips and flathead.</br>
														
														
														<strong>Condition:</strong> Used</br>
														<strong>Price:</strong> £2.50 per day</p>
														<div style= " float: right; display:inline;">
															<button   type="button" class="btn btn-success" >Accept</button>
															<button  type="button" class="btn btn-danger" >Reject</button>
														</div>	
												

											</div>	

										</div>
										
									</div>            
								</div>


								<div  class=" panel panel-default" >
									<div style = " padding-top:10px"  class="panel-body" >
										<div style = " padding-top:30px" class = "col-md-3">
											
											<img class= "tool1" src="img/Framing_hammer.jpg">

										</div>
										<div class= "col-md-9"> 		
											<div class="panel-body" >
												<h4><b class = "user">TJones13</b> requested to borry your tool listed below between <b class = "user">19/04/15 - 20/04/15</b></h4>
												<p><strong>Title: </strong>Wooden hammer</br>
													<strong>Category:</strong> Manual tool</br>
													<strong>Tool: </strong>Hammer</br>
													<strong>Description:</strong> 
														Carbon steel head,Wooden grip.</br>
														<strong>Condition: </strong>Used</br>
														<strong>Price:</strong> £2 per day</p>
												<div style= " float: right; display:inline;">
													<button   type="button" class="btn btn-success" >Accept</button>
													<button  type="button" class="btn btn-danger" >Reject</button>
												</div>	
											</div>	
										</div>
										

									</div>            
								</div>
						
					
				</div>
			</div>
		</div>
	</div>

<div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="rejectModal" aria-hidden="true">
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
<?php
	include("footer.php"); 
?>