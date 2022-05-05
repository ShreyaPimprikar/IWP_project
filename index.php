<?php
    require 'includes/common.php';
    if(isset($_SESSION['email']))
    {
        header("location:products.php");
    }
?>


<!--Fabulous cosmetic for a delightful skin.
Beauty Beyond Boundaries-->
<!DOCTYPE html>
<html>
    <head>
       
        <?php
            include 'includes/links.php';
        ?>

        <title>Beauty Paradise</title>>
        
    </head>

    <body>
        <?php
            include 'includes/header.php';
        ?>
        
        <div style="padding-top: 75px; padding-bottom: 50px; text-align: center; color: #f8f8f8; background: url('h4.jpeg') no-repeat center; background-size: cover;">
            <div class="container">
                <center>
                    <div id="banner_content">
                        <h1><b>Beauty Beyond Boundaries</b></h1>
                        <p>Flat 40% OFF on premium brands</p>
                        <a href="login.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </center>
                
            </div>
        </div>

        <?php
        include 'includes/footer.php';
        ?>


    </body>
</html>