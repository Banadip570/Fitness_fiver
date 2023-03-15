<?php
session_start();
?>

<?php
include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $userfname = $userlname = $useraddress = $userphone = $userage = $weight = $height = "";
        $userfname_error = $userlname_error = $useraddress_error = $userphone_error = $userage_error = $weight_error = $height_error = "";

        if(isset($_POST['Submit3']))
        {
            $userfname = trim($_POST["userfname"]);
            if(empty($userfname)) 
            {
                $userfname_error = "First name is required.";
                echo "<script>alert('First Name is required')</script>";
            }  

            $userlname = trim($_POST["userlname"]);
            if(empty($userlname)) 
            {
                $userlname_error = "Last name is required.";
                echo "<script>alert('Last Name is required')</script>";
            }  
            
            $useraddress = trim($_POST["useraddress"]);
            if(empty($useraddress)) 
            {
                $useraddress_error = "Address is required.";
                echo "<script>alert('Address is required')</script>";
            }

            $userphone = trim($_POST["userphone"]);
            if(empty($userphone)) 
            {
                $userphone_error = "Phone number is required.";
                echo "<script>alert('Phone number is required.')</script>";
            }

            $userage = ($_POST["userage"]);
            if(empty($userage)) 
            {
                $userage_error = "Age is required.";
                echo "<script>alert('Age is required.')</script>";
            }

            $weight = trim($_POST["weight"]);
            if(empty($weight)) 
            {
                $weight_error = "Weight is required for information.";
                echo "<script>alert('Weight is required for information.')</script>";
            }

            $height = trim($_POST["height"]);
            if(empty($height)) 
            {
                $height_error = "Height is required for information.";
                echo "<script>alert('Height is required for information.')</script>";
            }
            
            if(empty($userfname_error) && empty($userlname_error) && empty($useraddress_error) && empty($userphone_error) && empty($userage_error) && empty($weight_error) && empty($height_error))
            {
                    $sql1 = "INSERT INTO userinfo(userfname,userlname,useraddress,userphone,userage,weight,height,date)
                        VALUES('$userfname','$userlname','$useraddress','$userphone','$userage','$weight','$height',current_timestamp())";
                    if(mysqli_query($conn,$sql1))
                    {
                        echo "<script>alert('User Information inserted')</script>";
                        $code = rand(1,99999);
                        $uni_id = "FF_".$code."_".$last_id;
                        $query = "INSERT INTO userinfo SET uni_id = '".$uni_id."' where id = '".$last_id."'"; 
                    }
            }
            else
            {
                echo "Error :".mysqli_error($conn);
            }
            mysqli_close($conn);
            }
        }

    header("location: userredirect.php");
    exit();
    
?>   