 <?php
include("header.php"); 
include("navBar.php"); 
?>

<div class="page-header">
	<div class="container">
	<h1>Add Tool</h1>
		<div class="col-md-5 col-md-offset-3">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <h3 class="panel-title">Add a tool</h3>
	        </div>

	        <div class="panel-body">
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

	            <h3>Title</h3>
				<input type="text" id="title" name="title" value="">


		          <!-- Standar Form -->
		        <h3>Image</h3>
		          <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
		            <div class="form-inline">
		              <div class="form-group">
		                <input type="file" name="files[]" id="js-upload-files" multiple>
		              </div>
		              <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
		            </div>
		        </form>
        
	            <h3>Description</h3>
	        	<textarea name="description" id="description" max="10000" rows="5" cols="50"></textarea>

	            <h3>Availability</h3>
				<div class="grid-col-6 grid-col-l-10 space-mbxs form-element">
                	<input type="hidden" id="available" name="available">
                	<input type="checkbox" class="checkbox-switch" value="true">
                	<label for="available">
	                    <span>
	                        <span>Available</span>
	                    </span>
                    </label>
        		</div>	

        		<h1>
					<button type="button" class="btn btn-lg btn-primary">Add Tool</button>
				</h1>
			</div>
		</div>
		</div>
	</div>
</div>

 <?php
 include("footer.php");
 ?>