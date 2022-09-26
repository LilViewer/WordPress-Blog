<?php get_header(); ?>



<div class="row g-5">
    <?php

    if(have_posts() ) : while (have_posts() ) : the_post();
        get_template_part('content', get_post_format() );
    endwhile;
    endif;
    ?>


    <div class="sidebar-top">
            <?php get_sidebar(); ?>
    </div>

</div>

<?php get_footer(); ?>



