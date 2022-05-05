<?php
    require 'includes/common.php';
    $oldpassword = $_POST['oldpassword'];
    $oldpassword = mysqli_real_escape_string($con,$oldpassword);
    $oldpassword = md5($oldpassword);

    $newpassword = $_POST['newpassword'];
    $newpassword = mysqli_real_escape_string($con,$newpassword);
    $newpassword = md5($newpassword);

    $newpasswordre = $_POST['newpasswordre'];
    $newpasswordre = mysqli_real_escape_string($con,$newpasswordre);
    $newpasswordre = md5($newpasswordre);

    $email = $_SESSION['email'];

    $query = "SELECT *FROM users WHERE email = '$email' AND password = '$oldpassword'";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    $rows = mysqli_num_rows($result);

    if($rows > 0 && $newpassword==$newpasswordre)
    {
        $success = "<span class='green'>Password Changed</span>";
        $query_update = "UPDATE users SET password  = '$newpassword' WHERE email = '$email'";
        $query_update_result = mysqli_query($con,$query_update) or die(mysqli_error($con));
        header("location:settings.php?m1=".$success);
    }

    else
    {
        $error = "<span class='red'>Invalid Credentials</span>";
        header("location:settings.php?m1=".$error);

    }
?>