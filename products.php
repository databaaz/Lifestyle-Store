<?php
include 'includes/common.php';
?>
<html>
    <head>
        <title>Products | Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div id="wrap">
        <?php
            include 'includes/header.php';
            include 'includes/check-if-added.php';
        ?>
            
    <main>
        <div class="container">
            <div class="jumbotron" style="text-align:center;">
                <h1> Welcome to our Lifestyle Store! </h1>
                <p> We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.</p>
            </div>
            
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/cannon.jpg" class="img-responsive" alt="cannon eos camera">
                        <div class="caption">
                            <h3>Cannon EOS</h3>
                            <p>Price: Rs. 36000.00</p>
                            
                        </div>
                        <?php 
                        if(!isset($_SESSION['email'])) //loggedout
                        {   
                        ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else
                        {
                           if(check_if_added_to_cart(1))
                           {    
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                           }
                           else
                           {
                           ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">
                                Add to cart</a>
                            <?php
                           }
                        }
                        ?>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/nikondslr.jpg" class="img-responsive" alt="Nikon DSLR camera">
                        <div class="caption">
                            <h3>Nikon DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                        </div>
                        <?php 
                        if(!isset($_SESSION['email'])) //loggedout
                        {   
                        ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else
                        {
                           if(check_if_added_to_cart(2))
                           {    
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                           }
                           else
                           {
                           ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">
                                Add to cart</a>
                            <?php
                           }
                        }
                        ?>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/sonydslr.jpg" class="img-responsive" alt="Sony DSLR camera">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 40000.00</p>
                        </div>
                        <?php 
                        if(!isset($_SESSION['email'])) //loggedout
                        {   
                        ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else
                        {
                           if(check_if_added_to_cart(3))
                           {    
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                           }
                           else
                           {
                           ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">
                                Add to cart</a>
                            <?php
                           }
                        }
                        ?>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/olympusdslr.jpg" class="img-responsive" alt="Olympus DSLR camera">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs. 80000.00</p>
                        </div>
                        <?php 
                        if(!isset($_SESSION['email'])) //loggedout
                        {   
                        ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else
                        {
                           if(check_if_added_to_cart(4))
                           {    
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                           }
                           else
                           {
                           ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">
                                Add to cart</a>
                            <?php
                           }
                        }
                        ?>
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/titan1.jpg" class="img-responsive" alt="Titan Watch Model 301">
                        <div class="caption">
                            <h3>Titan  Model#301</h3>
                            <p>Price: Rs. 13000.00</p>
                        </div>
                        <?php 
                        if(!isset($_SESSION['email'])) //loggedout
                        {   
                        ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else
                        {
                           if(check_if_added_to_cart(5))
                           {    
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                           }
                           else
                           {
                           ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">
                                Add to cart</a>
                            <?php
                           }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/fossil.jpg" class="img-responsive" alt="Fossil Watch Model 960">
                        <div class="caption">
                            <h3>Fossil Model#960</h3>
                            <p>Price: Rs. 20000.00</p>
                        </div>
                        <?php 
                        if(!isset($_SESSION['email'])) //loggedout
                        {   
                        ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else
                        {
                           if(check_if_added_to_cart(6))
                           {    
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                           }
                           else
                           {
                           ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">
                                Add to cart</a>
                            <?php
                           }
                        }
                        ?>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch.jpg" class="img-responsive" alt="HMT Milan Watch">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price: Rs. 8000.00</p>
                        </div>
                        <?php 
                        if(!isset($_SESSION['email'])) //loggedout
                        {   
                        ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else
                        {
                           if(check_if_added_to_cart(7))
                           {    
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                           }
                           else
                           {
                           ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">
                                Add to cart</a>
                            <?php
                           }
                        }
                        ?>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch1.jpg" class="img-responsive" alt="Faber Luba watch">
                        <div class="caption">
                            <h3>Faber Luba #111</h3>
                            <p>Price: Rs. 18000.00</p>
                        </div>
                        <?php 
                        if(!isset($_SESSION['email'])) //loggedout
                        {   
                        ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else
                        {
                           if(check_if_added_to_cart(8))
                           {    
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                           }
                           else
                           {
                           ?>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">
                                Add to cart</a>
                            <?php
                           }
                        }
                        ?>
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/hnw.jpg" class="img-responsive" alt="H&W shirt">
                        <div class="caption">
                            <h3>H&W</h3>
                            <p>Price: Rs. 800.00</p>
                        </div>
                        <?php 
                        if(!isset($_SESSION['email'])) //loggedout
                        {   
                        ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else
                        {
                           if(check_if_added_to_cart(9))
                           {    
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                           }
                           else
                           {
                           ?>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">
                                Add to cart</a>
                            <?php
                           }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/raymond.jpg" class="img-responsive" alt="Raymonds Shirt">
                        <div class="caption">
                            <h3>Raymonds</h3>
                            <p>Price: Rs. 2000.00</p>
                        </div>
                        <?php 
                        if(!isset($_SESSION['email'])) //loggedout
                        {   
                        ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else
                        {
                           if(check_if_added_to_cart(10))
                           {    
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                           }
                           else
                           {
                           ?>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">
                                Add to cart</a>
                            <?php
                           }
                        }
                        ?>
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/johnzok.jpg" class="img-responsive" alt="john Zok shirt">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price: Rs. 1500.00</p>
                        </div>
                        <?php 
                        if(!isset($_SESSION['email'])) //loggedout
                        {   
                        ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else
                        {
                           if(check_if_added_to_cart(11))
                           {    
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                           }
                           else
                           {
                           ?>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">
                                Add to cart</a>
                            <?php
                           }
                        }
                        ?>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/jhalsani.jpg" class="img-responsive" alt="Jhalsani shirt">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price: Rs. 1300.00</p>
                        </div>
                        <?php 
                        if(!isset($_SESSION['email'])) //loggedout
                        {   
                        ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else
                        {
                           if(check_if_added_to_cart(12))
                           {    
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                           }
                           else
                           {
                           ?>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">
                                Add to cart</a>
                            <?php
                           }
                        }
                        ?>
                    </div>
                </div>
            </div>
           
        </div>
    </main>
            
     </div>
         <?php
            include 'includes/footer.php';
        ?>
            
    </body>
</html>
