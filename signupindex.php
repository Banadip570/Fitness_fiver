<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Signup</title>
    <link rel="stylesheet" href="signupindex_style.css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
</head>
<body> 
    <div class= "main">
        <div class= "signup">
            <h2>SIGN UP THE WEBSITE</h2>
                <form id="register" method="post" action="signupproccess.php">
                <label>NAME : </label>
                <br>
                <input type ="text" name="name" id="name" placeholder="Enter Your Full Name">
                <br><br>
                <label>EMAIL : </label>
                <br>
                <input type ="email" name="email" id="email" placeholder="Enter Your Email">
                <br><br>
                <label>PASSWORD : </label>
                <br>
                <input type ="password" name="password" id="password" placeholder="Enter Password">
                <br><br>    
                <label>CONFIRM PASSWORD : </label>
                <br>
                <input type ="password" name="cpassword" id="cpassword" placeholder="Confirm Password">
                <br><br><br>
                <input type ="submit" name="Submit" value="SUBMIT" id="submit1">
                </form>

                <form id="register" method="post" action="loginindex.php">
                    <label> Existing User?? Login</label>
                    <input type ="submit" name="login" value="LOGIN" id="submit2">
                </form>
                
</body>
</html>