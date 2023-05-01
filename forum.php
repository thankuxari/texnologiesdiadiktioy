<?php

    include('header.php');

?>
<title>Φόρουμ | Τεχνολογίες Διαδικτύου | Διαδικτυακή Κοινότητα </title>
<?php

    if($_COOKIE["theme"] == "dark") {
        $background = "#1A120B";
        $backgroundheader = "#3C2A21";
        $color = "white";
        $colornav = "#d2b593";
        $searchcolor = "#b09372";
    } else {
        $background = "#E5E5CB";
        $backgroundheader = "#D5CEA3";
    }

?>
<body style="background-color:<?php echo $background?>">
    <?php

    include('header-navbar.php');

    ?>
    <main class="forum-main">
        <div class="forum-wrapper">
            <div class="forum-container">
                <?php
                    if(isset($_SESSION["userud"]))
                    {
                ?>
                    <button class="new-btn btn" onclick="window.location.href='create-post.php'">New Post</button>
                    
                <?php
                    }
                    else
                    {
                ?>
                    <button class="new-notlogin-btn btn" onclick="window.location.href='login.php'">Login</button>
                <?php
                    }
                ?>

                <?php
                    $conn = new PDO("mysql:host=localhost;dbname=forumdb","root","");
                    $query = "SELECT * FROM post";
                    $view = $conn->query($query);
                ?>
                <table border="3" cellpading="5" cellspacing="5">
                    <tr>
                        <th>Title:</th>
                        <th>Creator:</th>
                        <th>Date:</th>
                    </tr>
                <?php
                
                    foreach($view as $data)
                    {
                ?>
                <tr>
                    <td><?php echo $data['post_title'];?></td>
                    <td><?php echo $data['post_creator'];?></td>
                    <td><?php echo $data['post_date'];?></td>
                </tr>
                <?php
                    }
                ?>
                </table>
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
