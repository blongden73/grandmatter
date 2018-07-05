<div class="grand-matter__about">
  <div class="grand-matter__type">
      <div class="grand-matter__logo-top">
        <?php get_template_part('logo-top') ?>
      </div>
      <div class="grand-matter__logo-bottom">
        <?php get_template_part('logo-bottom') ?>
      </div>
  </div>
</div>
<div class="gm-container pad">
  <div class="grand-matter__about-intro">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="grand-matter__about-title">
          <?php the_title(); ?>
        </div>
        <div class="grand-matter__about-description">
          <?php the_content(); ?>
        </div>
    <?php endwhile; else: ?>
    <p>Sorry, there are no posts to display</p>
    <?php endif; ?>
    <?php rewind_posts(); ?>
  </div>
  <div class="grand-matter__mission">
      <div class="grand-matter__mission-title">
        <h1>Mission</h1>
      </div>
      <div class="grand-matter__mission-image">
        <img src="<?php the_field('image'); ?>">
      </div>
      <div class="grand-matter__mission-description">
        <?php the_field('mission_text') ?>
      </div>
  </div>
  <div class="grand-matter__people">
    <div class="grand-matter__people-title">
    Meet the team
    </div>
    <?php if( have_rows('person') ): ?>
        <?php while( have_rows('person') ): the_row();?>
                  <div class="grand-matter__person">
                    <div class="grand-matter__image-wrapper">
                      <img src="<?php the_sub_field('image') ?>" >
                      <div class="grand-matter__person-name">
                        <?php the_sub_field('first_name') ?>
                        <span><?php the_sub_field('last_name') ?></span>
                      </div>
                    </div>
                    <div class="text">
                      <?php the_sub_field('description'); ?>
                    </div>
                  </div>
        <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
