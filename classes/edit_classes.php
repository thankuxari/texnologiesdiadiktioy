<?php
    include('classes/dbh_classes.php');
    include('classes/login_classes.php');
    //File me to opoio trexw ta query gia to database

    class Edit extends Dbh{
        
        public function updateUser($name,$surname,$username,$password,$email)
        {
            
            session_start();
            //Insert to username kai to password sto database
            $query = $this->connect()->prepare("UPDATE users SET user_name =?,user_surname =?, user_username =?, user_password =? , user_email =? WHERE user_id = '$_SESSION[userid]' ;");
            
            $hashpassword = password_hash($password,PASSWORD_DEFAULT);

            if(!$query->execute(array($name,$surname,$username,$hashpassword,$email)))
            {
                $query = null;
                header("location: ../index.php?error=queryfailed");
                exit();
            }
            session_unset();
            session_destroy();
            session_start();
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