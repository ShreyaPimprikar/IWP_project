<?php
    require 'includes/common.php';
    if(isset($_SESSION['email']))
    {
        header("location:products.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
            include 'includes/links.php';
        ?>

        <title>Signup</title>>
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
                    <h1><b>SIGN UP</b></h1>

                    <form method="POST" action="signup_script.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                            <?php   
                                if(isset($_GET['m1']))
                                {
                                    echo $_GET['m1'];
                                }
                            ?>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" pattern=".{6,}" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="contact" placeholder="Contact"  maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits"  required>
                            <?php
                                if(isset($_GET['m2']))
                                {
                                    echo $_GET['m2'];
                                }
                            ?>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>

            </div>
        </div>


        <?php
        include 'includes/footer.php';
        ?>


    </body>
</html>
