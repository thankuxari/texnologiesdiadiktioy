<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" sizes="32x32" href="earth.png">
    <title>Φόρουμ | Τεχνολογίες Διαδικτύου | Διαδικτυακή Κοινότητα </title>
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
<body style="background-color:<?php echo $background?>">
    <header style="background-color:<?php echo $backgroundheader?>">
        <h1 class="main-title" style="color: <?php echo $color?>">Τεχνολογιες Διαδικτυου</h1>
        <nav>
        <ul class="main-nav">
            <li><a href="index.php"">Αρχικη</a></li>
            <li><a href="help.php">Βοηθεια</a></li>
            <li><a href="forum.php">Φορουμ</a></li>
            <li><a href="search.php">Αναζητηση</a></li>
        </ul>
        </nav>
        <div class="buttons-container">
        <button class="login-btn" id="loginButton" onclick="window.location.href='login.php'">Login</button>
        <input type="checkbox" id="theme-Picker" class="theme-btn" <?php if($_COOKIE["theme"]  == "dark") {echo "checked"; }?>>
        </div>
    </header>
    <main>
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