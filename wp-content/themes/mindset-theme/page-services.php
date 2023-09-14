<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
<?php

    while(have_posts()) :
        ?>
            <h1><?php the_title(); ?></h1>
        <?php

        $args = array(
            'post_type'      => 'fwd-service',
            'posts_per_page' => -1,
            'order'          => 'ASC',
            'orderby'        => 'title'
        );
         
        $query = new WP_Query( $args );
         
        if ( $query -> have_posts() ) {
        
            while ( $query -> have_posts() ) {
                $query -> the_post();
                echo '<a href="#'. esc_attr( get_the_ID() ) .'">'. esc_html( get_the_title() ) .'</a>';
            }
            wp_reset_postdata();
        }

        $taxonomy = 'fwd-services';
        $terms    = get_terms(
            array(
                'taxonomy' => $taxonomy
            )
        );
        if ( $terms && ! is_wp_error($terms) ) :
            foreach ( $terms as $term ) :

                echo '<h2>' . esc_html( $term->name ) . '</h2>';

                $args = array(
                    'post_type'      => 'fwd-service',
                    'posts_per_page' => -1,
                    'orderby'        => 'title',
                    'order'          => 'ASC',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'fwd-services', 
                            'field'    => 'slug',
                            'terms'    => $term->slug,
                        ),
                    ),
                );

                $query = new WP_Query( $args );

                // Check if there are posts for the current term
                if ( $query->have_posts() ) :
                    ?>
                    <ul>
                    <?php
                    while( $query->have_posts() ) :
                        $query->the_post(); 
                        $service_id = get_the_ID();
                        $service_title = get_the_title();
                        ?>
                        <li><a href="#service-<?php echo $service_id; ?>"><?php echo $service_title ?></a></li>
                        <?php
                    endwhile;
                    ?>
                    </ul>
                    <?php
                    while( $query->have_posts() ) :
                        $query->the_post(); 
                        ?>
                        <article>
                            <a href="<?php the_permalink(); ?>">
                                <h2><?php the_title(); ?></h2>
                                
                            </a>
                            <?php 
                                $service_content = get_field('service_text');
                                if($service_content){
                                    echo '<p>'.$service_content.'</p>';
                                }   
                                ?>
                            <?php the_excerpt(); ?>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endwhile; ?>


</main><!-- #primary -->

<?php
get_footer();
