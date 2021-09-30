<?php 
require_once('../includes/config.php');
if (!empty($_POST)) {
    $id = $_POST['id'];
    $usr = $_POST['username'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $pass = $_POST['password'];

    $query = "UPDATE users SET username='$usr', first_name='$fname', last_name='$lname', password='$pass' WHERE id='$id'";
    mysqli_query($conn, $query);
    header('location: ../index.php');
}
?>