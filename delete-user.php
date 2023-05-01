<?php

    include('header.php');

?>
<title>Προφίλ | Τεχνολογίες Διαδικτύου | Διαδικτυακή Κοινότητα </title>
<body style="background-color:<?php echo $background?>">
    
    <?php

        include('header-navbar.php');

    ?>
    <main class="delete-user-main">
       <div class="delete-user-container">
            <p>Είσαι σίγουρος/η πως θες να διαγράψεις τον λογαριασμό σου ?</p>
            <div class="btn-container">
                <form action="includes/delete_includes.php" method="post">
                    <input class="yes-btn btn" type="submit" name="submit" value="Ναί">
                </form>
                <button class="no-btn btn" name="no-btn" onclick="window.location.href='user-profile.php'">Όχι</button>
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