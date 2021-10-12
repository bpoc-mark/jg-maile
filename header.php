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


    <script>
        (function(d) {
            var config = {
                    kitId: 'whn3pzs',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
</head>

<body <?php body_class(); ?>>

    <main>
        <div class="page__header">
            <div class="l-wrap">
                <h1>MAILE.CO.,LTD <br><span>RECRUIT SITE</span></h1>
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/logo.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_coconut.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_sun.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_birds.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_birds_sp.svg" alt="">
            </div>
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_ttl.svg" alt="">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_ttl_sp.svg" alt="">

        </div>
        <div class="page__content">