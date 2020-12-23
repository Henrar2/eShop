<?php
session_start();
if(isset($_SESSION['userid'])){
    header("Location: ../dashboard");
}
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
        <?php include ("./components/header.php")?>
    </header>
    <main style="margin:1rem 0;">
        <body>
            <div class="login-container" >
                <form class="login-box" method="POST" action="./include/signin.inc.php">
                    <h1>Login</h1>
                    <p id="message" class="info" style="color:rgb(173, 41, 41)";><?php if(isset($errors)) echo $errors;?></p>
                    <label for="username">Username or E-mail:</label>
                    <input type="text" id="username" name="username" placeholder="Username or E-mail"></input>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Password"></input>
                    <button id="login" class="btn-primary" type="submit" name="login">Login</button>
                    <a href="signup.php" id="signup" name="signup">Sign Up</a>
                    <a href="reset.php" id="reset" name="reset"style="padding-bottom: 2rem;">Forgot Password?</a>
                </form>
            </div>
        </body>
    </main>
    <?php include ("./components/footer.php"); ?>
</html>