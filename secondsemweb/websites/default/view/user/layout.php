<?php
require '../db/connect.php';
$categoryQuery="SELECT name FROM category";
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title;?></title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
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
			<!-- Search Form -->
	
			<li><a href="https://v.je/index.php?page=home">Home</a></li>
			<li><a href="https://v.je/index.php?page=dishes">Menu</a> 
				<ul>
						<?php 
							$stmt1 = $pdo->query('SELECT id,name FROM category');
							$stmt1->execute();
							foreach ($stmt1 as $row1) {
								?>
								<li>
								<?php
						
								echo '<a href="https://v.je/index.php?page=category&cate_id='.$row1['id'].'">'.$row1['name'].'</a>';
								?>
								</li>
								<?php
							}
						?>
					</ul>
			</li>
			<li><a href="https://v.je/index.php?page=about">About Us</a></li>

			<li><a href="https://v.je/index.php?page=faq">FAQs</a></li>
			<?php if (isset($_SESSION['isLogged']) && ($_SESSION['isLogged']==true)) {
				echo '<li><a href="https://v.je/admin/index.php?page=admin_home">Admin Home</a></li>'; 
				echo '<li><a href="https://v.je/admin/index.php?page=logout">Log Out</a></li>'; 
			}else{
			echo '</li>
			 <li><a href="https://v.je/index.php?page=reservation">Booking</a>
				</li> <li><a href="https://v.je/index.php?page=login">Log In</a>'; }
			?>
		</ul>

	</nav>
<img src="../images/randombanner.php"/>
	
		<?php echo $content;?>

	<footer>
		&copy; Kate's Kitchen <?php echo Date('Y'); ?>
	</footer>
</body>
</html>

	
