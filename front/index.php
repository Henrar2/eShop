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
        <header>
            <!-- Header -->
           <?php include ("./components/header.php"); ?>
        </header>
        <main>
            <div class="container">
                <div class="featured">
                    <div class="card">
                        <img class="card-img-top" src="./imgs/ps5con.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">PlayStation 5 DualShock Controller</h5>
                          <p class="card-text">With addaptive triggers for immersive experience.</p>
                          <a href="#footer" class="btn btn-primary">Buy Now!</a>
                        </div>
                      </div>
                      <div class="card" >
                        <img class="card-img-top" src="./imgs/ps5con.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Buy Now!</a>
                        </div>
                      </div>
                      <div class="card">
                        <img class="card-img-top" src="./imgs/ps5con.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">PlayStation 5 DualShock Controller</h5>
                          <p class="card-text">With addaptive triggers for immersive experience.</p>
                          <a href="#footer" class="btn btn-primary">Buy Now!</a>
                        </div>
                      </div>
                      <div class="card" >
                        <img class="card-img-top" src="./imgs/ps5con.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Buy Now!</a>
                        </div>
                      </div>
                      <div class="card">
                        <img class="card-img-top" src="./imgs/ps5con.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">PlayStation 5 DualShock Controller</h5>
                          <p class="card-text">With addaptive triggers for immersive experience.</p>
                          <a href="#footer" class="btn btn-primary">Buy Now!</a>
                        </div>
                      </div>
                      <div class="card" >
                        <img class="card-img-top" src="./imgs/ps5con.png" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Buy Now!</a>
                        </div>
                      </div>
                </div>
        </main>
       <?php include ("./components/footer.php"); ?>
    </body>
</html>