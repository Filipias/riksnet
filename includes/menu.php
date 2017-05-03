<?php if($_SESSION['id'] == 0){ ?>
	<li><a href="main.php"><span class="glyphicon glyphicon-log-in"> logga in</span></a></li>
<?php } ?>

<?php if($_SESSION['rank'] > 0){ ?>
	<li><a href="main.php"> Se ansökningar</a></li>
<?php } ?>

<?php if($_SESSION['rank'] > 0){ ?>
	<li><a href="handleAdmin.php"> Hantera admins</a></li>
<?php } ?>

<?php if($_SESSION['rank'] == 0 && $_SESSION['id'] > 0){ ?>
	<li><a href="status.php"> Se min ansökan</a></li>
<?php } ?>

<?php if($_SESSION['id'] > 0){ ?>
	<li><a href="./run/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logga ut</a></li>
<?php } ?>