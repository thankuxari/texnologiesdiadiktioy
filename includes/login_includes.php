<?php


    if(isset($_POST["submit"]))
    {
        
        //Pernw ta data apo to login form
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        include "../classes/dbh_classes.php";
        include "../classes/login_classes.php";
        include "../classes/login-control_classes.php";
        
        $login = new LoginContr($username,$password);

        $login -> loginUser();

        header("location: ../index.php?error=none");
    }
?>