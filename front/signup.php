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

            <!-- Nunito Font -->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">   

            <!-- My Stylesheet -->
            <link rel="stylesheet" href="style.css">
            
    
    </head>
    <?php 
    if(isset($_GET['error'])){
        if($_GET['error']=='emptyfields'){
            $errors = "Please fill all the fields";
        }elseif($_GET['error']=='invalidmailandusername'){
            $errors = "Invalid email and username";
        }elseif($_GET['error']=='invalidusername'){
            $errors = "Etner a valid username";
        }elseif($_GET['error']=='invalidmail'){
            $errors = "Enter a valid email";
        }elseif($_GET['error']=='passwordcrit'){
            $errors = "Enter a valid password";
        }elseif($_GET['error']=='passwordmatch'){
            $errors = "Passwords do not match";
        }elseif($_GET['error']=='usertaken'){
            $errors = "User already exists";
        }elseif($_GET['error']=='sqlerror'){
            $errors = "You could not proccess you request.\nTry again later";
        }
    }
    ?>
        <!-- Header -->
        <?php include ("./components/header.php")?>

    <main style="margin:1rem 0;">
        <body>
            <div class="login-container" >
                <form class="login-box" method="POST" action="include/signup.inc.php">
                    <h1>Sign Up</h1>
                    <!-- TODO find a way to change this ugly thing below -->
                    <p id="message" class="info";><?php if(isset($errors)){echo $errors;}else{ ?><script>document.getElementById("message").style.backgroundColor="transparent"</script><?php }?></p>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Username" value="<?php if(isset($_GET['username'])) echo $_GET['username'];?>"></input>
                    <label for="username">E-mail:</label>
                    <input type="mail" id="mail" name="mail" placeholder="E-mail" value="<?php if(isset($_GET['mail'])) echo $_GET['mail'];?>"></input>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Password"></input>
                    <label for="rpasword">Repeat Password:</label>
                    <input type="password" id="rpassword" name="rpassword" placeholder="Repeat Password"></input>
                    <button id="signup" class="btn-primary" type="submit" name="signup">Sign Up</button>
                    <a href="signin.php">I already have an account</a>
                    <a href="reset.php" style="visibility:hidden;">Forgot Password?</a>
                </form>
            </div>
        </body>
    </main>
    <?php include ("./components/footer.php"); ?>
</html>