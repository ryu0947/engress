<?php get_header(); ?>
<div class="mv">
    <div class="mv__inner">
        <h1 class="mv__title">TOEFL対策はEngress</h1>
        <p class="mv__text">日本人へのTOEFL指導歴豊かな<br class="is-sp">講師陣の<br class="is-pc">コーチング型<br class="is-sp">TOEFLスクール</p>
        <a class="request-btn request-btn--mv" href="<?php echo esc_url(home_url('/contact')); ?>">資料請求</a>
        <a class="mv__link" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
    </div>
</div>
<main>
    <section class="about">
        <div class="inner">
            <h2 class="section-title section-title--white">TOEFL学習でこんな<br class="is-sp">悩みありませんか？</h2>
            <ul class="about__list">
                <li class="about__item">勉強の習慣が<br class="is-pc">身についていない</li>
                <li class="about__item">勉強しているはず<br class="is-pc">なのに<span class="break-text">点数が伸びない</span></li>
                <li class="about__item">正しい勉強方法が<br class="is-pc">わからない</li>
            </ul>
            <div class="about__description">
                <div class="about__description-inner">
                    <h3 class="about__description-title">Engressは<br>
                        <span class="under-line">TOEFLに特化した<br class="is-sp">スクール</span>です
                    </h3>
                    <p class="about__description-text">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br class="is-tab">TOEFLの苦手分野を克服します。</p>
                </div>
            </div>
        </div>
    </section>
    <section class="feature">
        <div class="inner">
            <h2 class="section-title">TOEFL対策に特化した<br class="is-sp">Engress3つの強み</h2>
            <div class="feature__item">
                <div class="feature__description">
                    <div class="feature__label">特徴&emsp;1</div>
                    <h3 class="feature__title">TOEFLに最適化された<br>無駄のないカリキュラム</h3>
                    <p>TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
                </div>
                <div class="feature__thumb">
                    <img src="<?php echo get_template_directory_uri() ?>/img/front/feature-1.jpg" alt="">
                </div>
            </div>
            <div class="feature__item feature__item--reverse">
                <div class="feature__description">
                    <div class="feature__label">特徴&emsp;2</div>
                    <h3 class="feature__title">日本人指導歴10年以上の<br>経験豊富な講師陣</h3>
                    <p>Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
                </div>
                <div class="feature__thumb">
                    <img src="<?php echo get_template_directory_uri() ?>/img/front/feature-2.jpg" alt="">
                </div>
            </div>
            <div class="feature__item">
                <div class="feature__description">
                    <div class="feature__label">特徴&emsp;3</div>
                    <h3 class="feature__title">平均3ヶ月でTOEFL iBT<br class="is-sp">20点アップ</h3>
                    <p>Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
                </div>
                <div class="feature__thumb">
                    <img src="<?php echo get_template_directory_uri() ?>/img/front/feature-3.jpg" alt="">
                </div>
            </div>
            <div class="plan">
                <div class="plan__inner">
                    <h3 class="plan__title">Engressの料金プランはこちら</h3>
                    <a class="plan__btn" href="<?php echo esc_url(home_url('/course')); ?>">料金を見てみる</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_template_part("contexts/template/cta"); ?>
<?php get_footer(); ?>