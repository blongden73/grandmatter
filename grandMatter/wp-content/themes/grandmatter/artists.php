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
      <h1>Artists</h1>
    </div>
      <?php query_posts('cat=2&showposts=8'); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="grand-matter__artist-image">
                  <a href="<?php the_permalink(); ?>"></a>
                    <div class="grand-matter__featured-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="grand-matter__artist-name">
                        <h1><?php the_field('first_name') ?><span><?php the_field('last_name') ?></span></h1>
                    </div>
                </div>
          <?php endwhile; else: ?>
      	<p>Sorry, there are no posts to display</p>
      <?php endif; ?>
      <?php rewind_posts(); ?>
  </div>
</div>
