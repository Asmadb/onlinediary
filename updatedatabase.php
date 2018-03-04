<?php
	session_start();
	if (array_key_exists("content", $_POST))
	{
		include("connection.php");
		// $query1 = "SELECT `id` FROM `users` WHERE `email` = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
		// $result = mysqli_query($link, $query1);
		// $row = mysqli_fetch_array($link,$result);
		// print_r($row);
		// $id = $row["id"];
		// $_SESSION['id'] = $id;
		// if(isset($_SESSION['id'])) {
		  // echo $_SESSION['id'];
		// } else { 
		  // echo "error."; 
		// }
		$query = "UPDATE `users` SET `diary` = '".mysqli_real_escape_string($link, $_POST['content'])."' WHERE id = '".mysqli_real_escape_string($link , $_SESSION['id'])."' LIMIT 1";
		mysqli_query($link, $query);
		
		// print_r($_SESSION['id']);
		// print_r($_SESSION['id']);
		// if (mysqli_query($link, $query))
		// {
			// echo "success";
		// }else
		// {
			// echo "fail";
		// }
		
	}
?>