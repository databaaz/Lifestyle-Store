<?php
include 'includes/common.php';
if(!isset($_SESSION['email']))
{    
    header('location:index.php');
}
else
{    
    $item_ids = explode(',',$_GET['id']);
    $user_id = $_SESSION['id'];
    for($i=0; $i < count($item_ids);$i++)
    {
        $update_query = " UPDATE users_items SET status='Confirmed' WHERE user_id = $user_id and item_id=$item_ids[$i]";
        $update_result = mysqli_query($con,$update_query) or die(mysqli_error($con));

    }    
    echo "Your order is confirmed. Thank you for shopping with us.<br>"
    . "<a href='products.php'>Click here</a> to purchase any other item";
}     
?>
