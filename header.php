<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo("name"); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="container">
			<h1><?php bloginfo("name"); ?></h1>
			<span><?php bloginfo("description"); ?></span>
		</div>
	</header>
	<nav class="main-nav">
		<div class="container">
			<?php 
				$args = array(
					'theme_location' => 'primary'
				);
			?>
			<?php 
				wp_nav_menu($args);
			?>
		</div>
	</nav>
