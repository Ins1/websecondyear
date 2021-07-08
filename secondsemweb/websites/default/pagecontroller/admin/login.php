<?php
if(isset($_POST['login'])) // check if the button which named delete_admin_id is pressed 
{
	$logger = $admins_staffs->find('username',$_POST['username']);
	if($logger->rowCount()>0)
	{
		$logger_row=$logger->fetch();
		if(password_verify($_POST['password'], $logger_row['password'])) // verifying the user name and password the user has entedded
		{
			$_SESSION['userId']=$logger_row['id'];
			$_SESSION['user']=$logger_row['username'];
			$_SESSION['type']=$logger_row['role'];
			$_SESSION['isLogged']=true;
			header('Location:https://v.je/admin/index.php?page=admin_home'); // when the code is executed successfully 

		}
		else
		{
			echo "Invalid Password";
		}
	}

	else
	{
		echo "User Not Found";
	}
}


 $title = "Log In- Kate's Kitchen"; // to set the title for the page
 $content = loadTemplate("../view/admin/login_view.php", []);  // to load the content into the layout (html)
?>