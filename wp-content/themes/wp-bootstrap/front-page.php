<?php get_header(); ?>
<!--https://codex.wordpress.org/Creating_a_Static_Front_Page-->
<header>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<!-- Slide One - Set the background image for this slide in the line below -->
			<div class="carousel-item active" style="background-image: url(<?php echo get_theme_file_uri('/img/slide1.jpg'); ?>)">
				<div class="carousel-caption d-none d-md-block">
					<h3>First Slide</h3>
					<p>This is a description for the first slide.</p>
				</div>
			</div>
			<!-- Slide Two - Set the background image for this slide in the line below -->
			<div class="carousel-item" style="background-image: url(<?php echo get_theme_file_uri('/img/slide2.jpg'); ?>)">
				<div class="carousel-caption d-none d-md-block">
					<h3>Second Slide</h3>
					<p>This is a description for the second slide.</p>
				</div>
			</div>
			<!-- Slide Three - Set the background image for this slide in the line below -->
			<div class="carousel-item" style="background-image: url(<?php echo get_theme_file_uri('/img/slide3.jpg'); ?>)">
				<div class="carousel-caption d-none d-md-block">
					<h3>Third Slide</h3>
					<p>This is a description for the third slide.</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</header>

<!-- Page Content -->
<div class="container">

	<h1 class="my-4">Welcome to Modern Business</h1>
	<!-- Features Section -->
	<div class="row">
		<div class="col-lg-6">
			<h2>Modern Business Features</h2>
			<p>
                <?php is_front_page() ? bloginfo('description') : wp_title() ?>
            </p>
			<ul>
				<li>
					<strong>Bootstrap v4</strong>
				</li>
				<li>jQuery</li>
				<li>Font Awesome</li>
				<li>Working contact form with validation</li>
				<li>Unstyled page elements for easy customization</li>
			</ul>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
		</div>
		<div class="col-lg-6">
			<img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
		</div>
	</div>
	<!-- /.row -->

	<hr>

	<!-- Call to Action Section -->
	<div class="row mb-4">
		<div class="col-md-8">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
		</div>
		<div class="col-md-4">
			<a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
		</div>
	</div>

	<hr>
    <h3 class="front_hdr">Recent Posts</h3>
	<!-- Marketing Icons Section -->
	<div class="row">

		<?php
		// Display 3 blog posts on front page
        // $wp_query = new WP_Query('cat=-1'); // exclude category
		$wp_query = new WP_Query([
            'posts_per_page' => 3
        ]);
		//$wp_query->query('posts_per_page=3' . '&paged='.$paged);
        while($wp_query->have_posts()){
	        $wp_query->the_post();
			?>
			<div class="col-lg-4 mb-4">
				<div class="card h-100">
					<h4 class="card-header"><?php the_title(); ?></h4>
					<div class="card-body">
						<p class="card-text"><?php the_excerpt(); ?></p>
					</div>
					<div class="card-footer">
						<a href="<?php the_permalink(); ?>" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
		<?php } ?>
		<?php wp_reset_postdata(); ?>
	</div>
	<!-- /.row -->

    <hr />
    <h3 class="front_hdr">Recent Events</h3>
    <div class="row">

		<?php
		// Display 3 blog posts on front page
		// $wp_query = new WP_Query('cat=-1'); // exclude category
		//$wp_query->query('posts_per_page=3' . '&paged='.$paged);
		$wp_events_query = new WP_Query([
			'posts_per_page' => 3,
            'post_type' => 'event'
		]);
		if( !$wp_events_query->have_posts()) {
			echo 'No Events';
		} else {
			while($wp_events_query->have_posts()){
				$wp_events_query->the_post();
				?>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <h4 class="card-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <div class="card-body">
                            <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
			 <?php }
			wp_reset_postdata();
			 }
        ?>

	    <?php
	    $shop = [
		    [
			    [ "rose", 1.25, 15 ],
			    [ "daisy", 0.75, 25 ],
			    [ "orchid", 1.15, 7 ]
		    ],
		    [
			    [ "rose", 1.25, 15 ],
			    [ "daisy", 0.75, 25 ],
			    [ "orchid", 1.15, 7 ]
		    ],
		    [
			    [ "rose", 1.25, 15 ],
			    [ "daisy", 0.75, 25 ],
			    [ "orchid", 1.15, 7 ]
		    ]
	    ];
	    ?>

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

<?php get_footer(); ?>
