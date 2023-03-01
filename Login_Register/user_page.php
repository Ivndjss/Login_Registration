<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:index.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <!-- custom css file link -->

    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<div class="container">

    <div class="content">
        <h3>Hi, <span>Customer</span></h3>
        <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
        <p>to our website</p>
        <a href="index.php" class="btn">login</a>
        <a href="register_form.php" class="btn">register</a>
        <a href="logout.php" class="btn">logout</a>
    </div>
</div>
</body>
</html>