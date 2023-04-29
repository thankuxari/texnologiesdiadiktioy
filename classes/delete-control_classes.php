<?php

    //File gia na kanw control to database
    class DeleteContr extends Delete{

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

        public function replaceUser()
        {
            $this->deleteUser($this->name,$this->surname,$this->username,$this->password,$this->email);
        }
    }

?>