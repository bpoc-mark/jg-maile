<?php get_header(); ?>
<div class="p-banner">
    <div class="l-wrap">
        <div class="title">
            <p class="title__main">About us</p>
            <h1 class="title__sub">会社概要</h1>
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
<section class="section_1 p-details about">
    <div class="l-wrap">
        <div class="img_cloud">
            <img class="p-upDown" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1.svg" alt="Cloud">
            <img class="p-downUp" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1-invert.svg" alt="Cloud">
        </div>
        <div class="p-details--container">
            <ul class="p-details--list">
                <div class="item">
                    <li><span>社</span><span>名</span></li>
                    <li>MAILE株式会社　まいれ整骨院グループ</li>
                </div>
                <div class="item">
                    <li><span>本</span><span>社</span></li>
                    <li>〒520-0831 滋賀県大津市松原町13-39
                        （まいれ整骨院石山院）
                    </li>
                </div>
                <div class="item">
                    <li><span>代</span><span>表</span><span>者</span></li>
                    <li>平石　洋介
                    </li>
                </div>
                <div class="item">
                    <li><span>設</span><span>立</span></li>
                    <li>平成29年3月
                    </li>
                </div>
                <div class="item">
                    <li><span>資</span><span>本</span><span>金</span></li>
                    <li>100万円</li>
                </div>
                <div class="item">
                    <li><span>社</span><span>員</span><span>数</span></li>
                    <li>35名（男性：19名/女性：16名）</li>
                </div>
                <div class="item">
                    <li><span>事</span><span>業</span><span>内</span><span>容</span></li>
                    <li>鍼灸・整骨院の運営
                        スポーツトレーナー派遣
                    </li>
                </div>
            </ul>
        </div>
    </div>
</section>
<section class="about_message">
    <div class="l-wrap">
        <div class="about_message__container">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img class="about_logo" src="<?php echo get_template_directory_uri(); ?>/release/image/top/logo.svg" alt="Maile Logo">
            </a>
            <h2 class="txt">関わる全ての人とのご縁に感謝し、<br>共に幸せになるために</h2>
        </div>
    </div>
