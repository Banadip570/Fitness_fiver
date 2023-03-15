<?php
session_start();

if(isset($_SESSION['email']))
{
    session_destroy();
    echo "<script>alert('You have successfully logged out, User.')</script>";
    header("Refresh:1; url=index.php");
    exit();
}
else
{
    header("Refresh:1; url=index.php");
    exit();
}
?>