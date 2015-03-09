		<?php
		include("header.php");
	
		include("navBarLogin.php");
		?>
		<div id="login-overlay" class="modal-dialog">
		      <div class="modal-content">
		          <div class="modal-header">
		              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
		              <h4 class="modal-title" id="myModalLabel">Login to BigTool.com</h4>
		          </div>
		          <div class="modal-body">
		              <div class="row">
		                  <div class="col-xs-6">
		                      <div class="well">
		                          <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
		                              <div class="form-group">
		                                  <label for="username" class="control-label">Username</label>
		                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
		                                  <span class="help-block"></span>
		                              </div>
		                              <div class="form-group">
		                                  <label for="password" class="control-label">Password</label>
		                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
		                                  <span class="help-block"></span>
		                              </div>
		                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
		                              <div class="checkbox">
		                                  <label>
		                                      <input type="checkbox" name="remember" id="remember"> Remember login
		                                  </label>
		                                  <p class="help-block">(if this is a private computer)</p>
		                              </div>
		                              <a href="index.php" type="submit" class="btn btn-success btn-block">Login</a>
		                              <a href="/forgot/" class="btn btn-default btn-block">Help to login</a>
		                          </form>
		                      </div>
		                  </div>
		                  <div class="col-xs-6">
		                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
		                      <ul class="list-unstyled" style="line-height: 2">
		                          <li><span class="fa fa-check text-success"></span> - Rent your tools for cash</li>
		                          <li><span class="fa fa-check text-success"></span> - Rent tools from others</li>
		                          <li><span class="fa fa-check text-success"></span> - Earn money</li>
		                          <li><span class="fa fa-check text-success"></span> - Save money</li>
		                          <li><a href="/read-more/"><u>Read more</u></a></li>
		                      </ul>
		                      <p><a href="register.php" class="btn btn-info btn-block">Yes please, register now!</a></p>
		                  </div>
		              </div>
		          </div>
		      </div>
		  </div>
<?php
    include("footer.php");
    ?>
