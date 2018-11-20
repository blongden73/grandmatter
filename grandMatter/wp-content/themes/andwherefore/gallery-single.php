<?php get_header('gallery'); ?>
<?php get_template_part('gallery_word')?>
<div class="gm-container pad">
    <div class="aw__gallery-intro">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="aw__gallery-intro-text"><?php the_content(); ?></div>
        <?php endwhile; else: ?>
            <p>Sorry, there are no posts to display</p>
        <?php endif; ?>
        <?php rewind_posts(); ?>
    </div>
    <div class="aw_gallery">
        <?php if( have_rows('gallery') ): ?>
            <?php while( have_rows('gallery') ): the_row(); ?>
                <div class="aw__gallery-images">
                    <div class="aw__gallery-wrapper loadOnScroll" data-url="<?php the_sub_field('image')?>">
                    </div>
                    <div class="aw__gallery-count">1</div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="aw__gallery-table">
        <?php if( have_rows('gallery') ): ?>
            <?php while( have_rows('gallery') ): the_row(); ?>
                <h2><span class="aw__gallery-index"></span><?php the_sub_field('artist_name')?></h2>
                <p><?php the_sub_field('image_name')?></p>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
