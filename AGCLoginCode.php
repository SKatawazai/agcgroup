
<?php 
	
	session_start();

	include('include/connect.php');

	if(isset($_POST['submit']))
	{
		$Username = $_POST['username'];
		$Password = $_POST['password'];

		$selectuser = mysql_query("SELECT * FROM `users` , user_type WHERE (user_type.`ut_id` = users.`user_type`) and (username='$Username' and password='$Password')");

		$_SESSION['login'] = $Username;

		$_SESSION['type'] = $user_type;


		$count = mysql_num_rows($selectuser);

		if($count == 0)
		{
			header('location:AGCLogin.php?UnameORpass=error');
		}

		else if($count == 1)
		{
			$_SESSION['type'] = $user_type;

			$get = mysql_fetch_array($selectuser);

			$user_type = $get['type'];


			$_SESSION['type']=$user_type;

			header('location:dashboard.php');
		}

	}
?>