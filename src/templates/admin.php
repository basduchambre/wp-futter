<div class="wrap">
	<h1>WP Futter settings</h1>
	<?php settings_errors(); ?>


	<form method="post" action="options.php">
		<?php 
			settings_fields( 'wp-futter' );
			do_settings_sections( 'wp-futter' );
			submit_button();
		?>
	</form>
	
</div>