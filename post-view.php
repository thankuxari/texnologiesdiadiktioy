<?php

    include('header.php');

?>
<title>Post | Τεχνολογίες Διαδικτύου | Διαδικτυακή Κοινότητα </title>
<body style="background-color:<?php echo $background?>">
    <?php

    include('header-navbar.php');

    ?>
    <main class="post-view-main" style="background:<?php echo $insidecolor;?>">  
        <div class="post-view-wrapper"> 
            <div class="post-view-container">
                <?php
                    $id = $_GET['id'];
                    $conn = new PDO("mysql:host=localhost;dbname=forumdb","root","");
                    $query = "SELECT * FROM post WHERE post_id = $id";
                    $view = $conn->query($query);
                    foreach($view as $data)
                        {
                ?>
                    <h1><?php echo $data['post_title']?></h1>
                    <div class="user-date-container">
                        <h2>Created By:<?php echo $data['post_creator']?></h2>
                        <h3>Posted on:<?php echo $data['post_date']?></h3>
                    </div>
                    <p><?php echo $data['post_content']?></p>
                <?php
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