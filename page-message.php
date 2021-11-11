<?php get_header(); ?>
<div class="p-banner">
    <div class="l-wrap">
        <div class="title">
            <h1>Message</h1>
            <h2>代表挨拶</h2>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_coconut.svg" alt="Coconut">
        <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_ttl.svg" alt="Maile Title">
        <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_ttl_sp.svg" alt="Maile Title">
    </div>
    <div class="l-wrap">
        <div class="p-breadcrumbs">
            <?php if (function_exists('aioseo_breadcrumbs')) {
                aioseo_breadcrumbs('<p id="breadcrumbs">', '</p>');
            }
            ?>
        </div>
    </div>
</div>
<section class="page_message">
    <div class="l-wrap">
        <div class="imgs">
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1-invert.svg" alt="Cloud">
        </div>
        <div class="content">
            <img class="cont_img" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1.svg" alt="Cloud">
            <div class="page_message__container">
                <img class="cloud_msg" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1-invert.svg" alt="Cloud">
                <div class="row-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/message_img.png" alt="Message Man">
                </div>
                <div class="row-2">
                    <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
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
</section>
<?php get_footer(); ?>