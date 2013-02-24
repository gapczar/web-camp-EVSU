<?php

require_once('lib/lib_index.php');

include('markup.php');

$markup=new markup();

$usr=new user($DB);
 if(isset($_POST['sign'])){
 	if($usr->isEmail($_POST['email'])){
 		$password=$_POST['password'];
 		$password1=$_POST['password1'];
 		if($usr->passwordMatched($password1,$password)){
		 	$usr->set_email($_POST['email']);
		 	$usr->set_username($_POST['username']);
		 	$usr->set_password($_POST['password']);
		 	$usr->register();
	 	}

 	}


 }


?>
<!Doctype html>
<html>
<head>
	<title>EVSU</title>
	<link rel="stylesheet" style="text/css" href="css/normalizer.css"/>
	<link rel="stylesheet" style="text/css" href="css/layout.css"/>
	<link rel="stylesheet" style="text/css" href="css/typo.css"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/my.js"></script>
</head>

<body>
	<div>
		<header>
			<h1 class="text-glow-large">EVSU</h1>
			<nav>
				<ul>
					<li><a class="text-glow-small" href="">Home</a></li>
					<li><a class="text-glow-small" href="">Vote</a></li>
					<li><a class="text-glow-small" href="">Profile</a></li>
					<li><a class="text-glow-small" href="">Log Out</a></li>
				</ul>
			</nav>
		</header>
		<section>
			<article>


			</article>


		</section>
		<aside>
				<article>
					<form action="" method="POST">
					<?php
<<<<<<< HEAD
						$markup->add_input('text','username','value','placeholder="username" required');
						$markup->add_input('email','email','value','placeholder="email@nnn.com" required');
						$markup->add_input('password','password','value','placeholder="password" required');
						$markup->add_input('password','password1','value','placeholder="confirm password" required');
						$markup->add_input('submit','sign','value="Save"');
=======
						$markup->add_input('text','username','','placeholder="username" required');
						$markup->add_input('email','email','','placeholder="email@nnn.com" required');
						$markup->add_input('password','password','','placeholder="password" required');
						$markup->add_input('password','password','','placeholder="confirm password" required');
						$markup->add_input('submit','login','value="Save"');
>>>>>>> 5d11956aa04be3a174946c607978b00663bb9afd
					?>
					</form>
				</article>
		</aside>
	</div>
</body>
</html>