<?php

require_once('lib/lib_index.php');

include('markup.php');

$markup=new markup();



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
			<section>
				<article>
					<form action="" method="">
					<?php
						$markup->add_input('text','username','','placeholder="username" required');
						$markup->add_input('password','password','','placeholder="password" required');
						$markup->add_input('password','password','','placeholder="confirm password" required');
						$markup->add_input('submit','login','value="Save"');
					?>
					</form>
				</article>
			</section>

		</aside>
	</div>
</body>
</html>