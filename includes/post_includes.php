<?php

    if(isset($_POST["submit"]))
    {
        
        //Pernw ta data apo to post form
        $title = $_POST["title"];
        $content = $_POST["content"];
        $date = date("y-m-d");
    
        include "../classes/dbh-forum_classes.php";
        include "../classes/post_classes.php";
        include "../classes/post-control_classes.php";
       
        $post = new PostContr($title,$content,$date);

        $post -> createPost();

        echo $title,$content;
        
        header("location: ../forum.php?error=none");
    }
?>