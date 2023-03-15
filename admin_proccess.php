<?php
include 'config.php'; 

if(isset($_POST['email']))
    {
        $email=$_POST['email'];
        $password=$_POST['password']; 

        $sql = "Select * from admin where email = '$email' AND password = '$password'";
        $que=mysqli_query($conn,$sql);

        if(mysqli_num_rows($que)==1)
            {
                echo "<script>alert('You have successfully logged in, Admin.')</script>";
                header("Refresh:1; url=blank.php");
                exit();
            }
            else
            {
                echo "<script>alert('Wrong Email and Password')</script>";
                exit();
            }
       }
?>