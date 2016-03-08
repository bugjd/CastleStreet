

<!--This is the Month View page, it is known in wordpress as the tag page. This means you can select a month you want to look for an event in rather than having to search through every event.-->
<?php

get_header(); ?>

    <div class="container" role="main"> 

	    <div class="row">

	    	<div class="col-md-8">


			    <div class="page-header">
                       <h2>Month <?php single_tag_title(); ?></h2>
<!--                    singe_tag is for getting the months name -->
			    <?php echo do_shortcode("[huge_it_slider id='1']"); ?>
                        <!--  used for slider-->
          </div>
<!--Lets start the wordpress loop!-->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			

<div class="column-parent"> 
<!--The column divs are used to get things to sit side by side, this was the hardest part of making the site, they didn't want to sit side by side but eventually I forced them into it!-->

 <div class="column-left">
<!--The thubnail is the picture-->
			    	<a href="<?php the_permalink(); ?>">
			    	<?php if ( has_post_thumbnail() ) {
										the_post_thumbnail('thumbnail');
											} ?>
</div>

<div class="column-center">
		<h2 class="h2class"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
</div>
<!--I use excerpt as the content is to long for a front page, and it gives the audience an idea of what the event is about and then they can choose to click to learn more, promoting user engagement and then giving the option for social media sharing on the event page.-->

<div class="column-right">

<?php the_meta(''); ?> 
<!--    Meta data has things like time,price, location -->
</div>
</div>


<!--ending loop-->
				<?php endwhile; endif; ?>


	    	</div>

	    	<?php get_sidebar(); ?>
<!--            The side bar is where the widgets sit-->

	    </div>

    </div>

<?php get_footer(); ?>



