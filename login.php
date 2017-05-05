<?php
require 'includes/common.php';
?>


<html>
    <head>
        <title>Login | Lifestyle Store</title>
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
         <div class="container login-container">
            <div class="row">
                <div class="col-md-4  col-md-offset-4 col-xs-10 col-xs-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form action='login_submit.php' method='POST'>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="pwd" placeholder="Password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account ? <a href='signup.php'>Register</a></p>
                        </div>
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
