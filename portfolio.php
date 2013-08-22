<?php
/*
Template Name: Portfolio
*/

 get_header(); ?>

 <div class="content">

 	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  	
  		<div class="start"> 
	
	    <h1><?php the_title(); ?></a></h1>
	<?php the_content(); ?>
	
	</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

        <div class="port"> 
<ul>
           <li><a href="#"><img src="http://greenflesheater.com/wp-content/uploads/2013/06/itunescover.png"></a></li>

            <li><a href="#"><img src="http://greenflesheater.com/wp-content/uploads/2013/06/kinderwald_logo_final.png"></a></li> 

            <li><a href="#"><img src="http://greenflesheater.com/wp-content/uploads/2013/06/gfe_2013_logo_1x.png"></a></li> 

            <li><a href="#"><img src="http://greenflesheater.com/wp-content/uploads/2013/06/dribble_hackerspace.png"></a></li> 

            <li><a href="#"><img src="http://greenflesheater.com/wp-content/uploads/2013/06/iphone5_1x.png"></a></li> 

            <li><a href="#"><img src="http://greenflesheater.com/wp-content/uploads/2013/06/deinoyten_map.png"></a></li> 
</ul>
</div>
<?php get_footer(); ?>