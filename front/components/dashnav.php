<?php
if(isset($_SESSION['username'])) : ?>
    <nav class="dashbar" id="dashbar" style=position:relative;>
        <ul class="dashnav" id="dashnav">
            <a href="javascript:void(0);" class="closebtn" onclick="navHandle()"><i class="fa fa-bars"></i></a>
            <a href="./"><i class="fas fa-chart-line"></i><span id="text1" class="text">Statistics</span></a>
            <a href=""><i class="fas fa-truck"></i></i><span id="text2" class="text">Orders</span></a>
            <a href="additems.php"><i class="fas fa-plus"></i></i><span id="text3" class="text">Add Items</span></a>
            <a href="users.php"><i class="fas fa-users"></i><span id="text4" class="text">Users</span></a>
            <a href="../include/signout.inc.php"><i class="fas fa-sign-out-alt"></i><span id="text5" class="text">Logout</span></a>
        </ul>
    </nav>
<?php endif?>