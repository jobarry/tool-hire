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
		    	<form style="padding-top:10px;" class="form-horizontal" role="form">
						<div style="padding-top:10px;" class="form-group">
							<label class="col-lg-4 control-label">Name on Card:</label>
							<div class="col-lg-7">
								<input class="form-control" id="currentPassword_profile" type="text" value="" placeholder="Name As On Card">
							</div>
						</div>
						<div  class="form-group">
							<label style="padding-top:10px;" class="col-lg-4 control-label">Card Number:</label>
							<div  style="padding-top:10px;" class="col-lg-7">
								<input class="form-control" id="newPassword_profile" type="text" value="" placeholder="Card Number">
							</div>
						</div>
						<div  class="form-group">
							<label style="padding-top:10px;" class="col-lg-4 control-label">CVC:</label>
							<div  style="padding-top:10px;" class="col-lg-7">
								<input class="form-control" placeholder='ex. 311' size='4' type="text" value="" >
							</div>
						</div>
						<div class='form-group'>
						
							<label style="padding-top:10px;" class="col-lg-4 control-label">Expiration:</label>
							<div  style="padding-top:10px;" class="col-lg-7">
								
								<input class='form-control card-expiry-month' placeholder='MM-YYYY' size='2' type='text'>
							</div>
						</div>
				</form>
					<h5>Payment Address</h5>
			    	<textarea name="description" id="description" max="10000" rows="5" cols="50" placeholder="Payment Address"></textarea>
			    	<br>
	            	<div class="grid-col-6 grid-col-l-10 space-mbxs form-element">
                	<input type="hidden" id="save" name="save">
                	<input type="checkbox" class="checkbox-switch" value="true">
                	<label for="save">
	                    <span>
	                        <span>Save payment details</span>
	                    </span>
                    </label>
        		</div>
		    	</div>
		    </div>
		    <a href="paymentConfirmed.php"><button type="button" class="btn btn-lg btn-info">Proceed</button></a>
		</div>
	</div>
</div>

<?php
	include("footer.php"); 
?>