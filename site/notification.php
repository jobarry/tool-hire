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
		        	
								<div  id= "reject_panel" class=" panel panel-default" >
									<div style = " padding-top:10px"  class="panel-body" >
										<div style = " padding-top:30px" class = "col-md-3">
											
											<img class= "tool1" src="http://www.wpclipart.com/signs_symbol/icons_oversized/male_user_icon.png" height="120" width="120">

										</div>
										<div class= "col-md-9"> 		
											<div class="panel-body" >
												<h4><b class = "user">PArnold</b> sent you a message<b class = "user"> 10:31 - 25/04/15</b></h4>
												<p><strong>Subject:</strong> Thanks again</br>
													
													<strong>Message:</strong> Thanks for dropping off the drill
													 saved me a lot of time and worked perfectly!
													  Will refer you.</br>
													</p>
														<div style= " float: right; display:inline;">
															<button  type="button" class="btn btn-primary" data-toggle = "modal" data-target = "#rejectModal">Reply</button>
														</div>	
												

											</div>	

										</div>
										
									</div>            
								</div>

															<div  id= "reject_panel" class=" panel panel-default" >
									<div style = " padding-top:10px"  class="panel-body" >
										<div style = " padding-top:30px" class = "col-md-3">
											
											<img class= "tool1" src="img/screwdriver_set.jpg">

										</div>
										<div class= "col-md-9"> 		
											<div class="panel-body" >
												<h4><b class = "user">STraynor</b> requested to borrow your tool listed below between <b class = "user">21/04/15 - 25/04/15</b></h4>
												<p><strong>Title:</strong> Set of 4 Screwdrivers</br>
													<strong>Category:</strong> Manual tool</br>
													<strong>Tool: </strong>Screwdriver</br>
													<strong>Description:</strong> set of 4 screwdrivers for wood.
														Mixture of philips and flathead.</br>
														
														
														<strong>Condition:</strong> Used</br>
														<strong>Price:</strong> £2.50 per day</p>
														<div style= " float: right; display:inline;">
															<button   type="button" class="btn btn-success" >Accept</button>
															<button  type="button" class="btn btn-danger" data-toggle = "modal" data-target = "#rejectModal">Reject</button>
														</div>	
												

											</div>	

										</div>
										
									</div>            
								</div>



								<div  id = "approve_panel" class=" panel panel-default" >
									<div style = " padding-top:10px"  class="panel-body" >
										<div style = " padding-top:30px" class = "col-md-3">
											
											<img class= "tool1" src="img/Framing_hammer.jpg">

										</div>
										<div class= "col-md-9"> 		
											<div class="panel-body" >
												<h4><b class = "user">TJones13</b> requested to borrow your tool listed below between <b class = "user">19/04/15 - 20/04/15</b></h4>
												<p><strong>Title: </strong>Wooden hammer</br>
													<strong>Category:</strong> Manual tool</br>
													<strong>Tool: </strong>Hammer</br>
													<strong>Description:</strong> 
														Carbon steel head,Wooden grip.</br>
														<strong>Condition: </strong>Used</br>
														<strong>Price:</strong> £2 per day</p>
												<div style= " float: right; display:inline;">
													<button   type="button" class="btn btn-success" data-toggle = "modal" data-target = "#acceptModal">Accept</button>
													<button  type="button" class="btn btn-danger" >Reject</button>
												</div>	
											</div>	
										</div>
										

									</div>            
								</div>
								<div style = "display:none;"  id = "approve_after_panel" class=" panel panel-default" >
									<div style = " padding-top:10px"  class="panel-body" >
										<div style = " padding-top:30px" class = "col-md-3">
											
											<img class= "tool1" src="img/Framing_hammer.jpg">

										</div>
										<div class= "col-md-9"> 		
											<div class="panel-body" >
												<h4> Confirmed that <b class = "user">TJones13</b> will borrow <b class = "user">Wooden Hammer</b>between <b class = "user">19/04/15 - 20/04/15.</b> They have been notified and will contact you shorly to arrange pickup</h4>
												
												<div  style= " float: right; display:inline;">
													<img src="img/tick.png">
												</div>	
											</div>	
										</div>
										

									</div>            
								</div>

								<div  id = "conflict_panel" class=" panel panel-default" >
									<div style = " padding-top:10px"  class="panel-body" >
										<div style = " padding-top:30px" class = "col-md-3">
											
											<img class= "tool1" src="img/Framing_hammer.jpg">

										</div>
										<div class= "col-md-9"> 		
											<div class="panel-body" >
												<h4><b class = "user">TJones13</b> Has raised an issue about their rental of your tool between <b class = "user">19/04/15 - 20/04/15</b></h4>
												<p><strong>Title: </strong>Wooden hammer</br>
													<strong>Category:</strong> Manual tool</br>
													<strong>Tool: </strong>Hammer</br>
													<strong>Description:</strong> 
														Carbon steel head,Wooden grip.</br>
														<strong>Condition: </strong>Used</br>
														<strong>Price:</strong> £2 per day</p>
												<div style= " float: right; display:inline;">
													<button   type="button" class="btn btn-danger" data-toggle = "modal" data-target = "#conflictModal">View</button>
												</div>	
											</div>	
										</div>
										

									</div>            
								</div>
								<div style = "display:none;"  id = "conflict_after_panel" class=" panel panel-default" >
									<div style = " padding-top:10px"  class="panel-body" >
										<div style = " padding-top:30px" class = "col-md-3">
											
											<img class= "tool1" src="img/Framing_hammer.jpg">

										</div>
										<div class= "col-md-9"> 		
											<div class="panel-body" >
												<h4> Response sent to <b class = "user">TJones13.</b> They have been notified.</h4>
												
												<div  style= " float: right; display:inline;">
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
				<h4 class="modal-title" id="myModalLabel">Reject Order</h4>
			</div>
			<div class="modal-body">
				<div class="panel-body" >

					<p>Are you sure you wish to reject <b class = "user">STraynor</b> order? </p>
					<form style="padding-top:10px;" class="form-horizontal" role="form">
						
						<div  class="form-group">
							<label style="padding-top:10px;" class="col-lg-4 control-label">Reason <i>(optional)</i>:</label>
							<div style="padding-top:10px;" class="col-lg-7">
								 <textarea rows="4" cols="50"></textarea> 
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
				<button type="button" id = "hide" class="btn btn-danger" onclick="hide()" data-dismiss="modal">Yes</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="acceptModal" tabindex="-1" role="dialog" aria-labelledby="acceptModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Accept Order</h4>
			</div>
			<div class="modal-body">
				<div class="panel-body" >

					<p>You are confirming that <b class = "user">TJones13</b> can rent your <b class = "user">Wooden Hammer</b> between <b class = "user">19/04/15 - 20/04/15</b></p>
					<form style="padding-top:10px;" class="form-horizontal" role="form">
						
						
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
				<button type="button" class="btn btn-danger" onclick="hideApprove()" data-dismiss="modal">Yes</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="conflictModal" tabindex="-1" role="dialog" aria-labelledby="conflictModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Conflict</h4>
			</div>
			<div class="modal-body">
				<div class="panel-body" >

					<p>Issue Message from<b class = "user">TJones13:</b></p>
					<p>---Insert Message here---</p>
					<form style="padding-top:10px;" class="form-horizontal" role="form">
					<p>Send a response</p>
						<textarea name="description" id="description" max="10000" rows="5" cols="50" placeholder="Enter Response"></textarea>	
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="hideConflict()" data-dismiss="modal">Send Reply</button>
			</div>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script type = 'text/javascript'>


function hide(){
	 document.getElementById('reject_panel').style.display = "none";
	}

function hideApprove(){
	 document.getElementById('approve_panel').style.display = "none";
	 document.getElementById('approve_after_panel').style.display = "block";
	}

function hideConflict(){
	 document.getElementById('conflict_panel').style.display = "none";
	 document.getElementById('conflict_after_panel').style.display = "block";
	}	
</script>
<?php
	include("footer.php"); 
?>