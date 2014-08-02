<?php get_header(); ?>

	<!-- Section -->

	<article>



            <!--<a href="<?php //echo esc_url( home_url( '/' ) ); ?>" title="<?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php //echo get_template_directory_uri(); ?>/img/logo_o.png" alt="<?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="logo"></a>-->

            <!--<a href="#portfolio" title="Portfolio" rel="portfolio" class="logo_po"><img src="<?php //echo get_template_directory_uri(); ?>/img/logo_p.png" class="thumb_link"><img src="<?php //echo get_template_directory_uri(); ?>/img/blink_obj.png" class="blink_obj2" /><span class="text_po">Portfolio</span></a>-->

        

        <section id="main">



        	<ul>

	

			<?php query_posts( 'post_type=html5-blank&order=DEC&posts_per_page=-1' ); ?>
            
			<?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

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

        	

            <?php else : ?>

            

            <?php endif; ?>

            

			<?php endwhile; ?>

            <?php else : ?>

            <?php endif; ?>

            

            </ul>

            

        </section>



	</article>

	<!-- /Section -->

    	

<?php //get_sidebar(); ?>



<?php get_footer(); ?>