<?php get_header(); ?>
<div class="p-banner">
    <div class="l-wrap">
        <div class="title">
            <p class="title__main">Mid-career employment</p>
            <h1 class="title__sub">中途採用情報</h1>
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
<section class="section_1 p-details">
    <div class="l-wrap">
        <img class="cloud p-upDown" src="<?php echo get_template_directory_uri(); ?>/release/image/page/cloud_1.svg" alt="Cloud">
        <img class="cloud p-downUp" src="<?php echo get_template_directory_uri(); ?>/release/image/page/cloud_2.svg" alt="Cloud">
        <img class="cloud p-upDown" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1-invert.svg" alt="Cloud">
        <img class="cloud p-downUp" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_2-invert.svg" alt="Cloud">
        <div class="p-details--container">
            <?php
            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 10,
                'category_name' => 'career',
                'paged' => $paged,
            );

            $the_query = new WP_Query($args);
            ?>

            <?php if ($the_query->have_posts()) : ?>

                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <ul class="p-details--list">
                        <div class="item">
                            <li><h2>募    集    職    種</h2></li>
                            <li><?php echo the_field("募集職種"); ?></li>
                        </div>
                        <div class="item">
                            <li><span>勤</span><span>務</span><span>形</span><span>態</span></li>
                            <li><?php echo the_field('勤務形態'); ?></li>
                        </div>
                        <div class="item">
                            <li><span>給</span><span>与</span></li>
                            <li><?php echo the_field('給与'); ?></li>
                        </div>
                        <div class="item">
                            <li><span>応</span><span>募</span><span>資</span><span>格</span></li>
                            <li><?php echo the_field('応募資格'); ?></li>
                        </div>
                        <div class="item">
                            <li><span>勤</span><span>務</span><span>時</span><span>間</span></li>
                            <li><?php echo the_field('勤務時間'); ?></li>
                        </div>
                        <div class="item">
                            <li><span>休</span><span>日</span><span>・</span><span>休</span><span>暇</span></li>
                            <li><?php echo the_field('休日・休暇'); ?></li>
                        </div>
                        <div class="item">
                            <li><span>勤</span><span>務</span><span>エ</span><span>リ</span><span>ア</span></li>
                            <li><?php echo the_field('勤務エリア'); ?></li>
                        </div>
                        <div class="item">
                            <li><span>福</span><span>利</span><span>厚</span><span>生</span><span>・</span><span>待</span><span>遇</span>></li>
                            <li><?php echo the_field('福利厚生・待遇'); ?></li>
                        </div>
                    </ul>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="p-details--information">
                <div class="p-details--information__1">
                    <div class="bg_img">
                        <a href="<?php echo get_permalink(get_page_by_path('employment')) ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/information_bg.png" alt="Background">
                            <div class="items">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/information_graduate.svg" alt="Graduate Icon">
                                <p class="items__ttl">新卒採用情報</p>
                                <div class="items__btn">
                                    <p>詳しくはこちら</p>
                                    <img class="rght-arr" src="<?php echo get_template_directory_uri(); ?>/release/image/top/arrow_r.svg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="p-details--information__2">
                    <div class="bg_img">
                        <a href="<?php echo get_permalink(get_page_by_path('reception')) ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/information_bg.png" alt="Background">
                            <div class="custom items">
                                <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/information_man.svg" alt="Employee Icon">
                                <p class="items__ttl">受付社員・パート・<br>
                                    アルバイト情報</p>
                                <div class="items__btn">
                                    <p>詳しくはこちら</p>
                                    <img class="rght-arr" src="<?php echo get_template_directory_uri(); ?>/release/image/top/arrow_r.svg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-details--flow">
            <p class="p-details--flow__ttl">Flow</p>
            <h2 class="p-details--flow__sub">採用の流れ</h2>
            <div class="p-details--flow__steps">
                <div class="step" data-aos="zoom-out">
                    <p class="step__ttl">step <span>01</span></p>
                    <h3 class="step__desc">お問い合わせ</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/flow_divider.svg" alt="Divider">
                    <p class="step__cont">メール問い合わ せまたはお電話にて、ご応募ください。</p>
                </div>
                <div class="step" data-aos="zoom-out" data-aos-delay="300">
                    <p class="step__ttl">step <span>02</span></p>
                    <h3 class="step__desc">見　学</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/flow_divider.svg" alt="Divider">
                    <p class="step__cont">実際に現場の雰囲気などを見ていただきます。</p>
                </div>
                <div class="step" data-aos="zoom-out" data-aos-delay="400">
                    <p class="step__ttl">step <span>03</span></p>
                    <h3 class="step__desc">書類選考</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/flow_divider.svg" alt="Divider">
                    <p class="step__cont">見学の際に履歴書をご持参ください。</p>
                </div>
                <div class="step" data-aos="zoom-out" data-aos-delay="500">
                    <p class="step__ttl">step <span>04</span></p>
                    <h3 class="step__desc">面　接</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/flow_divider.svg" alt="Divider">
                    <p class="step__cont">あなたの思いや熱意などをアピールしてください。</p>
                </div>
                <div class="step" data-aos="zoom-out" data-aos-delay="600">
                    <p class="step__ttl">step <span>05</span></p>
                    <h3 class="step__desc">採　用</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/flow_divider.svg" alt="Divider">
                    <p class="step__cont">こちらから合否のご連絡をさせていただきます。</p>
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