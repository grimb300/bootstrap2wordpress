<?php
/* Template Name: Full-width Template */

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

        <?php while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; // end of the loop ?>

      </section> <!-- main-content -->
    </div> <!-- content -->
  </div> <!-- row -->
</div> <!-- container -->


<?php
get_footer();
