<?php
	$all_reviews= $reviews->findAll();
	$all_reviewslist= $all_reviews->fetchAll(); 

	if (isset($_GET['eid'])) 
	{
		$r_id=$_GET['eid'];
		$admin= $_SESSION['user'];
		$records=['r_id'=>$r_id, 'admin'=>$admin, 'completed'=>1];
		if($reviews->update($records, 'r_id'))
		{

			echo '
				<script>
				alert("Saved");
				document.location = "https://v.je/admin/index.php?page=reviews";
				</script>';
		}

	}
	if (isset($_GET['deid'])) {
	
		if($reviews->delete('r_id',$_GET['deid']))
	{
		echo '<script>
				alert("Deleted");
				document.location = "https://v.je/admin/index.php?page=reviews";
				</script>';
	}
	}

	$cri=[ 'all_reviewslist'=>$all_reviewslist];
	$title= 'Visitor reviews';

	$content=loadTemplate("../../view/admin/reviews_view.php",$cri);
 ?>