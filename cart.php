<?php
include 'includes/common.php';
if(!isset($_SESSION['email']))
    header('location:index.php');
$user_id = $_SESSION['id'];
$select_query = "SELECT id,item_id,name,price FROM users_items INNER JOIN items ON item_id = pid WHERE user_id='$user_id' AND status='Added to cart'";
$select_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
   
?>
<html>
    <head>
        <title>Cart | Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!--Jquery library-->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div id="wrap">
        <?php
            include 'includes/header.php';
        ?>
        <main>
        <div class="container" >
            <h2>CART</h2>
            <div class="table-responsive ">
                <table class="table table-bordered">
                        <?php
                        if(mysqli_num_rows($select_result)==0)
                        {    
                            echo 'Your cart is empty';
                            exit();
                        }
                        else
                        {
                        ?>
                    <thead>
                        <tr><th>Item Number</th><th>Item  Name</th><th>Price</th><th> </th></tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            $sum = 0;
                            $ids = '';
                            $count=0;
                            while($row=mysqli_fetch_array($select_result))
                            {
                                $count++;
                                $sum = $sum + $row['price'];
                                $ids = $ids.$row['item_id'].',';
                        ?>
                        <tr><td><?php echo $count?></td><td><?php echo $row['name']?></td>
                            <td><?php echo $row['price']?></td>
                            <td><?php echo"<a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a>"?></td></tr>
                        <?php
                                
                                
                            }
                            $ids = substr($ids,0,strlen($ids)-1);
                        ?>
                        <tr><td></td><td>Total</td><td>Rs. <?php echo $sum ?>/-</td>
                            <td><?php echo"<a href='success.php?id=$ids' class='btn btn-primary'>Confirm Order</a>"; ?> </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>
        </main>
        </div>    
         <?php
            include 'includes/footer.php';
        ?>
            
    </body>
</html>
