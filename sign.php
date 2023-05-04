<?php

    include('header.php');

?>
<title>Έγγραφη | Τεχνολογίες Διαδικτύου | Διαδικτυακή Κοινότητα </title>
<body style="background-color:<?php echo $background?>" class="login-body">
    <?php

    include('header-navbar.php');

    ?>
    
    <main class="sign-main">
        <div class=sign-container style="background-color:<?php echo $insidecolor?>">
            <form action="includes/sign_includes.php" method="post">
                <h1 style="color:<?php echo $color?>">Εγγραφή</h1>
                <label for="name">Όνομα:</label>
                <input type="text" name="name" placeholder="Όνομα">
                <label for="surname">Επώνυμο</label>
                <input type="text" name="surname" placeholder="Επώνυμο">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Username">
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password">
                <label for="email">Email:</label>
                <input for="text" name="email" placeholder="Email">
                <input type="submit" name="submit" value="Εγγραφή">
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