</section>
<section class="store_info">
    <div class="l-wrap">
        <img class="store_cloud" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1.svg" alt="Cloud">
        <img class="store_cloud" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_2-invert.svg" alt="Cloud">
        <p class="store_info__ttl">Store information</p>
        <h3 class="store_info__sub">まいれ鍼灸整骨院・整骨院店舗一覧</h3>

        <div class="store_info__area">
            <div class="store_info__area--row_1">
                <div class="store_info__area--row_1__area-ttl">
                    <p>滋賀県</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d.svg" alt="">
                </div>
                <div class="store_info__area--row_1__details">
                    <p><a id="acrd-1" href="#accordion-1">大津市石山院</a></p>
                    <p><a id="acrd-2" href="#accordion-2">大津市膳所院</a></p>
                    <p><a id="acrd-3" href="#accordion-3">大津市堅田院</a></p>
                    <p><a id="acrd-4" href="#accordion-4">近江八幡院</a></p>
                    <p><a id="acrd-5" href="#accordion-5">草津院</a></p>
                    <p><a id="acrd-6" href="#accordion-6">守山院</a></p>
                    <p><a id="acrd-7" href="#accordion-7">甲賀水口院</a></p>
                </div>
            </div>
            <div class="store_info__area--row_2">
                <div class="store_info__area--row_2__area-ttl">
                    <p>京都府</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d.svg" alt="">
                </div>
                <div class="store_info__area--row_2__details">
                    <p><a id="acrd-8" href="#accordion-8">松井山手院</a></p>
                </div>
            </div>
        </div>

        <div class="store_info__stores">
            <div class="store_info__stores--container">
                <!-- ACCORDION 1 -->
                <div class="accordion">
                    <a id="accordion-1" class="accordion__header-cont active" href='javascript:;'>
                        <h4 class="ttl">まいれ鍼灸整骨院・整体院 大津市石山院</h4>
                        <div class="btn_read_more">
                            <p class="text">open</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d_o.svg" alt="">
                        </div>
                    </a>
                    <div class="accordion__content" style="display: none;">
                        <div class="accordion__content--row_1">
                            <ul class="list">
                                <li><span>住</span><span>所</span></li>
                                <li>〒520-0831
                                    滋賀県大津市松原町13-39</li>
                                <li><span>電</span><span>話</span><span>番</span><span>号</span></li>
                                <li>077-548-6656</li>
                                <li><span>営</span><span>業</span><span>時</span><span>間</span></li>
                                <li>9:00~12:30/15:00~19:30
                                    定休日：日曜日</li>
                                <li>homepage</li>
                                <li><a href="https://maile-seikotsuin.com/" target="_blank">https://maile-seikotsuin.com/</a></li>
                            </ul>
                        </div>
                        <div class="accordion__content--row_2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3269.1125768370407!2d135.90000745097456!3d34.97884478026771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60010d549d4565c5%3A0xd9be5247825d1b58!2z5pel5pys44CB44CSNTIwLTA4MzEg5ruL6LOA55yM5aSn5rSl5biC5p2-5Y6f55S677yR77yT4oiS77yT77yZ!5e0!3m2!1sja!2sph!4v1635170054083!5m2!1sja!2sph" width="100%" height="320" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <a class="btn__item-1" href="tel:077-548-66576">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_tel.svg" alt="Telephone Logo">
                                    <p>電話をかける</p>
                                </a>
                                <a class="btn__item-2" href="https://maile-seikotsuin.com/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_web.svg" alt="Website Logo">
                                    <p>HPを見る</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ACCORDION 2 -->
                <div class="accordion">
                    <a id="accordion-2" class="accordion__header-cont active" href='javascript:;'>
                        <h4 class="ttl">まいれ鍼灸整骨院・整体院 大津市膳所院</h4>
                        <div class="btn_read_more">
                            <p class="text">open</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d_o.svg" alt="">
                        </div>
                    </a>
                    <div class="accordion__content" style="display: none;">
                        <div class="accordion__content--row_1">
                            <ul class="list">
                                <li><span>住</span><span>所</span></li>
                                <li>〒520-0802
                                    滋賀県大津市馬場1-3-5</li>
                                <li><span>電</span><span>話</span><span>番</span><span>号</span></li>
                                <li>077-523-6655</li>
                                <li><span>営</span><span>業</span><span>時</span><span>間</span></li>
                                <li>9:00~12:30/15:00~19:30
                                    定休日：日曜日</li>
                                <li>homepage</li>
                                <li><a href="https://maile-zeze.com/" target="_blank">https://maile-zeze.com/</a></li>
                            </ul>
                        </div>
                        <div class="accordion__content--row_2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.214943146387!2d135.87887615097497!3d35.00132418026192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60010ce1ec66a615%3A0x6ede1f490f631fe7!2z5pel5pys44CB44CSNTIwLTA4MDIg5ruL6LOA55yM5aSn5rSl5biC6aas5aC077yR5LiB55uu77yT4oiS77yV!5e0!3m2!1sja!2sph!4v1635170317548!5m2!1sja!2sph" width="100%" height="320" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <a class="btn__item-1" href="tel:077-523-6655">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_tel.svg" alt="Telephone Logo">
                                    <p>電話をかける</p>
                                </a>
                                <a class="btn__item-2" href="https://maile-zeze.com/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_web.svg" alt="Website Logo">
                                    <p>HPを見る</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ACCORDION 3 -->
                <div class="accordion">
                    <a id="accordion-3" class="accordion__header-cont active" href='javascript:;'>
                        <h4 class="ttl">まいれ鍼灸整骨院・整体院 大津市堅田院</h4>
                        <div class="btn_read_more">
                            <p class="text">open</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d_o.svg" alt="">
                        </div>
                    </a>
                    <div class="accordion__content" style="display: none;">
                        <div class="accordion__content--row_1">
                            <ul class="list">
                                <li><span>住</span><span>所</span></li>
                                <li>〒520-0242
                                    滋賀県大津市本堅田6-26-2</li>
                                <li><span>電</span><span>話</span><span>番</span><span>号</span></li>
                                <li>077-571-6668</li>
                                <li><span>営</span><span>業</span><span>時</span><span>間</span></li>
                                <li>9:00~12:30/15:00~19:30
                                    定休日：日曜日</li>
                                <li>homepage</li>
                                <li><a href="https://maile-katata.com/" target="_blank">https://maile-katata.com/</a></li>
                            </ul>
                        </div>
                        <div class="accordion__content--row_2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3263.470562430245!2d135.90815795097802!3d35.11992898023245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600175563b2872c7%3A0x39806a48b3ac3b76!2z5pel5pys44CB44CSNTIwLTAyNDIg5ruL6LOA55yM5aSn5rSl5biC5pys5aCF55Sw77yW5LiB55uu77yS77yW4oiS77yS!5e0!3m2!1sja!2sph!4v1635170371233!5m2!1sja!2sph" width="100%" height="320" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <a class="btn__item-1" href="tel:077-571-6668">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_tel.svg" alt="Telephone Logo">
                                    <p>電話をかける</p>
                                </a>
                                <a class="btn__item-2" href="https://maile-katata.com/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_web.svg" alt="Website Logo">
                                    <p>HPを見る</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ACCORDION 4 -->
                <div class="accordion">
                    <a id="accordion-4" class="accordion__header-cont active" href='javascript:;'>
                        <h4 class="ttl">まいれ鍼灸整骨院・整体院 近江八幡院</h4>
                        <div class="btn_read_more">
                            <p class="text">open</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d_o.svg" alt="">
                        </div>
                    </a>
                    <div class="accordion__content" style="display: none;">
                        <div class="accordion__content--row_1">
                            <ul class="list">
                                <li><span>住</span><span>所</span></li>
                                <li>〒523-0893
                                    滋賀県近江八幡市桜宮町294
                                    YP1-1F店舗1</li>
                                <li><span>電</span><span>話</span><span>番</span><span>号</span></li>
                                <li>074-836-1881</li>
                                <li><span>営</span><span>業</span><span>時</span><span>間</span></li>
                                <li>9:00~12:30/15:00~19:30
                                    定休日：日曜日</li>
                                <li>homepage</li>
                                <li><a href="https://maile-omihachiman.com/">https://maile-omihachiman.com/</a></li>
                            </ul>
                        </div>
                        <div class="accordion__content--row_2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3263.264718085536!2d136.09707895097816!3d35.1250669802312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60017bce7561ccdd%3A0x66af558f421c9622!2z77yI5qCq77yJ44Ok44Oe44OX44Op!5e0!3m2!1sja!2sph!4v1635170414793!5m2!1sja!2sph" width="100%" height="320" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <a class="btn__item-1" href="tel:074-836-1881">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_tel.svg" alt="Telephone Logo">
                                    <p>電話をかける</p>
                                </a>
                                <a class="btn__item-2" href="https://maile-omihachiman.com/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_web.svg" alt="Website Logo">
                                    <p>HPを見る</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ACCORDION 5 -->
                <div class="accordion">
                    <a id="accordion-5" class="accordion__header-cont active" href='javascript:;'>
                        <h4 class="ttl">まいれ鍼灸整骨院・整体院 草津院</h4>
                        <div class="btn_read_more">
                            <p class="text">open</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d_o.svg" alt="">
                        </div>
                    </a>
                    <div class="accordion__content" style="display: none;">
                        <div class="accordion__content--row_1">
                            <ul class="list">
                                <li><span>住</span><span>所</span></li>
                                <li>〒525-0037
                                    滋賀県草津市西大路町2-5
                                    Nビル1F店舗</li>
                                <li><span>電</span><span>話</span><span>番</span><span>号</span></li>
                                <li>077-567-6656</li>
                                <li><span>営</span><span>業</span><span>時</span><span>間</span></li>
                                <li>9:00~12:30/15:00~19:30
                                    定休日：日曜日</li>
                                <li>homepage</li>
                                <li><a href="https://maile-kusatsu.com/">https://maile-kusatsu.com/</a></li>
                            </ul>
                        </div>
                        <div class="accordion__content--row_2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3267.346679905875!2d135.95828205097544!3d35.02305608025644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600173bf6df45619%3A0xab80b5183f44df03!2z44G-44GE44KM6Y2854G45pW06aqo6Zmi44O75pW05L2T6ZmiIOiNiea0pemZog!5e0!3m2!1sja!2sph!4v1635170445500!5m2!1sja!2sph" width="100%" height="320" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <a class="btn__item-1" href="tel:077-567-6656">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_tel.svg" alt="Telephone Logo">
                                    <p>電話をかける</p>
                                </a>
                                <a class="btn__item-2" href="https://maile-kusatsu.com/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_web.svg" alt="Website Logo">
                                    <p>HPを見る</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ACCORDION 6 -->
                <div class="accordion">
                    <a id="accordion-6" class="accordion__header-cont active" href='javascript:;'>
                        <h4 class="ttl">まいれ鍼灸整骨院・整体院 守山院</h4>
                        <div class="btn_read_more">
                            <p class="text">open</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d_o.svg" alt="">
                        </div>
                    </a>
                    <div class="accordion__content" style="display: none;">
                        <div class="accordion__content--row_1">
                            <ul class="list">
                                <li><span>住</span><span>所</span></li>
                                <li>〒524-0041
                                    滋賀県守山市勝部1-2-26
                                    アフロディテ1階D号室</li>
                                <li><span>電</span><span>話</span><span>番</span><span>号</span></li>
                                <li>077-582-1911</li>
                                <li><span>営</span><span>業</span><span>時</span><span>間</span></li>
                                <li>9:00~12:30/15:00~19:30
                                    定休日：日曜日</li>
                                <li>homepage</li>
                                <li><a href="https://maile-moriyama.com/">https://maile-moriyama.com/</a></li>
                            </ul>
                        </div>
                        <div class="accordion__content--row_2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3266.2616486499287!2d135.9917666509763!3d35.05019698024987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001719dda500001%3A0x8a9445574cea6e20!2z5pel5pys44CB44CSNTI0LTAwNDEg5ruL6LOA55yM5a6I5bGx5biC5Yud6YOo77yR5LiB55uu77yS4oiS77yS77yWIOOCouODleODreODh-OCo-ODhiAx6ZqOROWPt-WupA!5e0!3m2!1sja!2sph!4v1635170472547!5m2!1sja!2sph" width="100%" height="320" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <a class="btn__item-1" href="tel:077-582-1911">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_tel.svg" alt="Telephone Logo">
                                    <p>電話をかける</p>
                                </a>
                                <a class="btn__item-2" href="https://maile-moriyama.com/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_web.svg" alt="Website Logo">
                                    <p>HPを見る</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ACCORDION 7 -->
                <div class="accordion">
                    <a id="accordion-7" class="accordion__header-cont active" href='javascript:;'>
                        <h4 class="ttl">まいれ鍼灸整骨院・整体院 甲賀水口院</h4>
                        <div class="btn_read_more">
                            <p class="text">open</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d_o.svg" alt="">
                        </div>
                    </a>
                    <div class="accordion__content" style="display: none;">
                        <div class="accordion__content--row_1">
                            <ul class="list">
                                <li><span>住</span><span>所</span></li>
                                <li>〒528-0005
                                    滋賀県甲賀市水口町水口6038-1
                                    かふかビルディング1階1号</li>
                                <li><span>電</span><span>話</span><span>番</span><span>号</span></li>
                                <li>0748-63-6699</li>
                                <li><span>営</span><span>業</span><span>時</span><span>間</span></li>
                                <li>9:00~12:30/15:00~19:30
                                    定休日：日曜日</li>
                                <li>homepage</li>
                                <li><a href="https://maile-minakuchi.com/">https://maile-minakuchi.com/</a></li>
                            </ul>
                        </div>
                        <div class="accordion__content--row_2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3269.6246111548353!2d136.1628634509743!3d34.96601628027087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001608c67021149%3A0x7cd0a5b2b8e09a2f!2z5pel5pys44CB44CSNTI4LTAwMDUg5ruL6LOA55yM55Sy6LOA5biC5rC05Y-j55S65rC05Y-j77yW77yQ77yT77yY4oiS77yRIOOBi-OBteOBi-ODk-ODq-ODh-OCo-ODs-OCsCAx6ZqOMeWPtw!5e0!3m2!1sja!2sph!4v1635170499408!5m2!1sja!2sph" width="100%" height="320" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <a class="btn__item-1" href="tel:0748-63-6699">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_tel.svg" alt="Telephone Logo">
                                    <p>電話をかける</p>
                                </a>
                                <a class="btn__item-2" href="https://maile-minakuchi.com/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_web.svg" alt="Website Logo">
                                    <p>HPを見る</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ACCORDION 8 -->
                <div class="accordion">
                    <a id="accordion-8" class="accordion__header-cont active" href='javascript:;'>
                        <h4 class="ttl">まいれ鍼灸整骨院・整体院 松井山手院</h4>
                        <div class="btn_read_more">
                            <p class="text">open</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d_o.svg" alt="">
                        </div>
                    </a>
                    <div class="accordion__content" style="display: none;">
                        <div class="accordion__content--row_1">
                            <ul class="list">
                                <li><span>住</span><span>所</span></li>
                                <li>〒614-8294<br>京都府八幡市欽明台北ソフィアモール</li>
                                <li><span>電</span><span>話</span><span>番</span><span>号</span></li>
                                <li>075-972-6656</li>
                                <li><span>営</span><span>業</span><span>時</span><span>間</span></li>
                                <li>9:00~12:30/15:00~19:30
                                    定休日：日曜日</li>
                                <li>homepage</li>
                                <li><a href="https://maile-matsuiyamate.com/">https://maile-matsuiyamate.com/</a></li>
                            </ul>
                        </div>
                        <div class="accordion__content--row_2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3274.6430112953985!2d135.71371475097115!3d34.84006718030271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60011a4c9d5ee701%3A0x59b27ba9bc53359e!2z44K944OV44Kj44Ki44Oi44O844Or!5e0!3m2!1sja!2sph!4v1635170521591!5m2!1sja!2sph" width="100%" height="320" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <a class="btn__item-1" href="tel:075-972-6656">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_tel.svg" alt="Telephone Logo">
                                    <p>電話をかける</p>
                                </a>
                                <a class="btn__item-2" href="https://maile-matsuiyamate.com/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_web.svg" alt="Website Logo">
                                    <p>HPを見る</p>
                                </a>
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
</section>
<?php get_footer(); ?>