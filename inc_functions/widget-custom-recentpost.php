<?php
//widget post recenti moddato
Class Custom_Recent_Posts_Widget extends WP_Widget_Recent_Posts {

 function widget($args, $instance) {

 extract( $args );

 $title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);

 if( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
 $number = 10;

 $r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
 if( $r->have_posts() ) :

 echo $before_widget;
 if( $title ) echo $before_title . $title . $after_title; ?>
    <ul class="list-group ">
        <?php while( $r->have_posts() ) : $r->the_post(); ?>
        <li class="list-group-item">
            <div class="d-flex justify-content-left">
                <p class="font-italic text-black-50">
                    <?php the_time('F j, Y'); ?>
                </p>
            </div>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <div class="media">

                    <?php the_post_thumbnail(array(80,80), $attr = array('src'   => $src,'class' => "d-flex mr-2")); ?>

                    <div class="media-body">

                        <span class="mt-0">
                            <?php the_title(); ?>
                        </span>


                    </div>
                </div>
            </a>
        </li>

        <?php endwhile; ?>
    </ul>

    <?php
 echo $after_widget;

 wp_reset_postdata();

 endif;
 }
}
function custom_recent_widget_registration() {
 unregister_widget('WP_Widget_Recent_Posts');
 register_widget('Custom_Recent_Posts_Widget');
}
add_action('widgets_init', 'custom_recent_widget_registration');
// fine widget post recenti
