<?php get_header();
$imagedir = get_template_directory_uri();
?>
<div class="p-banner">
    <div class="l-wrap">
        <div class="title">
            <p class="title__main">Trainer</p>
            <h1 class="title__sub">トレーナー</h1>
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
<section class="trainer">
    <div class="trainer__sect-1">
        <div class="l-wrap">
            <img src="<?php echo $imagedir ?>/release/image/page/trainer.png" alt="">
        </div>
    </div>
    <div class="trainer__sect-2">
        <div class="l-wrap">
            <div class="trainer--content">
                <p class="trainer--content__ttl">about</p>
                <p class="trainer--content__sub">トレーナー活動とは？</p>
                <p class="trainer--content__txt">
                    当社としては、しっかりとトレーナーとして自分でご飯を食べていけるだけのトレーナー育成をしていきたいと考えております。<br><br>
                    トレーナー業界の現状は、正直厳しい世界です。トレーナーで食べていける人は本当に一握りで、実際整骨院でトレーナー活動できますよ謳っている所も多いですが、ほとんどの整骨院は自分の休みを削ってトレーナー活動に行かされる所がほとんどです。そして、トレーナーとしての活動も月に2.3回程度です。<br><br>
                    それでは、絶対力がつかないと私たちは考えています。当社としては、やるからには徹底的に集中して行ってもらいます。そして自分の力にして最終的にはトレーナーとして頑張るのか、整骨院勤務にするのかを判断させるようにしています。<br><br>
                    トレーナーは厳しいという価値観を覆したい、「トレーナーはこんなに素晴らしい仕事なんだよ」という事を分かってもらえるようにしていきたいです。
                </p>
            </div>
        </div>
    </div>
    <div class="trainer__sect-3">
        <div class="l-wrap">
            <div class="trainer--content">
                <p class="trainer--content__ttl">message</p>
                <p class="trainer--content__sub">先輩トレーナーより、<br>力強いメッセージが届きました。</p>
                <p class="trainer--content__name">山田晃広様(バルセロナ)</p>
                <div class="trainer--content__akihiro">
                    <div class="row-1">
                        <img class="akihiro" src="<?php echo $imagedir ?>/release/image/page/akihiro_yamada.png" alt="">
                    </div>
                    <div class="row-2">
                        <p class="message">
                            私達スポーツトレーナーはアスリートとして輝くことが出来ませんが、スポーツ選手の求める目標に一緒に乗ることや”想いを共有”することはできます。私自身海外で活躍していたのでよくわかりますが、日本人のトレーナースキル・メンタリティ・人間性は必ずスポーツトレーナーとして世界に通じ、輝くことができます。一般の方からアスリートまで、多くの方々の夢のサポートをしていけるよう、共に学びましょう！
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="trainer__sect-4">
        <div class="l-wrap">
            <div class="trainer--content">
                <p class="trainer--content__ttl">support</p>
                <p class="trainer--content__sub">まいれ整骨院グループはトレーナーとして<br>サポートしています。</p>

                <div class="trainer__sect-4--imgs">
                    <img src="<?php echo $imagedir ?>/release/image/page/trainer_1.svg" alt="">
                    <img src="<?php echo $imagedir ?>/release/image/page/trainer_2.svg" alt="">
                    <img src="<?php echo $imagedir ?>/release/image/page/Asset 7.png" alt="">
                </div>
            </div>
            <div class="trainer__sect-4--imgs_2">
                <img src="<?php echo $imagedir ?>/release/image/page/trainer_4.svg" alt="">
                <img src="<?php echo $imagedir ?>/release/image/page/trainer_5.svg" alt="">
            </div>
        </div>
    </div>
    <div class="trainer__sect-5">
        <div class="l-wrap">
            <p class="trainer--content__ttl">dispatch</p>
            <p class="trainer--content__sub">トレーナー派遣先の紹介</p>

            <div class="trainer__sect-5--games">
                <!-- ROW 1 -->
                <div class="item setAnime">
                    <div class="item__box p-popout">
                        <img src="<?php echo $imagedir ?>/release/image/page/train_bg.png" alt="Background">
                        <div class="content">
                            <p class="content__ttl">football</p>
                            <img src="<?php echo $imagedir ?>/release/image/page/phil_divider.png" alt="Divider">
                            <p class="content__sub">ガイナーレ</p>
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_1.png" alt="Games">
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_2.png" alt="Games">
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_3.png" alt="Games">
                        </div>
                    </div>
                </div>
                <div class="item setAnime">
                    <div class="item__box p-popout">
                        <img src="<?php echo $imagedir ?>/release/image/page/train_bg.png" alt="Background">
                        <div class="content">
                            <p class="content__ttl">football</p>
                            <img src="<?php echo $imagedir ?>/release/image/page/phil_divider.png" alt="Divider">
                            <p class="content__sub">MIO滋賀</p>
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_4.png" alt="Games">
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_5.png" alt="Games">
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_6.png" alt="Games">
                        </div>
                    </div>
                </div>
                <div class="item setAnime">
                    <div class="item__box p-popout">
                        <img src="<?php echo $imagedir ?>/release/image/page/train_bg.png" alt="Background">
                        <div class="content">
                            <p class="content__ttl">baseball</p>
                            <img src="<?php echo $imagedir ?>/release/image/page/phil_divider.png" alt="Divider">
                            <p class="content__sub">オセアン滋賀ブラックス</p>
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_7.png" alt="Games">
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_8.png" alt="Games">
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_9.png" alt="Games">
                        </div>
                    </div>
                </div>

                <!-- ROW 2 -->
                <div class="item setAnime">
                    <div class="item__box p-popout">
                        <img src="<?php echo $imagedir ?>/release/image/page/train_bg.png" alt="Background">
                        <div class="content">
                            <p class="content__ttl">football</p>
                            <img src="<?php echo $imagedir ?>/release/image/page/phil_divider.png" alt="Divider">
                            <p class="content__sub">F.C.バルセロナ</p>
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_10.png" alt="Games">
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_11.png" alt="Games">
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_12.png" alt="Games">
                        </div>
                    </div>

                </div>
                <div class="item setAnime">
                    <div class="item__box p-popout">
                        <img src="<?php echo $imagedir ?>/release/image/page/train_bg.png" alt="Background">
                        <div class="content">
                            <p class="content__ttl">athletics</p>
                            <img src="<?php echo $imagedir ?>/release/image/page/phil_divider.png" alt="Divider">
                            <p class="content__sub">草津東高校陸上競技部</p>
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_13.png" alt="Games">
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_14.png" alt="Games">
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_15.png" alt="Games">
                        </div>
                    </div>
                </div>
                <div class="item setAnime">
                    <div class="item__box p-popout">
                        <img src="<?php echo $imagedir ?>/release/image/page/train_bg.png" alt="Background">
                        <div class="content">
                            <p class="content__ttl">event</p>
                            <img src="<?php echo $imagedir ?>/release/image/page/phil_divider.png" alt="Divider">
                            <p class="content__sub">音楽イベント</p>
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_16.png" alt="Divider">
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_17.png" alt="Divider">
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_18.png" alt="Divider">
                        </div>
                    </div>
                </div>

                <!-- ROW 3 -->
                <div class="item setAnime">
                    <div class="item__box p-popout">
                        <img src="<?php echo $imagedir ?>/release/image/page/train_bg.png" alt="Background">
                        <div class="content">
                            <p class="content__ttl">event</p>
                            <img src="<?php echo $imagedir ?>/release/image/page/phil_divider.png" alt="Divider">
                            <p class="content__sub">プロサッカーイベント</p>
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_19.png" alt="Divider">
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_20.png" alt="Divider">
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_21.png" alt="Divider">
                        </div>
                    </div>
                </div>
                <div class="item setAnime">
                    <div class="item__box p-popout">
                        <img src="<?php echo $imagedir ?>/release/image/page/train_bg.png" alt="Background">
                        <div class="content">
                            <p class="content__ttl">high school</p>
                            <img src="<?php echo $imagedir ?>/release/image/page/phil_divider.png" alt="Divider">
                            <p class="content__sub">高校サッカー活動</p>
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_22.png" alt="Divider">
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_23.png" alt="Divider">
                            <img class="train_img" src="<?php echo $imagedir ?>/release/image/page/game_24.png" alt="Divider">
                        </div>
                    </div>
                </div>

                <div id="myModal" role="dialog" class="modal-content">
                    <div class="mod-overlay"></div>
                    <img id="modal-img" src="" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>