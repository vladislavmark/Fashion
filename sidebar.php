    <aside class="sidebar">
       
        <div class="about">
        <p class="text-a">About-the-author</p>
        </div>
        <?php // параметры по умолчанию
$posts = get_posts( array(
	'numberposts' => 1,
	'category'    => "author",
	'orderby'     => 'date',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
	setup_postdata($post);
    ?>
    <div class="block-author">
        <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('post_sidebar') ?>
    </a>
        
            <div class="author-content">
                <p id="author-name"><?php the_title(); ?></p>
                <p class="text-hoby"><?php the_tags('', '/'); ?></p>
                
                <?php the_excerpt(); ?>
               
                <div class="more">
                    <a href="<?php the_permalink(); ?>" class="more-reading">Continue Reading</a>
                </div>
            </div>
        </div>
        <?php 
}

wp_reset_postdata(); // сброс ?>


        <div class="about">
            <p class="text-a">Featured posts</p>
        </div>
        <?php
        $posts = get_posts(array(
            'numberposts' => 3,
            'orderby'     => 'date',
            'exclude'     => array("99"),
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ));

        foreach ($posts as $post) {
            setup_postdata($post);
        ?>
            <div class="block-post">
                <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('post_sidebar') ?>

                </a>
                <div class="block-content">
                    <p class="tag"><?php the_tags('', '/'); ?></p>
                    <h3><?php the_title();  ?></h3>
                    <time class="date" datetime="2014-01-14T11:24"><?php the_time('M j, Y'); ?></time>

                    <span class="author-post">By <?php the_author_posts_link(); ?></span>
                </div>
            </div>

        <?php

        }

        wp_reset_postdata();
        ?>

 <?php dynamic_sidebar('right_sidebar'); ?>

    </aside>