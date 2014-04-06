<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<div class="entry-content">
		<h2 class="subheader"><?php echo types_render_field('subheading', ""); ?></h2>
	</div>
	<footer>
		<?php dmTheme_entry_time(); ?>
	</footer>
	<!-- <hr /> -->
</article>