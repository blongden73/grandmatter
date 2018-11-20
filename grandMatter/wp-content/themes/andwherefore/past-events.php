<div class="grand-matter__news-wrapper aw__past-events <?php if( get_field('news_switch', 58) ): ?>news__on<?php endif; ?>">
	<div class="gm-container pad">
		<div class="grand-matter__artist-title news-title">
	      <h1>Past events</h1>
	    </div>
		<?php query_posts('cat=9&showposts=9999'); ?>
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
