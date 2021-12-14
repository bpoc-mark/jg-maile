<?php get_header(); ?>
<div class="p-banner">
    <div class="l-wrap">
        <div class="title">
            <p class="title__main">Message</p>
            <h1 class="title__sub">代表挨拶</h1>
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
<section class="page_message">
    <div class="l-wrap">
        <div class="imgs">
            <img class="p-upDown" src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1-invert.svg"
                alt="Cloud">
        </div>
        <div class="content">
            <img class="cont_img p-downUp"
                src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1.svg" alt="Cloud">
            <div class="page_message__container">
                <img class="cloud_msg p-downUp"
                    src="<?php echo get_template_directory_uri(); ?>/release/image/top/cloud_1-invert.svg" alt="Cloud">
                <div class="row-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/page/message_img.png"
                        alt="Message Man">
                </div>
                <div class="row-2">
                    <p class="row-2__ttl">
                        「まいれ整骨院」を開業するまで
                    </p>
                    <p class="row-2__desc">
                        私は学生時代に野球をしており、練習のやり過ぎで最後の夏の大会前に疲労骨折をしてしまいました。病院を数件回りましたが、どこの病院でも言われる事は同じで「諦めろ」という言葉だけ。
                        頭の中では理解していましたが、最後の大会の為に努力してきたもの全てを、その一言だけで終止符を打たれる事は、辛く、苦しみました。そして、もし主治医の家族が同じ状況に直面した場合、こんなに簡単に片付けられる問題なのか？なぜ、一人一人の患者に対してもっと向き合う事をしないのか？という想いを持ち始めました。

                        そんな時に出逢った人が、整骨院の柔道整復師の先生です。「諦めずに一緒に頑張ろう」と言ってくださり、最後の最後まで自分と本気で向き合ってくださいました。その姿を見て、「自分もこんな人になりたい」、「自分と同じように苦しんでいる人に対して本気で向き合い、1人でも多くの人の助けになりたい」と憧れを抱き、この業界に進むことを決意しました。

                        それから柔道整復師の免許の取得に留まらず様々な技術の習得および、人材育成や経営の経験を積み、H27年5月25日に「まいれ整骨院」を開業しました。
                    </p>
                </div>
            </div>
        </div>
        <div class="content_2">
            <p class="content_2__ttl">MAILE株式会社が大切にする考え</p>
            <p class="content_2__desc">
                人と人との出逢いは偶然ではなく、出逢うべくして出逢う必然です。
                私がいつも仲間に伝えている事があります。

                「今日来てくださった患者様、今横にいる仲間、その人達とまた明日絶対逢えるとは限らない。もしかしたらもう二度と会えないかもしれない。だから、その一日、その一瞬を後悔が無いように全力で関わってほしい。患者様であれ、仲間であれ、自分の本当の家族であるように想い、本気で関わってほしい。」

                これは私がまだ経験未熟な頃の経験に基づきます。毎日同じ繰り返しの日々で、患者様に対して「今日はこれぐらいで、また明日続きをしましょう。」と、「また明日」と言っていました。しかし、その「明日」はありませんでした。その方は、院に来る前に亡くなられたのです。「あの時もっとこうしておけば…」「もっとこんな話をしておけば…」と、本当に後悔しました。しかし、いくら後悔してももう過去を変える事はできません。自分と同じ後悔、経験を仲間には繰り返して欲しくない。

                MAILE株式会社の仲間は本当に第一に患者様の事を考え、私以上に患者様がどうしたらもっと良くなるのか、患者様の為になるのかを考えてくれる人ばかり。弊社は人を本当に大切にする人たちが集まった会社と胸を張って言えます。
            </p>
            <div class="content_2--mt_114">
                <p class="content_2__ttl">MAILE株式会社で働くということ</p>
                <p class="content_2__desc">
                    弊社は、「在り方」と「考え方」を一番大事に考えています。技術は後からいくらでも身につきます。しかし、「在り方」と「考え方」がしっかりしていないと成長の速度が全然変わります。

                    職場を選ぶ時に大切だと思う事は、「どこで働くか」よりも「誰と、どんな想いで働くか」これが大事だと考えています。本気で患者様と向き合いたい、仲間と共に一緒に夢を叶えたい。熱い想いを持ち、人を大切にする方と、私たちは一緒に仕事をしたいと考えています。

                    熱い想いを持つ仲間と共に、わくわくする職場で働きましょう！いつでもお待ちしています。

                    <span>株式会社MAILE　代表　平石洋介</span>
                </p>
            </div>
        </div>

        <div class="p-details--btn">
            <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>">
                <p>ENTRY</p>
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/top/details_btn.svg" alt="">
            </a>
        </div>
    </div>
</section>
<?php get_footer(); ?>