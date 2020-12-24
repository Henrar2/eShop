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

        <!-- Header -->
        <?php include ("../components/header.php"); ?>

            
    <main style="/* background-color:red; */margin: 1rem 0 1rem 0;display: flex;flex-direction: row;height: 100%;min-height: 80vh;box-shadow: 1px 1px 2px 2px black;">
     <nav class="dash-nav" style="/* height:100%; */display: flex;/* position: absolute; */float:left;flex-direction: column;gap: 2rem;align-items: center;list-style:none;padding:1rem 1rem 0 1rem;background-color: rosybrown;width: 20%;">
            <div>
                <h1>Hello <?php echo $_SESSION['username']; ?></h1>
                <a href="../include/signout.inc.php">Logout!</a> 
            </div>
                <ul class="list" style=""> 
                    <ul class="listitem" style=""><a href="#">News</a>
                        <li style="padding: 8px 1px;">asd</li>
                        <li style="padding: 8px 1px;">asd</li>
                        <li style="padding: 8px 1px;">asd</li>
                        <li style="padding: 8px 1px;">asd</li>
                    </ul>
                    <li class="listitem" style="padding: 8px 1px;"><a href="#">Sales</a></li>
                    <li class="listitem" style="padding: 8px 1px;"><a href="#">Items</a></li>  
                </ul>
            </nav>
    <div class="mainbody" bis_skin_checked="1" style="
    display: flex;
    background: black;
    width: 80%;
    float: left;
    margin: 1rem 1rem 1rem 1rem;
    box-shadow: 0 0 5px 1px black;
    height: 80vh;
    -webkit-scrollbar {;
}

/* Track */
::
    -webkit-scrollbar-track {;

}
 
/* Handle */
::
    -webkit-scrollbar-thumb {;


}

/* Handle on hover */
::
    -webkit-scrollbar-thumb:hover {
  background: #3676e8; 
};
">
<div class="maincontent" bis_skin_checked="1" style="
    height: 500vh;
    background: green;
">
<ul>
    <li>asdasdasdasd</li>
    <li>asdasdasdasd</li>
    </ul>
</div></div>

            </main>
           <?php include ("../components/footer.php"); ?>
        </body>
    </html>
    <?php endif?>
    
