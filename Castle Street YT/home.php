<!--This is the front page -->
<?php

get_header(); ?>

    <div class="container" role="main"> 

	    <div class="row">

	    	<div class="col-md-8">


			    <div class="page-header">
			    <?php echo do_shortcode("[huge_it_slider id='1']"); ?>
                        <!--  used for slider-->
          </div>
<!--Lets start the wordpress loop!-->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			

<div class="column-parent"> 
<!--the column divs our used to get things to sit side by side, this was the hardest part of making the site-->

 <div class="column-left">
<!--the thubnail is the picture-->
			    	<a href="<?php the_permalink(); ?>">
			    	<?php if ( has_post_thumbnail() ) {
										the_post_thumbnail('thumbnail');
											} ?>
</div>

<div class="column-center">
		<h2 class="h2class"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
</div>
<!--I use excerpt as the content is to long-->

<div class="column-right">

<?php the_meta(''); ?> 
<!--    meata data has things like time,price, location -->
</div>
</div>


<!--ending loop-->
				<?php endwhile; endif; ?>


	    	</div>

	    	<?php get_sidebar(); ?>
<!--            the side bar is where the widgets sit-->

	    </div>

    </div>

<?php get_footer(); ?>
