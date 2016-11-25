<?php
/**
 * The Template for displaying Author Search
 *
 * Override this template by copying it to yourtheme/simple-user-listing/search-author.php
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$search = ( get_query_var( 'as' ) ) ? get_query_var( 'as' )  : '';

?>

<div class="author-search">
	<h2><?php _e('Search by name' ,'simple-user-listing');?></h2>
		<form method="get" id="sul-searchform" action="<?php the_permalink() ?>">
			<label for="as" class="assistive-text"><?php _e('Search' ,'simple-user-listing');?></label>
			<input type="text" class="field" name="as" id="sul-s" placeholder="<?php _e('Search Inductees' ,'simple-user-listing');?>" value="<?php echo $search; ?>"/>
			<input type="submit" class="submit" id="sul-searchsubmit" value="<?php _e('Search Inductees' ,'simple-user-listing');?>" />
		</form>
	<?php
	if( $search ){ ?>
		<h2 ><?php printf( __('Search Results for: %s' ,'simple-user-listing'), '<em>' . $search .'</em>' );?></h2>
		<a href="<?php the_permalink(); ?>"><?php _e('Back To Inductees Listing' ,'simple-user-listing');?></a>
	<?php }
	else { ?>
		</br>
		</br>
		<h2>No Users Searched For</h2>
		<style type="text/css">.author-block{
		display:none;
		}</style>
	<?php } ?>
</div><!-- .author-search -->