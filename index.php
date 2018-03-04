
<?php 
session_start();
include("validation.php"); ?>

<?php include("header.php"); ?>


  <body>
    
	<div id="error"><?php if ($error!=""){ include("error.php"); } ?></div>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand"><b>Secret Diary</b></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="poems.php">Poems</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quotes.php">Quotes</a>
      <!-- </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" id="login">
      <input class="form-control mr-sm-2" type="email" name="email" placeholder="Your Email">
	  <input class="form-control mr-sm-2" type="password" name="password" placeholder="Password">
	  <input class="form-control mr-sm-2" type="checkbox" name="stayloggedin" value=1>
	  <input type="hidden" name="signup" value="0">
      <button class="btn btn-primary" type="submit" name="submit" value="login">Log In!</button>
    </form>
  </div>
</nav>
<div class="jumbotron" id="jumbotron">
  <h1 class="display-3">Secret Diary</h1>
  <p class="lead">Welcome to the world of your thoughts and imaginations!<p>
  <hr class="my-4">
  <p>Interested in accessing your diary no matter where you are? if yes then sign up !<p>
	<form class="form-inline" method="post" id="signup">
	<div class="input-group mb-2 mr-sm-2 mb-sm-0">
		<div class="input-group-addon">@</div>
			<input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
			<input type="password" class="form-control mb-2 mr-sm-2 mb-sm-0" id="password" name="password" placeholder="Password">
			<input type="checkbox" name="stayloggedin" value=1>
			<input type="hidden" name="signup" value="1">
	</div>
		<button type="submit" class="btn btn-primary" name="submit">Sign up!</button>
	</form>
</div>
<div id="container">
 <div id="video">
	<iframe width="500" height="250" src="https://www.youtube.com/embed/_5U93xYvvD4" frameborder="3" align="right" allowfullscreen></iframe>
 </div>
 <div id="text">
	<h2>What are you writing for?</h2>
	<p>Whether you’re looking for a tool to record your daily emotions and activities in a reflective journal,<br> keep track of milestones or even record your dreams in a dream journal, Secret Diary has you covered.</p>
	<p>Even when carefully kept, paper journals can be read by anyone who happens upon them. <br>Secret Diary keeps your journals safe so you can rest easy knowing that your entries are secure.</p>
	</p>
 </div>
 <p style="color:grey; font-size: 12px !important; text-align:center; padding-top:10px;">@Copyright Secret Diary Inc. 2017</p>
</div>
   <? php include("footer.php"); ?>