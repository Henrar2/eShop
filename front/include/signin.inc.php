<?php
if(isset($_POST['login'])){
    require './config.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    if( empty($username) || empty($password) ){
        header("Location:../signin.php?error=emptyfields");
        exit();
    }else{
        $sql = "SELECT * FROM user WHERE username=? OR mail=?";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:../signin.php?error=sqlerror");
            exit();
        }
        else{

            mysqli_stmt_bind_param($stmt,"ss",strtolower($username),strtolower($username));
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)){
                $passwordCheck = password_verify($password,$row['passcode']);
                //Check if passwordCheck == false;
                if(!$passwordCheck){
                    header("Location:../signin.php?error=wrongpassword");
                    exit();
                }
                else{
                    session_start();
                    $_SESSION['userid'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['usermail'] = $row['mail'];
                    $_SESSION['accesslevel'] = $row['access_level'];
                    header("Location:../dashboard/");
                }
            }else{
                header("Location: ../signin.php?error=nouser");
                exit();
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}else{
    header("Location: ./../signin.php");
    exit();
}
?>