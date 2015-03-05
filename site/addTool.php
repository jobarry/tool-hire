 <?php
include("header.php"); 
include("navBar.php"); 
?>

<div class="page-header">
	<div class="container">
		<div class="col-md-5 col-md-offset-3">
		<h1>Add Tool</h1>
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <h3 class="panel-title">Add a tool</h3>
	        </div>

	        <div class="panel-body">
	        <div class="row">
		        <div class="col-md-6">
		            <h3>Title</h3>
					<input type="text" id="title" name="title" value="">
				</div>
				<div class="col-md-2">
				    <h3>Category</h3>
					<select title="Select tool category" name="category">
						<option value="Manual Tools" selected>
						Manual Tools</option>
						<option value="Power Tools">
						Power Tools</option>
						<option value="Machinery">
						Machinery</option>
						<option value="Plumbing">
						Plumbing</option>
						<option value="Cleaning">
						Cleaning</option>
						<option value="Gardening">
						Gardening</option>
						<option value="Decoration">
						Decoration</option>
						<option value="Power and Lighting">
						Power and Lighting</option>
						<option value="Safety and Ventilation">
						Safety and Ventilation</option>
					</select>
				</div>
			</div>


		          <!-- Standard Form -->
		        <h3>Image</h3>
		        <img src="img/noimage.jpg">
		        <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
		            <div class="row">
			            <div class="col-md-3">
			            	<input type="file" name="files[]" id="js-upload-files" multiple>
			            </div>
			        </div>
			        <br>
			        <div class="row">
			            <div class="col-md-3">
			        	    <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
			            </div>
		            </div>
		        </form>
        
	            <h3>Description</h3>
	        	<textarea name="description" id="description" max="10000" rows="5" cols="60"></textarea>

	            <div class="row">
	            <div class="col-md-6">
	            <h3>Availability</h3>
	            </div>
	            <br>
	            <div class="col-md-3">
		        		<button type="button" class="btn btn-lg btn-primary">Add Tool</button>
				</div>
				</div>
				<div class="row">
		            <div class="col-md-1">
		                	<input type="checkbox" class="checkbox-switch" value="true">
		            </div>
		            <div class="col-md-6">
		                <p>Available</p>
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