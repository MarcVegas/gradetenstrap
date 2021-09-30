<?php
include_once('../includes/config.php');
session_start();

$usr = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$usr' AND password = '$pass'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

$test = $row['username'];

if ($row['username'] == $usr && $row['password'] == $pass) {
   $_SESSION['user'] = $row['username'];
   $_SESSION['passw'] = $row['password'];
   $_SESSION['fname'] = $row['first_name'];
   $_SESSION['lname'] = $row['last_name'];

   if ($row['level'] == 1) {
        header('location: ../index.php');
   } else {
        header('location: ../home.php');
   }
   
   
}else{
    echo "<script>
    alert('INVALID')
    window.location = 'login.php'
    </script>";
}
?>