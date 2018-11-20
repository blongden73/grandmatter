<div class="grand-matter__artists">
  <div class="gm-container pad">
    <div class="grand-matter__intro">
      <?php $the_query = new WP_Query( 'page_id=7' ); ?>
          <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
              <?php the_content(); ?>
          <?php endwhile;?>
      <?php rewind_posts(); ?>
    </div>
  </div>
  <div class="gm-container pad">
      <div class="grand-matter__artist-title">
        <h1>New season</h1>
      </div>
  </div>

  <div class="aw__season-divider">
    <div class="gm-container pad">
        <h1>The first collection of &wherefore explores blurred boundaries, diversity and identity within the visual arts, and in particular how this can be used to challenge social labels and traditional conventions</h1>
    </div>
  </div>
  <div class="gm-container pad">
      <?php query_posts('cat=4&showposts=8'); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="aw__article-wrapper">
                <div class="grand-matter__artist-image">
                  <a href="<?php the_permalink(); ?>"></a>
                    <div class="grand-matter__featured-image loadOnScroll" data-url="<?php the_post_thumbnail_url(); ?>">
                    </div>
                </div>
                <div class="aw__content-wrapper">
                    <div class="aw__label">
                        <h1><?php the_field('label') ?></h1>
                    </div>
                    <div class="aw__title-article">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="aw__excerpt">
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <div class="aw__label byline">
                        <h1>by <?php the_field('byline') ?></h1>
                    </div>
                </div>
            </div>
          <?php endwhile; else: ?>
      	<p>Sorry, there are no posts to display</p>
      <?php endif; ?>
      <?php rewind_posts(); ?>
  </div>
</div>
