<?php
/*
Template Name: Startseite
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

<div class="zocial">

            <ul>
                <li><a class="zocial-appnet" href="https://alpha.app.net/barning"><br>App.net</a></li>
                <li><a class="zocial-twitter" href="https://twitter.com/niklasbarning"><br>Twitter</a></li>
                <li><a class="zocial-instagram" href="http://instagram.com/greenflesheater/"><br>Instagram</a></li>
                <li><a class="zocial-tumblr" href="http://tumblr.greenflesheater.com"><br>Tumblr</a></li>
                <li><a class="zocial-dribbble" href="http://dribbble.com/NiklasBarning"><br>Dribbble</a></li>
                <li><a class="zocial-vimeo" href="http://vimeo.com/greenflesheater"><br>Vimeo</a></li>
                <li><a class="zocial-xing" href="https://www.xing.com/profile/Niklas_Barning"><br>Xing</a></li>
                <li><a class="zocial-github" href="https://github.com/GreenFleshEater"><br>GitHub</a></li>
                <li><a class="zocial-youtube" href="http://www.youtube.com/user/GreenFleshEater"><br>Youtube</a></li>
                <li><a class="zocial-soundcloud" href="https://soundcloud.com/greenflesheater"><br>Soundcloud</a></li>
                <li><a class="zocial-pinterest" href="http://pinterest.com/niklasbarning/"><br>Pinterest</a></li>

            </ul>

</div>
<div class="dribbble">
    <h1><center>Aktuelle Arbeiten, die auf dem Schreibtisch liegen.</center></h1>
    <ul>
    <?php $shots = get_the_shots();
$i=0;
foreach ($shots as $shot):
    
    $date = date( 'M d, Y', strtotime( $shot->created_at ) ); 
    if (++$i >= 5) {
    break;
  }
?>
<li class="wp-dribbble-shot">
    
    
    <a class="wp-dribbble-image-link">
       <a href="http://dribbble.com/niklasBarning"><img src="<?php echo $shot->image_url; ?>" alt="<?php echo $shot->title; ?>"/></a>
    </a>
</li>
<?php endforeach; ?>

</div>

</div>

<?php get_footer(); ?>