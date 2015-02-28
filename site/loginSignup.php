		<?php
		include("header.php");
		?>
		<?php
		include("navBar.php");
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
		                              <button type="submit" class="btn btn-success btn-block">Login</button>
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


		  <div class="col-lg-6">
		    <div class="input-group">
		      <input type="text" class="form-control" aria-label="...">
		      <div class="input-group-btn">
		        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
		        <ul class="dropdown-menu dropdown-menu-right" role="menu">
		          <li><a href="#">Action</a></li>
		          <li><a href="#">Another action</a></li>
		          <li><a href="#">Something else here</a></li>
		          <li class="divider"></li>
		          <li><a href="#">Separated link</a></li>
		        </ul>
		      </div><!-- /btn-group -->
		    </div><!-- /input-group -->
		  </div><!-- /.col-lg-6 -->

		<?php
		include("footer.php");
		?>