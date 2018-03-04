<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <style type="text/css">
   body{
   
   background-image: url(cute.jpg);
   
	background-size: cover;

   }
	iframe {
  margin-top: 100px;
  margin-bottom: 30px;
  margin-right:750px;
  margin-left:650px;
  background-color:#D2E2E5;
  width:550px;
  height:700px;
  
  border-style: solid;
  border-color: #219F1D;
  <!-- background-image:url("bgi.jpg"); -->
  <!-- background-image:url("poem.jpg"); -->
  scroll: no;


  
} 
	
.sidenav {
    height: 50%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 200px;
    left: 100px;
	<!-- background-image:url("bgi.jpg"); -->
	background-color:transparent;
	border-style: solid;
	border-color: #219F1D;
	overflow-x: hidden;
    padding-top: 20px;
	padding-left:-9px;
	font-family: "Nunito",Helvetica,sans-serif;
	
}
.sidenav a {
    padding: 6px 6px 6px 20px; 
    text-decoration: none;
    font-size: 15px;
	display:block;
	font-family: sans-serif;
	font-style: italic;
	
	
}
hr { 
    display: block;
    margin-top: auto;
    margin-bottom: auto;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
} 

a:focus {
    color: #c74977;
	outline: thin dotted;
}
a:hover {
    color: #c74977;
}
a:active {
    color: #c74977;
} 

  </style>
 </head>
  <body>
    <?php include("navbar.php"); ?>

  <iframe name="poems" scroll="no" src="bestfriend.php">
  </iframe> 
   
<div class="sidenav">
 <a href="bestfriend.php" target="poems">Best Friend</a>
 <hr>
 <a href="lifeofacupcake.php" target="poems">The Life Of A Cupcake</a>
 <hr>
 <a href="nevergiveup.php" target="poems">Never Give Up</a>
 <hr>
 <a href="followmydreams.php" target="poems">I Follow My Dreams</a>
 <hr>
 <a href="friendship.php" target="poems">Friendship Is The Best Ship Of All</a>
 <hr>
 <a href="lazyteen.php" target="poems">The Daily Life Of A Lazy Teenager</a>
 <hr>
 <a href="christmas.php" target="poems">The Nightmare Before Christmas</a>
 <hr>
 <a href="friendsfornever.php" target="poems">Friends For Never</a>
 <hr>
 <a href="kingforaday.php" target="poems">King For A Day</a>
 <hr>
 <a href="mum.php" target="poems">My Mother, My Hero</a>
</div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>