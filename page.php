<?php get_header(); ?>
	
	<article id="page">
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<section class="wrapper" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<?php the_content(); ?>
			
			<br class="clear">
			
			<?php edit_post_link(); ?>
			
		</section>
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<section class="wrapper">
			
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			
		</section>
	
	<?php endif; ?>
	
	</article>
	
<?php get_footer(); ?>