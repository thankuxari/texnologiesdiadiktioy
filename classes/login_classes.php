<?php
    include('classes/dbh_classes.php');
    //File me to opoio trexw ta query gia to database

    class Login extends Dbh{
        public function getUser($username,$password)
        {
            
            //"Psaxnw" to username kai to password sto database gia na kanw login

            $query = $this->connect()->prepare('SELECT user_username FROM users WHERE user_username = ?');

            if(!$query->execute(array($query,$password)))
            {
                $query = null;
                header("location: ../index.php?error=queryloginfailed");
                exit();
            }

            if($query->rowCount() == 0)
            {
                $query = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }
        }
    }

?>