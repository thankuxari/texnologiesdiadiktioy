<?php
    include('classes/dbh_classes.php');
    include('classes/login_classes.php');
    
    class Post extends Dbh_forum{
        
        public function postQuestion($title,$content,$date)
        {
            
            session_start();
            //Insert to title to content kai to date sto database
            $query = $this->connect()->prepare('INSERT INTO post (post_title,post_content,post_creator,post_date) VALUES (?,?,?,?)');
            
            if(!$query->execute(array($title,$content,$_SESSION['userud'],$date)))
            {
                $query = null;
                header("location: ../index.php?error=queryfailed");
                exit();
            }
            $query = null;
        }
    }

?>