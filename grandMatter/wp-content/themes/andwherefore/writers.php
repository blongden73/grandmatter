<div class="grand-matter__news-wrapper aw__past-events <?php if( get_field('news_switch', 58) ): ?>news__on<?php endif; ?>">
	<div class="gm-container pad">
		<div class="grand-matter__intro">
	      <?php $the_query = new WP_Query( 'page_id=161' ); ?>
	          <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
	              <?php the_content(); ?>
	          <?php endwhile;?>
	      <?php rewind_posts(); ?>
	    </div>
		<div class="grand-matter__artist-title news-title">
	      <h1>Writers</h1>
	    </div>
		<?php query_posts('cat=11&showposts=9999'); ?>
	        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="grand-matter__artist-image news-image">
                    <div class="grand-matter__featured-image news-featured-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="grand-matter__headline-news">
                        <h1><?php the_title(); ?></h1>
						<h2><?php the_field('role'); ?></h2>
                        <p><?php  the_excerpt(); ?></p>
						<h2><?php the_field('contact'); ?></h2>
                    </div>
                </div>
			<?php endwhile; else: ?>
	    		<p>Sorry, there are no posts to display</p>
	    	<?php endif; ?>
	    <?php rewind_posts(); ?>
	</div>
</div>
