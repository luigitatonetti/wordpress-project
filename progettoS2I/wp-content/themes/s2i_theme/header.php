<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<script src="https://kit.fontawesome.com/541cd24fd4.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead">

	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<a class="navbar-brand ps-4" href="#">Sartoria Rossi</a>
		<button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<div class=" align-items-center">
				<?php
				wp_nav_menu(
					array(
						'menu'              => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_id'      => 'navbarNav',
						'container_class'   => 'navbar-collapse collapse',
						'menu_class'        => 'nav navbar-nav px-4',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker()
					)
				);
				?>
			</div>
		</div>
	</nav>
</header>

<div id="main-content">