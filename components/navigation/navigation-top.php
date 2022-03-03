<?php
/*
	* Set arguements for menus
	*/
$arg_short = array(
	'theme_location' => 'short-top-menu',
	'depth' => 1,
	'menu_class' => "navbar-nav row",
	'container' => 'ul',
	'container_class' => "container_class",
	'add_li_class'  => 'col-12 col-md-2',
);

$arg_long = array(
	'theme_location' => 'full-top-menu',
	'depth' => 1,
	'menu_class' => "navbar-nav",
	'container' => 'ul',
	'container_class' => "container_class"
);
?>

<nav id="nav_short-top-menu" class="navbar navbar navbar-expand-lg" role="navigation">
	<div id="navbarNav" class="col">
		<?php wp_nav_menu($arg_short); ?>
	</div>
</nav>



<div class="col-12 collapse navbar-collapse" id="navbarSupportedContent">
	<?php wp_nav_menu($arg_long); ?>
</div>



<!-- #site-navigation -->