        </div>
        <div class="page__footer">
                <div class="row">
                        <a href="tel: 077-548-6656">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/footer/footer_tel.svg" alt="">
                                <p class="ttl">お電話でのお問い合わせ</p>
                        </a>
                </div>
                <div class="row">
                        <a href="<?php echo esc_url(home_url('contact')); ?>/#form">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/footer/footer_mail.svg" alt="">
                                <p class="ttl">メールでのお問い合わせ</p>
                        </a>
                </div>
                <div class="row">
                        <a href="<?php echo esc_url(home_url('contact')); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/footer/footer_ques.svg" alt="">
                                <p class="ttl">よくある質問</p>
                        </a>

                </div>
        </div>
        <div class="page__footer--lower">
                <div class="content">
                        <div class="content__row-1">
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/footer/logo.svg" alt="">

                                </a>
                        </div>
                        <div class="content__row-2">
                                <nav>
                                        <div class="list_1">
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
                                        </div>
                                        <div class="list_2">
                                                <li>
                                                        <a href="https://maile-group.com/trainer">
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
                                        </div>
                                </nav>
                        </div>
                </div>
                <div class="line"></div>
                <p class="remarks">©2021 MAILE株式会社 All Right Reserved. produced by <a href="">ジーングロス</a></p>
        </div>
        </main>
        <!-- SLICK -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- SWIPER -->
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
        <script>
                $('.zip_s').on('keyup', function() {
                        if ($(this).val() !== '') {
                                AjaxZip3.zip2addr('zip01', '', 'pref01', 'municipality', 'address', 'address2');
                        }
                        if ($(this).val() === '') {
                                $('.prefecture_s').val(''),
                                        $('.municipality_s').val(''),
                                        $('.address_s').val(''),
                                        $('.address_s2').val('')
                        }
                });
        </script>
        <script src="<?php echo get_template_directory_uri(); ?>/release/js/custom.js"></script>
        <script>
                AOS.init({
                        // once: true
                });
        </script>

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
        <?php wp_footer(); ?>
        </body>

        </html>