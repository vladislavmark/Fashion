<?php get_header(); ?>
<?php /* Template Name: Home Page */ ?>
<!-- start content -->
<section class="row">
    <div class="container">
        <div class="column">
            <div class="wrap">

                <?php if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>

                        <?php get_template_part('post-templates/post', get_post_format()); ?>
                        <!-- post end -->
                    <?php } //finis while 
                    ?>
                    <!-- Pagination -->
                    <?php if ($wp_query->max_num_pages > 1) : ?>
                        <script id="true_loadmore">
                            var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                            var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                            var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                        </script>
                    <?php endif; ?>

                <?php } //конец if 
                ?>
            </div>
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