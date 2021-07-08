<?php
if (isset($_POST['add_review'])) {
			$entries=[
				'r_id'=>$_POST['r_id'],
				'name'=>$_POST['name'],
			'email'=>$_POST['email'],
			'rating'=>$_POST['rating'],
			'comment'=>$_POST['comment'],
			'id'=>$_POST['id']
		];

		$check = $reviews->insert($entries);
		if($check == true){
			echo '
				<script>
				alert("Submitted");
				document.location = "https://v.je/index.php?page=home";
				</script>';
		}else{
			echo '
				<script>
				alert("fail");
				</script>';
		}
}
 $title = "Add A Review";
 $content = loadTemplate("../view/user/review_view.php", []);
?>

		