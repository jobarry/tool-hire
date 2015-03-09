 <?php
include("header.php"); 
include("navBar.php");
?>
<head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
<script language="JavaScript" type="text/javascript" src="js/jquery.min.js"></script>
  <script language="JavaScript" type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( ".datepicker" ).datepicker();
  });
  </script>
</head>

<div class="container">
	<div class="col-md-6 col-md-offset-3">	
		<div class="panel panel-default">
			<div class="panel-heading"><h1>Wooden Hammer</h1></div>
	    	<div class="panel-body">
				<img src="img/Hammer2.jpg">
				<h5>Average User Rating 4/5</h5>
                <p>       <strong>Category:</strong> Manual tool</br>
                          <strong>Tool: </strong>Hammer</br>
                          <strong>Description:</strong> 
                          Carbon steel head, Wooden grip.</br>
                          <strong>Condition: </strong>Used</br>
                          <strong>Price:</strong> £2 per day</p>
                          <h5>Owner: Rich L</h5>
                          <button  type="button" class="btn btn-info" data-toggle = "modal" data-target = "#messageModal">Message Them</button>
                          <br><br>
	     	   From: <span class="glyphicon glyphicon-calendar" aria-hidden="true"><input type="text" size="15" class="datepicker"></span></br> To: 
	     	    <span class="glyphicon glyphicon-calendar" aria-hidden="true"><input type="text" size="15" class="datepicker"></span>
	     	    <br><br>

	     	    <a href="mybasket.php"><button type="button" class="btn btn-lg btn-primary">Add Tool to Basket</button></a>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading"><h3>Reviews</h3></div>
				<div class="panel-body">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Does the job</h4><h5>Rating: 4/5 - User: Dave D</h5></div>
						<div class="panel-body">
						<p>This big hammer does the job. Good condition, feels sturdy.</p>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Good for hammering</h4><h5>Rating: 5/5 - User: Hannah R</h5></div>
						<div class="panel-body">
						<p>Needed to hammer some large nails and this hammer helped greatly. Would recommend.</p>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Mildly satisfied</h4><h5>Rating: 3/5 - User: Pete A</h5></div>
						<div class="panel-body">
						<p>This is a big hammer, but is it too big? A little heavy to hold.</p>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>


<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="rejectModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Message</h4>
			</div>
			<div class="modal-body">
				<div class="panel-body" >
					<p>Send <b class = "user">Rich L</b> a message:</p>
					<form style="padding-top:10px;" class="form-horizontal" role="form">
						<div  class="form-group">
							<label style="padding-top:10px;" class="col-lg-4 control-label">Message Content:</label>
							<div style="padding-top:10px;" class="col-lg-7">
								 <textarea rows="4" cols="40"></textarea> 
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" id = "hide" class="btn btn-success" onclick="hide()" data-dismiss="modal">Send</button>
			</div>
		</div>
	</div>
</div>

 <?php
 include("footer.php");
 ?>