<?php 
    if(isset($_POST["submit-item"])){
        require ("config.php");

        $name = $_POST['item-name'];
        $desc = $_POST['item-desc'];
        $price = $_POST['item-price'];
        
        if(empty($name)||empty($desc)||empty($price)){
            header("Location: ./../additems.php?error=emptyfields&name=".$name."&desc=".$desc."&price=".$price);
            exit();
        }elseif(var_dump(!is_nan($price))){
            header("Locaton: ../additems.php?error=NaN&name=".$name."&desc=".$desc);
            exit();
        }else{
            $sql = "INSERT INTO item (`name`,`description`,`price`) VALUES (?,?,?)";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:./../additems.php?error=sqlerror");
                exit();
            }else{
                mysqli_stmt_bind_param($stmt,"ssi",$name,$desc,$price);
                mysqli_stmt_execute($stmt);
                header("Location:./../additems.php?submit=success");
            }
            
        }
        mysqli_stmt_close($stmt);
        mysqli_close($con); 
    }else{
        header("Location:../additems.php");
    }
?>