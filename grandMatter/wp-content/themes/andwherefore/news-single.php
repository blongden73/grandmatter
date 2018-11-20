<?php get_header(); ?>

<div class="gm-container pad">
    <div class="grand-matter__artist-intro">
        <div class="grand-matter__artist-featured">
            <img src="<?php the_field('main_image'); ?>">
        </div>
      <div class="grand-matter__artist-intro--wrapper">
        <div class="grand-matter__featured-name">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="grand-matter__artist-description">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; else: ?>
                <p>Sorry, there are no posts to display</p>
            <?php endif; ?>
            <?php rewind_posts(); ?>
        </div>
      </div>
    </div>
</div>
<?php get_footer(); ?>
