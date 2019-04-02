<?php get_header(); ?>
<!-- Page Content -->
<div class="container">

	<div class="row">

		<!-- Blog Entries Column -->
		<div class="col-md-8">

			<h1 class="my-4">Page Heading
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

						<?php
						if(has_post_thumbnail()){
							the_post_thumbnail();
						}
						?>

						<p class="card-text"><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &rarr;</a>
					</div>
					<div class="card-footer text-muted">
						Posted on <?php echo the_date(); ?> by
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
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
