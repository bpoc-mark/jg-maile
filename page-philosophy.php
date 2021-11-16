<?php get_header(); ?>
<div class="p-banner">
    <div class="l-wrap">
        <div class="title">
            <p class="title__main">Philosophy</p>
            <h1 class="title__sub">理念と求める人材</h1>
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
<section class="page_philosophy">
    <div class="l-wrap">
        <div class="page_philosophy__container">
            <img class="phil_cloud-1 p-upDown" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1.svg" alt="Cloud">
            <img class="phil_cloud-2 p-downUp" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1-invert.svg" alt="Cloud">
            <div class="content">
                <p class="content__ttl">Philosophy</p>
                <h2 class="content__sub">理　念</h2>
                <p class="content__desc">
                    テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                </p>
            </div>
        </div>
    </div>
    <div class="page_philosophy__video">
        <div class="l-wrap">
            <img class="ph_cloud p-upDown" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_2-invert.svg" alt="Cloud">
            <div class="page_philosophy__video--container">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/release/image/top/logo.svg" alt="Maile Logo">
                <h3 class="ttl">MAILE株式会社<br>
                    7つのお約束</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/youtube.jpg" alt="Youtube Video">
            </div>
        </div>
    </div>
    <div class="page_philosophy__idea">
        <div class="l-wrap">
            <img class="phil_cloud" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1.svg" alt="Cloud">
            <p class="ttl">Ideal</p>
            <h3 class="sub">求める人材像</h3>

            <div class="boxes">
                <div class="box">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/phil_bg.png" alt="Background">
                    <div class="box__items">
                        <p class="box__items--ttl">active!</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/phil_divider.png" alt="Divider">
                        <h4 class="box__items--sub">
                            積極的に<br>
                            行動できる人
                        </h4>
                        <p class="box__items--desc">自分から積極的にコミュニケーションを取っていきましょう。できない部分をそのままにせず、どんどん行動しましょう。</p>
                    </div>
                </div>
                <div class="box">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/phil_bg.png" alt="Background">
                    <div class="box__items">
                        <p class="box__items--ttl">positive!</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/phil_divider.png" alt="Divider">
                        <h4 class="box__items--sub">
                            物事をプラスに<br>
                            考えられる人
                        </h4>
                        <p class="box__items--desc">起きた出来事に対して解釈をプラスに考えましょう。プラスに考える事で全てがプラスの力に働きます。</p>
                    </div>
                </div>
                <div class="box">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/phil_bg.png" alt="Background">
                    <div class="box__items">
                        <p class="box__items--ttl">heartful!</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/phil_divider.png" alt="Divider">
                        <h4 class="box__items--sub">
                            相手のことを<br>
                            想いやれる人
                        </h4>
                        <p class="box__items--desc">常に感謝の気持ち、相手の立場になって考えましょう。小さな感動に気づける心を身につけましょう。</p>
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
</section>
<?php get_footer(); ?>