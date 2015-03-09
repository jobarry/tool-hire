<?php
	include("header.php"); 
	include("navbar.php")
?>
<div class="container">
	<div class="col-md-6 col-md-offset-3">	
		<div class="page-header">
			<h1>My Basket</h1>
			<div class="panel panel-default">
				<div class="panel-heading"><h3 class="panel-title">Items:</h3></div>
		    	<div class="panel-body">
			    	<div class="row">
			    		<div class="col-md-4"><h4><b>Wooden Hammer</b></h4></div> 
			    		<div class="col-md-4"><h4>x1</h4></div>
			    		<div class="col-md-4"><h5><b>Price: </b>£2/day</h5></div>
			    		<div class="col-md-4"><h5><b>Days: </b>2 Days</h5></div>
			    	</div>
			    	<br>
			    	<div class="row">
			    		<div class="col-md-4">
			    		<a href="checkoutConfirm.php"><button type="button" class="btn btn-lg btn-success">Checkout</button></a>
			    		</div>
			    	</div>
		    	</div>
		    </div>
		</div>
	</div>
</div>

<?php
	include("footer.php"); 
?>