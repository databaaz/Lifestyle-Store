<?php
include 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$old_pass  = $_POST['opwd'];
$new_pass = $_POST['npwd'];
$conf_new_pass = $_POST['rnpwd'];
$old_pass = md5($old_pass);
$user_id = $_SESSION['id'];
$select_query = "SELECT password from users where id=$user_id";
$result = mysqli_query($con,$select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
if($old_pass != $row['password'])
{
    echo "Old Password does not match.<br><a href='setting.php'>Click here </a> to go back";
}    
else if($new_pass!=$conf_new_pass)
{
    echo "New passwords don't match. Please Try again !<br><a href='setting.php'>Click here </a> to go back";
}    
else if(strlen($new_pass)<6)
{
    echo "New password should be atleast 6 characters long.<br><a href='setting.php'>Click here </a> to go back";
} 
else
{
    $new_pass = md5($new_pass);
    $update_query = "UPDATE users SET password='$new_pass' WHERE id=$user_id";
    $update_result = mysqli_query($con,$update_query) or die(mysqli_error($con));
    echo "Password Changed successfully.";
}    
?>

