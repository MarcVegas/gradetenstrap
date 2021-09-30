<?php 
require_once('../includes/config.php');
session_start();

$id = $_POST['id'];

$query = "DELETE FROM users WHERE id='$id'";
mysqli_query($conn,$query);
header('location: ../index.php');
?>