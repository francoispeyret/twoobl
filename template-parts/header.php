<div id="playground">

	<header id="site-header" class="site-header" role="banner">
		<div class="container">

			<div class="row align-items-center">

				<div id="header-logo" class="col-md-3">
					<a class="brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo.png" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
					</a>
				</div>

				<div id="site-desc" class="col-md">
					<p>
						<?php echo get_bloginfo('description'); ?>
					</p>
				</div>

				<div id="search-top" class="col-md d-print-none"><?php get_search_form(); ?></div>

			</div>

		</div>

		<nav id="nav-main" role="navigation" class="d-none d-md-block">
			<div class="container">
				<?php
				if( has_nav_menu('primary_nav') )
					wp_nav_menu(array('theme_location' => 'primary_nav', 'container' => false, 'menu_class' => ''));
				?>
			</div>
		</nav>

	</header>

	<div id="wrap">

		<div class="container" role="document">
