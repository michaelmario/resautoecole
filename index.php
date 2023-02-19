<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Mauricode Theme</title>
    <link rel type="stylesheet" href="<?php echo get_template_directory_uri() .'/dist/css/app.css' ?>">
    <?php wp_head() ?>
  
  </head>
  <body <?php body_class(); ?>>
     <?php wp_body_open(); ?>
    <noscript>
      <strong>We're sorry but theme-x-engine doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <div id="app"></div>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() .'/dist/chunk-vendors.js'?>">      
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() .'/dist/app.js'?>"></script>
     <?php wp_footer() ?>
</html>

