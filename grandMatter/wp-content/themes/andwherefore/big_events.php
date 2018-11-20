<div class="aw__big-news yellow">
    <div class="gm-container pad">
        <?php query_posts('cat=10&showposts=1'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="aw__big-news-image loadOnScroll" data-url="<?php the_post_thumbnail_url(); ?>">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="aw__big-news-title">
                    <h2 class="aw__label">LABEL</h2>
                    <h1><?php the_title(); ?></h1>
                    <div class="aw__excerpt"><?php the_excerpt(); ?></div>
                </div>
            <?php endwhile; else: ?>
                <p>Sorry, there are no posts to display</p>
            <?php endif; ?>
        <?php rewind_posts(); ?>
    </div>
</div>
