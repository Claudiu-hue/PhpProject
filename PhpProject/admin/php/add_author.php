<?php
    session_start();
     $db = mysqli_connect("localhost", "claudiu", "starcraft2", "blog");
     $email = $_POST['email'];
     $name = $_POST['name'];
     $password = $_POST['password'];
     $query = "INSERT INTO author (name, email, password) VALUES ('$name', '$email', '$password')";
     $result = mysqli_query($db, $query); // should be 1 row
     header("Location: http://localhost/PhpProject/");


?>