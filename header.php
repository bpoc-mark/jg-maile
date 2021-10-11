<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?></title>

    <?php wp_head(); ?>
    <?php wp_footer(); ?>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/release/css/style.css">

</head>

<body <?php body_class(); ?>>

    <main>
        <div class="page__header">
            <div class="l-wrap">
                <h1>MAILE.CO.,LTD <span>RECRUIT SITE</span></h1>
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/logo.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_coconut.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_sun.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_birds.svg" alt="">
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_ttl.svg" alt="">

        </div>
        <div class="page__content">