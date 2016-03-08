<div class="col-md-4">
     <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?> 
<!--    echo do shortcode is for the search-->
	<?php if ( ! dynamic_sidebar( 'blog' ) ): ?>
	<h3>Widget Setup</h3>
	<p>Please add widgets to the page widget to have them display here</p>
	<?php endif; ?>
</div>
<!-- blog posts uses this sidebar-->