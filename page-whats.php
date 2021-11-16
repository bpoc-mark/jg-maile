<?php get_header(); ?>
<div class="p-banner">
    <div class="l-wrap">
        <div class="title">
            <p class="title__main">What is the maile like?</p>
            <h2 class="title__sub">まいれって<br>どんな会社？</h2>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_coconut.svg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_ttl.svg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_ttl_sp.svg" alt="">
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
<section class="page__whats">
    <div class="l-wrap">
        <img class="cloud p-downUp" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1.svg" alt="">
        <img class="cloud p-upDown" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1-invert.svg" alt="">
        <div class="sect_1">
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/whats_img_1.png" alt="">
            <p>人と人との出逢いは偶然ではなく、必然です。人は生きていく中で何かしら周りの人から援助を受けて生きています。家族、友人、職場の仲間、協力業者の方々。そんな自分に関わる全ての人達に支えられてを生きていること。自分の周りにいてくれる人達が当たり前ではないということ。<br>MAILE株式会社は、そういった自分に本気で関わって下さった人達に出逢えたことに感謝の気持ちを持ち、人と人とのご縁に感謝し、自分だけでなく、家族、友人、MAILEに関わって下さる全ての人達と、共に幸せになれる会社でありたいと願っています。</p>
        </div>
    </div>
    <div class="events">
        <img class="cloud p-upDown" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1.svg" alt="">
        <img class="cloud p-downUp" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_2-invert.svg" alt="">
        <div class="events__container">
            <p class="events__ttl">Events</p>
            <h4 class="events__sub">年間行事</h4>
            <p class="events__desc">MAILE株式会社ではスタッフとその家族とのかかわりも大切にしていてコミュニケーションが図れる場を大事にしています。<br>お子さんも一緒に参加できて家族のように接することのできる環境づくりにこだわっています。</p>
        </div>
        <div class="photos">
            <div class="l-wrap">
                <div class="container">
                    <!-- SWIPER 1 -->
                    <div class="item">
                        <h3 class="item__ttl">入社式</h3>
                        <div class="swiper whats">
                            <div class="swiper-wrapper">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_1.jpeg" alt="">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_2.jpg" alt="">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_3.jpg" alt="">
                            </div>
                            <div class="c-swiper-buttons">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- SWIPER 2 -->
                    <div class="item">
                        <h3 class="item__ttl">ボーリング大会</h3>
                        <div class="swiper whats">
                            <div class="swiper-wrapper">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_2.jpg" alt="">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_3.jpg" alt="">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_4.jpg" alt="">
                            </div>
                            <div class="c-swiper-buttons">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- SWIPER 3 -->
                    <div class="item">
                        <h3 class="item__ttl">男子会</h3>
                        <div class="swiper whats">
                            <div class="swiper-wrapper">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_3.jpg" alt="">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_4.jpg" alt="">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_5.jpg" alt="">
                            </div>
                            <div class="c-swiper-buttons">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- SWIPER 4 -->
                    <div class="item">
                        <h3 class="item__ttl">社員旅行</h3>
                        <div class="swiper whats">
                            <div class="swiper-wrapper">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_5.jpg" alt="">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_2.jpg" alt="">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_3.jpg" alt="">
                            </div>
                            <div class="c-swiper-buttons">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- SWIPER 5 -->
                    <div class="item">
                        <h3 class="item__ttl">運動会</h3>
                        <div class="swiper whats">
                            <div class="swiper-wrapper">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_6.jpg" alt="">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_3.jpg" alt="">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_5.jpg" alt="">
                            </div>
                            <div class="c-swiper-buttons">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- SWIPER 6 -->
                    <div class="item">
                        <h3 class="item__ttl">表彰式</h3>
                        <div class="swiper whats">
                            <div class="swiper-wrapper">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_4.jpg" alt="">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_5.jpg" alt="">
                                <img class="swiper-slide" src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_2.jpg" alt="">
                            </div>
                            <div class="c-swiper-buttons">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="training">
        <div class="training__container">
            <h1 class="training__ttl">Training system
                <p class="training__sub">社内研修制度</p>
            </h1>
            <div class="training__office">
                <div class="training__office--row_1">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/whats_office.png" alt="">
                </div>
                <div class="training__office--row_2">
                    <div class="container">
                        <ul>
                            <li>
                                <h2 class="ttl">診療時間内研修</->
                                <h3 class="desc">毎月、全店舗を半日休診や一日休診にして、外部から講師を招き研修を行っております。基本的には全スタッフ合同で研修を行います。<br>実践的で即効性のある施術法や、患者様に痛みを聞き出す問診力などを働きながらもさらに磨きをかけるべく日々スキルアップを目指しています。</h3>
                            </li>
                            <li>
                                <h2 class="ttl">新人研修</h2>
                                <h3 class="desc">入社したての新人スタッフへは初めの1ヶ月を新人研修として、基本的な治療の修得はもちろん、会社の考え、理念などの研修を行っております。</h3>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="training_contents">
        <div class="l-wrap">
            <div class="container">
                <h3 class="ttl">Training contents</h3>
                <h4 class="sub">実践研修項目</h4>
                <div class="diagonal">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/diagonal.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/diagonal.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/diagonal.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/diagonal.png" alt="">
                </div>

                <div class="checklist">
                    <div class="checklist_item">
                        <div class="row-1">
                            <ul>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/release/image/page/check.svg" alt="">
                                    <p>社会人一般マナー研修</p>
                                </li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/release/image/page/check.svg" alt="">
                                    <p>骨盤矯正</p>
                                </li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/release/image/page/check.svg" alt="">
                                    <p>トレーナー研修</p>
                                </li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/release/image/page/check.svg" alt="">
                                    <p>小顔矯正</p>
                                </li>
                            </ul>
                        </div>
                        <div class="row-2">
                            <li><img src="<?php echo get_template_directory_uri(); ?>/release/image/page/check.svg" alt="">
                                <p>問診</p>
                            </li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/release/image/page/check.svg" alt="">
                                <p>鍼治療</p>
                            </li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/release/image/page/check.svg" alt="">
                                <p>育毛施術</p>
                            </li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/release/image/page/check.svg" alt="">
                                <p>バストアップ施術</p>
                            </li>
                        </div>
                        <div class="row-3">
                            <li><img src="<?php echo get_template_directory_uri(); ?>/release/image/page/check.svg" alt="">
                                <p>猫背矯正</p>
                            </li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/release/image/page/check.svg" alt="">
                                <p>ハイボル治療</p>
                            </li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/release/image/page/check.svg" alt="">
                                <p>美容鍼</p>
                            </li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/release/image/page/check.svg" alt="">
                                <p>巻き爪施術</p>
                            </li>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="image_gallery">
        <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_2.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_3.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_4.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_5.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_6.jpg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/sample_1.jpeg" alt="">
    </div>
    <div class="p-details--btn">
        <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>">
            <p>ENTRY</p>
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/details_btn.svg" alt="">
        </a>
    </div>
</section>
<?php get_footer(); ?>