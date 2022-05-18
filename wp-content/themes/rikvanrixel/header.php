<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-block-x fixed-top">
	<div class="container ps-5 pe-5">
		<a class="navbar-brand text-black text-bold" href="/">VAN RIXEL &reg;</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="main-menu">
            <?php
			wp_nav_menu(array(
				'theme_location' => 'topnav',
				'container' => false,
				'menu_class' => 'navbar',
				'fallback_cb' => '__return_false',
				'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
				'depth' => 2,
				'walker' => new bootstrap_5_wp_nav_menu_walker()
			));
			?>
		</div>
	</div>
</nav>

<main class="container-fluid mt-90">