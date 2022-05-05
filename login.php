<?php 
    require 'includes/common.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
            include 'includes/links.php';
        ?>

        <title>Login</title>>
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
            <div class="row row_style" >
                <div class="col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            LOGIN
                        </div>

                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                </div>
                                <div>
                                    <input type="password" class="form-control" name="password" placeholder="Password" pattern=".{6,}" required>
                                </div>


                                <div class="form-group">
                                    <?php
                                        if(isset($_GET['m1']))
                                        {
                                            echo $_GET['m1'];
                                        }
                                        ?>
                                </div>

                                <br>

                                <button type="submit" class="btn btn-primary">Login</button>

                               
                            </form>

                        </div>

                        <div class="panel-footer">
                            Don't have an account? 
                            <a href="signup.php">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include 'includes/footer.php';
        ?>

    </body>
</html>
