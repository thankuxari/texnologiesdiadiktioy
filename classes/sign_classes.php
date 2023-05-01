<?php
    include('classes/dbh_classes.php');
 
    //File me to opoio trexw ta query gia na ton kanw sign ton xristi sto database
    class Signup extends Dbh{
        public function setUser($name,$surname,$username,$password,$email)
        {
            //Insert ta stoxeia apo tin forma sto datebase
            $query = $this->connect()->prepare('INSERT INTO users (user_name,user_surname,user_username,user_password,user_email) VALUES (?,?,?,?,?)');
            
            $hashpassword = password_hash($password,PASSWORD_DEFAULT);

            //trexw to query stin periptwsi poy kanei fail to akironw
            if(!$query->execute(array($name,$surname,$username,$hashpassword,$email)))
            {
                $query = null;
                header("location: ../index.php?error=queryfailed");
                exit();
            }

            $query = null;

        }


        //function opoy ginete check ama yparxei o xristis(username h to email) sto datebase hdh
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
            //stin periptwsi poy vrethei esto kai ena row epistrefw oti yparxei hdh sto datebase
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