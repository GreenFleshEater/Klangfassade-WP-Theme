<?php get_header(); ?>

<div class="content">

 	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  	
  		<div class="post"> 
	
	    <h2><?php the_title(); ?></a></h2>
	<?php the_content(); ?>
	<?php comments_template(); ?>
	
	</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


</div>

<?php get_footer(); ?>