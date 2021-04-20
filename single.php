<?php get_header('page'); ?>
<?php /* Template Name: Page-post */ ?>
<!-- start content -->
<section class="row">
  <div class="container">
    <div class="column">
      <div class="wrap">

        <article class="single-post">
<!--          <a href="--><?php //the_permalink(); ?><!--">-->
            <?php the_post_thumbnail('post_big') ?>
<!--          </a>-->
          <div class="item-text">
            <p class="tag"><?php the_tags('', '/'); ?></p>
            <h2><?php the_title();  ?></h2>
            <time class="date" datetime="2014-01-14T11:24"><?php the_time('M j, Y'); ?></time>

            <span class="author-post">By <?php the_author(); ?></span>
            <p class="item-content">
              <?php the_post(); ?>
              <?php the_content( ); ?>
            </p>
          </div>
        </article>

        <!-- start sidebar -->

        
        <!-- end sidebar -->
      </div>
      <?php get_sidebar(); ?>
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

