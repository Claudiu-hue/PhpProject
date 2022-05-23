<?php


function getMainPosts() {
    
    $db = mysqli_connect("localhost", "claudiu", "starcraft2", "blog");
    $query = "SELECT * FROM post ORDER BY date DESC LIMIT 20";
    $result = mysqli_query($db, $query);
    while($row = mysqli_fetch_array($result)){

        
        echo '
            <div class="blog-card">
                    <div class="blog-card-banner">
                        <img src="images/'.rand(1,10).'.png" alt="'.$row['title'].'" width="250" class="blog-banner-img">
                    </div>
                    <div class="blog-content-wrapper">
                        <button class="blog-topic text-tiny">'.$row['title'].'</button>

                        <h3>
                            <a href="#" class="h3">'.$row['title'].'</a>
                        </h3>

                        <p class="blog-text">'.$row['content'].'</p>

                        <p>'.$row['date'].'</p>
                       
                       <a href="./index.php?id='.$row['id'].'" style="padding:10px; border-radius:10px; color:#fff; background-color:#dc3545; border-color:#0d6efd; margin:10px;" class="btn">Delete</a>
                         
                    
                    </div>
            </div>
        ';


        

       


    }
    
    
}



?>