<?php get_header(); ?>

	<div class="small-12 large-8 columns" role="main">

	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header></a>
				<a href="<?php echo types_render_field('link_url', ""); ?>">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</a>
				<?php FoundationPress_entry_meta(); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile;?>

	</div>
	<?php //get_sidebar(); ?>

<?php get_footer(); ?>