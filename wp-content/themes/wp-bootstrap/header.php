<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<?php wp_head(); ?>

</head>

<body>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="<?php echo site_url('/') ?>">Wordpress Bootstrap</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">

			<?php
            // @see https://github.com/mebishalnapit/bootstrap-navwalker
            // also use hard coded -- echo site_url('/blog')
			wp_nav_menu( array(
				'theme_location' => 'footerMenu',
				'menu_id'        => 'primary-menu',
				'container'      => false,
				'depth'          => 2,
				'menu_class'     => 'navbar-nav ml-auto',
				'walker'         => new Bootstrap_NavWalker(),
				'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
			) );
			?>


			<!--<ul class="navbar-nav ml-auto">


                <li class="nav-item">
                    <a class="nav-link" href="<?php /*echo site_url('/blog') */?>">Blog</a>
                </li>
				<li class="nav-item">
					<a class="nav-link" href="<?php /*echo site_url('/privacy-policy') */?>">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php /*echo site_url('/parent') */?>">Parent</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.html">Contact</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Portfolio
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
						<a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
						<a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
						<a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
						<a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
						<a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Other Pages
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
						<a class="dropdown-item" href="full-width.html">Full Width Page</a>
						<a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
						<a class="dropdown-item" href="faq.html">FAQ</a>
						<a class="dropdown-item" href="404.html">404</a>
						<a class="dropdown-item" href="pricing.html">Pricing Table</a>
					</div>
				</li>
			</ul>-->
		</div>
	</div>
</nav>