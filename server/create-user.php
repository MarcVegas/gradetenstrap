<?php 
require_once('../includes/config.php');
if (!empty($_POST)) {
    $usr = $_POST['username'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $pass = $_POST['password'];
    $level = $_POST['level'];

    $query = "INSERT INTO users(username,first_name,last_name,password,level) VALUES('$usr','$fname','$lname','$pass','$level')";
    mysqli_query($conn, $query);
    $url = $_SERVER['REQUEST_URI'];
    echo "<script>console.log('$url')</script>";
    if ($url == '/gradetenstrap/register.php') {
        header('location: index.php');
    }else{
        header('location: ../index.php');
    }
}
?>