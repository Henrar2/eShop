<?php
if(!isset($_SESSION['userid'])){
    header("Location: ../signin.php");
// }elseif(isset($_SESSION['accesslevel']) && $_SESSION['accesslevel']!=1){
//     header("Location:./users.php");
}elseif(isset($_SESSION['accesslevel']) && $_SESSION['accesslevel']==1){
    require '../include/config.php';
    $sql = "SELECT id,username,mail FROM user";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "Something went wrong";
    }else{
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($result->num_rows>0){ ?>
            <table id="users" class="utable">
                <tr><th>ID</th><th>Username</th><th>Email</th></tr>
            <?php
            while($row=mysqli_fetch_assoc($result)){ ?>
                <tr><td><?php echo $row['id'];?></td><td><?php echo $row['username'];?></td><td><?php echo $row['mail'];?></td></tr>
        <?php
            }
        ?></table>
        <?php
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
?>