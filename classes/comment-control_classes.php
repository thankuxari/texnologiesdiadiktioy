<?php

    class commentContr extends Comment{

        private $postid;

        private $comment;

        private $commentcreator;

        private $commentdate;
    
        public function __construct($postid,$comment,$commentcreator,$commentdate){
            
            $this->postid = $postid;
            $this->comment = $comment;
            $this->commentcreator = $commentcreator;
            $this->commentdate = $commentdate;
        }

        public function postComment()
        {
            if($this->emptyInput() == false)
            {
                header("location: ../index.php?error=emptyInput");
                exit();
            }
            
            $this->postReply($this->postid,$this->comment,$this->commentcreator,$this->commentdate);
        }


        //Error handling gia adeio input 
        private function emptyInput()
        {

            $result = false;
            if(empty($this->comment)){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }
    }

?>