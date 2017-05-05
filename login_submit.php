<?php
include 'includes/common.php';
$email = $_POST['email'];
$password = $_POST['pwd'];
$email = mysqli_real_escape_string($con,$email);
$password = md5(mysqli_real_escape_string($con,$password));

$user_query = "SELECT id,email from users WHERE email='$email' and password='$password'";
$user_result = mysqli_query($con,$user_query) or die(mysqli_error($con));
if(mysqli_num_rows($user_result)==0)
{    
    echo 'Invalid email or password';
    
}
else
{
    $row = mysqli_fetch_array($user_result);
    $_SESSION['id']= $row['id'];
    $_SESSION['email']=$row['email'];
    header('location: products.php');
}    
?>
