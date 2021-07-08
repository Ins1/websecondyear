<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title;?></title>
		<link rel="stylesheet" type="text/css" href="../../css/styles.css">
	</head>
	<body>
	<header>
		<section>
			<aside>
				<h3>Opening times:</h3>
				<p>Sun-Thu: 12:00-22:00</p>
				<p>Fri-Sat: 12:00-23:30</p>
			</aside>
			<h1>Kate's Kitchen</h1>

		</section>
	</header>
	<nav>
		<ul>		
			<li><a href="https://v.je/index.php?page=home">Home</a></li>
			<li><a href="https://v.je/index.php?page=dishes">Our Dishes</a></li>
			<li><a href="https://v.je/index.php?page=about">About Us</a></li>
			<li><a href="https://v.je/index.php?page=faq">FAQs</a></li>
			<li><a href="https://v.je/admin/index.php?page=admin_home">Admin Home</a></li>

			<?php if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true) {
			?>
			<li><a href="https://v.je/admin/index.php?page=logout">Log Out</a></li>
		<?php } else { ?>
			<li><a href="https://v.je/index.php?page=login">Log in</a></li>
		<?php } ?>
		</ul>

	</nav>
<img src="../../images/randombanner.php"/>


<main class="sidebar">
	<?php if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true) { ?>
	<section class="left">
		<ul>
			<li><a href="https://v.je/admin/index.php?page=categories">Manage Categories</a></li>
			<li><a href="https://v.je/admin/index.php?page=dishes">Manage Dishes</a></li>
			<li><a href="https://v.je/admin/index.php?page=reviews">Manage Reviews</a></li>
			<li><a href="https://v.je/admin/index.php?page=specials">Special Offers</a></li>
			<li><a href="https://v.je/admin/index.php?page=reservation">Manage Reservation</a></li>

			<?php if ($_SESSION['type']=='super') {
			echo '<li><a href="https://v.je/admin/index.php?page=staff">Manage Staff</a></li>';
			} ?>
		</ul>
	</section>
<?php } ?>
		<?php echo $content; ?>

</main>

	

	<footer>
		&copy;  Kate's Kitchen <?php echo 	Date('Y') ; ?>
	</footer>
</body>
</html>

