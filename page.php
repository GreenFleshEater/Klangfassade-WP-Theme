<?php get_header(); ?>

<div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="article">
	
	    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_content(); ?>
	
	</div>
<?php endwhile; endif; ?>
<?php comments_template(); ?>

<div class="suche"><?php include ('searchform.php'); ?></div>

</div>

<?php get_footer(); ?>