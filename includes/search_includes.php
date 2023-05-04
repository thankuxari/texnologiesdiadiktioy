<?php

    if(isset($_POST["submit"]))
    {
    
        $search = $_POST["submit"];
        
        include "../classes/dbh-forum_classes.php";
        include "../classes/search_classes.php";
        include "../classes/search-control_classes.php";

        $searchResult = new SearchContr($search);

        $searchResult = search();

        header("");
    }

?>