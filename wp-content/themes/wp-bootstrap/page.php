<?php get_header(); ?>
<!-- Page Content -->
<div class="container">

	<div class="row">

		<!-- Post Content Column -->


		<div class="col-lg-8">
			<?php
            $parent = wp_get_post_parent_id(get_the_ID());

			while(have_posts()){
				the_post();
				?>
				<!-- Title -->
				<h1 class="mt-4"><?php the_title(); ?></h1>

                 <?php if ($parent){ ?>
                <a href="<?php echo get_permalink($parent); ?>">Back to <?php echo get_the_title($parent); ?></a>
				<?php } ?>

				<hr>
				<!-- Post Content -->

				<p><?php the_content(); ?></p>
			<?php } ?>


		</div>

        <!-- Sidebar Column -->
        <div class="col-md-4">

		<!-- Child Pages Column -->
            <!--
                List child pages
             -->
        <?php
        $has_pages = get_pages([
            'child_of' => get_the_ID()
        ]);

        if($parent || $has_pages){ ?>

            <div class="card my-4">
                <h5 class="card-header"><?php echo get_the_title($parent); ?> Categories</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
            <?php
            if ($parent){
                $find_child = $parent;
            } else {
	            $find_child = get_the_ID();
            }
            wp_list_pages([
               'title_li' => null,
                'child_of' => $find_child,
                'sort_column' => 'menu_order' // from order dropdown in edit page

            ]);
            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>

			<!-- Search Widget -->
			<div class="card my-4">
				<h5 class="card-header">Search</h5>
				<div class="card-body">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
					</div>
				</div>
			</div>

			<!-- Categories Widget -->
			<div class="card my-4">
				<h5 class="card-header">Categories</h5>
				<div class="card-body">
					<div class="row">
						<?php
						$args = array(
							'hide_empty'=> 1,
							'orderby' => 'name',
							'order' => 'ASC'
						);
						$categories = get_categories($args);
						foreach (array_chunk($categories, 3, true) as $array) {
							echo '<div class="col-lg-6">
							<ul class="list-unstyled mb-0">';
							foreach($array as $c) {
								echo "<li>
									<a href=\"$c->slug\">$c->name</a>
								</li>";
							}
							echo '</ul>
						</div>';
						}
						?>

					</div>
				</div>
			</div>

			<!-- Side Widget -->
			<div class="card my-4">
				<h5 class="card-header">Side Widget</h5>
				<div class="card-body">
					You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
				</div>
			</div>

		</div>

	</div>
	<!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<?php get_footer(); ?>
