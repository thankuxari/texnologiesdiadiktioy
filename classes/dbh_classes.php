<?php

    //File gia na kanw sindesi me to database logindb
    class Dbh{
        
        protected function connect()
        {

            try{
                $db_user = "root";
                $db_pass = "";
                $DatabaseConnection = new PDO('mysql:host=localhost;dbname=logindb',$db_user,$db_pass);
                $DatabaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $DatabaseConnection;
            }catch(PDOException $e){
                echo "Error!:" . $e->getMessage()."<br/>";
                die();
            }
        }
    }

?>