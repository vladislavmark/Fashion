<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Best Fashion store">
    <meta name="keywords" content="dresses and all">
    <meta name="author" content="Vladyslav Marchenko">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fashion</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400&family=PT+Serif:ital,wght@0,400;0,700;1,400&display=swap');
    </style>

    <?php wp_head(); ?>
</head>

<body>
    <!-- start header -->
    <header>
        <div class="header">
            <a href="<?php bloginfo("url"); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/icon/logo.png" alt="" />
            </a>
            <nav>
                <ul id="nav" class="list-nav">
                    <?php wp_nav_menu(array(
                        'theme_location'  => 'top',
                        'container'       => 'null',
                        'menu_class'      => 'list-nav',

                    )); ?>
                </ul>
            </nav>
        </div>
    </header>
    <!-- end header -->


    <!-- page title -->
    <section class="page-title">
        <div class="container">
            <div class="title">
                <span class="categories">
                    <a href="#"><?php the_tags('', '/'); ?></a>
                </span>
                <h1><?php the_title();  ?></h1>
                <p class="post-meta">
                    <time class="date-header" datetime="2014-01-14T11:24"><?php the_time('M j, Y'); ?></time>
                    <!-- <span class="author">By </span> -->

                </p>
            </div>
        </div>
    </section>
