<?php

    include('header.php');

?>
<title>Post | Τεχνολογίες Διαδικτύου | Διαδικτυακή Κοινότητα </title>
<body style="background-color:<?php echo $background?>">
    <?php

    include('header-navbar.php');

    ?>
    <main class="post-view-main">  
        <div class="post-view-wrapper" style="background:<?php echo $insidecolor;?>"> 
            <div class="post-view-container">
                <img src="blank-profile-picture-973460_960_720.webp">
                <?php
                    $id = $_GET['id'];
                    $conn = new PDO("mysql:host=localhost;dbname=forumdb","root","");
                    $query = "SELECT * FROM post WHERE post_id = $id";
                    $view = $conn->query($query);
                    foreach($view as $data)
                        {
                ?>
                <div class="text-view-container">
                    <h1><?php echo $data['post_title']?></h1>
                    <div class="user-date-container">
                        <h2>Created By:<?php echo $data['post_creator']?></h2>
                        <h2>Posted on:<?php echo $data['post_date']?></h2>
                    </div>
                    <p><?php echo $data['post_content']?></p>
                </div>
                <?php
                        }
                ?>
            </div>
            <form>
            <textarea class="replay" placeholder="Απάντηση(required)"></textarea>
            <div class="btn-container">
                <button class="btn" type="button" onclick="window.location.href='forum.php'">Πίσω</button>
                <?php 
                
                        if(isset($_SESSION["userud"]))
                        {
                ?>
                <input type="submit" name="submit" value="Σχολίασε">
                </form>
                <?php

                        }else{
                ?>
                <button class="new-notlogin-btn btn" onclick="window.location.href='login.php'">Login</button>
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