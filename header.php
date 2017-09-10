<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog</title>
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <!-- fonts roboto -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,700|Roboto+Mono:400,700" rel="stylesheet"> 
  <!-- css -->
  <link rel="stylesheet" href="<?php echo ROOT_PATH . '/css/style.css'?>">
  <?php wp_head(); ?>
</head>
<body>
  <!-- HEADER -->
  <header class="header-bg">
    <div class="header-container">
      <!-- home -->
      <div>
        <span class="logo">
          <a href="<?php echo home_url('/'); ?>">
            <i class="fa fa-home"></i>
          </a>
        </span>
      </div>
    </div>
  </header>
  <!-- BANNER -->
  <section class="banner-bg">
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>
  </section>