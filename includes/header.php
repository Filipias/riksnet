<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();
?>
<div class="sidebar">
    <a href="index.php">
        <img src="./images/riksnet_logo.png" alt="Riknet Logo" style="width:100%;height:10%;">
    </a>
    <a href="index.php">
        <p class="sidebar_links">Hem</p>
    </a>
    <a href="services.php">
        <p class="sidebar_links">Tjänster</p>
    </a>
	<a href="about.php">
        <p class="sidebar_links">Om oss</p>
    </a>
	<a href="contact.php">
        <p class="sidebar_links">Support</p>
    </a>

    <?php if($_SESSION['id'] == 0){ ?>
		<a href="main.php"><p class="sidebar_links">Kundportal</p></a>
	<?php } ?>

	<?php if($_SESSION['rank'] > 0){ ?>
		<a href="main.php"> <p class="sidebar_links">Se ansökningar</p></a>
	<?php } ?>

	<?php if($_SESSION['rank'] > 0){ ?>
		<a href="handleAdmin.php"><p class="sidebar_links">Hantera admins</p></a>
	<?php } ?>

	<?php if($_SESSION['rank'] == 0 && $_SESSION['id'] > 0){ ?>
		<a href="status.php"> <p class="sidebar_links">Se min ansökan</p></a>
	<?php } ?>

	<?php if($_SESSION['id'] > 0){ ?>
		<a href="./run/logout.php"><p class="sidebar_links">Logga ut</p></a>
	<?php } ?>
</div>
