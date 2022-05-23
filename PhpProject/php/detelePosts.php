<?php

    function deletePosts(){

        @include './config.php';
        if(isset($_GET['id'])){
            
            $id = $_GET['id'];
            mysqli_query($db, "DELETE FROM `post` WHERE `id`= $id");

        }
    }
?>