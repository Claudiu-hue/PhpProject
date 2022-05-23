<?php

    $title = $_POST['title'];
    $seo = $_POST['seo'];
    $content = $_POST['content'];

    // $mysqli = new mysqli("localhost", "claudiu", "starcraft2", "blog");
    // $stmt = $mysqli->prepare("INSERT INTO post (title, seo_title, content, author) VALUES ('$title','$seo', '$content', '$author')");
    // $stmt->execute();
    
    $db = mysqli_connect("localhost", "claudiu", "starcraft2", "blog");
    $query = "INSERT INTO post (title, seo_title, content) VALUES ('$title', '$seo' , '$content')";
    mysqli_query($db, $query);
  
   
    

  
    header("Location: http://localhost/PhpProject/");
   
?>