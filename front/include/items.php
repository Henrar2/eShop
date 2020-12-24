<?php
    require 'config.php';
    $sql = "SELECT * FROM item WHERE 1;";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "Could not load items";
    }
    else{
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($result->num_rows>0){
            while($row=mysqli_fetch_assoc($result)): ?>
                <div class="card">

                    <img class="card-img-top" src="<?php echo $row['imagepng']?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name'] ?></h5>
                        <p class="card-text"><?php echo $row['description'] ?></p>
                        <br>
                        <a href="#footer" class="btn btn-dark" >Προσθήκη στο καλάθι</a>
                    </div>
                </div>
            <?php endwhile?>
            <?php 
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($con);
?>