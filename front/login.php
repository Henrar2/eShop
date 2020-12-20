<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login to eShop</title>
            <!-- Responsive width -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
            <!-- Font Awesome 5 Icons -->
            <script src="https://kit.fontawesome.com/63b4046c38.js" crossorigin="anonymous"></script>
    
            <!-- Roboto Font -->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    
            <!-- My Stylesheet -->
            <link rel="stylesheet" href="style.css">
            
    
    </head>
    <header>
        <!-- Header -->
        <div class="mainheader">
            <a href="./index.html"><img src="./imgs/eshop-logo.png" alt="eCommerce" class="brandlogo"></a>        
            <div class="search">
                <div class="searchfield">
                    <span><i class="fas fa-search"></i></span><input class="searchtext" type="text" placeholder="Search...">
                </div>
            </div>  
        </div>
        <nav class="navbar">
            <ul class="list">
                <li><a href="items.html"><i class="fas fa-bars"></i><span>Items</span></a></li>
                <li><a href="login.html"><i class="fas fa-shopping-cart"></i><span>Login</span></a></li>
                <li><a href="cart.html"><i class="fas fa-user"></i><span>Cart</span></a></li>
                <li><a href="contact.html"><i class="fas fa-envelope"></i><span>Contact</span></a></li>
                </li>
            </ul>
        </nav> 
    </header>
    <main style="margin:1rem 0;">
        <body>
        <?php
            
            function strip_post($field){
                if(!isset($_POST[$field])) {
                    $_POST[$field]= '';
                }else{
                    $_POST[$field] = stripslashes($_POST[$field]);
                    $_POST[$field] = htmlspecialchars($_POST[$field]);
                    $_POST[$field] = trim($_POST[$field]);
                }
                return $_POST[$field];
            } 

            $errors = [];
            $message = '';

            if(isset($_POST['username']) && strlen(strip_post('username'))==0)$errors['username'] = "Username cannot be empty";
            else if(isset($_POST['username']) &&  strlen(strip_post('username'))<4) $errors['username'] = "Username must be at least 4 characters";
            if(isset($_POST['password']) && strlen(strip_post('password'))==0) $errors['password'] = "Password cannot be empty!";
            else if(isset($_POST['password']) && strlen(strip_post('password'))<4) $errors['password'] = "Password must be at least 4 characters";
            
        ?>
            <div class="login-container" >
                <form class="login-box" method="POST" action="">
                    <h1>Login</h1>
                    <p id="message"></p>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Username"></input>
                    <?php if(isset($errors['username'])): ?>
                    <p id="userinfo" class="info"><?php echo $errors['username']?></p>
                    <?php endif?>
                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password" placeholder="Password"></input>
                    <?php if(isset($errors['password'])): ?>
                    <p id="passwordinfo" class="info"><?php echo $errors['password']?><p>
                    <?php endif?>
                    <button id="login" class="btn-primary" type="submit">Login</button>
                </form>
            </div>
        </body>
    </main>
    <footer id="footer">
        <img src="" alt="">
    </footer>
</html>