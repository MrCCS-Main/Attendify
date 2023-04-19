<?php
require_once 'db_conn.php';
require_once 'vendor/autoload.php'; // include the autoloader
include 'login.php';



?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
</head>
<body>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
      		<div class="form-group">
                <label for="newPass">New Password:</label>
                <input type="password" class="form-control" name="email" id="newPass" placeholder="New Password" required>
            </div>
            <div class="form-group">
	            <label for="confirmNewPass">Confirm New Password:</label>
	            <input type="password" class="form-control" name="email" id="confirmNewPass" placeholder="Confirm New Password" required>
        	</div>
            
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-3" name="submit_new_password">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>	
	
</body>
<script>
var myModal = new bootstrap.Modal(document.getElementById('myModal'), {})
myModal.show()
</script>
</html>