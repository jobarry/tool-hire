 <?php
include("header.php"); 
?>



<div class="container">
    <div class="row">
      	<div style="padding-top:50px" class="col-md-10">
	        <div id = "my_page" class = " panel panel-default">
	          	<div class="panel-heading">
	                <div class="panel-title">
	                          	My Page
	                </div>
          		</div>
	            <div class="panel-body" >

				    <ul style="padding-top:20px" class="nav nav-tabs">

				        <li class="active"><a href="#">MyTools</a></li>

				        <li><a href="#">MyAccount</a></li>
				        <li class="dropdown">
				            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
				            <ul class="dropdown-menu">
				                <li><a data-toggle="tab" href="#dropdown1">Dropdown1</a></li>
				                <li><a data-toggle="tab" href="#dropdown2">Dropdown2</a></li>
				            </ul>
				        </li>

				    </ul>
				</div>
			</div>
		</div>
	</div>
</div>




 <?php
 include("footer.php");
 ?>