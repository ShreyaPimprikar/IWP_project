<?php
    if(!isset($_SESSION['email']))
    {
        session_start();
        session_unset();
        session_destroy();    
    }
    else
    {
        session_unset();
        session_destroy();
    }
    
    header('location:index.php');
?>