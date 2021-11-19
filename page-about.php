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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3269.111854277443!2d135.8999902156036!3d34.97886288036404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60010d549d4565c5%3A0x9dde316ad6bcad54!2z44G-44GE44KM6Y2854G45pW06aqo6Zmi44O75pW05L2T6ZmiIOWkp-a0peW4guefs-WxsemZog!5e0!3m2!1sja!2sjp!4v1637307706365!5m2!1sja!2sjp" width="100%" height="320"  allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <a class="btn__item-1" href="tel:077-548-66576">
                                <svg id="ãƒ¬ã‚¤ãƒ¤ãƒ¼_1" data-name="ãƒ¬ã‚¤ãƒ¤ãƒ¼ 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><defs><style>.cls-1{fill:#eb8250;}</style></defs><path class="cls-1" d="M352.35,3043.78a.65.65,0,0,0-.86-.05l-1.22,1a.65.65,0,0,1-.82,0,16.44,16.44,0,0,1-2.18-1.84,17.22,17.22,0,0,1-1.84-2.18.66.66,0,0,1,0-.83l1-1.21a.65.65,0,0,0,0-.87l-2.32-2.33a.66.66,0,0,0-.88,0l-2.92,2.45a.64.64,0,0,0-.15.8s.39.8.75,1.42a29.53,29.53,0,0,0,4.09,5.13,28.64,28.64,0,0,0,5.13,4.08c.61.37,1.42.76,1.42.76a.65.65,0,0,0,.8-.16l2.45-2.92a.64.64,0,0,0,0-.87Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M352.93,3040.66l1-.16a5.16,5.16,0,0,0-4.27-4.26l-.15,1a4.18,4.18,0,0,1,3.45,3.45Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M356.83,3033.31a11.19,11.19,0,0,0-6.23-3.17l-.16,1a10.31,10.31,0,0,1,8.59,8.58l1-.15A11.32,11.32,0,0,0,356.83,3033.31Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M350.11,3033.18l-.15,1a7.21,7.21,0,0,1,4,2,7.14,7.14,0,0,1,2,4l1-.15a8.21,8.21,0,0,0-6.84-6.84Z" transform="translate(-340 -3030.14)"/></svg>
                                    <p>電話をかける</p>
                                </a>
                                <a class="btn__item-2" href="https://maile-seikotsuin.com/">
                                <svg id="ãƒ¬ã‚¤ãƒ¤ãƒ¼_1" data-name="ãƒ¬ã‚¤ãƒ¤ãƒ¼ 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.21 20"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M531.11,3030.14h-20a1.11,1.11,0,0,0-1.11,1.1V3049a1.11,1.11,0,0,0,1.11,1.11h20a1.11,1.11,0,0,0,1.1-1.11v-17.79A1.1,1.1,0,0,0,531.11,3030.14Zm-2.69,2.23a1.24,1.24,0,1,1-1.24,1.24A1.24,1.24,0,0,1,528.42,3032.37Zm-3.93,0a1.24,1.24,0,1,1-1.24,1.24A1.24,1.24,0,0,1,524.49,3032.37Zm-3.93,0a1.24,1.24,0,1,1-1.24,1.24A1.25,1.25,0,0,1,520.56,3032.37Zm9.8,15.91H511.85v-11.67h18.51Z" transform="translate(-510 -3030.14)"/><rect class="cls-1" x="3.79" y="8.43" width="9.82" height="1.98"/><rect class="cls-1" x="3.79" y="12.4" width="14.63" height="1.98"/></svg>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.211048736169!2d135.87877101560417!3d35.00142168035833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60010d78866a2cbf%3A0x19581c770d6a0369!2z44G-44GE44KM6Y2854G45pW06aqo6Zmi44O75pW05L2T6ZmiIOWkp-a0peW4guiGs-aJgOmZog!5e0!3m2!1sja!2sjp!4v1637308571512!5m2!1sja!2sjp" width="100%" height="320"  allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <a class="btn__item-1" href="tel:077-523-6655">
                                <svg id="ãƒ¬ã‚¤ãƒ¤ãƒ¼_1" data-name="ãƒ¬ã‚¤ãƒ¤ãƒ¼ 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><defs><style>.cls-1{fill:#eb8250;}</style></defs><path class="cls-1" d="M352.35,3043.78a.65.65,0,0,0-.86-.05l-1.22,1a.65.65,0,0,1-.82,0,16.44,16.44,0,0,1-2.18-1.84,17.22,17.22,0,0,1-1.84-2.18.66.66,0,0,1,0-.83l1-1.21a.65.65,0,0,0,0-.87l-2.32-2.33a.66.66,0,0,0-.88,0l-2.92,2.45a.64.64,0,0,0-.15.8s.39.8.75,1.42a29.53,29.53,0,0,0,4.09,5.13,28.64,28.64,0,0,0,5.13,4.08c.61.37,1.42.76,1.42.76a.65.65,0,0,0,.8-.16l2.45-2.92a.64.64,0,0,0,0-.87Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M352.93,3040.66l1-.16a5.16,5.16,0,0,0-4.27-4.26l-.15,1a4.18,4.18,0,0,1,3.45,3.45Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M356.83,3033.31a11.19,11.19,0,0,0-6.23-3.17l-.16,1a10.31,10.31,0,0,1,8.59,8.58l1-.15A11.32,11.32,0,0,0,356.83,3033.31Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M350.11,3033.18l-.15,1a7.21,7.21,0,0,1,4,2,7.14,7.14,0,0,1,2,4l1-.15a8.21,8.21,0,0,0-6.84-6.84Z" transform="translate(-340 -3030.14)"/></svg>
                                    <p>電話をかける</p>
                                </a>
                                <a class="btn__item-2" href="https://maile-zeze.com/">
                                <svg id="ãƒ¬ã‚¤ãƒ¤ãƒ¼_1" data-name="ãƒ¬ã‚¤ãƒ¤ãƒ¼ 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.21 20"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M531.11,3030.14h-20a1.11,1.11,0,0,0-1.11,1.1V3049a1.11,1.11,0,0,0,1.11,1.11h20a1.11,1.11,0,0,0,1.1-1.11v-17.79A1.1,1.1,0,0,0,531.11,3030.14Zm-2.69,2.23a1.24,1.24,0,1,1-1.24,1.24A1.24,1.24,0,0,1,528.42,3032.37Zm-3.93,0a1.24,1.24,0,1,1-1.24,1.24A1.24,1.24,0,0,1,524.49,3032.37Zm-3.93,0a1.24,1.24,0,1,1-1.24,1.24A1.25,1.25,0,0,1,520.56,3032.37Zm9.8,15.91H511.85v-11.67h18.51Z" transform="translate(-510 -3030.14)"/><rect class="cls-1" x="3.79" y="8.43" width="9.82" height="1.98"/><rect class="cls-1" x="3.79" y="12.4" width="14.63" height="1.98"/></svg>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13053.882246553383!2d135.910352!3d35.119929!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe1a04b87c0e93f30!2z44G-44GE44KM6Y2854G45pW06aqo6Zmi44O75pW05L2T6ZmiIOWkp-a0peW4guWgheeUsOmZog!5e0!3m2!1sja!2sjp!4v1637308430344!5m2!1sja!2sjp" width="100%" height="320"  allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <a class="btn__item-1" href="tel:077-571-6668">
                                <svg id="ãƒ¬ã‚¤ãƒ¤ãƒ¼_1" data-name="ãƒ¬ã‚¤ãƒ¤ãƒ¼ 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><defs><style>.cls-1{fill:#eb8250;}</style></defs><path class="cls-1" d="M352.35,3043.78a.65.65,0,0,0-.86-.05l-1.22,1a.65.65,0,0,1-.82,0,16.44,16.44,0,0,1-2.18-1.84,17.22,17.22,0,0,1-1.84-2.18.66.66,0,0,1,0-.83l1-1.21a.65.65,0,0,0,0-.87l-2.32-2.33a.66.66,0,0,0-.88,0l-2.92,2.45a.64.64,0,0,0-.15.8s.39.8.75,1.42a29.53,29.53,0,0,0,4.09,5.13,28.64,28.64,0,0,0,5.13,4.08c.61.37,1.42.76,1.42.76a.65.65,0,0,0,.8-.16l2.45-2.92a.64.64,0,0,0,0-.87Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M352.93,3040.66l1-.16a5.16,5.16,0,0,0-4.27-4.26l-.15,1a4.18,4.18,0,0,1,3.45,3.45Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M356.83,3033.31a11.19,11.19,0,0,0-6.23-3.17l-.16,1a10.31,10.31,0,0,1,8.59,8.58l1-.15A11.32,11.32,0,0,0,356.83,3033.31Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M350.11,3033.18l-.15,1a7.21,7.21,0,0,1,4,2,7.14,7.14,0,0,1,2,4l1-.15a8.21,8.21,0,0,0-6.84-6.84Z" transform="translate(-340 -3030.14)"/></svg>
                                    <p>電話をかける</p>
                                </a>
                                <a class="btn__item-2" href="https://maile-katata.com/">
                                <svg id="ãƒ¬ã‚¤ãƒ¤ãƒ¼_1" data-name="ãƒ¬ã‚¤ãƒ¤ãƒ¼ 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.21 20"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M531.11,3030.14h-20a1.11,1.11,0,0,0-1.11,1.1V3049a1.11,1.11,0,0,0,1.11,1.11h20a1.11,1.11,0,0,0,1.1-1.11v-17.79A1.1,1.1,0,0,0,531.11,3030.14Zm-2.69,2.23a1.24,1.24,0,1,1-1.24,1.24A1.24,1.24,0,0,1,528.42,3032.37Zm-3.93,0a1.24,1.24,0,1,1-1.24,1.24A1.24,1.24,0,0,1,524.49,3032.37Zm-3.93,0a1.24,1.24,0,1,1-1.24,1.24A1.25,1.25,0,0,1,520.56,3032.37Zm9.8,15.91H511.85v-11.67h18.51Z" transform="translate(-510 -3030.14)"/><rect class="cls-1" x="3.79" y="8.43" width="9.82" height="1.98"/><rect class="cls-1" x="3.79" y="12.4" width="14.63" height="1.98"/></svg>
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3263.2641611686126!2d136.09701561560718!3d35.125080880327786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60017bfe7940569f%3A0x795336ed17ab8640!2z44G-44GE44KM6Y2854G45pW06aqo6Zmi44O75pW05L2T6ZmiIOi_keaxn-WFq-W5oemZog!5e0!3m2!1sja!2sjp!4v1637221439736!5m2!1sja!2sjp" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <a class="btn__item-1" href="tel:074-836-1881">
                                <svg id="ãƒ¬ã‚¤ãƒ¤ãƒ¼_1" data-name="ãƒ¬ã‚¤ãƒ¤ãƒ¼ 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><defs><style>.cls-1{fill:#eb8250;}</style></defs><path class="cls-1" d="M352.35,3043.78a.65.65,0,0,0-.86-.05l-1.22,1a.65.65,0,0,1-.82,0,16.44,16.44,0,0,1-2.18-1.84,17.22,17.22,0,0,1-1.84-2.18.66.66,0,0,1,0-.83l1-1.21a.65.65,0,0,0,0-.87l-2.32-2.33a.66.66,0,0,0-.88,0l-2.92,2.45a.64.64,0,0,0-.15.8s.39.8.75,1.42a29.53,29.53,0,0,0,4.09,5.13,28.64,28.64,0,0,0,5.13,4.08c.61.37,1.42.76,1.42.76a.65.65,0,0,0,.8-.16l2.45-2.92a.64.64,0,0,0,0-.87Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M352.93,3040.66l1-.16a5.16,5.16,0,0,0-4.27-4.26l-.15,1a4.18,4.18,0,0,1,3.45,3.45Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M356.83,3033.31a11.19,11.19,0,0,0-6.23-3.17l-.16,1a10.31,10.31,0,0,1,8.59,8.58l1-.15A11.32,11.32,0,0,0,356.83,3033.31Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M350.11,3033.18l-.15,1a7.21,7.21,0,0,1,4,2,7.14,7.14,0,0,1,2,4l1-.15a8.21,8.21,0,0,0-6.84-6.84Z" transform="translate(-340 -3030.14)"/></svg>
                                    <p>電話をかける</p>
                                </a>
                                <a class="btn__item-2" href="https://maile-omihachiman.com/">
                                <svg id="ãƒ¬ã‚¤ãƒ¤ãƒ¼_1" data-name="ãƒ¬ã‚¤ãƒ¤ãƒ¼ 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.21 20"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M531.11,3030.14h-20a1.11,1.11,0,0,0-1.11,1.1V3049a1.11,1.11,0,0,0,1.11,1.11h20a1.11,1.11,0,0,0,1.1-1.11v-17.79A1.1,1.1,0,0,0,531.11,3030.14Zm-2.69,2.23a1.24,1.24,0,1,1-1.24,1.24A1.24,1.24,0,0,1,528.42,3032.37Zm-3.93,0a1.24,1.24,0,1,1-1.24,1.24A1.24,1.24,0,0,1,524.49,3032.37Zm-3.93,0a1.24,1.24,0,1,1-1.24,1.24A1.25,1.25,0,0,1,520.56,3032.37Zm9.8,15.91H511.85v-11.67h18.51Z" transform="translate(-510 -3030.14)"/><rect class="cls-1" x="3.79" y="8.43" width="9.82" height="1.98"/><rect class="cls-1" x="3.79" y="12.4" width="14.63" height="1.98"/></svg>
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
                                <svg id="ãƒ¬ã‚¤ãƒ¤ãƒ¼_1" data-name="ãƒ¬ã‚¤ãƒ¤ãƒ¼ 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><defs><style>.cls-1{fill:#eb8250;}</style></defs><path class="cls-1" d="M352.35,3043.78a.65.65,0,0,0-.86-.05l-1.22,1a.65.65,0,0,1-.82,0,16.44,16.44,0,0,1-2.18-1.84,17.22,17.22,0,0,1-1.84-2.18.66.66,0,0,1,0-.83l1-1.21a.65.65,0,0,0,0-.87l-2.32-2.33a.66.66,0,0,0-.88,0l-2.92,2.45a.64.64,0,0,0-.15.8s.39.8.75,1.42a29.53,29.53,0,0,0,4.09,5.13,28.64,28.64,0,0,0,5.13,4.08c.61.37,1.42.76,1.42.76a.65.65,0,0,0,.8-.16l2.45-2.92a.64.64,0,0,0,0-.87Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M352.93,3040.66l1-.16a5.16,5.16,0,0,0-4.27-4.26l-.15,1a4.18,4.18,0,0,1,3.45,3.45Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M356.83,3033.31a11.19,11.19,0,0,0-6.23-3.17l-.16,1a10.31,10.31,0,0,1,8.59,8.58l1-.15A11.32,11.32,0,0,0,356.83,3033.31Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M350.11,3033.18l-.15,1a7.21,7.21,0,0,1,4,2,7.14,7.14,0,0,1,2,4l1-.15a8.21,8.21,0,0,0-6.84-6.84Z" transform="translate(-340 -3030.14)"/></svg>
                                    <p>電話をかける</p>
                                </a>
                                <a class="btn__item-2" href="https://maile-kusatsu.com/">
                                <svg id="ãƒ¬ã‚¤ãƒ¤ãƒ¼_1" data-name="ãƒ¬ã‚¤ãƒ¤ãƒ¼ 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.21 20"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M531.11,3030.14h-20a1.11,1.11,0,0,0-1.11,1.1V3049a1.11,1.11,0,0,0,1.11,1.11h20a1.11,1.11,0,0,0,1.1-1.11v-17.79A1.1,1.1,0,0,0,531.11,3030.14Zm-2.69,2.23a1.24,1.24,0,1,1-1.24,1.24A1.24,1.24,0,0,1,528.42,3032.37Zm-3.93,0a1.24,1.24,0,1,1-1.24,1.24A1.24,1.24,0,0,1,524.49,3032.37Zm-3.93,0a1.24,1.24,0,1,1-1.24,1.24A1.25,1.25,0,0,1,520.56,3032.37Zm9.8,15.91H511.85v-11.67h18.51Z" transform="translate(-510 -3030.14)"/><rect class="cls-1" x="3.79" y="8.43" width="9.82" height="1.98"/><rect class="cls-1" x="3.79" y="12.4" width="14.63" height="1.98"/></svg>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3266.261648646077!2d135.99177201560528!3d35.05019698034619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001719dda582c73%3A0x5a5c9da93e0b5946!2z44G-44GE44KM6Y2854G45pW06aqo6Zmi44O75pW05L2T6ZmiIOWuiOWxsemZog!5e0!3m2!1sja!2sjp!4v1637308605454!5m2!1sja!2sjp" width="100%" height="320"  allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <a class="btn__item-1" href="tel:077-582-1911">
                                <svg id="ãƒ¬ã‚¤ãƒ¤ãƒ¼_1" data-name="ãƒ¬ã‚¤ãƒ¤ãƒ¼ 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><defs><style>.cls-1{fill:#eb8250;}</style></defs><path class="cls-1" d="M352.35,3043.78a.65.65,0,0,0-.86-.05l-1.22,1a.65.65,0,0,1-.82,0,16.44,16.44,0,0,1-2.18-1.84,17.22,17.22,0,0,1-1.84-2.18.66.66,0,0,1,0-.83l1-1.21a.65.65,0,0,0,0-.87l-2.32-2.33a.66.66,0,0,0-.88,0l-2.92,2.45a.64.64,0,0,0-.15.8s.39.8.75,1.42a29.53,29.53,0,0,0,4.09,5.13,28.64,28.64,0,0,0,5.13,4.08c.61.37,1.42.76,1.42.76a.65.65,0,0,0,.8-.16l2.45-2.92a.64.64,0,0,0,0-.87Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M352.93,3040.66l1-.16a5.16,5.16,0,0,0-4.27-4.26l-.15,1a4.18,4.18,0,0,1,3.45,3.45Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M356.83,3033.31a11.19,11.19,0,0,0-6.23-3.17l-.16,1a10.31,10.31,0,0,1,8.59,8.58l1-.15A11.32,11.32,0,0,0,356.83,3033.31Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M350.11,3033.18l-.15,1a7.21,7.21,0,0,1,4,2,7.14,7.14,0,0,1,2,4l1-.15a8.21,8.21,0,0,0-6.84-6.84Z" transform="translate(-340 -3030.14)"/></svg>
                                    <p>電話をかける</p>
                                </a>
                                <a class="btn__item-2" href="https://maile-moriyama.com/">
                                <svg id="ãƒ¬ã‚¤ãƒ¤ãƒ¼_1" data-name="ãƒ¬ã‚¤ãƒ¤ãƒ¼ 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.21 20"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M531.11,3030.14h-20a1.11,1.11,0,0,0-1.11,1.1V3049a1.11,1.11,0,0,0,1.11,1.11h20a1.11,1.11,0,0,0,1.1-1.11v-17.79A1.1,1.1,0,0,0,531.11,3030.14Zm-2.69,2.23a1.24,1.24,0,1,1-1.24,1.24A1.24,1.24,0,0,1,528.42,3032.37Zm-3.93,0a1.24,1.24,0,1,1-1.24,1.24A1.24,1.24,0,0,1,524.49,3032.37Zm-3.93,0a1.24,1.24,0,1,1-1.24,1.24A1.25,1.25,0,0,1,520.56,3032.37Zm9.8,15.91H511.85v-11.67h18.51Z" transform="translate(-510 -3030.14)"/><rect class="cls-1" x="3.79" y="8.43" width="9.82" height="1.98"/><rect class="cls-1" x="3.79" y="12.4" width="14.63" height="1.98"/></svg>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2683.506706302823!2d136.16308835636724!3d34.96633303068736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600161e4aafc0315%3A0xfecc15925a7528b!2z44G-44GE44KM6Y2854G45pW06aqo6Zmi44O75pW05L2T6ZmiIOeUsuizgOawtOWPo-mZog!5e0!3m2!1sja!2sjp!4v1637308685620!5m2!1sja!2sjp" width="100%" height="320"  allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <a class="btn__item-1" href="tel:0748-63-6699">
                                <svg id="ãƒ¬ã‚¤ãƒ¤ãƒ¼_1" data-name="ãƒ¬ã‚¤ãƒ¤ãƒ¼ 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><defs><style>.cls-1{fill:#eb8250;}</style></defs><path class="cls-1" d="M352.35,3043.78a.65.65,0,0,0-.86-.05l-1.22,1a.65.65,0,0,1-.82,0,16.44,16.44,0,0,1-2.18-1.84,17.22,17.22,0,0,1-1.84-2.18.66.66,0,0,1,0-.83l1-1.21a.65.65,0,0,0,0-.87l-2.32-2.33a.66.66,0,0,0-.88,0l-2.92,2.45a.64.64,0,0,0-.15.8s.39.8.75,1.42a29.53,29.53,0,0,0,4.09,5.13,28.64,28.64,0,0,0,5.13,4.08c.61.37,1.42.76,1.42.76a.65.65,0,0,0,.8-.16l2.45-2.92a.64.64,0,0,0,0-.87Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M352.93,3040.66l1-.16a5.16,5.16,0,0,0-4.27-4.26l-.15,1a4.18,4.18,0,0,1,3.45,3.45Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M356.83,3033.31a11.19,11.19,0,0,0-6.23-3.17l-.16,1a10.31,10.31,0,0,1,8.59,8.58l1-.15A11.32,11.32,0,0,0,356.83,3033.31Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M350.11,3033.18l-.15,1a7.21,7.21,0,0,1,4,2,7.14,7.14,0,0,1,2,4l1-.15a8.21,8.21,0,0,0-6.84-6.84Z" transform="translate(-340 -3030.14)"/></svg>
                                    <p>電話をかける</p>
                                </a>
                                <a class="btn__item-2" href="https://maile-minakuchi.com/">
                                <svg id="ãƒ¬ã‚¤ãƒ¤ãƒ¼_1" data-name="ãƒ¬ã‚¤ãƒ¤ãƒ¼ 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.21 20"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M531.11,3030.14h-20a1.11,1.11,0,0,0-1.11,1.1V3049a1.11,1.11,0,0,0,1.11,1.11h20a1.11,1.11,0,0,0,1.1-1.11v-17.79A1.1,1.1,0,0,0,531.11,3030.14Zm-2.69,2.23a1.24,1.24,0,1,1-1.24,1.24A1.24,1.24,0,0,1,528.42,3032.37Zm-3.93,0a1.24,1.24,0,1,1-1.24,1.24A1.24,1.24,0,0,1,524.49,3032.37Zm-3.93,0a1.24,1.24,0,1,1-1.24,1.24A1.25,1.25,0,0,1,520.56,3032.37Zm9.8,15.91H511.85v-11.67h18.51Z" transform="translate(-510 -3030.14)"/><rect class="cls-1" x="3.79" y="8.43" width="9.82" height="1.98"/><rect class="cls-1" x="3.79" y="12.4" width="14.63" height="1.98"/></svg>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3274.6602566439688!2d135.71357471560043!3d34.83963368039899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60011be2764406b1%3A0x24633c9d7d17cdc9!2z44G-44GE44KM6Y2854G45pW06aqo6Zmi44O75pW05L2T6ZmiIOadvuS6leWxseaJi-mZog!5e0!3m2!1sja!2sjp!4v1637308714440!5m2!1sja!2sjp" width="100%" height="320"  allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="accordion__content--row_3">
                            <div class="btn">
                                <a class="btn__item-1" href="tel:075-972-6656">
                                <svg id="ãƒ¬ã‚¤ãƒ¤ãƒ¼_1" data-name="ãƒ¬ã‚¤ãƒ¤ãƒ¼ 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><defs><style>.cls-1{fill:#eb8250;}</style></defs><path class="cls-1" d="M352.35,3043.78a.65.65,0,0,0-.86-.05l-1.22,1a.65.65,0,0,1-.82,0,16.44,16.44,0,0,1-2.18-1.84,17.22,17.22,0,0,1-1.84-2.18.66.66,0,0,1,0-.83l1-1.21a.65.65,0,0,0,0-.87l-2.32-2.33a.66.66,0,0,0-.88,0l-2.92,2.45a.64.64,0,0,0-.15.8s.39.8.75,1.42a29.53,29.53,0,0,0,4.09,5.13,28.64,28.64,0,0,0,5.13,4.08c.61.37,1.42.76,1.42.76a.65.65,0,0,0,.8-.16l2.45-2.92a.64.64,0,0,0,0-.87Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M352.93,3040.66l1-.16a5.16,5.16,0,0,0-4.27-4.26l-.15,1a4.18,4.18,0,0,1,3.45,3.45Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M356.83,3033.31a11.19,11.19,0,0,0-6.23-3.17l-.16,1a10.31,10.31,0,0,1,8.59,8.58l1-.15A11.32,11.32,0,0,0,356.83,3033.31Z" transform="translate(-340 -3030.14)"/><path class="cls-1" d="M350.11,3033.18l-.15,1a7.21,7.21,0,0,1,4,2,7.14,7.14,0,0,1,2,4l1-.15a8.21,8.21,0,0,0-6.84-6.84Z" transform="translate(-340 -3030.14)"/></svg>
                                    <p>電話をかける</p>
                                </a>
                                <a class="btn__item-2" href="https://maile-matsuiyamate.com/">
                                <svg id="ãƒ¬ã‚¤ãƒ¤ãƒ¼_1" data-name="ãƒ¬ã‚¤ãƒ¤ãƒ¼ 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.21 20"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M531.11,3030.14h-20a1.11,1.11,0,0,0-1.11,1.1V3049a1.11,1.11,0,0,0,1.11,1.11h20a1.11,1.11,0,0,0,1.1-1.11v-17.79A1.1,1.1,0,0,0,531.11,3030.14Zm-2.69,2.23a1.24,1.24,0,1,1-1.24,1.24A1.24,1.24,0,0,1,528.42,3032.37Zm-3.93,0a1.24,1.24,0,1,1-1.24,1.24A1.24,1.24,0,0,1,524.49,3032.37Zm-3.93,0a1.24,1.24,0,1,1-1.24,1.24A1.25,1.25,0,0,1,520.56,3032.37Zm9.8,15.91H511.85v-11.67h18.51Z" transform="translate(-510 -3030.14)"/><rect class="cls-1" x="3.79" y="8.43" width="9.82" height="1.98"/><rect class="cls-1" x="3.79" y="12.4" width="14.63" height="1.98"/></svg>
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