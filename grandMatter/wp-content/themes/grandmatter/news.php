<div class="grand-matter__news-wrapper <?php if( get_field('news_switch', 968) ): ?>news__on<?php endif; ?>">
<div class="gm-container pad">
    <div class="grand-matter__intro">
      <?php $the_query = new WP_Query( 'page_id=968' ); ?>
          <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
              <?php the_content(); ?>
          <?php endwhile;?>
      <?php rewind_posts(); ?>
      <div class="grand-matter__more-news">
      	<a href="http://grandmatter.com/news/"><h1>View all news</h1></a>
      </div>
    </div>
  </div>
	<div class="gm-container pad">
		<div class="grand-matter__artist-title news-title">
	      <h1>News</h1>
	    </div>
		<?php query_posts('cat=4&showposts=4'); ?>
	        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="grand-matter__artist-image news-image">
                  <?php if ( get_field( 'url' ) ): ?>
						<a href="<?php the_field('url'); ?>"></a>
					<?php else: // field_name returned false ?>
						<a href="<?php the_permalink(); ?>"></a>
				  <?php endif; // end of if field_name logic ?>
                    <div class="grand-matter__featured-image news-featured-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="grand-matter__headline-news">
                        <h1><?php the_title(); ?></h1>
                        <p><?php  the_excerpt(); ?></p>
                        <?php if ( get_field( 'link_text' ) ): ?>
							<p class="cta"><?php the_field('link_text'); ?></p>
						<?php else: // field_name returned false ?>
							<p class="cta">Read More</p>
						<?php endif; // end of if field_name logic ?>
                    </div>
                </div>
			<?php endwhile; else: ?>
	    		<p>Sorry, there are no posts to display</p>
	    	<?php endif; ?>
	    <?php rewind_posts(); ?>	
	</div>
</div>