<?php
include 'includes/common.php';
$name= mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['pwd']);
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['addr']);

$email_regex="/[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/";
if(!preg_match($email_regex,$email))
{        
        echo"Incorrect email format\n";
}
if(strlen($password)<6)
{    
        echo 'Password should be atleast 6 characters\n';
}
if(strlen($contact)<8 || strlen($contact)>12)
{    
        echo 'Contact number should be between 8 to 12 chasracters \n';
}
$select_query = "SELECT id from users WHERE email='$email'";
$select_result = mysqli_query($con,$select_query) or die(mysqli_error($con));

if(mysqli_num_rows($select_result)>0)
{
    echo 'Email Id already exists';
} 
else
{
    $password = md5($password);
    $contact = (int)$contact;
    $insert_query = "INSERT INTO  users(name,email,password,contact,city,address)values('$name','$email','$password','$contact','$city','$address')";
    $insert_result = mysqli_query($con,$insert_query) or die(mysqli_error($con));
    $id = mysqli_insert_id($con);
    $_SESSION['id']=$id;
    $_SESSION['email']=$email;
    header('location:products.php');
}    
?>

