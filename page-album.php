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
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1.svg" alt="">
        </div>
        <div class="page_album__container">
            <div class="content">
                <div class="swiper">
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
            <div class="page_album__gallery--content container__img-holder">
                <div class="item ">
                    <img onclick="openLightbox();toSlide(1)" loading=lazy src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_1.jpeg" alt="">
                </div>
                <div class="item">
                    <img onclick="openLightbox();toSlide(2)" loading=lazy src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_2.jpg" alt="">
                </div>
                <div class="item">
                    <img onclick="openLightbox();toSlide(3)" loading=lazy src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_3.jpg" alt="">
                </div>
                <div class="item">
                    <img onclick="openLightbox();toSlide(4)" loading=lazy src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_4.jpg" alt="">
                </div>

                <div id="Lightbox1" class="modal">
                    <span class="close pointer" onclick="closeLightbox()">&times;</span>
                    <div class="modal-content">
                        <div class="slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_1.jpeg" class="image-slide" />
                        </div>
                        <div class="slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_2.jpg" class="image-slide" />
                        </div>
                        <div class="slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_3.jpg" class="image-slide" />
                        </div>
                        <div class="slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_4.jpg" class="image-slide" />
                        </div>

                        <div class="dots">
                            <div class="col">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_1.jpeg" class="modal-preview hover-shadow" onclick="toSlide(1)">
                            </div>
                            <div class="col">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_2.jpg" class="modal-preview hover-shadow" onclick="toSlide(2)">
                            </div>
                            <div class="col">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_3.jpg" class="modal-preview hover-shadow" onclick="toSlide(3)">
                            </div>
                            <div class="col">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_4.jpg" class="modal-preview hover-shadow" onclick="toSlide(4)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page_album__gallery--content container__img-holder">
                <div class="item">
                    <img onclick="openLightbox2();toSlide2(1)" loading=lazy src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_5.jpg" alt="">
                </div>
                <div class="item">
                    <img onclick="openLightbox2();toSlide2(2)" loading=lazy src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_6.jpg" alt="">
                </div>
                <div class="item">
                    <img onclick="openLightbox2();toSlide2(3)" loading=lazy src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_7.jpg" alt="">
                </div>
                <div class="item">
                    <img onclick="openLightbox2();toSlide2(4)" loading=lazy src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_8.jpg" alt="">
                </div>

                <div id="Lightbox2" class="modal">
                    <span class="close pointer" onclick="closeLightbox2()">&times;</span>
                    <div class="modal-content">
                        <div class="slide2">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_5.jpg" class="image-slide2" />
                        </div>
                        <div class="slide2">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_6.jpg" class="image-slide2" />
                        </div>
                        <div class="slide2">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_7.jpg" class="image-slide2" />
                        </div>
                        <div class="slide2">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_8.jpg" class="image-slide2" />
                        </div>

                        <div class="dots">
                            <div class="col">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_5.jpg" class="modal-preview2 hover-shadow" onclick="toSlide2(1)">
                            </div>
                            <div class="col">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_6.jpg" class="modal-preview2 hover-shadow" onclick="toSlide2(2)">
                            </div>
                            <div class="col">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_7.jpg" class="modal-preview2 hover-shadow" onclick="toSlide2(3)">
                            </div>
                            <div class="col">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_8.jpg" class="modal-preview2 hover-shadow" onclick="toSlide2(4)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page_album__gallery--content container__img-holder">
                <div class="item">
                    <img onclick="openLightbox3();toSlide3(1)" loading=lazy src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_9.jpg" alt="">
                </div>
                <div class="item">
                    <img onclick="openLightbox3();toSlide3(2)" loading=lazy src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_10.jpg" alt="">
                </div>
                <div class="item">
                    <img onclick="openLightbox3();toSlide3(3)" loading=lazy src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_11.jpg" alt="">
                </div>
                <div class="item">
                    <img onclick="openLightbox3();toSlide3(4)" loading=lazy src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_12.jpg" alt="">
                </div>

                <div id="Lightbox3" class="modal">
                    <span class="close pointer" onclick="closeLightbox3()">&times;</span>
                    <div class="modal-content">
                        <div class="slide3">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_9.jpg" class="image-slide2" />
                        </div>
                        <div class="slide3">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_10.jpg" class="image-slide2" />
                        </div>
                        <div class="slide3">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_11.jpg" class="image-slide2" />
                        </div>
                        <div class="slide3">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_12.jpg" class="image-slide2" />
                        </div>

                        <div class="dots">
                            <div class="col">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_9.jpg" class="modal-preview3 hover-shadow" onclick="toSlide3(1)">
                            </div>
                            <div class="col">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_10.jpg" class="modal-preview3 hover-shadow" onclick="toSlide3(2)">
                            </div>
                            <div class="col">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_11.jpg" class="modal-preview3 hover-shadow" onclick="toSlide3(3)">
                            </div>
                            <div class="col">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_12.jpg" class="modal-preview3 hover-shadow" onclick="toSlide3(4)">
                            </div>
                        </div>
                    </div>
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