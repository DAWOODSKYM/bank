<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">micro bank</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="customer.php">Register New Customer</a></li>
            <li><a href="users.php">View Users</a></li>
            <?php if ($_SESSION["type"]==1):?>
            <li><a href="register.php">Register New User</a></li>
            <?php endif;?>
            <li><a href="issue.php">Issue Loan</a></li>
            <li><a href="pending.php">Pending Loans</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

            <li><a href="#"><?=$_SESSION["names"]?></a></li>
            <li><a href="logout.php">log Out</a></li>
        </ul>
    </div>
</nav>