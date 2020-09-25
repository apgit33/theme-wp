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
        <?php 
        // $title = explode('|', wp_get_document_title())[0];
        // $title2 = explode('|', wp_get_document_title())[1];
        // echo $title.$title2;
?>
        <a class="navbar-item" href="#">
        
            <img src="<?=PATH?>/images/logo.svg" alt="logo" width="112" height="28">
            <!-- <img src="https://bulma.io/images/bulma-logo.png" alt="logo" width="112" height="28"> -->
        <?php // echo $title ?>
    </a>
        <?php
	// } 
  ?>
    

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item">
                Home
            </a>

            <a class="navbar-item">
                Documentation
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                More
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        About
                    </a>
                    <a class="navbar-item">
                        Jobs
                    </a>
                    <a class="navbar-item">
                        Contact
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                        Report an issue
                    </a>
                </div>
            </div>
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
<div class="container">
    <div>
        <?php
            if( has_nav_menu('header-menu')) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'menu_class' => 'navbar'
                    )
                );
            }
        ?>
    </div>
