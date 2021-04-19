<?php get_header('page'); ?>
<!-- start content -->
<section class="row">
  <div class="container">
    <div class="column">
      <div class="wrap">

        <?php
        $posts = get_posts(array(
          'numberposts' => 1,
          'orderby'     => 'date',
          'exclude'     => array("99"),
          'post_type'   => 'post',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ));

        foreach ($posts as $post) {
          setup_postdata($post);
        ?>
          <article class="item-post post">
            
            <div class="item-text">
              <p class="tag"><?php the_tags('', '/'); ?></p>
              <h2><?php the_title();  ?></h2>
              <time class="date" datetime="2014-01-14T11:24"><?php the_time('M j, Y'); ?></time>

              <span class="author-post">By <?php the_author(); ?></span>
              <p class="item-content">
                <?php the_post(); ?>
                <?php the_content(); ?>
              </p>
            </div>
          </article>

        <?php

        }

        wp_reset_postdata();
        ?>

        <!-- start sidebar -->

        <?php get_sidebar(); ?>
        <!-- end sidebar -->
      </div>
    </div>
</section>
<!-- end content -->

<!-- start slider -->
<section class="wrapper">
  <h4>Follow our @<?php bloginfo('name') ?></h4>
  <div class="slider">
    <div class="slider__item filter">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/slider/01.jpeg" alt="" />
    </div>
    <div class="slider__item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/slider/02.jpeg" alt="" />
    </div>
    <div class="slider__item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/slider/03.jpeg" alt="" />
    </div>
    <div class="slider__item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/slider/04.jpeg" alt="" />
    </div>
    <div class="slider__item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/slider/05.jpeg" alt="" />
    </div>
    <div class="slider__item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/slider/06.jpeg" alt="" />
    </div>
  </div>
</section>
<!-- end slider -->

<?php get_footer(); ?>