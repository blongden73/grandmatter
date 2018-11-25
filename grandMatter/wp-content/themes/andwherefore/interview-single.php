<?php get_header('gallery'); ?>
<div class="aw__article-top">
        <div class="aw__article-headline aw__interview-headline">
            <div class="gm-container pad">
                <?php the_field('headline_text') ?>
            </div>
        </div>
    <div class="aw__interview-image">
        <img class="aw__interview-left" src="<?php the_field('top_image_left') ?>">
        <div class="aw__article-intro-text">
            <div class="aw__interview-standfirst-wrapper"><?php the_field('standfirst'); ?></div>
        </div>
        <img class="aw__interview-right" src="<?php the_field('top_image_right') ?>">
    </div>
</div>
<div class="gm-container pad">
    <div class="aw__article-content-wrapper">
        <div class="aw__article-content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="aw__article--body">
                    <?php get_template_part('byline') ?>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; else: ?>
                <p>Sorry, there are no posts to display</p>
            <?php endif; ?>
            <?php rewind_posts(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
