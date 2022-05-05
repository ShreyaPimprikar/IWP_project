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

        <title>Success</title>>
        
        <style>
            .row_style{
                margin-top: 50px;
            }
        </style>
    </head>

    <body style="background-color:Salmon">

    <?php
        include 'includes/header.php';
        $user_id = $_SESSION['user_id'];
        $query = "SELECT item_id FROM users_items WHERE user_id ='$user_id'";
        $result = mysqli_query($con,$query) or die(mysqli_error($con));

        while($row = mysqli_fetch_array($result))
        {
            $product_id = $row['item_id'];
            $query_update = "UPDATE users_items SET status='Confirmed' WHERE item_id = '$product_id'";
            $result_update = mysqli_query($con,$query_update) or die(mysqli_error($con));

        }

    ?>


        <div class="container">
            <div class="jumbotron">
                <h1>Your order is confirmed.</h1>
                <p>Thank you for shopping with us.</p>
                <p><a href="products.php">Click here</a> to purchase any other item.</p>
            </div>

        </div>


        <?php
            include 'includes/footer.php';
        ?>


    </body>
</html>
