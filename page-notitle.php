<?php 
    /*  
        Template name: No title
    */
    get_header() ?>

    <?php
        //checks to see if the current WordPress query has any results to loop over.
        if(have_posts()):

            while(have_posts()):the_post();?>
            
                <h2>This is my static title</h2>
                <small>Posted on: <?php the_time('F j, Y'); ?>, in <?php the_time('g:i a') ?></small>
                <p><?php the_content(); ?></p>
                <hr>
            <?php endwhile;
        else:
            echo("Don't have posts, sorry");

        endif;
    ?>


<?php get_footer(); ?>