<head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<?php
require_once 'db_conn.php';
require_once 'vendor/autoload.php'; // include the autoloader
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
include 'login.php';
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['submit_email']) && !empty($_POST['email']))
{
    $email = $_POST['email'];
    $stmt = mysqli_prepare($conn, "SELECT * FROM admin WHERE email = ?");
    if ($stmt === false) {
        die("Error: " . mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) == 1) {
        // email found in database, generate unique code and save to database
        $reset_code = bin2hex(random_bytes(16));
        $stmt2 = mysqli_prepare($conn, "UPDATE admin SET reset_code = ? WHERE email = ?");
        if ($stmt2 === false) {
            die("Error: " . mysqli_error($conn));
        }
        mysqli_stmt_bind_param($stmt2, "ss", $reset_code, $email);
        mysqli_stmt_execute($stmt2);
        mysqli_stmt_close($stmt2);
        // send email to user with reset code
        $mail = new PHPMailer();  
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->Username = 'jophersonalejo@gmail.com';
        $mail->Password = 'xlzbitgyzpeicwrs';
        $mail->SetFrom('jophersonalejo0130@gmail.com', 'Attendify');
        $mail->AddAddress($email);
        $mail->Subject = 'Reset your password';
        $mail->MsgHTML('Please click the following link to reset your password: <a href="localhost/Attendify/reset_password.php?code='.$reset_code.'" >Click Here To Reset Password</a>');
        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "<script>window.onload = function() {
        Swal.fire({
          title: 'Reset Password Code Sent Succesfully',
          text: 'A code sent into your email.',
          icon: 'success',
          confirmButtonText: 'OK'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = 'login.php'; // redirect to index.html
          }
        });
      };
            </script>";
        }
    } else {
        // email not found in database
        echo "<script>window.onload = function() {
        Swal.fire({
          title: 'Email Not Found In Database',
          text: 'Please try again',
          icon: 'error',
          confirmButtonText: 'OK'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = 'login.php'; // redirect to index.html
          }
        });
      };
            </script>";
    }
    mysqli_stmt_close($stmt);
}
?>
