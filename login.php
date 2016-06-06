<?php
  // The user login page
  include 'templates/header.php';
?>

	<!--login modal-->
	<div id="loginModal" class="modal show bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
	  <div class="modal-content">
		  <form class="form" method="POST" action="auth_login.php">
		  <div class="modal-header">
			  <h3 class="text-center">User authentication</h3>
		  </div>
		  <div class="modal-body">
				<div class="form-group">
				  <input type="text" class="form-control input-sm" placeholder="login" name="userlogin">
				</div>
				<div class="form-group">
				  <input type="password" class="form-control input-sm" placeholder="password" name="pass">
          <input type="hidden" name="login" value="login">
				</div>
		  </div>
		  <div class="modal-footer">
				  <button class="btn btn-default">Login</button>
		  </div>
		  </form>
	  </div>
	  </div>
	</div>

<?php
  include 'templates/footer.php';
