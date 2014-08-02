<section id="main">

    <ul>
    
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
        
        <li class="wrapper">
            
            <a href="<?php the_permalink(); ?>">
                <div class="info">
                    <h3><?php echo get_the_title(); ?></h3>
                    <p><?php $tags = get_the_tags(''); foreach($tags as $tag) { echo '<i>'.$tag->name.'</i>'; } ?></p>
                </div>
                <figure>
                    <?php the_post_thumbnail( 'thumbnail' ); ?>
                </figure>
            </a>
            
        </li>
    
    	<?php endif; ?>
    
    	<?php endwhile; ?>
    
    </ul>
    
</section>

	<?php else : ?>

        <article>
            <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
        </article>
    
    <?php endif; ?>