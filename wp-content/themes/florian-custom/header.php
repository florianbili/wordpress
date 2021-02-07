<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package florian_Custom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open('padding-menu'); ?>
<div id="page" class="site">
	
	<nav class="navbar fixed-top navbar-expand-lg navbar-florian">
	<div class="container">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
		<?php
		$items = wp_get_nav_menu_items(
			get_nav_menu_locations("main-menu")["main-menu"]
		);
		foreach($items as $menuItem) :
		?>
			<li class="nav-item">
			<a class="nav-link" aria-current="page" href=" <?= $menuItem->url ?>"><?= $menuItem->title; ?></a>
			</li>
			<?php endforeach; ?>
		</ul>
		<form class="d-flex">
			<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success" type="submit">Search</button>
		</form>
		</div>
	</div>
	</nav>

	
		<section class="header-logo">
		<?php the_custom_logo(); ?>
		</section>


	
