<?php get_header(); ?>
<!-- Page Content -->
<div class="container">

	<div class="row">

		<!-- Blog Entries Column -->
		<div class="col-md-8">

			<h1 class="my-4">All Events
				<small>Secondary Text</small>
			</h1>

			<!-- Blog Post -->
			<?php
			while(have_posts()){
				the_post();
				?>
				<div class="card mb-4">
					<div class="card-body">
						<h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="card-text"><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &rarr;</a>
					</div>
					<div class="card-footer text-muted">
						Posted on January 1, 2017 by
						<a href="#">Start Bootstrap</a>
					</div>
				</div>
			<?php } ?>


			<!-- Pagination -->
			<ul class="pagination justify-content-center mb-4">
				<li class="page-item">
					<a class="page-link" href="#">&larr; Older</a>
				</li>
				<li class="page-item disabled">
					<a class="page-link" href="#">Newer &rarr;</a>
				</li>
			</ul>

		</div>

		<!-- Sidebar Widgets Column -->
		<div class="col-md-4">

			<?php
			if(is_active_sidebar('sidebar')){
				dynamic_sidebar('sidebar');
			}
			?>

		</div>

	</div>
	<!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<?php get_footer(); ?>
