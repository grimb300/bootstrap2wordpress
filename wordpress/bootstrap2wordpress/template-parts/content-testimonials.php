<?php

?>

<!-- TESTIMONIALS -->
<section id="kudos">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2>What People Are Saying About Brad</h2>

				<!-- Loop across all testimonials -->
				<?php $loop = new WP_Query( array( 'post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

					<!-- Testimonial -->
					<div class="row testimonial">

						<div class="col-sm-4">
							<?php
								if( has_post_thumbnail() ) {
									// Crop the image to 200x200
									the_post_thumbnail( array(200, 200));
								}
							?>
						</div> <!-- col-sm-4 -->
						<div class="col-sm-8">
							<blockquote>
								<?php the_content(); ?>
								<cite>&mdash; <?php the_title(); ?></cite>
							</blockquote>
						</div> <!-- col-sm-8 -->

					</div> <!-- row testimonial -->
				<?php
				endwhile;
				// wp_reset_query is necessary after WP_Query
				wp_reset_query();
				?>
				<!-- End testimonial loop -->

			</div> <!-- col-sm-8 -->
		</div> <!-- row -->
	</div> <!-- container -->
</section> <!-- kudos -->
