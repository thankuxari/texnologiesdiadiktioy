<?php

    include('header.php');

?>
<title>Βοήθεια | Τεχνολογίες Διαδικτύου | Διαδικτυακή Κοινότητα </title>

<body style="background-color:<?php echo $background?>">
    <?php

    include('header-navbar.php');

    ?>
    <main class="help-main">
        <div class="help-wrapper" style="background:<?php echo $insidecolor?>">
            <div class="help-container">
                <h1 class="">Βοήθεια</h1>
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