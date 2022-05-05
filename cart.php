<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email']))
    {
        header("location:login.php");
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <?php
            include 'includes/links.php';
        ?>


        <title>Cart</title>
       
        <style>
            .tab{
                margin-top: 100px;
            }
        </style>
    </head>

    <body style="background-color:Salmon">
        <?php
            include 'includes/header.php';
        ?>


        <div class="container">
            <table class="table table-striped tab" style="background-color:white">
                <tbody>
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <td></td>
                    </tr>

                    <?php
                        $user_id = $_SESSION['user_id'];
                        $select_query = "SELECT * FROM users_items INNER JOIN items ON users_items.item_id = items.pid WHERE user_id = '$user_id' AND status = 'Added to cart'";
                        $select_query_result = mysqli_query($con,$select_query) or die(mysqli_query_error($con));
                        if(mysqli_num_rows($select_query_result) == 0)
                        {
                            echo "<h4>Add items to the cart first!</h4>";
                        }
                        else
                        {
                            $id = '';
                            $sum = 0;
                            while($row = mysqli_fetch_array($select_query_result))
                            {
                                $sum += $row['price'];
                                //$id = $row['pid'].",";
                                echo "<tr><td>"."#".$row['pid']."</td><td>".$row['name']."</td><td>Rs. ".$row['price']."</td><td>
                                <a href='cart-remove.php?id={$row['pid']}&user_id={$user_id}' class= 'btn btn-primary remove_item_link'>Remove</a></td></tr>";
                            }

                            //$id = rtrim($id,",");
                            echo "<tr><td></td><td>Total</td><td>Rs. ".$sum."</td><td>
                            <a href='success.php' class='btn btn-primary'>Confirm Order</a></td></tr>";

                        }

                    ?>

                </tbody>
            </table>
        </div>



        <?php
            include 'includes/footer.php';
        ?>

    </body>
</html>