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
    <div class="grand-matter__artist-content">
        <?php if( have_rows('portfolio') ): ?>
          <div class="grand-matter__artist-col-1">
            <?php while( have_rows('portfolio') ): the_row();
                  $text = get_sub_field('text');
                  $video1 = get_sub_field('video1');
                  $video2 = get_sub_field('video1');
              ?>
              		<?php if( have_rows('image') ): ?>
              		    <?php while( have_rows('image') ) : the_row(); ?>
                          <div data-url="<?php the_sub_field('image_file'); ?>" class="grand-matter__portfolio-image">
                              <img src="<?php the_sub_field('image_file'); ?>">
                              <div class="grand-matter__artist-hover">
                                <?php get_template_part('left-arrow') ?>
                              </div>
                          </div>
              		    <?php endwhile; ?>
              		<?php endif; ?>
                  <?php if($video1): ?>
                  <div class="grand-matter__artist-video">
                  		  <div class="video-wrapper">
                          <?php the_sub_field('video1'); ?>
                        </div>
                	</div>
                  <?php endif; ?>
                  <?php if($text): ?>
                      <div class="text"><?php the_sub_field('text'); ?></div>
                  <?php endif; ?>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php if( have_rows('portfolio') ): ?>
          <div class="grand-matter__artist-col-2">
            <?php while( have_rows('portfolio') ): the_row();
                  $text2 = get_sub_field('text2');
                  $video1 = get_sub_field('video1');
                  $video2 = get_sub_field('video1');
              ?>
                  <?php if( have_rows('image-2') ): ?>
                      <?php while( have_rows('image-2') ) : the_row(); ?>
                          <div data-url="<?php the_sub_field('image'); ?>" class="grand-matter__portfolio-image">
                              <img src="<?php the_sub_field('image'); ?>">
                          </div>
                      <?php endwhile; ?>
                  <?php endif; ?>
                  <?php if($video2): ?>
                  <div class="grand-matter__artist-video">
                        <div class="video-wrapper">
                          <?php the_sub_field('video2'); ?>
                        </div>
                  </div>
                  <?php endif; ?>
                  <?php if($text2): ?>
                      <div class="text"><?php the_sub_field('text2'); ?></div>
                  <?php endif; ?>
            <?php endwhile; ?>
            </div> 
        <?php endif; ?>
    </div>
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
