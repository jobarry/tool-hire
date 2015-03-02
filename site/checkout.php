<?php
	include("header.php"); 
	include("navbar.php")
?>
<div class="container">
	<div class="col-md-6 col-md-offset-3">	
		<div class="page-header">
			<h1>Checkout</h1>
			<div class="panel panel-default">
				<div class="panel-heading"><h3 class="panel-title">Enter Delivery Address:</h3></div>
		    	<div class="panel-body">
			    	<h5>Delivery Address</h5>
			    	<textarea name="description" id="description" max="10000" rows="5" cols="50" placeholder="Delivery Address"></textarea>
		    	</div>
		    </div>
		    <div class="panel panel-default">
				<div class="panel-heading"><h3 class="panel-title">Enter Payment Details:</h3></div>
		    	<div class="panel-body">
					<h5>Payment Address</h5>
			    	<textarea name="description" id="description" max="10000" rows="5" cols="50" placeholder="Payment Address"></textarea>
			    	<br>
			    	<h5>Card Number</h5>
	            	<input type="cardno" name="cardno" class="form-control" placeholder="Card Number">
		    	</div>
		    </div>
		    <a href="checkoutConfirm.php"><button type="button" class="btn btn-lg btn-info">Proceed</button></a>
		</div>
	</div>
</div>

<?php
	include("footer.php"); 
?>