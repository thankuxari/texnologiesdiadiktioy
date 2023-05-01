<?php

    if(isset($_POST["submit"]))
    {
        //Dimioyrgw random data gia na ta kanw update sto database
        $name = substr(md5(rand()), 0, 7);
        $surname = substr(md5(rand()), 0, 7);
        $username = substr(md5(rand()), 0, 7);
        $password = substr(md5(rand()), 0, 7);
        $email = substr(md5(rand()), 0, 7);

        include "../classes/dbh_classes.php";
        include "../classes/delete_classes.php";
        include "../classes/delete-control_classes.php";

        $delete = new DeleteContr($name,$surname,$username,$password,$email);

        $delete -> replaceUser();

        header("location: ../user-profile.php?error=none");
    }
?>