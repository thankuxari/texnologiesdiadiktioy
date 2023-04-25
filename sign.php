<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" sizes="32x32" href="earth.png">
    <title>Έγγραφη | Τεχνολογίες Διαδικτύου | Διαδικτυακή Κοινότητα </title>
</head>

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

<body style="background-color:<?php echo $background?>" class="login-body">
    <header style="background-color:<?php echo $backgroundheader?>">
        <h1 class="main-title" style="color: <?php echo $color?>">Τεχνολογιες Διαδικτυου</h1>
        <nav>
        <ul class="main-nav">
            <li><a href="index.php">Αρχικη</a></li>
            <li><a href="help.php">Βοηθεια</a></li>
            <li><a href="forum.php">Φορουμ</a></li>
            <li><a href="search.php">Αναζητηση</a></li>
        </ul>
        </nav>
        <div class="buttons-container">
            <button class="sign-btn" id="signButton" onclick="window.location.href='sign.php'">Sign in</button>
            <button class="login-btn" id="loginButton" onclick="window.location.href='login.php'">Login</button>
            <input type="checkbox" id="theme-Picker" class="theme-btn" <?php if($_COOKIE["theme"]  == "dark") {echo "checked"; }?>>
        </div>
    </header>
    <main class="sign-main">
        <div class=sign-container style="background-color:<?php echo $backgroundheader?>">
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