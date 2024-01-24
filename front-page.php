<?php get_header(); ?>
<div class="container">



    <div class="intro center">
        <p class="center fw-300 fs-small mxw-700 moa">
        I help businesses of all sizes to shape their digital presence. I've crafted websites for the last 5 years mostly working on WordPress and PHP. I love good design and adore simple and effective solutions. Always learning and expriment on different stuff. I've volunteered on multiple NGO's get online and make an impact on their actions.
        </p>
        <a class="center touch" href="mailto:hey@kkrn.work">GET IN TOUCH</a>

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