<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">

<head profile="http://gmpg.org/xfn/11"

<link rel="alternate" type="application/rss+xml" title="<?php printf(__('%s RSS Feed'), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="alternate" type="application/atom+xml" title="<?php printf(__('%s Atom Feed'), get_bloginfo('name')); ?>" href="<?php bloginfo('atom_url'); ?>" />

<meta name="google-site-verification" content="0SXt0j8dPmIfNqRrQqOv34P-_byUrLjxp6Ms1fhK8ck" />

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />

<meta name="viewport" content="width=500, target-densitydpi=device-dpi">

<title><?php wp_title(' - ', true, 'right'); ?> <?php bloginfo('name'); ?></title>


<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>



</head>

<body>

  <div id="top">

   <div id="header">

    <div class="logo">
      <a href="/"><img src="http://klangfassa.de/wp-content/themes/Klangfassade/img/logo.svg" /></a>
    </div>

    <div class="navi">

     <?php wp_nav_menu( array( 'theme_location' => 'primary', 
         'menu_class' => 'dropdown', //Adding the class for dropdowns
       'container_id' => 'navwrap', //Add CSS ID to the containter that wraps the menu.
       ) ); ?>

  </div>

</div>

</div>