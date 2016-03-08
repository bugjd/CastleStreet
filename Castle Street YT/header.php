<!--Welcome to YouthTech, an event listing and coding resource website for young people in Ireland. 
This website was designed, created, coded and is updated by me - Jack Delaney, age 13 from County Down. I have used my own theme 'Castle Street' which I coded from scratch myself (but not mit scratch!)! I have used WordPress as a CMS to ensure my code is elegant and easy to update with better SEO control.
To make this site I have used HTML-PHP Fusion, Pure PHP, CSS and JavaScript.
I've added loads of comments throughout the code so anyone making their own site would be able to understand the process.-->
<!DOCTYPE html>
<html lang="en"><!--    EN means English-->

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--      These are used for character sets and view points to make sure you can use things like £ signs and also means a mobile user doesn't have to zoom in-->
<meta name="HandheldFriendly" content="true">
    <title><?php wp_title('|', true, 'right'); ?><?php echo get_bloginfo('name'); ?></title> 

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

     
<div class="navbar navbar-default" role="navigation">
 <ul id="nav">

 <?php 
          		$args = array(
         		 	'menu'        => 'header-menu',            
          		  'menu_class'  => 'nav navbar-nav',
          		  'container'   => false
         		 );
         		 wp_nav_menu( $args );
        		?>  
        	</div></ul>
        	<div class="container">
<!--                this is for the Nav bar, it was tricky to put this in-->