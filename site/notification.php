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


								<div  class=" panel panel-default" >
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
				<button type="button" class="btn btn-danger" >Yes</button>
			</div>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script type = 'text/javascript'>


function hide(){
	console.log("shit");
	 document.getElementById('reject_panel').style.display = "none";
	}
</script>
<?php
	include("footer.php"); 
?>