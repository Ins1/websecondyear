<main class="home">

	<div id="special_offer">
	<?php foreach ($updates as $offers_row) {?>
	<div class="photo">
		<a href="images/Specialoffer/<?php echo $offers_row['id'];?>.jpg">
			<img style="width: 100%; height:400px;" src="images/Specialoffer/<?php echo $offers_row['id'];?>.jpg" />
			</a>
	
	</div>

	<h2 class="offer_title">
	<a href="https://v.je/index.php?page=dishes">	<?php echo $offers_row['name'] ?></a>
		
	</h2>
	<div class="description">
		<?php echo $offers_row['description'] ?>
		<div class="post_date">
			<i>Posted On:<?php echo $offers_row['offer_starting'] ?></i>
		</div>
	</div>
	<?php } ?>
</div>
</main>