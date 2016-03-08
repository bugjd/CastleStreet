


<!--This is the Area page, it is know in WordPress as the category page. This enables the user to select their geographical area to search for events nearby. This is to make YouthTech user-friendly and to attract a bigger audience throughout Ireland. -->
<?php

get_header(); ?>

    <div class="container" role="main"> 

	    <div class="row">

	    	<div class="col-md-8">


			    <div class="page-header">
                    <h2>Area: <?php single_cat_title(); ?></h2> 
<!--                    singe_cat is for getting the areas name -->
			    <?php echo do_shortcode("[huge_it_slider id='1']"); ?>
                        <!--  used for slider-->
          </div>
<!--Lets start the wordpress loop!-->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			

<div class="column-parent"> 
<!--the column divs are used to get things to sit side by side, this was the hardest part of making the site-->

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
<!--I use excerpt as the content is to long to have on the homepage / area page section-->

<div class="column-right">

<?php the_meta(''); ?> 
<!--    Meta data has things like time,price, location -->
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


