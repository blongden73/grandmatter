<div id="contact" class="grand-matter__footer">
    <div class="gm-container pad aw__footer-intro-wrapper">
        <div class="aw__footer-intro">
            <h1>&wherefore is a new editorial platform made to start conversations, ask all the right questions, & delve into the ‘why’ in creativity.</h1>
        </div>
    </div>
    <div class="gm-container pad">
      <div class="aw__email-intro">
          <h2>Each month we will send a carfully curated email to open your heart and mind.</h2>
      </div>
      <div class="grand-matter__footer-col">
        <?php get_template_part('newsletter'); ?>
      </div>
    </div>
  <div class="gm-container pad">
      <div class="grand-matter__footer-col">
          <div class="grand-matter__footer-info--wrapper">
            <h2><a href="mailto:hello@grandmatter.com">hello@grandmatter.com</a></h2>
            <h2>+44(0)20 8520 9053</h2>
          </div>
      </div>
      <div class="grand-matter__footer-col">
        <div class="grand-matter__footer-info--wrapper">
          <h2>Studio 3 <br/> 45 Lynmouth Rd <br/> London <br/> E17 8AG</h2>
        </div>
      </div>
      <div class="grand-matter__footer-col social">
        <?php if( have_rows('social', 46) ): ?>
          <?php while( have_rows('social', 46) ): the_row(); ?>
              <a target="_blank" href="<?php the_sub_field('link'); ?>">
                  <div class="grand-matter__social-icon">
                      <?php the_sub_field('icon'); ?>
                  </div>
              </a>
          <?php endwhile; ?>
        <?php endif; ?>
        <div class="grand-matter__footer-info--wrapper">
          <h2>&copy; Grand Matter 2017 <br/> Company No. 1067 4402</h2>
        </div>
      </div>
      <div class="grand-matter__footer-col">
        <div class="grand-matter__footer-info--wrapper">
          <?php get_template_part('full_logo'); ?>
        </div>
      </div>
  </div>
</div>
<script src="<?php bloginfo('template_url') ?>/deploy/js/main.js"></script>
</body>
</html>
