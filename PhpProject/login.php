<?php
    @include 'config.php';
    session_start();
     
     if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_type = $_POST['user_type'];
        $query = "SELECT * FROM author WHERE email = '$email' AND password= '$password'";
        $result = mysqli_query($db, $query); // should be 1 row
        if(mysqli_num_rows($result) > 0){
            
            $row = mysqli_fetch_array($result);
            if($row['user_type'] == 'admin'){
                $_SESSION['admin_name'] = $row['name'];
                header('Location:http://localhost/PhpProject/admin/php/admin_page.php');
            }
            else
                if($row['user_type'] == 'user' || $row['user_type'] =='admin'){
                    $_SESSION['user_name'] = $row['name'];
                    header('Location:http://localhost/PhpProject/user/user_page.php');
            }
        }
        else
        {
            $error[] = 'Incorect email or password';
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">BlogWeb</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                  
                   
                    
                    <?php
                        
                        echo '<li class="nav-item">
                        <a href="register.php" class="nav-link">Register</a>
                    </li>';

                        
                        if(isset($_SESSION['admin_name'])){
                            echo '<li class="nav-item">
                            <a href="./admin/insert_post.php" class="nav-link">Insert a post</a>
                            </li>';
  
                            echo '<li class="nav-item">
                          <a href="logout.php" class="nav-link">Logout</a>
                          </li>';
                      }
                      else
                        if(isset($_SESSION['user_name'])){
                          echo '<li class="nav-item">
                          <a href="logout.php" class="nav-link">Logout</a>
                          </li>';
                      }
                      else{

                        echo ' <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                        </li>';
                      } 
                    ?>
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="login_container">
        <form action="" method="POST"  class="login_form" style="height:400px ;">

            <?php
                
                if(isset($error)) {
                    foreach($error as $error ) {
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };

            ?> 

            <div class="sub_login_container">
                <label for="username" id="username">Email:</label><br>
                <input type="text" id="input" name="email" required ><br>
                <label for="password" id="password">Password:</label><br>
                <input type="password" id="input" name="password"><br><br>
                <button type="submit" name="submit" id="submit">Submit</button>
                <p>dont have an account? <a href="register.php">register now</a></p>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>