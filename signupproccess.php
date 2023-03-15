<?php
session_start();
?>

<?php
include 'config.php'; 

if(isset($_POST['Submit']))
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //$fname=$_POST['fname'];
        //$lname=$_POST['lname'];
        //$email=$_POST['email'];
        //$password=$_POST['password'];
        //$cpassword=$_POST['cpassword'];

        $name = $email = $password = $cpassword = "";
        $name_error = $email_error = $password_error = $cpassword_error = "";

        //if ($_SERVER["REQUEST_METHOD"] == "POST")
        if(isset($_POST['Submit']))
        { 
            $name = trim($_POST["name"]);
            if(empty($name)) 
            {
                $name_error = "Name is required.";
                echo "<script>alert('Name is required')</script>";
                header("Refresh:1; url=signupindex.php");
                            exit();
            }  
            
            $email = trim($_POST["email"]);
            if(empty($email)) 
            {
                $email_error = "Email is required.";
                echo "<script>alert('Email is required')</script>";
                header("Refresh:1; url=signupindex.php");
                            exit();
                
            }

            $password = trim($_POST["password"]);
            if(empty($password)) 
            {
                $password_error = "Password is required.";
                echo "<script>alert('Password is required.')</script>";
                header("Refresh:1; url=signupindex.php");
                            exit();
            }

            $cpassword = trim($_POST["cpassword"]);
            if(empty($cpassword)) 
            {
                $cpassword_error = "Rewrite Password.";
                echo "<script>alert('Rewrite Password.')</script>";
                header("Refresh:1; url=signupindex.php");
                            exit();
            }

            elseif(empty($name_error) && empty($email_error) && empty($password_error) && empty($cpassword_error))
                {
                    if(($password == $cpassword))
                    {
                        $sql = "INSERT INTO userdata(name,email,password,date)
                            VALUES('$name','$email','$password',current_timestamp())";
                        if(mysqli_query($conn,$sql))
                        {
                            echo "<script>alert('New record inserted')</script>";
                            header("Refresh:1; url=loginindex.php");
                            exit();
                        }
                        else
                        {
                            echo "Error :".mysqli_error($conn);
                        }
                        mysqli_close($conn);
                    
                    }
                    else
                    {
                        echo "<script>alert('Wrong,Type same password.')</script>";
                        header("Refresh:1; url=signupindex.php");
                            exit();
                    }
                }
            }
            else
            {
                echo "<script>alert('Fill up the fields.')</script>";
                header("Refresh:1; url=signupindex.php");
                            exit(); 
            }
    }
    
    
?>   