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
	<div id="wrapper">
		<div id="banner-outer-wrapper">
			<div id="banner-inner-wrapper">
				<div id="banner">
					<h1 class="text-glow-large">EVSU</h1>
				</div>
			</div>
		</div>
		<div id="menu-outer-wrapper">
			<div id="menuu-inner-wrapper">
				<div id="menu">
					<ul>
						<li><a class="text-glow-small" href="">Home</a></li>
						<li><a class="text-glow-small" href="">Vote</a></li>
						<li><a class="text-glow-small" href="">Profile</a></li>
						<li><a class="text-glow-small" href="">Log Out</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="content-side-outer-wrapper">
			<div id="content-side-inner-wrapper">
				<div id="content-wrapper">
					<div id="content">
						<form action="" method="POST">
						<?php

							$markup->add_input('text','username','','placeholder="username" required');
							$markup->add_input('email','email','','placeholder="email@nnn.com" required');
							$markup->add_input('password','password1','','placeholder="password" required');
							$markup->add_input('password','password','','placeholder="confirm password" required');
							$markup->add_input('submit','login','value="Save"');
						?>
						</form>
					</div>
				</div>
				<div id="side-wrapper">
					<div id="side">
		
					</div>
				</div>
			</div>
		</div>
		<div id="footer-outer-wrapper">
			<div id="footer-inner-wrapper">
				<div id="footer">
				</div>
			</div>
		</div>
</div>
</body>
</html>