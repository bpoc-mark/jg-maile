<?php get_header(); ?>
<div class="p-banner">
    <div class="l-wrap">
        <div class="title">
            <p class="title__main">Thank you</p>
            <h1 class="title__sub">会社概要</h1>
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
<section class="thanks_cont">
    <div class="l-wrap">
        <h2>お問い合せいただき、誠にありがとうございます。</h2>
        <h3 class="text_1">自動返信メールをお送りしましたので、ご確認ください。</h3>
        <h3 class="text_2">数日たっても連絡がない場合は、メールが正常に送信されなかった可能性がございます。<br>
            お手数ですが、もう一度送信いただくか、<a href="tel:077-548-6656">077-548-6656</a>まで直接ご連絡をお願いします。</h3>
    </div>

    <div class="p-details--btn">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <p>HOME</p>
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/details_btn.svg" alt="">
        </a>
    </div>
</section>

<?php get_footer(); ?>