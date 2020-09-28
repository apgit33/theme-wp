<?php define('PATH',get_template_directory_uri()); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>

<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="<?php home_url() ?>">
            <img src="<?=PATH?>/images/logo.svg" alt="logo" width="112" height="28">
        </a>
        
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbartop">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbartop" class="navbar-menu">
        <div class="navbar-start">
            <!-- <a class="navbar-item"> -->
            <?php
            if( has_nav_menu('header-menu')) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'container' => false,
                        'menu_class' => 'navbar-item'
                    )
                );
            }
        ?>
            <!-- </a> -->
            </div>

        <div class="navbar-end">

        </div>
  </div>
</nav>

<section class="hero">
    <div class="hero-body">
        <div class="container">

        </div>
    </div>
</section>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<!-- <div class="container"> -->