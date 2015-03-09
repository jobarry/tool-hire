 <?php
include("header.php"); 
include("navBar.php"); 
?>

<div class="container ">
	<div class="row ">
      <div class="col-md-6 col-md-offset-3 ">
        <div class="well well-sm userbk">
          <form class="form-horizontal " action="" method="post">
      
            <legend class="text-center">Add Tool</legend>
    
            <!-- Name input-->
            <div class="form-group ">
              <label class="col-md-3 control-label" for="name">Tool Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Description</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Category</label>
              <div class="col-md-9">
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

            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Image:</label>
              <div class="col-md-9">
               <img src="img/noimage.jpg">
              </div>
            </div>

             <div class="form-group">
              <label class="col-md-3 control-label" for="message">Upload:</label>
              <div class="col-md-9">
               <input type="file" name="files[]" id="js-upload-files" multiple>
              </div>
            </div>

            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
        <a href="addToolConfirmation.php" type="submit" class="btn btn-primary">Sumbit Tool</a>
              </div>
            </div>
          
          </form>
        </div>
      </div>
	</div>
</div>


 <?php
 include("footer.php");
 ?>