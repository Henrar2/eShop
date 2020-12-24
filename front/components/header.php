<?php
    if(!isset($_SESSION['username'])): ?>
    <!-- Header -->
    <header>
            <a href=".."><img src="../imgs/eshop-logo.png" alt="eCommerce" class="brandlogo"></a>
            <div class="mainheader" bis_skin_checked="1">
                <span><i class="fas fa-search" aria-hidden="true"></i><input class="searchtext" type="text" placeholder="Search..."></span>
            </div> 
            <nav class="navbar" style="box-shadow:none;">
                <ul class="list">
                    <li><a href="../items.php"><i class="fas fa-bars" aria-hidden="true"></i><span>Items</span></a></li>
                    <li><a href="../cart.php"><i class="fas fa-shopping-cart" aria-hidden="true"></i><span>Cart</span></a></li>
                    <li><a href="../contact.php"><i class="fas fa-envelope" aria-hidden="true"></i><span>Contact</span></a></li>
                    <!-- Make this as post method -->
                    <li><a href="../signin.php"><i class="fas fa-user" aria-hidden="true"></i><span>Login</span></a></li>  
                </ul>
            </nav>
    <!-- Header -->             
    </header>
<?php endif ?>
<?php
    if(isset($_SESSION['username'])): ?>
    <header>
            <a href=".."><img src="../imgs/eshop-logo.png" alt="eCommerce" class="brandlogo"></a>
            <div class="mainheader" bis_skin_checked="1">
                <span><i class="fas fa-search" aria-hidden="true"></i><input class="searchtext" type="text" placeholder="Search..."></span>
            </div> 
            <nav class="navbar" style="box-shadow:none;">
                <ul class="list">
                    <li><a href="../items.php"><i class="fas fa-bars" aria-hidden="true"></i><span>Items</span></a></li>
                    <li><a href="../cart.php"><i class="fas fa-shopping-cart" aria-hidden="true"></i><span>Cart</span></a></li>
                    <li><a href="../contact.php"><i class="fas fa-envelope" aria-hidden="true"></i><span>Contact</span></a></li>
                    <!-- Make this as post method -->
                    <li><a href="../dashboard"><i class="fas fa-user" aria-hidden="true"></i><span>Profile</span></a></li>  
                </ul>
            </nav>
    <!-- Header -->             
    </header>
<?php endif ?>
