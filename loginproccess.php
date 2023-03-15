<?php
session_start();
?> 

<?php
include 'config.php'; 

if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $password=$_POST['password']; 

        $sql = "Select * from userdata where email = '$email' AND password = '$password'";
        $que=mysqli_query($conn,$sql);

        $email_count = mysqli_num_rows($que);

        if($email_count==1)
            {
                $email_pass = mysqli_fetch_assoc($que);
                $db_pass = $email_pass['password'];
                $_SESSION['name'] = $email_pass['name'];
                echo "<script>alert('You have successfully logged in, User.')</script>";
                header("Refresh:1; url=userdetails.php");
                exit();
            }
            else
            {
                echo "<script>alert('Wrong Email and Password')</script>";
                header("Refresh:1; url=loginindex.php");
                exit();
            }
       }
?>   
