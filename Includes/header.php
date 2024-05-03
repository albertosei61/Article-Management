<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Intro Web Development</title>
</head>
<body>

	<header>
		<h1 style="color: red; font-size: 20px;">My Blog</h1>
	</header>
		<nav>
			<ul>

			<!-- Need to use /~oseial75/assignment#/ because of Elvis user directories -->
			<li><a href="/~oseial75/assignment16/">Home</a></li>
			<?php if (Auth::isLoggedIn()): ?>
				<!-- Need to use /~oseial75/assignment#/ because of Elvis user directories -->
				<li><a href="/~oseial75/assignment16/admin/">Admin</a></li>
				<li><a href="/~oseial75/assignment16/logout.php">Log Out</a></li>	
			<?php else: ?>
				<!-- Need to use /~oseial75/assignment#/ because of Elvis user directories -->
				<li><a href="/~oseial75/assignment16/login.php">Log In</a></li>

			<?php endif; ?>
				

			</ul>

		</nav>
	
	<main>