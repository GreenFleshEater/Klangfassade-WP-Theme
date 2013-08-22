<?php get_header(); ?>

<div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="article">
	
	    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_content(); ?>
	Dieser Artikel hat <a href="<?php the_permalink() ?>#respond" rel="nofollow"><?php comments_number('0 Kommentare', '1 Kommentar', '% Kommentare'); ?></a> <a href="<?php the_permalink() ?>#respond" rel="nofollow">Gebe einen Kommentar ab!</a>
	
	</div>
<?php endwhile; else: ?> 
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?> 

<div class="suche"><?php include ('searchform.php'); ?></div>

</div>

<?php get_footer(); ?>