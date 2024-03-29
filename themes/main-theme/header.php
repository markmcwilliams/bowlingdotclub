<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="site-header">
		<div class="row">
			<div class="columns">
				<h1><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'blogname' ); ?></a></h1>
				<p><?php bloginfo( 'blogdescription' ); ?></p>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
