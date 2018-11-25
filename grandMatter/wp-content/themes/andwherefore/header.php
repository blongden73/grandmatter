<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('name') ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/deploy/style.css"/>
<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url') ?>/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url') ?>/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url') ?>/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url') ?>/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php bloginfo('template_url') ?>/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php bloginfo('template_url') ?>/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
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
        <div class="grand-matter__secondary-logo"></div>
        <div class="grand-matter__hamburger">
          <div class="ham-top"></div>
          <div class="ham-middle"></div>
          <div class="ham-bottom"></div>
        </div>
    </div>
    <div class="grand-matter__menu">
     <div class="gm-container">
         <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
         <p>&wherefore is a new editorial platform made to start conversations, ask all the right questions, & delve into the ‘why’ in creativity.</p>
     </div>
    </div>
</div>
