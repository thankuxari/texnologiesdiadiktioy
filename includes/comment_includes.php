<?php
include('dbh-forum_classes.php');
if(isset($_POST["submit"]))
{
    
    session_start();
    $postid = $_SESSION["post_id"];
    $comment = $_POST["comment"];
    $commentcreator = $_SESSION["userud"];
    $commentdate = date("y-m-d");
    

    include "../classes/dbh-forum_classes.php";
    include "../classes/comment_classes.php";
    include "../classes/comment-control_classes.php";
    
    $comment = new commentContr($postid,$comment,$commentcreator,$commentdate);

    $comment -> postComment();

    header("location: ../forum.php?error=none");
}
?>