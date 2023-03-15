<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Admin Login</title>
    <link rel="stylesheet" href="admin_style.css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
</head>
<body> 
    <div class= "main2">
        <div class= "admin">
            <h2>ADMINS WEBPAGE</h2>
                <form id="register" method="post" action="admin_proccess.php">
                <label>EMAIL : </label>
                <br>
                <input type ="email" name="email" id="email" placeholder="Enter Your Email">
                <br><br>
                <label>PASSWORD : </label>
                <br>
                <input type ="password" name="password" id="password" placeholder="Enter Password">
                <br><br><br>
                <input type ="submit" name="login" value="Login" id="submit2">
                </form>
    
</body>
</html>