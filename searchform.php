<?php
$querystring = esc_attr(apply_filters('the_search_query', get_search_query()));
$searchstring = "Geben Sie einen Suchbegriff ein.";
if (empty($querystring)) { $querystring = $searchstring; }
?>

<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<div>
 <input type="text" name="s" id="s" value="<?php echo $querystring; ?>"
            onblur="if (this.value == '') { this.value = '<?php echo $searchstring; ?>'; }"
            onfocus="if (this.value == '<?php echo $searchstring; ?>') { this.value = ''; }" />
	
</div>
</form>