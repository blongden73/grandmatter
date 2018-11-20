<div class="aw__big-type-wrapper">
    <div class="gm-container pad">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="aw__big-type-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; else: ?>
        <p>Sorry, there are no posts to display</p>
        <?php endif; ?>
        <?php rewind_posts(); ?>
    </div>
</div>
