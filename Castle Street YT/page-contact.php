<?php get_header(); ?>
<!--alt page for contact pages-->

    <div class="container" role="main">

	    <div class="row">

	    	<div class="col-md-8">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
				    <div class="page-header">	
				    	<h1><?php the_title(); ?></h1>
				    </div>


					<?php the_content(); ?>

				<?php endwhile; endif; ?>

	    	</div>

	    <?php get_sidebar('Other'); ?>
    </div>

<?php get_footer(); ?>