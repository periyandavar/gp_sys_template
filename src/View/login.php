<?php

use System\Core\Utility;

?><div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true" class="ion-ios-close"></span>
		        </button>
		      </div>
		      <div class="row no-gutters">
			      <div class="col-md-6 d-flex">
				      <div class="modal-body p-5 img d-flex color-1 text-center d-flex align-items-center">
				      	<div class="text w-100">
					      	<h5><?php if (isset($heading)) {
					      	    echo $heading;
					      	}?></h5>
					      	<div class="icon">
					      		<span class="logo-icon"><img src="static/img/logo.svg" alt="Logo"></span>
					      	</div>
					      </div>
				      </div>
				    </div>
				    <div class="col-md-6 d-flex">
				      <div class="modal-body p-5 img d-flex align-items-center color-2">
				      	<div class="text w-100 py-0 py-md-5">
				      		<h3 class="mb-4">Create Your Account</h3>
				      		<form action="#" class="signup-form">
					      		<div class="form-group mb-3">
					      			<label class="label" for="name">Full Name</label>
                                    <input id="token" type="hidden" name="token" value="<?php echo Utility::generateCsrfToken(); ?>">
					      			<input type="text" id="username" class="form-control" placeholder="John Doe">
					      		</div>
					      		<div class="form-group">
				            	<button type="button" id="submitBtn" class="button button-primary">Sign Up</button>
				            </div>
				          </form>
                          <p id="errorMessage" class="text-danger"></p>
				      	</div>
				      </div>
				    </div>
				  </div>
		    </div>
		  </div>
		</div>