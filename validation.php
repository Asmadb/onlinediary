<?php
	
	$error = "";
	if (array_key_exists("logout", $_GET))
	{
		unset($_SESSION);
		setcookie("id","",time() - 60*60);
		$_COOKIE["id"] = "";
	}else if(array_key_exists("id", $_SESSION) OR array_key_exists("id", $_COOKIE))
		{
			header("Location : loggedin.php");
		}
	if (array_key_exists("submit", $_POST))
	{
		include("connection.php");
		if (!$_POST['email'])
		{
			$error .= "An email address is required<br>";
		}
		if (!$_POST['password'])
		{
			$error .= "A password is required<br>";
		}
		if ($error != "")
		{
			$error = "<p>There were error(s) in your form:<p>" .$error;
		}else
		{
			
			if($_POST['signup'] == 1)
			{
				$query = "SELECT id FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
				$result = mysqli_query($link, $query);
					if (mysqli_num_rows($result) > 0) 
					{
						$error = "That email address is taken.";
					} else {
								$query = "INSERT INTO `users` (`id`,`email`, `password`,`diary`) VALUES (NULL, '".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."', '')";
								if (!mysqli_query($link, $query)) 
								{
									$error = "<p>Could not sign you up - please try again later.</p>";
								} else 
								{
									//$query = "UPDATE `users` SET `password` = '".md5(md5(mysqli_insert_id($link).$_POST['password']))."' WHERE id = '".mysqli_insert_id($link)."' LIMIT 1";
									 mysqli_query($link, $query);								
									$id = mysqli_insert_id($link);									
									$_SESSION['id'] = $id;
									if ($_POST["stayloggedin"] == '1')
									{
										setcookie("id", mysqli_insert_id($link), time() + 60*60*24*365);
									}
									header ("Location: Loggedin.php");
								}
							}	
			}else
		{
			$query = "SELECT * FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
            $result = mysqli_query($link, $query);
            $row = mysqli_fetch_array($result);
		    //print_r($row['password']);
			//$hashedPassword = md5(md5($row['id']).$_POST['password']);
			//print_r($hashedPassword);
            if (isset($row))
				{  
                        //if ($hashedPassword == $row['password']) {
					// $hashedPassword = md5(md5($row['id']).$_POST['password']);				
                        if ($row['password'] == $_POST['password']) 
							// if (password_verify($_POST['password'], $row['password']))
								//if ($_POST['password'] == $row['password'])
						{
                          $_SESSION['id'] = $row['id'];
                            if ($_POST['stayloggedin'] == '1') 
							{
                                setcookie("id", $row['id'], time() + 60*60*24*365);
                            } 
                          header("Location: loggedin.php");       
                        } else 
							{  
								$error = "That email/password combination could not be found.";  
							} 
							
				}  else 
						{  
						$error = "That email/password combination could not be found.";  
						}                    
        } 
		}
	}
	


?>
