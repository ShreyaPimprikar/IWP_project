<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email']))
    {
        header("location:index.php");
    }
?>


<!DOCTYPE html>
<html>
    <head>

    <?php
        include 'includes/links.php';
    ?>

        <title>Settings</title>
        
        <style>
            .row_style{
                margin-top: 50px;
            }
        </style>
    </head>

    <body style="background-color:PaleTurquoise">

    <?php
        include 'includes/header.php';
    ?>
        

        <div class="container">
            <div class="row row_style">
                <div class="col-xs-4">
                    <h1><b>Change Password</b></h1>

                    <form action = "settings_script.php" method = "POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="oldpassword" placeholder="Old Password">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="newpassword" placeholder="New Password" pattern=".{6,}" required>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="newpasswordre" placeholder="Re-type New Password" pattern=".{6,}" required>
                        </div>

                        <?php 
                            if(isset($_GET['m1'])){
                            echo $_GET['m1'];
                    }                      
                         ?>

                         <br><br>

                        
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </form>
                </div>

            </div>
        </div>


        
        <?php
        include 'includes/footer.php';
        ?>

    </body>
</html>
