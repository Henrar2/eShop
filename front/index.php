<?php
session_start();
?>
<!DOCTYPE html>
    <head>
      <title>Welcome to eShop</title>
        <!-- Responsive width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome 5 Icons -->
        <script src="https://kit.fontawesome.com/63b4046c38.js" crossorigin="anonymous"></script>

        <!-- Roboto Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

        <!-- My Stylesheet -->
        <link rel="stylesheet" href="style.css">
        
        <!-- Scripts -->

    </head>
    <body>
        <!-- Header -->
        <?php include ("./components/header.php"); ?>
        <main>
            <div class="container">
                <div class="featured">
                <?php include ("./include/items.php"); ?>
            </div>
        </main>
       <?php include ("./components/footer.php"); ?>
    </body>
</html>