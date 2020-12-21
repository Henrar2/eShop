<?php
    if(!isset($_SESSION['username'])): ?>
    <header>
    <!-- Header -->
    <div class="mainheader">
        <a href=".."><img src="../imgs/eshop-logo.png" alt="eCommerce" class="brandlogo"></a>        
        <div class="search">
            <div class="searchfield">
                <span><i class="fas fa-search"></i></span><input class="searchtext" type="text" placeholder="Search...">
            </div>
        </div>  
    </div>
    <nav class="navbar" style="box-shadow:none;">
        <ul class="list">
            <li><a href="../items.php"><i class="fas fa-bars"></i><span>Items</span></a></li>
            <li><a href="../cart.php"><i class="fas fa-shopping-cart"></i><span>Cart</span></a></li>
            <li><a href="../contact.php"><i class="fas fa-envelope"></i><span>Contact</span></a></li>
            <li><a href="../signin.php"><i class="fas fa-user"></i><span>Login</span></a></li>
            </li>
        </ul>
    </nav> 
</header>
<?php endif ?>
<?php
    if(isset($_SESSION['username'])): ?>
    <header>
    <!-- Header -->
    <div class="mainheader">
        <a href=".."><img src="../imgs/eshop-logo.png" alt="eCommerce" class="brandlogo"></a>        
        <div class="search">
            <div class="searchfield">
                <span><i class="fas fa-search"></i></span><input class="searchtext" type="text" placeholder="Search...">
            </div>
        </div>  
    </div>
    <nav class="navbar" style="box-shadow:none;">
        <ul class="list">
            <li><a href="../items.php"><i class="fas fa-bars"></i><span>Items</span></a></li>
            <li><a href="../cart.php"><i class="fas fa-shopping-cart"></i><span>Cart</span></a></li>
            <li><a href="../contact.php"><i class="fas fa-envelope"></i><span>Contact</span></a></li>
            <li><a href="../include/signout.inc.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
            </li>
        </ul>
    </nav> 
</header>
<?php endif ?>
