<?php

    //File gia na kanw control to database
    class PostContr extends Post{

        private $title;

        private $content;

        private $date;
    
        public function __construct($title,$content,$date){
            
            $this->title = $title;
            $this->content = $content;
            $this->date = $date;
        }

        public function createPost()
        {
            if($this->emptyInput() == false)
            {
                header("location: ../index.php?error=emptyInput");
                exit();
            }
            
            $this->postQuestion($this->title,$this->content,$this->date);
        }


        //Error handling gia adeio input 
        private function emptyInput()
        {

            $result = false;
            if(empty($this->title) || empty($this->content)){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }
    }

?>