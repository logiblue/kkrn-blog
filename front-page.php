<?php get_header(); ?>
<div class="container">



    <div class="intro">
        <p class="intro___text text-center">
        Made Basecamp and HEY for the underdogs as co-owner and CTO of 37signals. Created Ruby on Rails. Wrote REWORK, It Doesn't Have to Be Crazy at Work, and REMOTE. Won at Le Mans as a racing driver. Fought the big tech monopolies as an antitrust advocate. Invested in Danish startups.
        </p>

    </div>
    <div class="posts">
     <?php 
        // The WordPress Loop
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <article <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-content">
                        <?php // the_excerpt(); ?>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            echo 'No posts found';
        endif;

?>
    </div>
    
</div>

<?php get_footer(); ?>