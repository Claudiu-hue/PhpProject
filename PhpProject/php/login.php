<?php
    session_start();
     $db = mysqli_connect("localhost", "claudiu", "starcraft2", "blog");
     $email = $_POST['email'];
     $password = $_POST['password'];
     $query = "SELECT id FROM author WHERE email = '$email' AND password= '$password'";
     $result = mysqli_query($db, $query); // should be 1 row
    if(mysqli_num_rows($result) == 1){
        $_SESSION['author'] = mysqli_fetch_array($result)[0];
        header("Location: http://localhost/PhpProject/admin/insert_post.html");
    }else{
        header("Location: http://localhost/PhpProject/login.php?error=1");
    }


?>