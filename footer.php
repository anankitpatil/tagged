	<!-- Footer -->

	<footer>



		<article>

        	<section class="wrapper">
            
            <?php

                if ( is_single() ) {

                    echo '<nav>';

                    echo '<ul class="single_nav"><li class="previous">';

                    previous_post_link('%link', '');

                    echo '</li><li class="home">';

                    $home_url = home_url('/');

                    echo '<a href="'.$home_url.'"></a>';

                    echo '</li><li class="next">';

                    next_post_link('%link', '');

                    echo '</li></ul>';	

                    echo '</nav>';				

                }

            ?>

            	<blockquote>

	                This is a <i>HTML5</i>, <i>Mobile Ready</i>, <i>Responsive</i> theme developed using <i>PHP</i> on the <i>Wordpress framework</i> as a part of my portfolio.

                </blockquote>

			</section>

            <section class="wrapper">

            	<figure class="thank"> 	

	               	<img src="<?php echo get_template_directory_uri(); ?>/img/thank_icon.png" />

                </figure>

                <a href="http://www.wordpress.org/"> 	

	               	<img src="<?php echo get_template_directory_uri(); ?>/img/wordpress_icon.png" />

                    <p>Built on the Wordpress framework</p>

                </a>

                <a href="http://www.html5blank.com/"> 	

	               	<img src="<?php echo get_template_directory_uri(); ?>/img/html5blank_icon.png" />

                    <p>Powered by html5Blank shell</p>

                </a>

                <a href="http://www.goldengridsystem.com/"> 	

	               	<img src="<?php echo get_template_directory_uri(); ?>/img/gg_icon.png" />

                    <p>Built on the Golden Grid System</p>

                </a>

			</section>

            <section class="wrapper">

            	&copy; <?php bloginfo('name'); ?>, <?php echo date("Y"); ?>

            </section>

		</article>

		

	</footer>

	<!-- /Footer -->

	

<?php wp_footer(); ?>



</body>

</html>