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
</main>
<?php get_template_part("contexts/template/cta"); ?>
<?php get_footer(); ?>