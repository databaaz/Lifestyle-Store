<?php
include 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}    
?>
<html>
    <head>
        <title>Settings</title>
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
            <div class="col-xs-4 col-xs-offset-4">
                <h2>Change Password</h2>
                <form method='POST' action="settings_script.php">
                    <div class="form-group">
                        <input type="password"  class="form-control" name="opwd"  placeholder="Old Password" required>
                    </div>
                    <div class="form-group">
                            <input type="password"  class="form-control" name="npwd"  placeholder="New Password" required>
                    </div>
                    <div class="form-group">
                            <input type="password"  class="form-control" name="rnpwd"  placeholder="Re-type New Password" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Change">
                    </div>
                    
                </form>
            </div>
            
        </div>
        </main>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
        
    </body>
</html>
