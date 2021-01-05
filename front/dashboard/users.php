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

            <!-- Nunito Font -->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
    
            <!-- My Stylesheet -->
            <link rel="stylesheet" href="../style.css">
            
            <!-- Scripts -->
            <script src="./js/navHandle.js"></script>
        </head>
        <body>

        <!-- Header -->
        <?php include ("../components/header.php"); ?>

            
    <main style=" /*background-color:red;*/;margin: 1rem 0 1rem 0;display: flex;flex-direction: row;height: 100%;min-height: 80vh;box-shadow: 1px 1px 2px 2px black;">
        <?php include("../components/dashnav.php"); ?>
    <div class="mainbody" bis_skin_checked="1">
        <div class="maincontent" bis_skin_checked="1">
            <p>Hello <?php echo $_SESSION['username']?></p>
        </div>
        <div><?php include("./include/usercount.inc.php"); ?></div>
    </div>
            </main>
           <?php include ("../components/footer.php"); ?>
        </body>
    </html>
    <?php endif?>