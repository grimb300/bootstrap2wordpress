<?php

// Advanced Custom Fields
$project_section_image = get_field('project_section_image');
$project_section_title = get_field('project_section_title');
$project_section_body  = get_field('project_section_body');

?>

<!-- PROJECT FEATURES -->
<section id="project-features">
	<div class="container">
		<div class="section-header">

			<!-- If user uploaded an image -->
			<?php if(!empty($project_section_image)) : ?>
				<img src="<?php echo($project_section_image['url']); ?>" alt="<?php echo($project_section_image['alt']); ?>">
			<?php endif; ?>
			<!-- End user uploaded image -->

			<h2><?php echo($project_section_title); ?></h2>
			<p class="lead"><?php echo($project_section_body); ?></p>
			<div class="row">

				<!-- Loop across all features -->
        <?php
        $loop = new WP_Query( array( 'post_type' => 'project_feature', 'orderby' => 'post_id', 'order' => 'ASC'));
        while( $loop->have_posts() ) : $loop->the_post();
        ?>
					<div class="col-sm-4">
						<?php
							if( has_post_thumbnail() ) {
								the_post_thumbnail();
							}
						?>
						<h3><?php the_title() ?></h3>
						<p><?php the_content(); ?></p>
					</div> <!-- col-sm-4 -->
        <?php
        endwhile;
        // wp_reset_query is necessary after WP_Query
        wp_reset_query();
        ?>
				<!-- End feature loop -->

			</div> <!-- row -->
		</div> <!-- section-header -->
	</div> <!-- container -->
</section> <!-- project-features -->