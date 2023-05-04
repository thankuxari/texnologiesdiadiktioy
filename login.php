<?php

    include('header.php');

?>
<title>Είσοδος | Τεχνολογίες Διαδικτύου | Διαδικτυακή Κοινότητα </title>
<body style="background-color:<?php echo $background?>">
    <?php
    
        include('header-navbar.php');

    ?>
    <main class="login-main">
        <div class="login-container" style="background-color:<?php echo $insidecolor?>">
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