<?php
include 'includes/common.php';
$item_id=(int)$_GET['id'];
$user_id = (int)$_SESSION['id'];

$insert_query = "INSERT into users_items(user_id,item_id,status)values('$user_id','$item_id','Added to cart')";
$insert_result = mysqli_query($con,$insert_query) or die(mysqli_error($con));
header('location:products.php');
?>