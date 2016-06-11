<?php
	// globally register site content to the ``$content` variable
	include( __DIR__ . '/../partials/site.php');
?>
<!DOCTYPE html>

<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

		<title>Nightown</title>

		<link rel="stylesheet" href="/dist/main.css">
		<script src="https://use.typekit.net/auk7bos.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

	</head>

	<body>

		<div class="header">
			<div class="social">
				<a href="<?= $global['social']['facebook']; ?>"></a>
				<a href="<?= $global['social']['twitter']; ?>"></a>
				<a href="<?= $global['social']['youtube']; ?>"></a>
				<a href="<?= $global['social']['patreon']; ?>"></a>
			</div>
			<div class="content">
				<img src="img/nightown.png">
				<div class="main-nav">
					<a href="#game">Game</a>
					<a href="#characters">Characters</a>
					<a href="#updates">Updates</a>
				</div>
			</div>
		</div>

		<div id="main">
