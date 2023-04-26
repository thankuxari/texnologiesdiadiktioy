<?php
    include('classes/dbh_classes.php');
    //File me to opoio trexw ta query gia to database

    class Login extends Dbh{
        public function getUser($username,$password)
        {
            
            //"Psaxnw" to username kai to password sto database gia na kanw login

            $query = $this->connect()->prepare("SELECT user_password FROM users WHERE user_username = ? OR user_email = ? ;");

            if(!$query->execute(array($username,$password)))
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

            $hash = $query->fetchAll(PDO::FETCH_ASSOC);
            $passwordMatch = password_verify($password,$hash[0]["user_password"]);

            if($passwordMatch == false)
            {
                $query = null;
                header("location: ../index.php?error=wrongpassword");
                exit();
            }
            elseif($passwordMatch == true){
                $query = $this->connect()->prepare("SELECT * FROM users WHERE user_username = ? OR user_email = ? AND user_password = ?;");
            
                if(!$query->execute(array($username,$username,$password)))
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

                $user = $query->fetchAll(PDO::FETCH_ASSOC);

                session_start();
                $_SESSION["userid"] = $user[0]["user_id"];
                $_SESSION["userud"] = $user[0]["user_username"];

            }
            
            $query = null;

        }
    }

?>