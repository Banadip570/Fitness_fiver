<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Redirect</title>
    <link rel="stylesheet" href="userredirect_style.css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
</head>
<body> 
    <div class= "main">
        <div class= "redirect2">
            <h2>Hello,<?php echo $_SESSION['name']; ?></h2>
            <br>
            <h3>Welcome to the fitness website.<h3>
            <h3>Now,you can access the data.<h3>
            <h3>Procceding to the main website...<h3>
        </div>
    </div>
    <?php
        header("Refresh:4; url=index2.php")
    ?>
</body>
</html>