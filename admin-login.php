<!DOCTYPE html>
<html>
<head>
  <title></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
  <script src="https://kit.fontawesome.com/baad1239a1.js" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<style type="text/css">
  body{
    background-color: #004D6B;

  }

</style>
</head>
<body>

</body>
</html>
<?php
session_start();
include_once'db_conn.php';
if(isset($_POST['username']) && isset($_POST['password'])){

  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $username=validate($_POST['username']);
  $password=validate($_POST['password']);
  if(empty($username)){
    header("Location: index.html?error=Username is required");
    exit();
  }else if (empty($password)) {
    header("Location: index.html?error=Password is required");
    exit();

}else{
    $sql = "SELECT * FROM admin WHERE username='$username' AND password ='$password'";
    $result = mysqli_query($conn, $sql);
  
    {
    if (mysqli_num_rows($result) ) {
      $row = mysqli_fetch_assoc($result);
      if($row['username'] === $username && $row['password'] === $password){
        $_SESSION['username'] = $row['username'];
        header("Location: Dashboard.php");
        exit();
      }   
    }else{
      echo '<script type="text/javascript">';
echo ' Swal.fire({
  icon: "error",
  title: "ERROR",
  text: "Invalid username or password!",
})';  //not showing an alert box.
echo '</script>';
 header("Refresh:3");
      exit();
    }
    }
  } 
}else{
  header("Location: index.html");
  exit();
}



?>