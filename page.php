<?php get_header(); ?>

    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();
        // Include the page content template.
        get_template_part( 'template-parts/content', 'page' );
        // If comments are open or we have at least one comment, load up the comment template.
       
    endwhile;
    ?>

<?php get_footer(); ?>