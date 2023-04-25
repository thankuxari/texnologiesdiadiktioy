<?php

    /*SIGN_INCLUDE file me to opoio "mazevw" ta data gia na ta kanw handle
    argotera me ta classes ena Login System*/

    if(isset($_POST["submit"]))
    {
        
        //Pernw ta data apo to sign/login form
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
    
        include "../classes/dbh_classes.php";
        include "../classes/sign_classes.php";
        include "../classes/sign-control_classes.php";
        
        $signup = new SignupContr($name,$surname,$username,$password,$email);

        $signup -> signupUser();

        header("location: ../index.php?error=none");
    }
?>