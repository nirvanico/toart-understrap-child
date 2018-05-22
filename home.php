<?php
/**
 * Template Name: Home
 *
 * This template is the home for ToArt site
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

    <div class="wrapper" id="page-wrapper">

        <div class="<?php echo esc_attr( $container ); ?>" id="content">


            <div class="row">

                <div class="<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area" id="primary">

                    <div class="container">
                    <div class="timeline" data-vertical-start-position="right" data-vertical-trigger="150px">
                        <div class="timeline__wrap">
                            <div class="timeline__items">
                                <div class="timeline__item timeline__item--right fadeIn">
                                    <div class="timeline__content">
                                        Lorem ipsum dolor sit amet, nam no bonorum inermis nostrum. Mollis intellegebat sea eu, vide magna assueverit et est. Adhuc erant affert an vix, nam et quot animal bonorum. No eos fugit possim, inermis praesent definitiones et ius.
                                    </div>
                                </div>
                                <div class="timeline__item">
                                    <div class="timeline__content">
                                        Exerci lucilius per te. Dico mediocrem est ad, sea ea malis verear recusabo. Nam et erant libris tamquam, pro ei recusabo partiendo. Te sumo reque voluptaria has, ex eam vidit voluptaria. Euismod utroque ne usu, vis ne discere fabulas. Ei minim patrioque est, dicant laoreet praesent vis te. </div>
                                </div>
                                <div class="timeline__item timeline__item--right fadeIn">
                                    <div class="timeline__content">
                                        His ea quem omnium tamquam. Tractatos incorrupte eam in, ea commune rationibus sit. Est te liber nusquam neglegentur, ad nec quis posidonium. Accusam inimicus in has. Id dico eruditi deterruisset usu, nec cu paulo nullam recteque, cu molestie suavitate neglegentur sea. Accusam ocurreret percipitur ex vel. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <main class="site-main" id="main" role="main">

                        <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                        <?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>

                            <?php endwhile; // end of the loop. ?>

                    </main>
                    <!-- #main -->

                </div>
                <!-- #primary -->

                <?php get_sidebar( 'right' ); ?>

            </div>
            <!-- .row -->

        </div>
        <!-- Container end -->

    </div>
    <!-- Wrapper end -->

    <?php get_footer(); ?>
