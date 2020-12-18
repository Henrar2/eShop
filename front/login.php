<!DOCTYPE html>
<html>
    <head>
        <title>eShop-Login</title>
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
            <script src="./loginform.js"></script>
    
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
    <main>
        <body>
            <div class="login-container">
                <div class="login-box">
                    <h1>Login</h1>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Username" required  onfocusout="validateuser();"></input>
                    <p id="userinfo" class="info" style="visibility:hidden;">a</p>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Password" required  onfocusout="validatepass();"></input>
                    <p id="passwordinfo" class="info" style="color:red;visibility:hidden;">a<p>
                    <button id="login" class="btn-primary" type="submit" >Login</button>
                    </div>
            </div>
        </body>
    </main>
    <footer id="footer">
        <img src="" alt="">
    </footer>
</html>