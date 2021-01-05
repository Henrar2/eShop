<?php
session_start();
    if(!isset($_SESSION['userid'])){
        header("Location: ../signin.php");
    }elseif(isset($_SESSION['accesslevel']) && $_SESSION['accesslevel']!=1){
        header("Location:./users.php");
    }elseif($_SESSION['accesslevel']==1){?>
        <!DOCTYPE html>
        <head>
          <title>Welcome to your Dashboard - <?php echo $_SESSION['username']?></title>
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
            <link rel="stylesheet" href="../style.css">
            
            <!-- Scripts -->
            <script src="./js/navHandle.js"></script>
        </head>
        <body>

        <!-- Header -->
        <?php include ("../components/header.php"); ?>

            
    <main style="margin: 1rem 0 1rem 0;display: flex;flex-direction: row;height: 100%;min-height: 80vh;box-shadow: 1px 1px 2px 2px black;">
        <?php include ("../components/dashnav.php"); ?>
    <div class="mainbody" bis_skin_checked="1">
        <h1 style="text-align:center;">Add an Item</h1><br>
        <form class="items-form" method="POST" action="./include/items.inc.php">
            <span class="col">
                <label for="item-name">Name</label>
                <input type="text" name="item-name" class="item-name" id="item-name" placeholder="Name"></input>
            </span>
            <span class="col">
                <label for="item-desc">Description</label>
                <input type="text" name="item-desc" class="item-desc" id="item-desc" placeholder="Description" style="width:20rem;"></input>
            </span>
            <span class="col">
                <label for="item-price">Price</label>
                <input type="number" name="item-price" class="item-price" id="item-price" placeholder="Price"></input>
            </span>
            <span class="col">
                <label for="submit-item" style="visibility:hidden">Confirm</label>
                <button type="submit" id="submit-item" class="btn-primary" name="submit-item">Add Item</button>
            </span>
        </form>
        <table style="background:gray;">
            <ul>
                <tr>
                    <th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Image</th><th>Modify/Delete</th>
                </tr>
                    <?php
                        require ("./include/config.php");
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
                            <tr><td><?php echo $row['id']?></td><td><?php echo $row['name']?></td><td><?php echo $row['description']?></td><td><?php echo $row['price']?></td><td><img style="width:2rem;height:2rem;"src="<?php echo $row['imagepng']?>"></img></td><td><span><button class="btn-danger" type="button">Modify</button><button class="btn-info" type="button">Delete</button></span></td></tr>
                        <?php endwhile?>
                        <?php 
                            }
                        }?>

            </ul>
        </table> 
    </div>
            </main>
           <?php include ("../components/footer.php"); ?>
        </body>
    </html>
    <?php }else{

    }
    ?>