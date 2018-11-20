<div class="grand-matter__animation">
    <?php if( have_rows('slide', 11) ): ?>
      <?php while( have_rows('slide', 11) ): the_row(); ?>
          <div style="background-image:url(<?php the_sub_field('bg_image'); ?>);background-color:<?php the_sub_field('colour'); ?>" class="<?php the_sub_field('layout'); ?> grand-matter__slide">
            <?php the_sub_field('type'); ?>
          </div>
      <?php endwhile; ?>
    <?php endif; ?>
</div>
<div class="grand-matter__splash">
  <?php if( have_rows('splash_image', 11) ): ?>
    <?php while( have_rows('splash_image', 11) ): the_row(); ?>

        <div class="grand-matter__image" data-image="<?php the_sub_field('image'); ?>"></div>

    <?php endwhile; ?>

  <?php endif; ?>
    <div class="grand-matter__type">
        <div class="grand-matter__logo-top">
          <?php get_template_part('logo-top') ?>
        </div>
        <div class="grand-matter__logo-bottom">
          <?php get_template_part('logo-bottom') ?>
        </div>
    </div>
    <div class="grand-matter__arrow">
      <?php get_template_part('arrow') ?>
    </div>
</div>
