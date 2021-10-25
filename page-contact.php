<?php get_header(); ?>
<div class="p-banner">
    <div class="l-wrap">
        <div class="title">
            <h1>Contact</h1>
            <p>よくある質問・<br>お問い合わせ</p>
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
<div class="c-page_contact">
    <div class="l-wrap">
        <div class="cont_clouds">
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_2.svg" alt="">
        </div>
        <div class="c-page_contact__faq">
            <p class="c-page_contact__faq--ttl">faq</p>
            <p class="c-page_contact__faq--sub">よくある質問</p>

            <div class="contact_content">
                <div class="contact_content__item" data-aos="fade-up" data-aos-duration="1000">
                    <img class="contact-woman" src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact_img-1.svg" alt="">
                    <p class="convo">面接前に施設見学やOB・OG訪問は出来ますか？</p>
                </div>
                <div class="contact_content__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <p class="convo">随時連絡をお待ちしております。予定を調整させていただき、何店舗かを回っていただきます。その後、質問などの面談も可能です。就職は大きな人生の転機になりますのでどんどん質問お待ちしております。</p>
                    <img class="contact-man" src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact_img-2.svg" alt="">
                </div>
                <div class="contact_content__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <img class="contact-man-2" src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact_img-3.svg" alt="">
                    <p class="convo">配属院はどのように決まりますか？</p>
                </div>
                <div class="contact_content__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <p class="convo">基本的には資格、将来の夢、現住所によって考慮します。</p>
                    <img class="contact-man" src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact_img-2.svg" alt="">
                </div>
                <div class="contact_content__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <img class="contact-woman" src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact_img-1.svg" alt="">
                    <p class="convo">遠方に住んでいますが、就職にあたってのサポートはありますか？</p>
                </div>
                <div class="contact_content__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                    <p class="convo">家賃補助の制度、交通費全額支給、マイカー通勤可などのサポートがあります。</p>
                    <img class="contact-man" src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact_img-2.svg" alt="">
                </div>
                <div class="contact_content__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                    <img class="contact-woman" src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact_img-1.svg" alt="">
                    <p class="convo">施術スタッフの男女比率と女性スタッフの活躍について教えてください</p>
                </div>
                <div class="contact_content__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                    <p class="convo">施術スタッフの割合は、男性女性の割合は現在7：3となっております。女性の患者様が多く、美容部門で女性スタッフが大活躍しています。今後、美容部門とエステ部門が立ち上がりますので、更に女性スタッフの活躍が期待されます。</p>
                    <img class="contact-man" src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact_img-2.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="c-page_contact__contact">
        <p class="c-page_contact__contact--ttl">Entry</p>
        <p class="c-page_contact__contact--sub">エントリーフォーム</p>

        <?php echo do_shortcode('[contact-form-7 id="126" title="Contact form 1"]'); ?>
    </div>

</div>
<?php get_footer(); ?>