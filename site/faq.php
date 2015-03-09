 <?php
include("header.php");
include("navBar.php")
?>
<div style="float:right; padding-right:150px;" class="user_div">
<button class = "btn btn-primary" data-toggle = "modal" data-target = "#addFAQModal">Add new FAQ</button>
</div>
<div style="float:right; padding-right:150px;" class="admin_div">
<button class = "btn btn-primary" data-toggle = "modal" data-target = "#messageAdmin">Message the Admin</button>
</div>

<div class="page-header">
	<div class="container">
		<div class="col-md-6 col-md-offset-3">	
		<h1>FAQ</h1>
	    <div class="panel panel-default">
	        <div class="panel-body">

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>What is this website?<a data-toggle = "modal" data-target = "#editFAQModal"><span style="float:right"class="glyphicon glyphicon-pencil pencil_icon user_div"></span></a></h4>
					</div>
		       		<div class="panel-body">
						<p>Big Tool allows people to lend and rent tools from one another.</p>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Who can use this site?<span style="float:right"class="glyphicon glyphicon-pencil pencil_icon user_div"></span></h4>
					</div>
					<div class="panel-body">
						<p>You can! Members of the public can rent and lend tools. Companies can also lend tools.</p>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>How do you rent tools?<span style="float:right"class="glyphicon glyphicon-pencil pencil_icon user_div"></span></h4>
					</div>
					<div class="panel-body">
						<p>You can search for a tool in different categories and by distance from a location.
						You can then view the details of a tool and its avalability. When you have chosen a tool you can click "rent". 
						Once the lender has agreed and payment is made, the lender will send you the tool.
						</p>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>I have a problem with my rental.<span style="float:right"class="glyphicon glyphicon-pencil pencil_icon user_div"></span></h4>
					</div>
					<div class="panel-body">
						<p>You can file a dispute if you have a problem with the tool you are renting. 
						This will notify an administator who will work to help resolve the situation.
						</p>
					</div>
				</div>
	        </div>
	    </div>
	    </div>
	</div>
</div>


<div class="modal fade" id="addFAQModal" tabindex="-1" role="dialog" aria-labelledby="addFAQModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Add FAQ</h4>
			</div>
			<div class="modal-body">
				<div class="panel-body" >
					<form style="padding-top:10px;" method="post" class="form-horizontal" role="form">

						<div style="padding-top:10px;" class="form-group">
							<label class="col-lg-4 control-label">FAQ Question:</label>
							<div class="col-lg-7">
								<input class="form-control" id="user_username" type="text"  value="" >
							</div>
						</div>

						<div  class="form-group">
							<label style="padding-top:10px;" class="col-lg-4 control-label">FAQ Answer:</label>
							<div  style="padding-top:10px;" class="col-lg-7">
								<textarea class="form-control" rows="3"  id="fName" type="text" value="" ></textarea>
							</div>
						</div>

						
					</form>
				</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
                <button type="button" class="btn btn-primary" id="savechanges" data-dismiss="modal">Add</button>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="messageAdmin" tabindex="-1" role="dialog" aria-labelledby="messageAdmin" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Message Admin</h4>
			</div>
			<div class="modal-body">
				<div class="panel-body" >
					<form style="padding-top:10px;" method="post" class="form-horizontal" role="form">

						<div style="padding-top:10px;" class="form-group">
							<label class="col-lg-4 control-label">Message Admin:</label>
							<div class="col-lg-7">
								 <textarea rows="4" cols="40"></textarea> 
							</div>
						</div>					
					</form>
				</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Cancel</button>
                <button type="button" class="btn btn-success" id="savechanges" data-dismiss="modal">Send</button>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editFAQModal" tabindex="-1" role="dialog" aria-labelledby="editFAQModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Edit FAQ</h4>
			</div>
			<div class="modal-body">
				<div class="panel-body" >
					<form style="padding-top:10px;" method="post" class="form-horizontal" role="form">

						<div style="padding-top:10px;" class="form-group">
							<label class="col-lg-4 control-label">FAQ Question:</label>
							<div class="col-lg-7">
								<input class="form-control" id="user_username" type="text"  value="What is this website?" >
							</div>
						</div>

						<div  class="form-group">
							<label style="padding-top:10px;" class="col-lg-4 control-label">FAQ Answer:</label>
							<div  style="padding-top:10px;" class="col-lg-7">
								<textarea class="form-control" rows="3"  id="fName" type="text" value="" >Big Tool allows people to lend and rent tools from one another.</textarea>
							</div>
						</div>

						
					</form>
				</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
                <button type="button" class="btn btn-primary" id="savechanges" >Add</button>
        </div>
    </div>
  </div>
</div>

 <?php
 include("footer.php");
 ?>