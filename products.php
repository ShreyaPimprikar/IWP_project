<?php
    include 'includes/common.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
            include 'includes/links.php';
        ?>

        <title>Products</title>

        <style>
            .tab{
                margin-top: 50px;
            }
        </style>
    </head>

    <body style="background-color:Salmon">
        <?php
            include 'includes/header.php';
            include 'includes/check_if_added.php';
            $user_id = $_SESSION['user_id'];
            $email = $_SESSION['email'];
            $name = $_SESSION['name'];
        ?>


        <div class="container">
            <div class="jumbotron tab">
                <?php
                    echo "<h1><b>Welcome $name</b></h1>";
                    echo "<p>We have the best cosmetic products of all brands for you. No need to hunt arond, we have all in one place.</p>";
                ?>
            </div>
        </div>

        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="l1.jpg" alt="">
                        <div class="caption">
                            <h3>Huda</h3>
                            <p>Price: Rs. 2000</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="l2.jpg" alt="">
                        <div class="caption">
                            <h3>Lakme Matte</h3>
                            <p>Price: Rs. 1000</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="l3.jpeg" alt="">
                        <div class="caption">
                            <h3>M.A.C</h3>
                            <p>Price: Rs. 1050</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="l4.jpg" alt="">
                        <div class="caption">
                            <h3>Loreal Paris</h3>
                            <p>Price: Rs. 850</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="f1.jpg" alt="">
                        <div class="caption">
                            <h3>Maybelline Newyork Fit Me (220)</h3>
                            <p>Price: Rs. 750</p>
                            
                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="f2.jpg" alt="">
                        <div class="caption">
                            <h3>Becca (201)</h3>
                            <p>Price: Rs. 3300</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="f3.jpg" alt="">
                        <div class="caption">
                            <h3>L.A.Girl (1326)</h3>
                            <p>Price: Rs. 1250</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="f4.jpg" alt="">
                        <div class="caption">
                            <h3>Bodyshop (129)</h3>
                            <p>Price: Rs. 1300</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="bl1.jpeg" alt="">
                        <div class="caption">
                            <h3>M.A.C</h3>
                            <p>Price: Rs. 2900</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="bl2.jpeg" alt="">
                        <div class="caption">
                            <h3>Nykaa</h3>
                            <p>Price: Rs. 553</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="bl3.jpeg" alt="">
                        <div class="caption">
                            <h3>Colorbar</h3>
                            <p>Price: Rs. 621</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="bl4.jpeg" alt="">
                        <div class="caption">
                            <h3>Milani</h3>
                            <p>Price: Rs. 1420</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="b1.jpeg" alt="">
                        <div class="caption">
                            <h3>PAC</h3>
                            <p>Price: Rs. 685</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="b2.jpeg" alt="">
                        <div class="caption">
                            <h3>Vega</h3>
                            <p>Price: Rs. 155</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="b3.jpeg" alt="">
                        <div class="caption">
                            <h3>Bronson</h3>
                            <p>Price: Rs. 760</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="b4.jpeg" alt="">
                        <div class="caption">
                            <h3>Filone</h3>
                            <p>Price: Rs. 175</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>

                        </div>
                    </div>
                </div>
            </div>



            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="e1.jpeg" alt="">
                        <div class="caption">
                            <h3>Lakme</h3>
                            <p>Price: Rs. 420</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="e2.jpeg" alt="">
                        <div class="caption">
                            <h3>Nykaa</h3>
                            <p>Price: Rs. 549</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="e3.jpeg" alt="">
                        <div class="caption">
                            <h3>Colorbar</h3>
                            <p>Price: Rs. 641</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="e4.jpeg" alt="">
                        <div class="caption">
                            <h3>Swiss Beauty</h3>
                            <p>Price: Rs. 149</p>

                            <?php
                                if(!isset($_SESSION['email']))
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
                                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }  
                                }
                                        ?>

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