<?php
	include("header.php"); 
	include("navbar.php")
?>
<div class="container">
	<div class="col-md-6 col-md-offset-3">	
		<div class="page-header">
			<h1>Checkout Summary</h1>
			<div class="panel panel-default">
				<div class="panel-heading"><h3 class="panel-title">Items</h3></div>
		    	<div class="panel-body">
			    	<h5>Wooden Hammer x1</h5>
			    	<h5><b>Price: </b>£2/day</h5>
			    	<h5><b>Days: </b>2 Days</h5>
		    	</div>
		    </div>
		    <a href="checkoutConfirmation.php"><button type="button" class="btn btn-lg btn-info">Confirm Order</button></a>
		</div>
	</div>
</div>

<?php
	include("footer.php"); 
?>