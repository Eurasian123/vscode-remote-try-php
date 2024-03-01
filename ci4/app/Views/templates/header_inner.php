<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= esc($pageTitle) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <?php
	$link = [
	'rel' => 'stylesheet',
	'href' => 'styles.css'
	];
	echo link_tag($link);
	$link2 = [ 
	'rel' => 'icon',
	'href' => '/images/icon.ico',
	'type' => 'image/x-icon'
	];
	echo link_tag($link2);
	?>
</head>

<body class="<?= esc($title) ?>">
<div class="topnav">
	<p id="date"></p>
	<nav class="navcont">
		<a href="home">Home</a>
		<div class="drop">
		<a href="javascript:void(0)" class="quicknav">Quick Navigation</a>
		<div class="dropcont">
			<a href="../limbo">Limbo</a>
			<a href="../lust">Lust</a>
			<a href="../gluttony">Gluttony</a>
			<a href="../greed">Greed</a>
			<a href="../wrath">Wrath</a>
			<a href="../heresy">Heresy</a>
			<a href="../violence">Violence</a>
		</div>
		</div>
		<a href="../contact">Contact</a>
	</nav>
</div>
<?php echo script_tag('js/genscript.js'); ?>