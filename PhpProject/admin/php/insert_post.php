<?php

    $title = $_POST['title'];
    $seo = $_POST['seo'];
    $content = $_POST['content'];
    $category = $_POST['category']; //Example : 1 2 4 ..
    $autor = $_POST['author'];

    // $mysqli = new mysqli("localhost", "claudiu", "starcraft2", "blog");
    // $stmt = $mysqli->prepare("INSERT INTO post (title, seo_title, content, author) VALUES ('$title','$seo', '$content', '$author')");
    // $stmt->execute();
    
    $db = mysqli_connect("localhost", "claudiu", "starcraft2", "blog");
    $query = "INSERT INTO post (title, seo_title, content, author) VALUES ('$title', '$seo' , '$content' , '$autor')";
    mysqli_query($db, $query);
  
    $query = "SELECT id FROM post WHERE seo_title='$seo'";
    $result = mysqli_query($db, $query);

    $row = mysqli_fetch_array($result);
    echo "ID is :" . $row[0];

    $post_id = $row[0];
    $category_array = explode(" ", $category); //[1 2 4]

    foreach($category_array as $el) {
        $query = "INSERT INTO has_category (post, category) VALUES ('$post_id', '$el')";
        mysqli_query($db, $query);
    }

  
    header("Location: http://localhost/PhpProject/");
   
?>