<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="userdetails_style.css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
</head>
<body> 
    <div class= "main3">
        <div class= "udetails">
            <h2>USER DETAILS</h2>
                <form id="register" method="post" action="userdetailsproccess.php">
                <label>FIRST NAME : </label>
                <input type ="text" name="userfname" id="userfname" placeholder="Enter Your First Name">

                &nbsp;&nbsp;

                <label>LAST NAME : </label>
                <input type ="text" name="userlname" id="userlname" placeholder="Enter Your Last Name">
                <br><br>
                <label>ADDRESS : </label>
                <br>
                <input type ="text" name="useraddress" id="useraddress" placeholder="Enter Your Address">
                <br><br>    
                <label>PHONE NUMBER : </label>
                <input type ="int" name="userphone" id="userphone" placeholder="Enter Your Phone Number">

                &nbsp;&nbsp;

                <label>AGE : </label>
                <input type ="int" name="userage" id="userage" placeholder="Enter Your Age">
                <br><br>
                <label>WEIGHT : </label>
                <input type ="int" name="weight" id="weight" placeholder="Enter Your Weight">

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <label>HEIGHT : </label>
                <input type ="int" name="height" id="height" placeholder="Enter Your Height">
                <br><br>
                <input type ="submit" name="Submit3" value="SUBMIT" id="submit">
                </form>
                
</body>
</html>