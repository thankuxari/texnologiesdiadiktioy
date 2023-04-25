<?php
    include('classes/dbh_classes.php');
    //File me to opoio trexw ta query gia to database

    class Signup extends Dbh{
        public function setUser($name,$surname,$username,$password,$email)
        {
            

            //Insert to username kai to password sto database


            $query = $this->connect()->prepare('INSERT INTO users (user_name,user_surname,user_username,user_password,user_email) VALUES (?,?,?,?,?)');
            
            $hashpassword = password_hash($password,PASSWORD_DEFAULT);

            if(!$query->execute(array($name,$surname,$username,$hashpassword,$email)))
            {
                $query = null;
                header("location: ../index.php?error=queryfailed");
                exit();
            }

            $query = null;
        }

        public function checkUser($username,$email)
        {

            $this->connect()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = $this->connect()->prepare("SELECT user_username FROM users WHERE user_username = ? OR user_email = ?;");

            if(!$query->execute(array($username,$email))){
                $query = null;
                header("location: ../index.php?error=queryfailed");
                exit();
            }

            $resultChecker = false;
            if($query->rowCount() > 0){
                $resultChecker = false;
            }
            else{
                $resultChecker = true;
            }
            return $resultChecker;
        }

    }

?>