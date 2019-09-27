<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class="navbar">
      <div class="container">
        <div class="logo">
        <h1 class="float-left"><a href="<?php echo site_url() ?>">RG Installations</a></h1>
        </div>
        
        <ul class="menu">
        <li><a href="<?php echo site_url('/contact') ?>">CONTACT</a></li>
        <li><a href="<?php echo site_url('/about-us') ?>">ABOUT US</a></li>
        </ul>
        
      </div>

    </header>
