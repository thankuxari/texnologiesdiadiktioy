<?php
    include('classes/dbh_classes.php');
    include('classes/login_classes.php');
    
    class Comment extends Dbh_forum{
        
        public function postReply($postid,$comment,$commentcreator,$commentdate)
        {
            
            session_start();
            //Insert to title to content kai to date sto database
            $query = $this->connect()->prepare('INSERT INTO comment (comment_id,comment_content,comment_creator,comment_date) VALUES (?,?,?,?)');
            
            if(!$query->execute(array($postid,$comment,$commentcreator,$commentdate)))
            {
                $query = null;
                header("location: ../index.php?error=queryfailed");
                exit();
            }
            
            $query = null;
        }
    }

?>