<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('name') ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/deploy/style.css"/>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98496212-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<div class="grand-matter__header">
    <div class="gm-container">
        <div class="grand-matter__logo">
          <?php get_template_part('main-logo');?>
        </div>
        <div class="grand-matter__menu">
          <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </div>
        <div class="grand-matter__secondary-logo"></div>
        <div class="grand-matter__hamburger mobile-only">
          <div class="ham-top"></div>
          <div class="ham-middle"></div>
          <div class="ham-bottom"></div>
        </div>
    </div>
</div>
