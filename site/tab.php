 <?php
include("header.php"); 
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

				        <li><a data-toggle="tab" href="#my_account">MyAccount</a></li>


				       <!--  <li class="dropdown">
				            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
				            <ul class="dropdown-menu">
				                <li><a data-toggle="tab" href="#dropdown1">Dropdown1</a></li>
				                <li><a data-toggle="tab" href="#dropdown2">Dropdown2</a></li>
				            </ul>
				        </li> -->

				    </ul>
				    <div class="tab-content">
				        <div id="my_tool" class="tab-pane fade in active">
				           
				        </div>
				        <div id="my_account" class="tab-pane fade">
					        <div style="padding-top:20px"> 
						        <div id  = "update_user" class="well well-sm" data-toggle = "modal" data-target = "#edituserModal">Update User Information</div>
						        <div class="well well-sm" data-toggle = "modal" data-target = "#passwordModal">Change Password</div>
						        <div class="well well-sm">Add Payment</div>
						        <div class="well well-sm" data-toggle = "modal" data-target = "#terminate">Terminate Account</div>
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