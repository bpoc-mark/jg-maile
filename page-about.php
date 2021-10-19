<?php get_header(); ?>
<div class="p-banner">
    <div class="l-wrap">
        <div class="title">
            <h1>about us</h1>
            <p>会社概要</p>
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
<div class="section_1 p-details about">
    <div class="l-wrap">
        <div class="img_cloud">
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1.svg" alt="">
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
</div>
<div class="about_message">
    <div class="l-wrap">
        <div class="about_message__container">
            <img class="about_logo" src="<?php echo get_template_directory_uri(); ?>/release/image/top/logo.svg" alt="">
            <p>関わる全ての人とのご縁に感謝し、<br>
                共に幸せになるために</p>
        </div>
    </div>
</div>
<div class="store_info">
    <div class="l-wrap">
        <p class="store_info__ttl">store information</p>
        <p class="store_info__sub">まいれ鍼灸整骨院・整骨院店舗一覧</p>

        <div class="store_info__area">
            <div class="store_info__area--row_1">
                <div class="store_info__area--row_1__area-ttl">
                    <p>滋賀県</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d.svg" alt="">
                </div>
                <div class="store_info__area--row_1__details">
                    <p>大津市 石山院</p>
                    <p>大津市膳所院</p>
                    <p>大津市堅田院</p>
                    <p>近江八幡院</p>
                    <p>草津院</p>
                    <p>守山院</p>
                    <p>甲賀水口院</p>
                </div>
            </div>
            <div class="store_info__area--row_2">
                <div class="store_info__area--row_2__area-ttl">
                    <p>京都府</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d.svg" alt="">
                </div>
                <div class="store_info__area--row_2__details">
                    <p>松井山手院</p>
                </div>
            </div>
        </div>

        <div class="store_info__stores">
            <div class="store_info__stores--container">

                <!-- ACCORDION 1 -->
                <div class="accordion">
                    <div class="accordion__header-cont">
                        <p class="ttl">まいれ鍼灸整骨院・整体院 大津市石山院</p>
                        <a class="btn_read_more" href='javascript:;'>
                            <p>close</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d_o.svg" alt="">
                        </a>
                    </div>
                    <div class="accordion__content">
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
                                <li>https://maile-seikotsuin.com/</li>
                            </ul>
                        </div>
                        <div class="accordion__content--row_2">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/acc_map.png" alt="">
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <div class="btn__item-1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_tel.svg" alt="">
                                    <p>電話をかける</p>
                                </div>
                                <div class="btn__item-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_web.svg" alt="">
                                    <p>HPを見る</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ACCORDION 2 -->
                <div class="accordion">
                    <div class="accordion__header-cont">
                        <p class="ttl">まいれ鍼灸整骨院・整体院 大津市石山院</p>
                        <a class="btn_read_more" href='javascript:;'>
                            <p>close</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d_o.svg" alt="">
                        </a>
                    </div>
                    <div class="accordion__content">
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
                                <li>https://maile-zeze.com/</li>
                            </ul>
                        </div>
                        <div class="accordion__content--row_2">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/acc_map.png" alt="">
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <div class="btn__item-1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_tel.svg" alt="">
                                    <p>電話をかける</p>
                                </div>
                                <div class="btn__item-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_web.svg" alt="">
                                    <p>HPを見る</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ACCORDION 3 -->
                <div class="accordion">
                    <div class="accordion__header-cont">
                        <p class="ttl">まいれ鍼灸整骨院・整体院 大津市石山院</p>
                        <a class="btn_read_more" href='javascript:;'>
                            <p>close</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d_o.svg" alt="">
                        </a>
                    </div>
                    <div class="accordion__content">
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
                                <li>https://maile-katata.com/</li>
                            </ul>
                        </div>
                        <div class="accordion__content--row_2">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/acc_map.png" alt="">
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <div class="btn__item-1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_tel.svg" alt="">
                                    <p>電話をかける</p>
                                </div>
                                <div class="btn__item-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_web.svg" alt="">
                                    <p>HPを見る</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ACCORDION 4 -->
                <div class="accordion">
                    <div class="accordion__header-cont">
                        <p class="ttl">まいれ鍼灸整骨院・整体院 大津市石山院</p>
                        <a class="btn_read_more" href='javascript:;'>
                            <p>close</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d_o.svg" alt="">
                        </a>
                    </div>
                    <div class="accordion__content">
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
                                <li>https://maile-omihachiman.com/</li>
                            </ul>
                        </div>
                        <div class="accordion__content--row_2">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/acc_map.png" alt="">
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <div class="btn__item-1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_tel.svg" alt="">
                                    <p>電話をかける</p>
                                </div>
                                <div class="btn__item-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_web.svg" alt="">
                                    <p>HPを見る</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ACCORDION 5 -->
                <div class="accordion">
                    <div class="accordion__header-cont">
                        <p class="ttl">まいれ鍼灸整骨院・整体院 大津市石山院</p>
                        <a class="btn_read_more" href='javascript:;'>
                            <p>close</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d_o.svg" alt="">
                        </a>
                    </div>
                    <div class="accordion__content">
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
                                <li>https://maile-kusatsu.com/</li>
                            </ul>
                        </div>
                        <div class="accordion__content--row_2">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/acc_map.png" alt="">
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <div class="btn__item-1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_tel.svg" alt="">
                                    <p>電話をかける</p>
                                </div>
                                <div class="btn__item-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_web.svg" alt="">
                                    <p>HPを見る</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ACCORDION 6 -->
                <div class="accordion">
                    <div class="accordion__header-cont">
                        <p class="ttl">まいれ鍼灸整骨院・整体院 大津市石山院</p>
                        <a class="btn_read_more" href='javascript:;'>
                            <p>close</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d_o.svg" alt="">
                        </a>
                    </div>
                    <div class="accordion__content">
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
                                <li>https://maile-moriyama.com/</li>
                            </ul>
                        </div>
                        <div class="accordion__content--row_2">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/acc_map.png" alt="">
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <div class="btn__item-1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_tel.svg" alt="">
                                    <p>電話をかける</p>
                                </div>
                                <div class="btn__item-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_web.svg" alt="">
                                    <p>HPを見る</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ACCORDION 7 -->
                <div class="accordion">
                    <div class="accordion__header-cont">
                        <p class="ttl">まいれ鍼灸整骨院・整体院 大津市石山院</p>
                        <a class="btn_read_more" href='javascript:;'>
                            <p>close</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d_o.svg" alt="">
                        </a>
                    </div>
                    <div class="accordion__content">
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
                                <li>https://maile-minakuchi.com/</li>
                            </ul>
                        </div>
                        <div class="accordion__content--row_2">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/acc_map.png" alt="">
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <div class="btn__item-1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_tel.svg" alt="">
                                    <p>電話をかける</p>
                                </div>
                                <div class="btn__item-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_web.svg" alt="">
                                    <p>HPを見る</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ACCORDION 8 -->
                <div class="accordion">
                    <div class="accordion__header-cont">
                        <p class="ttl">まいれ鍼灸整骨院・整体院 大津市石山院</p>
                        <a class="btn_read_more" href='javascript:;'>
                            <p>close</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/arrow_d_o.svg" alt="">
                        </a>
                    </div>
                    <div class="accordion__content">
                        <div class="accordion__content--row_1">
                            <ul class="list">
                                <li><span>住</span><span>所</span></li>
                                <li>〒614-8294
                                    京都府八幡市欽明台北ソフィアモール</li>
                                <li><span>電</span><span>話</span><span>番</span><span>号</span></li>
                                <li>075-972-6656</li>
                                <li><span>営</span><span>業</span><span>時</span><span>間</span></li>
                                <li>9:00~12:30/15:00~19:30
                                    定休日：日曜日</li>
                                <li>homepage</li>
                                <li>https://maile-matsuiyamate.com/</li>
                            </ul>
                        </div>
                        <div class="accordion__content--row_2">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/acc_map.png" alt="">
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <div class="btn__item-1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_tel.svg" alt="">
                                    <p>電話をかける</p>
                                </div>
                                <div class="btn__item-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/btn_web.svg" alt="">
                                    <p>HPを見る</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-details--btn">
                <a href="">
                    <p>ENTRY</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/details_btn.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>