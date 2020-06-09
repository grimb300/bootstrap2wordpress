<?php

// Advanced Custom Fields
$instructor_section_title = get_field('instructor_section_title');
$instructor_name          = get_field('instructor_name');
$bio_excerpt              = get_field('bio_excerpt');
$full_bio								  = get_field('full_bio');
$twitter_username   			= get_field('twitter_username');
$facebook_username        = get_field('facebook_username');
$youtube_username         = get_field('youtube_username');
$num_students             = get_field('num_students');
$num_reviews              = get_field('num_reviews') ;
$num_courses              = get_field('num_courses');

?>

<!-- INSTRUCTOR -->
<section id="instructor">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-6">
				<div class="row">
					<div class="col-lg-8">
						<h2><?php echo($instructor_section_title);?> <small><?php echo($instructor_name); ?></small></h2>
					</div> <!-- col-lg-8 -->
					<div class="col-lg-4">
						<!-- If user entered twitter handle -->
						<?php if(!empty($twitter_username)) : ?>
							<a href="https://twitter.com/<?php echo($twitter_username) ?>" target="_blank" class="badge social twitter">
								<i class="fab fa-twitter"></i>
							</a>
						<?php endif;?>
						<!-- If user entered a facebook username -->
						<?php if(!empty($facebook_username)) : ?>
							<a href="https://facebook.com/<?php echo($facebook_username); ?>" target="_blank" class="badge social facebook">
								<i class="fab fa-facebook"></i>
							</a>
							<?php endif;?>
						<!-- If user entered a youtube username -->
						<?php if(!empty($youtube_username)) : ?>
							<a href="https://www.youtube.com/user/<?php echo($youtube_username); ?>" target="_blank" class="badge social youtube">
								<i class="fab fa-youtube"></i>
							</a>
						<?php endif;?>
					</div> <!-- col-lg-8 --> 
				</div> <!-- row -->
				<p class="lead"><?php echo($bio_excerpt); ?></p>
				<?php echo($full_bio); ?>
				<hr>
				<h3>The Numbers <small>They Don't Lie</small></h3>
				<div class="row">
					<div class="col-xs-4">
						<div class="num">
							<div class="num-content">
								<?php
									if($num_students < 1000) {
										echo($num_students);
									} else {
										echo(floor($num_students / 1000).",000+");
									} ?> <span>students</span>
							</div> <!-- num-content -->
						</div> <!-- num -->
					</div> <!-- col-xs-4 -->
					<div class="col-xs-4">
						<div class="num">
							<div class="num-content">
								<?php echo($num_reviews); ?> <span>reviews</span>
							</div> <!-- num-content -->
						</div> <!-- num -->
					</div> <!-- col-xs-4 -->
					<div class="col-xs-4">
						<div class="num">
							<div class="num-content">
								<?php echo($num_courses); ?> <span>courses</span>
							</div> <!-- num-content -->
						</div> <!-- num -->
					</div> <!-- col-xs-4 -->
				</div> <!-- row -->
			</div> <!-- col-sm-8 -->
		</div> <!-- row -->
	</div> <!-- container -->
</section> <!-- instructor -->