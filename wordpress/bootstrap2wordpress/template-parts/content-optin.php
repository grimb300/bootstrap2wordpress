<?php

// Custom Fields
// Need to check if these are still accessible after installing Advanced Custom Fields
//   get_post_meta(post_id, key, single);
$optin_text     		= get_post_meta(19, 'optin_text',        true);
$optin_button_text  = get_post_meta(19, 'optin_button_text', true);

?>

<!-- OPT IN SECTION -->
<section  id="optin">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<p class="lead"><?php echo($optin_text); ?></p> <!-- lead -->
			</div> <!-- col-sm-8 -->
			<div class="col-sm-4">
				<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo($optin_button_text); ?></button>
			</div> <!-- col-sm-4 -->
		</div> <!-- row -->
	</div> <!-- container -->
</section> <!-- optin -->