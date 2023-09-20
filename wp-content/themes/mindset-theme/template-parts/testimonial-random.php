<?php 
$args = array(
    'post_type'      => 'fwd-testimonial', 
    'posts_per_page' => 1,
    'orderby'        => 'rand',
);
$query = new WP_Query($args);

if ($query->have_posts()) {
  
    while ($query->have_posts()) {
        $query -> the_post();
        ?>
        <h2 class = "widget-title">What they say...</h2>
        <?php
        the_content();
    }
       
    wp_reset_postdata();
}
?>