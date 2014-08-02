<?php get_header(); ?>

	

	<article id="single">

    

		<section class="wrapper" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

            

            <!-- Post Thumbnail -->

            <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>

                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="thumbnail">

                    <figure>

						<?php the_post_thumbnail('thumbnail'); // Fullsize image for the single post ?>

                    </figure>

                </a>

            <?php endif; ?>

            <!-- /Post Thumbnail -->

            

            <!-- Post Title -->

            <section class="aside">

                <h1>

                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>

                </h1>

                <p><?php if (function_exists('has_excerpt') && has_excerpt()) the_excerpt(); ?></p>

                <tags><?php the_tags( __( '', 'html5blank' ), '', '<br>'); ?></tags>

                <date><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></date>

            </section>

            <!-- /Post Title -->

            

            <br class="clear">

            

            <section class="content">

				<?php the_content(); // Dynamic Content ?>

            </section>

            

            <br class="clear">

            

            <?php edit_post_link(); // Always handy to have Edit Post Links available ?>

            

            <?php endwhile; ?>

        

            <?php endif; ?>

	

		</section>

        

	</article>

    

</div>

<!-- /Wrapper -->

	

<?php //get_sidebar(); ?>



<?php get_footer(); ?>