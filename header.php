<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/release/css/style.css">
    <!-- SWIPER -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script type="text/javascript" src="//webfonts.sakura.ne.jp/js/sakurav3.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

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

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <main style="overflow: hidden;">
        <div class="page__header">
            <div id="overlay" class="overlay"></div>
            <div class="nav">
                <div class="hamburger">
                    <span></span>
                    <span></span>

                    <ul class="menu">
                        <li>
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/footer/list_icon.svg" alt="">
                                <p>ホーム</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_path('career')) ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/footer/list_icon.svg" alt="">
                                <p>採用情報</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_path('whats')) ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/footer/list_icon.svg" alt="">
                                <p>まいれとは？</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_path('about')) ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/footer/list_icon.svg" alt="">
                                <p>会社概要</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_path('message')) ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/footer/list_icon.svg" alt="">
                                <p>代表あいさつ</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_path('philosophy')) ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/footer/list_icon.svg" alt="">
                                <p>理念と求める人材</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_path('trainer')) ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/footer/list_icon.svg" alt="">
                                <p>トレーナー</p>
                            </a>

                        </li>
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_path('album')) ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/footer/list_icon.svg" alt="">
                                <p>社内フォトアルバム</p>
                            </a>

                        </li>
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_path('interview')) ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/footer/list_icon.svg" alt="">
                                <p>先輩からの声</p>
                            </a>

                        </li>
                        <li>
                            <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/footer/list_icon.svg" alt="">
                                <p>よくある質問・フォーム</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="entry">
                    <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/arrow_r.svg" alt="">
                        <p>ENTRY</p>
                    </a>
                </div>
            </div>
            <div class="l-wrap">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/release/image/top/logo.svg" alt="">
                </a>
            </div>
        </div>
        <div class="page__content">