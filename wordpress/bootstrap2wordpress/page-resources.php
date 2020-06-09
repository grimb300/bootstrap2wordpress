<?php
/*
  Template Name: Resources Page
*/

get_header();

// Get the URL of the thumbnail attached to this post (the feature image)
$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
?>

<!-- FEATURE IMAGE -->

<?php if( has_post_thumbnail() ) { ?> <!-- Check for a feature image -->
  <section class="feature-image" style="background: url('<?php echo($thumbnail_url); ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
    <h1 class="page-title"><?php the_title() ?></h1>
  </section>
<?php } else { ?> <!-- Otherwise fallback to the default image -->
  <section class="feature-image feature-image-default" data-type="background" data-speed="2">
    <h1 class="page-title"><?php the_title() ?></h1>
  </section>
<?php } ?> <!-- End of feature image check -->

<!-- MAIN CONTENT -->
<div class="container">
  <div class="row" id="primary">
    <div id="content" class="col-sm-12">
      <section class="main-content">
        <?php while( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
        
        <hr>

        <div class="resource-row clearfix">

          <!-- Loop across all resources -->
          <?php $loop = new WP_Query( array( 'post_type' => 'resource', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
          <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php $resource_image = get_field('resource_image'); // Grab the image info ?>
            <div class="resource">
              <img src="<?php echo(get_field('resource_image')['url']); ?>" alt="<?php echo(get_field('resource_image')['alt']); ?>">
              <h3><a href="<?php the_field('resource_url'); ?>"><?php the_title(); ?></a></h3>
              <?php the_content(); ?>
              <!-- Conditionally add the button -->
              <?php if( !empty ( get_field('resource_url') ) ) : ?>
                <a href="<?php the_field('resource_url'); ?>" class="btn btn-success"><?php the_field('button_text'); ?></a>
              <?php endif; ?>  
            </div> <!-- resource -->
          <?php
          endwhile;
          // wp_reset_query is necessary after WP_Query
          wp_reset_query();
          ?>
          <!-- End resources loop -->

        </div> <!-- resource-row -->
      </section> <!-- main-content -->
    </div> <!-- content -->
  </div> <!-- row -->
</div> <!-- container -->

<?php
get_footer();
