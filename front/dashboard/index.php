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

<?php 
    function getCount($table,$id){
        if(!isset($_SESSION['userid'])){
            header("Location: ../signin.php");
        }elseif(isset($_SESSION['accesslevel']) && $_SESSION['accesslevel']==1){
            require '../include/config.php';
            $sql = "SELECT count($id) as count FROM $table WHERE 1";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:./index.php?error=sqlError");
            }else{
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $row = mysqli_fetch_assoc($result);
                echo $row['count'] ;
                }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($con);
    }
?>
            
    <main style="margin: 1rem 0 1rem 0;display: flex;flex-direction: row;height: 100%;min-height: 80vh;box-shadow: 1px 1px 2px 2px black;">
        <?php include ("../components/dashnav.php"); ?>
    <div class="mainbody" bis_skin_checked="1">
        <h1 style="margin:2rem 1rem 1rem 2rem">Hello <?php echo $_SESSION['username']; ?>!<br><br>Welcome to your Dashboard</h1>
        <div class="row">
            <div class="item row">Users Count:<br><br><?php getcount('user','id');?></div>
            <div class="item row">Items Count:<br><br><?php getcount('item','id');?></div>
    </div>
            </main>
           <?php include ("../components/footer.php"); ?>
        </body>
    </html>
    <?php }else{

    }
    ?>