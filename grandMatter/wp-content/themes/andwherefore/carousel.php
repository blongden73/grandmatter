<div class="aw__splash">
    <div class="aw__top-image">
        <?php if( have_rows('splash_image', 118) ): ?>
            <?php while( have_rows('splash_image', 118) ): the_row(); ?>
                <img class="aw__splash-image" src="<?php the_sub_field('image'); ?>">
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="aw__splash-text">
        <div class="gm-container">
            <div class="aw__trails">
                <?php query_posts('cat=4&showposts=4'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="aw__trail-text">
                            <span class="aw__label">LABEL</span>
                            <span class="aw__title"><?php the_title(); ?></span>
                        </div>
                    <?php endwhile; else: ?>
                        <p>Sorry, there are no posts to display</p>
                    <?php endif; ?>
                <?php rewind_posts(); ?>
            </div>
            <h1><span class="cond">The</span> <span class="wide">Boundless</span> <span class="cond">Collection</span></h1>
            <div class="aw__description">
                <p>
                    &wherefore is a new editorial platform made to start conversations, ask all the right questions, & delve into the ‘why’ in creativity.
                </p>
            </div>
        </div>
    </div>
</div>
