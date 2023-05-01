<?php

    include('header.php');

?>
<title>Δημιουργία Ερώτησης | Τεχνολογίες Διαδικτύου | Διαδικτυακή Κοινότητα </title>
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
    <?php

    include('header-navbar.php');

    ?>
    <main class="create-post-main">
        <form action="includes/post_includes.php" method="post" class="create-post-form">
            <label for="post-title">Τίτλος</label>
            <input type="text" name="title" placeholder="Title">
            <label for="main-text">Κυριώς Κείμενο</label>
            <textarea placeholder="Text(required)" name="content"></textarea>
            <input type="submit" name="submit" value="Post">
        </form>
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
