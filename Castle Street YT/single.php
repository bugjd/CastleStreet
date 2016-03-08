<!--this is used for event posts-->
<?php get_header(); ?>

    <div class="container" role="main">

	    <div class="row">

	    	<div class="col-md-8">
<!--                start loop-->

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			    <div class="page-header">
			    	<h1><?php the_title(); ?></h1> 
<!--the title of the event-->
			    </div>

<!--the content of the event-->
			    		<?php the_content(); ?>

			

				<hr>

				<p>
			    	Post Type: <span class="post-type"><?php echo get_post_format(); ?></span> |
		    		Category: <?php the_category( ', ' );?> |
		    		<?php the_tags('Tags: ', ', ');?>

				</p>

				<hr>

				<?php endwhile; endif; ?>



	    	</div>
<!--gets a side bar called blog-->
	    	<?php get_sidebar( 'blog' ); ?>

	    </div>

    </div>

<?php get_footer(); ?>
