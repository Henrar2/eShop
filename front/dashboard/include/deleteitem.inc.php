<?php
session_start();
if(!isset($_SESSION['userid'])){
    header("Location: ./../../signin.php");
}elseif(isset($_SESSION['accesslevel']) && $_SESSION['accesslevel']!=1){
    header("Location:./users.php");
}elseif($_SESSION['accesslevel']==1){
    $id=$_GET['id'];
    require ("./config.php");

    $sql = "SELECT * FROM item WHERE id=?;";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "Something went wrong in select con";
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,"i",$id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $result = mysqli_stmt_num_rows($stmt);
        if($result>0){
            $sql = "DELETE FROM item WHERE ID=?;";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                echo "Something went wrong in delete con!";
                exit();
            }else{
                mysqli_stmt_bind_param($stmt,"i",$id);
                mysqli_stmt_execute($stmt);
                header("Location:./../items.php?success=$id");
            }
        }else{ //Pointless. Just in case.
            header("./additems.php?error=Couldn't match id");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
?>
