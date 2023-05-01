<?php

    include('header.php');

?>
<title>Προφίλ | Τεχνολογίες Διαδικτύου | Διαδικτυακή Κοινότητα </title>
<body style="background-color:<?php echo $background?>">
    
    <?php

        include('header-navbar.php');

    ?>
    <main class="user-profile-main">
       <div class="profile-container" style="background:<?php echo $insidecolor?>">
            <h1 class="username-title"><?php echo $_SESSION["userud"]?></h1>
            <div class="name-surname-container">
                <div class="line">
                    <h2>Όνομα:</h2>
                    <p><?php echo $_SESSION["user_name"]?></p>
                </div>
                <div class="line">
                    <h2>Επίθετο:</h2>
                    <p><?php echo $_SESSION["user_surname"]?></p>
                </div>
            </div>
            <div class="email-container">
                <h2>Email:</h2>
                <p><?php echo $_SESSION["user_email"]?></p>
            </div>
            <div class="btn-container">
                <button class="edit-btn btn" onclick="window.location.href='edit-user.php?id=<?php echo $_SESSION['userid']?>'">Edit</button>
                <button class="delete-btn btn" onclick="window.location.href='delete-user.php'">Delete</button>
            </div>
        </div>
    </main>
    <footer>

    </footer>

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

    <script src="accordion.js"></script>

</body>
</html>