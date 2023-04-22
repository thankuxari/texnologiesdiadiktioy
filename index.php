<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/gh/codeOpacity/op_icons@main/op_icons.all.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" sizes="32x32" href="earth.png">
    <title>Αρχική | Τεχνολογίες Διαδικτύου | Διαδικτυακή Κοινότητα </title>
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
        <div class=search-container style="background-color: <?php echo $searchcolor?>">
            <label for="search" style="color:<?php echo $color?>">Αναζήτηση</label>
            <div class="searchbar">
                <input type="search" id="searchBar" placeholder="Αναζήτηση">
                <button type="submit"><img src="search-interface-symbol.png"></button>
            </div>        
        </div>
        <div class="accordion-container" style="background-color:<?php echo $searchcolor?>">
            <div class="left-container">
                <div class="accordion">
                    <div class="accordion-header" id="accordion-header">
                        <h4 class="accordion-title">Σκοπός Ιστότοπου</h4>
                        <div class="icon-btn">
                            <i class="op-chevron-down"></i>
                        </div>
                    </div>
                    <div class="accordion-answer">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi totam dolore iure, quisquam consectetur cupiditate laborum porro fugit impedit quam pariatur, voluptates similique voluptatem voluptatum eligendi distinctio! Voluptatem, similique consequatur.
                        </p>
                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion-header">
                        <h4 class="accordion-title">Βασική Βοήθεια</h4>
                        <div class="icon-btn">
                            <i class="op-chevron-down"></i>
                        </div>
                        </div>
                    <div class="accordion-answer">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi totam dolore iure, quisquam consectetur cupiditate laborum porro fugit impedit quam pariatur, voluptates similique voluptatem voluptatum eligendi distinctio! Voluptatem, similique consequatur.
                        </p>
                    </div>
            </div>
            </div>
            <div class="right-container">
                <img src="5c5791f20a4bc8fcd71cd572806f570c.jpg">
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

    <script src="accordion.js"></script>
</body>
</html>