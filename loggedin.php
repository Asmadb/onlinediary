<?php
 session_start();
 $diarycontent = "";
 if (array_key_exists("id", $_COOKIE) && $_COOKIE['id'])
 {
	 $_SESSION['id'] = $_COOKIE['id'];
 }
 if (array_key_exists("id", $_SESSION))
 {
	 
	 include("connection.php");
	 $query = "SELECT `diary` FROM `users` WHERE id = '".mysqli_real_escape_string($link, $_SESSION['id'])."' LIMIT 1";
	 $row = mysqli_fetch_array(mysqli_query($link, $query));
	 $diarycontent = $row['diary'];
	 
 }else
 {
	 header("Location: index.php");
 }
?>
 <html>
 <head>
 <style>
 html { 
  background: url(cute.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#diary
{
	height:95%;
	width:95%;
	display: block;
	margin-top:30px;
    margin-left: auto;
    margin-right: auto;
	position:center;
	border: 5px solid green;
}
h2{
color: #C74977;
		font-style: italic;
		font-weight:bold;
}
h2{
	color: #C74977;
		font-style: italic;
		position:right;
	
}
 </style>
 </head>
 <body>
 <nav class="navbar navbar-light bg-faded navbar-fixed-top">
  <a class="navbar-brand">Secret Diary</a>
      <div style="float:right; margin-top:2px;">
      <a href ='index.php?logout=1'>
	  <button class="btn btn-primary" type="submit">Logout</button></a>
    </div>
    
</nav>

<div class="container-fluid">
<textarea id="diary" class="form-control"><?php echo $diarycontent; ?>
</textarea>
</div>
 
 <?php
 include("footer.php");

?>
 </body>
 </html>