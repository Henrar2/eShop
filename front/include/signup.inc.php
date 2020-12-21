<?php
if(isset($_POST['signup'])){


    require './config.php';

    $username = $_POST['username'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
    
    if(empty($username)||empty($mail)||empty($password)||empty($rpassword)){
        header("Location: ../signup.php?error=emptyfields&username=".$username."&mail=".$mail);
        exit();
    }elseif(!filter_var($mail,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-z0-9]{1,12}*$/",$username)){
        header("Location: ../signup.php?error=invalidmailandusername");
        exit();
    }elseif(!preg_match("/^[a-zA-z0-9]*$/",$username)){
        header("Location: ../signup.php?error=invalidusername&mail=".$mail);
        exit();
    }elseif(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidmail&username=".$username);
        exit();
    }elseif(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}*$/', $password)){
        header("Location:../signup.php?error=passwordcrit&username=".$username."&mail=".$mail);
        exit();
    }elseif(!$password === $rpassword){
        header("Location:../signup.php?error=passwordmatch&username=".$username."&mail=".$mail);
        exit();
    }else{
        $sql = "SELECT username FROM user WHERE username=?";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:../signup.php?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result = mysqli_stmt_num_rows($stmt);
            if($result>0){
                header("Location:../signup.php?error=usertaken&mail=".$mail);
                exit();
            }else{
                $sql = "INSERT INTO user (username,passcode,mail) VALUES (?,?,?)";
                $stmt = mysqli_stmt_init($con);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location:../signup.php?error=sqlerror");
                    exit();
                }else{
                    $hashedpassword = password_hash($password,PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt,"sss",$username,$hashedpassword,$mail);
                    mysqli_stmt_execute($stmt);
                    header("Location:../signin.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}else{
    header('Location:../signup.php');
}          
?>