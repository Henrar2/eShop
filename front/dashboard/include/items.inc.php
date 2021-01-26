<?php 
    if(isset($_POST["submit-item"])){
        require ("config.php");

        $name = $_POST['item-name'];
        $desc = $_POST['item-desc'];
        $price = $_POST['item-price'];
        $quantity = $_POST['item-quantity'];
        

        if(empty($name)||empty($desc)||empty($price)||empty($quantity)){
            header("Location: ./../items.php?error=emptyfields&name=".$name."&desc=".$desc."&price=".$price."&quantity=".$quantity."&img=".$img);
            exit();
        }else{
            $sql = "INSERT INTO item (`name`,`description`,`price`,`quantity`,`img`) VALUES (?,?,?,?,?)";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:./../items.php?error=sqlerror");
                exit();
            }else{
                //img logic
                $target_dir = "./../../imgs/";
                $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check == false){
                    $uploadOk = 0;
                    header("Location:./../items.php?error=notanimg&name=".$name."&desc=".$desc."&price=".$price."&quantity=".$quantity);
                    exit();
                }else{
                    $uploadOk = 1;
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"){
                        $uploadOk = 0;
                        header("Location:./../items.php?error=wrongformat&name=".$name."&desc=".$desc."&price=".$price."&quantity=".$quantity);
                        exit();
                    }
                    if($_FILES['fileToUpload']['size']>500000){
                        $uploadOk = 0;
                        header("Location:./../items.php?error=toobig&name=".$name."&desc=".$desc."&price=".$price."&quantity=".$quantity);
                        exit();
                    }
                }
                if($uploadOk == 0){
                    header("Location:./../items.php?error=smthwrong&name=".$name."&desc=".$desc."&price=".$price."&quantity=".$quantity);
                }
                else{
                    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)){
                        mysqli_stmt_bind_param($stmt,"ssdis",$name,$desc,$price,$quantity,$_FILES['fileToUpload']['name']);
                        mysqli_stmt_execute($stmt);
                        header("Location:./../items.php?submit=success");
                   }else{
                       header("Location:./../items.php?error=");
                   }
                }  
            }    
        }
        mysqli_stmt_close($stmt);
        mysqli_close($con); 
    }else{
        header("Location:./../items.php");
    }
?>