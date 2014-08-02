		<?php if ($count = 1) : ?>
            
            <article class="featured">
            	<?php if ( has_post_thumbnail() ): ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); ?>
                <img class="featured_image" src="<?php echo $image[0]; ?>">
                <div class="featured_left">
                    <div>
                    	<h2><?php the_title(); ?></h2>
						<?php
                            $ex_trim = get_the_excerpt();
                            $ex_trim = strip_tags($ex_trim, '<strong><i><b>');
                            echo substr($ex_trim, 0, 90).'...';
                        ?>
                        <tags><?php the_tags( '' ); ?></tags>
                    </div>
                </div>
                <?php endif; ?>
            </article>
            
            <script type="text/javascript"><!--//--><![CDATA[//><!--
				
				initiate_feature( $('.featured') );		
			
			//--><!]]></script>
        
        <?php endif; ?>
		
        
        <a href="<?php the_permalink(); ?>" data-largesrc="<?php $large = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large'); echo $large[0]; ?>" data-title="<?php echo get_the_title(); ?>" data-description="<?php $ex_trim = get_the_excerpt(); $ex_trim = strip_tags($ex_trim, '<strong><i><b>'); echo substr($ex_trim, 0, 160).'...'; ?>">
        
        	<script type="text/javascript"><!--//--><![CDATA[//><!--
        
		$(window).load(function() {
			jQuery(document).ready(function() {
			});
		});
    //--><!]]></script>
    
    
    	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- Article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<!-- Post Thumbnail -->
			<?php //if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php //the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php //the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php //endif; ?>
			<!-- /Post Thumbnail -->
			
            <!-- Text Content -->
            <div class="text_left">
                <!-- Post Title -->
                <div class="title_grid">
                    <h1 class="title">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h1>
                </div>
                <!-- /Post Title -->
                <div class="excerpt">
                	<div class="ex_content">
						<?php the_excerpt(); // Dynamic Content ?>
                    </div>
                </div>
            </div>
            <!-- /Text Content -->
            
            <div class="gallery_wrapper">
            	<div class="cover">
                </div>
                <ul class="gallery">
                <?php				
                    $_gallery = get_the_content();
                    $_x = strpos($_gallery,'ids="');
                    $_y = strpos($_gallery,'"]');				
                    $gallery = substr($_gallery, $_x, $_y - $_x + 3);
    
                    $galleryHTML = do_shortcode('[gallery size="large" link="file" '.$gallery);
    
                    preg_match_all( '@src="([^"]+)"@', $galleryHTML, $out );        
                    
                    for ( $i = 0; $i < count($out[0]) + 1; $i++ ) { 
                ?>  
                
                    <li>              
                        <img <?php echo $out[0][$i]; ?> /> 
                    </li>					
                
                <?php } ?>
                </ul>
            </div>
			
			<br class="clear">
            
            <!-- Post Details -->
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
            <!-- /Post Details -->
			
			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			
			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
			
			<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>
			
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			
			<?php comments_template(); ?>
			
		</article>
		<!-- /Article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- Article -->
		<article>
			
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			
		</article>
		<!-- /Article -->
	
	<?php endif; ?>