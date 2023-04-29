<?php

    include('header.php');

?>
<title>Επεξεργασία Προφίλ | Τεχνολογίες Διαδικτύου | Διαδικτυακή Κοινότητα </title>
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

    <main class="edit-user-main">
        <div class="edit-user-container">
            <h1 class="main-title">Επεξεργασία</h1>
            <form action="includes/edit_includes.php" method="post">
                <label for="name">Όνομα:</label>
                <input type="text" name="name" value="<?php echo $_SESSION["user_name"]?>">
                <label for="surname">Επώνυμο</label>
                <input type="text" name="surname" value="<?php echo $_SESSION["user_surname"]?>">
                <label for="username">Username:</label>
                <input type="text" name="username" value="<?php echo $_SESSION["userud"]?>">
                <label for="password">Password:</label>
                <input type="password" name="password" value="*****">
                <label for="email">Email:</label>
                <input for="text" name="email" value="<?php echo $_SESSION["user_email"]?>">
                <input type="submit" name="submit" value="Confirm">
            </form>
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
