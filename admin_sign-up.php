<head>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<?php
// Include the database connection code from a separate file
require_once "db_conn.php";
include 'login.php';
// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $employee_number = $_POST["employee_number"];
  // Hash the password using PHP's built-in password_hash() function
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Insert the user data into the database
  $sql = "INSERT INTO admin (username, password, email, employee_number, date_registered) VALUES ('$username', '$hashed_password', '$email','$employee_number', NOW())";
  if (mysqli_query($conn, $sql)) {
    echo "<script>
      window.onload = function() {
        Swal.fire({
          title: 'Created Successfully',
          text: 'Congratulations! Your account has been successfully created. You can now log in with your username and password.',
          icon: 'success',
          confirmButtonText: 'OK'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = 'index.html'; // redirect to index.html
          }
        });
      };
    </script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
?>
