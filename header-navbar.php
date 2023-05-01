<header style="background:<?php echo $backgroundheader?>">
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
            <?php
                if(isset($_SESSION["userud"]))
                {
            ?>
                <buttton class="sign-btn" id="signButton" onclick="window.location.href='user-profile.php'"><?php echo $_SESSION["userud"];?></buttton>
                <button class="login-btn" id="loginButton" onclick="window.location.href='includes/logout_includes.php'">Logout</button>        
            <?php
                }
                else
                {
            ?>
                <button class="sign-btn" id="signButton" onclick="window.location.href='sign.php'">Sign in</button>
                <button class="login-btn" id="loginButton" onclick="window.location.href='login.php'">Login</button>
            <?php
                }
            ?>
            <input type="checkbox" id="theme-Picker" class="theme-btn" <?php if($_COOKIE["theme"]  == "dark") {echo "checked"; }?>>
        </div>
    </header>