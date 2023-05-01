<?php

    class LoginContr extends Login{

        private $username;
        private $password;

    
        public function __construct($username,$password){
            
            //Kanw assign ta value poy moy edwse o xristis apo to form sta properties
            $this->username = $username;
            $this->password = $password;
        }

        public function loginUser()
        {
            //error checking
            if($this->emptyInput() == false)
            {
                header("location: ../index.php?error=emptyInput");
                exit();
            }
            
            $this->getUser($this->username,$this->password);
        }


        //Error handling gia adeio input 
        private function emptyInput()
        {

            $result = false;
            if(empty($this->username) || empty($this->password))
            {
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }
    }
?>