<?php

    include('header.php');

?>
<title>Αναζήτηση | Τεχνολογίες Διαδικτύου | Διαδικτυακή Κοινότητα </title>
<body style="background-color:<?php echo $background?>">
    
    <?php

    include('header-navbar.php');

    ?>
    <main class="search-main">
        <div class="search-wrapper" style="background:<?php echo $insidecolor ?>">
            <div class="search-container">
                <label for="search" style="color:<?php echo $color?>">Αναζήτηση</label>
                <div class="searchbar">
                    <input type="search" id="searchBar" placeholder="Αναζήτηση">
                    <button type="submit"><img src="search-interface-symbol.png"></button>
                </div> 
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
</body>
</html>