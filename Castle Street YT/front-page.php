<!--Front page when in static use, I would use this page if I am upgrading the regualr home page or to direct peolpe watch Youthtech live, our Persiope service that shows them cool events that our comming out -->
<?php get_header(); ?>

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

	    	<?php get_sidebar(); ?>

	    </div>

    </div>

<?php get_footer(); ?>