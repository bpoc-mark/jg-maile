<?php get_header(); ?>
<div class="p-banner">
    <div class="l-wrap">
        <div class="title">
            <h1>contact</h1>
            <p>よくある質問・<br>お問い合わせ</p>
        </div>
        <div class="images">
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_coconut.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_ttl.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/top_ttl_sp.svg" alt="">
        </div>
    </div>
</div>
<div class="page_contact">
    <div class="l-wrap">
        <div class="page_contact__faq">
            <p class="page_contact__faq--ttl">faq</p>
            <p class="page_contact__faq--sub">よくある質問</p>

            <div class="contact_content">
                <div class="contact_content__item">
                    <img class="contact-woman" src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact_img-1.svg" alt="">
                    <p class="convo">面接前に施設見学やOB・OG訪問は出来ますか？</p>
                </div>
                <div class="contact_content__item">
                    <p class="convo">随時連絡をお待ちしております。予定を調整させていただき、何店舗かを回っていただきます。その後、質問などの面談も可能です。就職は大きな人生の転機になりますのでどんどん質問お待ちしております。</p>
                    <img class="contact-man" src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact_img-2.svg" alt="">
                </div>
                <div class="contact_content__item">
                    <img class="contact-man-2" src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact_img-3.svg" alt="">
                    <p class="convo">配属院はどのように決まりますか？</p>
                </div>
                <div class="contact_content__item">
                    <p class="convo">基本的には資格、将来の夢、現住所によって考慮します。</p>
                    <img class="contact-man" src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact_img-2.svg" alt="">
                </div>
                <div class="contact_content__item">
                    <img class="contact-woman" src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact_img-1.svg" alt="">
                    <p class="convo">遠方に住んでいますが、就職にあたってのサポートはありますか？</p>
                </div>
                <div class="contact_content__item">
                    <p class="convo">家賃補助の制度、交通費全額支給、マイカー通勤可などのサポートがあります。</p>
                    <img class="contact-man" src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact_img-2.svg" alt="">
                </div>
                <div class="contact_content__item">
                    <img class="contact-woman" src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact_img-1.svg" alt="">
                    <p class="convo">施術スタッフの男女比率と女性スタッフの活躍について教えてください</p>
                </div>
                <div class="contact_content__item">
                    <p class="convo">施術スタッフの割合は、男性女性の割合は現在7：3となっております。女性の患者様が多く、美容部門で女性スタッフが大活躍しています。今後、美容部門とエステ部門が立ち上がりますので、更に女性スタッフの活躍が期待されます。</p>
                    <img class="contact-man" src="<?php echo get_template_directory_uri(); ?>/release/image/page/contact_img-2.svg" alt="">
                </div>
            </div>
        </div>
        <div class="page_contact__contact">
            <p class="page_contact__contact--ttl">contact</p>
            <p class="page_contact__contact--sub">お問い合わせ</p>

            <div class="form-group">
                <div class="row_1">
                    <p>お名前<span>※必須</span></p>
                </div>
                <div class="row_2">
                    <input type="text" placeholder="漢字でフルネームを記入してください。">
                </div>
            </div>
            <div class="form-group">
                <div class="row_1">
                    <p>フリガナ<span>※必須</span></p>
                </div>
                <div class="row_2">
                    <input type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="row_1">
                    <p>電話番号<span>※必須</span></p>
                </div>
                <div class="row_2">
                    <input type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="row_1">
                    <p>メールアドレス<span>※必須</span></p>
                </div>
                <div class="row_2">
                    <input type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="row_1">
                    <p>住所<span>※必須</span></p>
                </div>
                <div class="row_2">
                    <input type="text" placeholder="郵便番号">
                </div>
            </div>
            <div class="form-group">
                <div class="row_1">
                    <p>お問い合わせ項目<span>※必須</span></p>
                </div>
                <div class="row_2">
                    <input type="text" placeholder="新卒採用">
                </div>
            </div>
            <div class="form-group">
                <div class="row_1">
                    <p>お問い合わせ内容</p>
                </div>
                <div class="row_2">
                    <textarea name="message" id="" cols="30" rows="10">ご希望や、ご質問がありましたらこちらにご入力をお願いします。資格をお持ちでしたらこちらにご入力をお願いいたします。</textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>