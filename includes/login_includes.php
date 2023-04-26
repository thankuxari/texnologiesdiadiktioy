<?php

    /*SIGN_INCLUDE file me to opoio "mazevw" ta data gia na ta kanw handle
    argotera me ta classes ena Login System*/

    if(isset($_POST["submit"]))
    {
        
        //Pernw ta data apo to sign/login form
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