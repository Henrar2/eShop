<?php
session_start();
    if(!isset($_SESSION['userid'])){
        header("Location: ../signin.php");
    }
    if(isset($_SESSION['userid'])):?>
        <!DOCTYPE html>
        <head>
          <title>Welcome to your Dashboard - <?php echo $_SESSION['username'];?></title>
            <!-- Responsive width -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
            <!-- Font Awesome 5 Icons -->
            <script src="https://kit.fontawesome.com/63b4046c38.js" crossorigin="anonymous"></script>
    
            <!-- Roboto Font -->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    
            <!-- My Stylesheet -->
            <link rel="stylesheet" href="../style.css">
            
            <!-- Scripts -->
    
        </head>
        <body>
            <header>
                <!-- Header -->
               <?php include ("../components/header.php"); ?>
            </header>
            <main>
                <h1>Hello <?php echo $_SESSION['username']; ?></h1>
                <a href="../include/signout.inc.php">Logout!</a>
            </main>
           <?php include ("../components/footer.php"); ?>
        </body>
    </html>
    <?php endif?>
    
