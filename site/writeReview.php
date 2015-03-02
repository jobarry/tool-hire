 <?php
include("header.php"); 
include("navBar.php");
?>
<div class="container">
	<div class="col-md-6 col-md-offset-3">	
		<div class="panel panel-default">
			<div class="panel-heading"><h2>You are reviewing: Big Hammer</h2></div>
	    	<div class="panel-body">
	    		<h4>Rating Out Of 5</h4>
	    		<input type="number" id="rating" name="rating" min="1" max="5">

	    		<h4>Review</h4>
	    		<textarea name="description" id="description" max="10000" rows="5" cols="50" 
	    		placeholder="Write your review here"></textarea>
	    		<br>
	    		<a href="reviewSubmitted.php"><button type="button" class="btn btn-lg btn-primary">Submit Review</button></a>

			</div>
		</div>
	</div>
</div>
 <?php
 include("footer.php");
 ?>