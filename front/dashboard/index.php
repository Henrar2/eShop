<?php
session_start();
    if(!isset($_SESSION['userid'])){
        header("Location: ../signin.php");
    }elseif(isset($_SESSION['accesslevel']) && $_SESSION['accesslevel']!=1){
        header("Location:./users.php");
    }elseif($_SESSION['accesslevel']==1){?>
        <!DOCTYPE html>
        <head>
          <title>Welcome to your Dashboard - <?php echo $_SESSION['username']?></title>
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
            <script>
            function navHandle(){
                if(document.getElementById("dashbar").style.width=="10%"){
                    document.getElementById("dashbar").style.transition="400ms";
                    document.getElementById("dashbar").style.width="2.5%";
                    document.getElementById("text1").style.display="none";
                    document.getElementById("text2").style.display="none";
                    document.getElementById("text3").style.display="none";
                    document.getElementById("text4").style.display="none";
                }else{
                    document.getElementById("dashbar").style.transition="400ms";
                    document.getElementById("dashbar").style.width="10%";
                    document.getElementById("text1").style.display="inline";
                    document.getElementById("text2").style.display="inline";
                    document.getElementById("text3").style.display="inline";
                    document.getElementById("text4").style.display="inline";
                }
            }
            </script>
        </head>
        <body>

        <!-- Header -->
        <?php include ("../components/header.php"); ?>

            
    <main style=" /*background-color:red;*/;margin: 1rem 0 1rem 0;display: flex;flex-direction: row;height: 100%;min-height: 80vh;box-shadow: 1px 1px 2px 2px black;">
        <nav class="dashbar" id="dashbar" style=position:relative;>
            <label href="javascript:void(0);" class="closebtn" onclick="navHandle()"><i class="fa fa-bars"></i></label>
            <ul class="dashnav">
                <a href=""><i class="fas fa-chart-line"></i><span id="text1" class="text">Statistics</span></a>
                <a href=""><i class="fas fa-truck"></i></i><span id="text2" class="text">Orders</span></a>
                <a href=""><i class="fas fa-users"></i><span id="text3" class="text">Users</span></a>
                <a href="../include/signout.inc.php"><i class="fas fa-sign-out-alt"></i><span id="text4" class="text">Logout</span></a>
            </ul>
        </nav>
    <div class="mainbody" bis_skin_checked="1">
        <div class="maincontent" bis_skin_checked="1">
            <h1 style="margin:2rem 1rem 1rem 2rem">Hello <?php echo $_SESSION['username']; ?>!<br><br>Welcome to your Dashboard</h1>
            <div class="row" style="display:flex;flex-direction:row;flex-wrap:wrap;justify-content:space-around;gap:1rem;">
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
                <div class="card">This is a content</div>
            </div>
        </div></div>

            </main>
           <?php include ("../components/footer.php"); ?>
        </body>
    </html>
    <?php }else{

    }
    ?>