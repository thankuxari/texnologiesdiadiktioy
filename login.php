<?php

    include('header.php');

?>

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
    <main class="login-main">
        <div class="login-container" style="background-color:<?php echo $backgroundheader?>">
            <form action="includes/login_includes.php" method="post">
                <h1>Είσοδος</h1>
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="submit" value="Είσοδος">
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