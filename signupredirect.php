<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Redirect</title>
    <link rel="stylesheet" href="signupredirect_style.css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
</head>
<body> 
    <div class= "main">
        <div class= "redirect1">
            <h2>Hello User,</h2>
            <br>
            <h3>We need your information as you shown your interest.<h3>
            <h3>Now,you will be redirected automatically.<h3>
            <h3>Please Wait...<h3>
        </div>
    </div>
    <?php
        header("Refresh:4; url=userdetails.php")
    ?>
</body>
</html>