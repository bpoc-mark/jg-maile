<?php get_header(); ?>
<div class="p-banner">
    <div class="l-wrap">
        <div class="title">
            <h1>Thank you</h1>
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
<div class="thanks_cont">
    <div class="l-wrap">
        <h1>お問い合せありがとうございます。</h1>
        <p class="text_1">お問い合せいただき、誠にありがとうございます。 自動返信メールをお送りしましたので、ご確認ください。</p>
        <p class="text_2">48時間たっても連絡がない場合は、メールが正常に送信されなかった可能性がございます。 お手数ですが、もう一度送信いただくか、まで直接ご連絡をお願いします。</p>
    </div>

    <div class="p-details--btn">
        <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>">
            <p>HOME</p>
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/details_btn.svg" alt="">
        </a>
    </div>
</div>

<?php get_footer(); ?>