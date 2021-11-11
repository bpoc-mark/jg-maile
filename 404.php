<?php get_header(); ?>
<div class="p-banner">
    <div class="l-wrap">
        <div class="title">
            <h1>404</h1>
            <h2>Page not found</h2>
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
<div class="page-404">
    <div class="l-wrap">
        <h2 class="p-404">It seems that you are a little lost ?</h2>
        <p class="p-404--sub">Sorry, we can't process this page right now !</p>

        <div class="p-details--btn">
            <a href="/">
                <p>HOME</p>
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/details_btn.svg" alt="">
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>