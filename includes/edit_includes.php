<?php

    
    if(isset($_POST["submit"]))
    {
        
        //Pernw ta data apo to edit form
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        include "../classes/dbh_classes.php";
        include "../classes/edit_classes.php";
        include "../classes/edit-control_classes.php";
        
        $edit = new EditContr($name,$surname,$username,$password,$email);

        $edit -> editUser();

        header("location: ../user-profile.php?error=none");
    }
?>