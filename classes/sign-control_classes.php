<?php

    class SignupContr extends Signup{

        private $name;
        private $surname;
        private $username;
        private $password;
        private $email;
    
        public function __construct($name,$surname,$username,$password,$email){
            
            //Kanw assign ta value poy moy edwse o xristis apo to form sta properties
            $this->name = $name;
            $this->surname = $surname;
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
    
        }

        public function signupUser()
        {
            //kalw tis function gia error checking prin kanw sign ton user 
            if($this->emptyInput() == false)
            {
                header("location: ../index.php?error=emptyInput");
                exit();
            }
            if($this->invalidUsername() == false)
            {
                header("location: ../index.php?error=invalidusername");
                exit();
            }
            if($this->invalidEmail() == false)
            {
                header("location: ../index.php?error=invalidemail");
                exit();
            }
            if($this->usernameTakenCheck() == false)
            {
                header("location: ../index.php?error=Username_emailtaken");
                exit();
            }

            $this->setUser($this->name,$this->surname,$this->username,$this->password,$this->email);

        }


        //Error handling gia adeio input 
        private function emptyInput()
        {

            $result = false;
            if(empty($this->name) || empty($this->surname) || empty($this->username) || empty($this->password) || empty($this->email))
            {
                $result = false;
            }else{
                $result = true;
            }

            return $result;
        }

        //Error handling gia ama to username einai min egkiro
        private function invalidUsername()
        {
            
            $result = false;
            if(!preg_match("/^[a-zA-Z0-9]*$/",$this->username))
            {
                $result = false;
            }else{
                $result = true;
            }

            return $result;

        }

        //Error handling gia email 
        private function invalidEmail()
        {
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
            {
                $result = false;
            }
            else{
                $result = true;
            }

            return $result;
            
        }

        //Error handling gia idio username h email
        private function usernameTakenCheck()
        {

            $result = false;
            if(!$this->checkUser($this->username, $this->email))
            {
                $result = false;
            }
            else
            {
                $result = true;
            }
            return $result;

        }
    }

?>