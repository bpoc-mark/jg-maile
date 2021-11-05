<?php get_header(); ?>
<div class="p-banner">
    <div class="l-wrap">
        <div class="title">
            <h1>Photo album</h1>
            <p>社内フォトアルバム</p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_coconut.svg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_ttl.svg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_ttl_sp.svg" alt="">
    </div>
    <div class="l-wrap">
        <div class="p-breadcrumbs">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
        </div>
    </div>
</div>
<div class="page_album">
    <div class="l-wrap">
        <div class="album_img">
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1.svg" alt="">
            <img class="p-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1.svg" alt="">
            <img class="p-slide__reverse" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1-invert.svg" alt="">
        </div>
        <div class="page_album__container">
            <div class="content">
                <div class="swiper gallery-top">
                    <div class="swiper-wrapper">
                        <?php
                        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                        $args = array(
                            'post_type' => 'photo',
                            'post_status' => 'publish',
                            'posts_per_page' => 12,
                            'paged' => $paged,
                        );
                        $the_query = new WP_Query($args);
                        ?>
                        <?php if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <?php the_post_thumbnail('full', array('class' => 'swiper-slide')); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="buttons">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="page_album__gallery">
        <div class="l-wrap">
            <div class="swiper gallery-thumbs thumbsSlider=""">
                <div class="page_album__gallery--content swiper-wrapper">
                    <?php
                    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                    $args = array(
                        'post_type' => 'photo',
                        'post_status' => 'publish',
                        'posts_per_page' => 12,
                        'paged' => $paged,
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="item swiper-slide">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="p-details--btn">
            <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>">
                <p>ENTRY</p>
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/details_btn.svg" alt="">
            </a>
        </div>
    </div>


</div>
<?php get_footer(); ?>