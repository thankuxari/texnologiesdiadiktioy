<?php

    /*
        Sign_includes xrisimopoieite gia na sileksw ta dedomena apo tin forma kai na ta kanw pass
        sto sign_classes opoy to xrisimopoiw gia error checking kai na kalesw tin fuction gia eggrafi(setUser)
    */

    if(isset($_POST["submit"]))
    {
        
        //Pernw ta data apo to sign form
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