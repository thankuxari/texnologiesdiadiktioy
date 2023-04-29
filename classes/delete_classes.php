<?php 

    
    include('classes/dbh_classes.php');
    include('classes/login_classes.php');
    class Delete extends Dbh{

        public function deleteUser($name,$surname,$username,$password,$email)
        {
            
            session_start();
            //Insert to username kai to password sto database
            $query = $this->connect()->prepare("UPDATE users SET user_name =?,user_surname =?, user_username =?, user_password =? , user_email =? WHERE user_id = '$_SESSION[userid]' ;");
            

            if(!$query->execute(array($name,$surname,$username,$password,$email)))
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

    }

?>