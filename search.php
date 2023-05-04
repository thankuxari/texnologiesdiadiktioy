<?php

    include('header.php');

?>
<title>Αναζήτηση | Τεχνολογίες Διαδικτύου | Διαδικτυακή Κοινότητα </title>
<body style="background-color:<?php echo $background?>">
    
    <?php

    include('header-navbar.php');

    ?>
    <main class="search-main">
        <div class="search-wrapper" style="background:<?php echo $insidecolor ?>">
            <div class="search-container">
                <label for="search" style="color:<?php echo $color?>">Αναζήτηση</label>
                <div class="searchbar">
                    <form action="search.php" method="post">
                        <input type="search" id="searchBar" name="submit" placeholder="Αναζήτηση">
                        <button type="submit" name=""><img src="search-interface-symbol.png"></button>
                    </form>
                </div> 
                <?php
                
                    if(isset($_POST["submit"]))
                    {

                        $search = $_POST["submit"];

                        $DatabaseConnection = new PDO("mysql:host=localhost;dbname=forumdb","root","");
                        $query = $DatabaseConnection->prepare("SELECT * FROM post WHERE post_title LIKE '%$search%' OR post_content LIKE '%$search%' OR post_creator LIKE '%$search%' OR post_date LIKE '%$search%'");
                        $query->execute();
                        $searchResult = $query->fetchAll(PDO::FETCH_ASSOC);
                        $found = $query->rowCount();
                
                        if($found!=0)
                        {
                            foreach($searchResult as $result)
                            {
                ?>
                <div class="search-result-container">
                    <h1><a href="post-view.php?id=<?php echo $result['post_id']?>"><?php echo $result['post_title'];?></a></h1>
                    <div class="post-creator-date-result-container">
                        <h2>Posted By: <?php echo $result['post_creator'];?></h2>
                        <h2>Posted at: <?php echo $result['post_date']?></h2>
                    </div>
                </div>
                <?php
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </main>

    <script>
        $("#theme-Picker").on('change',function(){
            if($(this).is(':checked')) {
                $(this).attr('value', 'true');
                document.cookie = "theme=dark";
                location.reload();
            } else {
                $(this).attr('value', 'false');
                document.cookie = "theme=; Max-Age=0";
                location.reload();
            }
        });
    </script>
</body>
</html>