<?php

@include './config.php';
session_start();

if(!isset($_SESSION['admin_name'])){
    header('Location:http://localhost/PhpProject/login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="../admin_stylee.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h3>hi, <span>admin</span></h3>
            <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
            <p>this is an admin page</p>
            <div class="buttons">
                <a href="../../register.php" class="btn">Register</a>
                <a href="../../logout.php" class="btn">Logout</a>
                <a href="../insert_post.php" class="btn">Insert a blog</a>
                <a href="../../index.php" class="btn">Home</a>
            </div>
        </div>
    </div>
</body>
</html>