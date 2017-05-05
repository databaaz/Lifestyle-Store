<?php
include 'includes/common.php';
$user_id = $_SESSION['id'];
$id = $_GET['id'];
$delete_query= "DELETE FROM users_items WHERE id='$id' AND user_id='$user_id'";
$delete_result = mysqli_query($con,$delete_query) or die(mysqli_error($con));
header('location:cart.php');

?>

