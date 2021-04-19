<article class="item-post">
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('post_big') ?>
    </a>
    <div class="item-text">
        <p class="tag"><?php the_tags('', '/'); ?></p>
        <h2><?php the_title();  ?></h2>
        <time class="date" datetime="2014-01-14T11:24"><?php the_time('M j, Y'); ?></time>

        <span class="author-post">By <?php the_author_posts_link(); ?></span>
        <p class="item-content">
        <?php the_excerpt(); ?>
        </p>
    </div>
</article>