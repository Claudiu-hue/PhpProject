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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <title>Post a blog</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="../index.php" class="navbar-brand">BlogWeb</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                  
          
                    
                    <?php
                        
                        echo '<li class="nav-item">
                        <a href="register.php" class="nav-link">Register</a>
                    </li>';

                      
                        if(isset($_SESSION['admin_name'])){
                          echo '<li class="nav-item">
                        <a href="../logout.php" class="nav-link">Logout</a>
                        </li>';
                      }
                      else
                        if(isset($_SESSION['user_name'])){
                          echo '<li class="nav-item">
                          <a href="../logout.php" class="nav-link">Logout</a>
                          </li>';
                      }
                      else{

                        echo ' <li class="nav-item">
                        <a href="../login.php" class="nav-link">Login</a>
                        </li>';
                      } 
                    ?>
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex align-items-center justify-content-center" style="height:100vh;">
        <div class="content container bg-dark text-light">
            <div>
                <form action="http://localhost/PhpProject/admin/php/insert_post.php" method="POST" class="col-md-6">
                    <input type="hidden" name="author" value="1">
                    <div class="form-group row mt-5">
                        <label for="Email" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" id="Email">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="Name" class="col-sm-2 col-form-label">Seo Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="seo" class="form-control" id="Name">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="Subject" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <input type="text" name="category" class="form-control" id="Subject">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="Message" class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-10">
                            <textarea name="content" class="form-control" id="Message" cols="w-100 p-1" rows="15"> </textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-5">
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary fs-5 px-2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
</body>
</html>