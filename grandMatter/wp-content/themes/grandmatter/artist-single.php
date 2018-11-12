<?php get_header(); ?>

<div class="grand-matter__artist-featured">
    <img src="<?php the_field('main_image'); ?>">
</div>

<div class="gm-container pad">
    <div class="grand-matter__artist-intro">
      <div class="grand-matter__artist-intro--wrapper">
        <div class="grand-matter__featured-name">
            <h1><?php the_field('first_name') ?><span><?php the_field('last_name') ?></span></h1>
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
      <div class="grand-matter__artist-intro--image">
        <img src="<?php the_field('artist_image'); ?>">
      </div>
    </div>
    <div class="grand-matter__artist-content artist-update">
            <?php if( have_rows('portfolio') ): ?>
                <?php while( have_rows('portfolio') ): the_row();
                    // vars
                    $image = get_sub_field('image');
                    $video = get_sub_field('video');
                    ?>
                    <div class="grand-matter__artist-media">
                        <img src="<?php echo $image; ?>">
                        <?php echo $video; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
    </div>
    <div class="grand-matter__artist-content artist-update empty"></div>
</div>
<div class="grand-matter__lightbox">
    <div class="grand-matter__lightbox-close">
      <?php get_template_part('cross'); ?>
    </div>
    <div class="grand-matter__lightbox-logo">
      <?php get_template_part('main-logo');?>
    </div>
    <div class="grand-matter__lightbox-right">
      <?php get_template_part('right-arrow');?>
    </div>
    <div class="grand-matter__lightbox-left">
      <?php get_template_part('left-arrow');?>
    </div>
</div>
<?php get_footer(); ?>
