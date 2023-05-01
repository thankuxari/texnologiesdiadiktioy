<?php

    include('header.php');

?>
<title>Αρχική | Τεχνολογίες Διαδικτύου | Διαδικτυακή Κοινότητα </title>
<body style="background:<?php echo $background?>">

    <?php

        include('header-navbar.php');

    ?>

    <main>
        <div class=search-container style="background-color: <?php echo $insidecolor?>">
            <label for="search" style="color:<?php echo $color?>">Αναζήτηση</label>
            <div class="searchbar">
                <input type="search" id="searchBar" placeholder="Αναζήτηση">
                <button type="submit"><img src="search-interface-symbol.png"></button>
            </div>        
        </div>
        <div class="accordion-container" style="background-color:<?php echo $insidecolor?>">
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