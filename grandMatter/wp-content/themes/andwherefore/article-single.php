<?php get_header('gallery'); ?>
<div class="aw__article-top">
        <div class="aw__article-headline">
            <div class="gm-container pad">
                <?php the_field('headline_text') ?>
            </div>
        </div>
    <div class="aw__article-image">
        <img src="<?php the_field('top_image') ?>">
    </div>
</div>
<div class="gm-container pad">
    <div class="aw__article-content-wrapper">
        <div class="aw__article-intro-text">
        <?php the_field('standfirst'); ?>
        </div>
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
