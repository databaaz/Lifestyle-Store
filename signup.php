<?php
include 'includes/common.php';
if (isset($_SESSION['email'])) {
header('location: products.php');
}
?>
<html>
    <head>
        <title>Signup | Lifestyle Store</title>
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
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h2> SIGNUP </h2>
                    <form action="signup_script.php" method="POST">
                        <div class="form-group">
                            <input type="text"  class="form-control" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email"  class="form-control" name="email" placeholder="Email" required
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"   >
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="pwd"  placeholder="Password" 
                                   required pattern=".{6,}">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="contact" placeholder="Contact" required
                                   pattern="\d{8,12}">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="city" placeholder="City" required>
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="addr" placeholder="Address" required>
                        </div>
                        
                        <div class="form-group">
                        <input type="submit" class="btn btn-primary">
                        </div>
                    </form>
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
