 <?php
include("header.php"); 
include("navBar.php");
?>
<div class="container">
	<div class="col-md-6 col-md-offset-3">	
		<div class="panel panel-default">
			<div class="panel-heading"><h1>Big Hammer</h1></div>
	    	<div class="panel-body">
				<img src="img/Hammer2.jpg">
				<h5>Average User Rating 4/5</h5>
	          	<p>This a large hammer. Useful for hammering large objects...</p>
	          	<p>Distance: <strong>3 miles</strong></p>
	     	    <p>Price: <strong>£4/day</strong></p>
	     	    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
	     	    <br>
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
 <?php
 include("footer.php");
 ?>