<?php get_header(); ?>
<div class="mv-lower mv-lower--course">
    <h1 class="mv-lower__title"><?php the_title(); ?></h1>
</div>
<?php get_template_part("contexts/template/breadcrumb"); ?>
<div class="inner course-inner">
    <section class="price-system">
        <h2 class="section-lower-title">料金体系</h2>
        <div class="price-system__body">
            <div class="price-system__item">入会金 39,800円</div>
            <div class="price-system__img">
                <img class="price-system__icon" src="<?php echo get_template_directory_uri() ?>/img/course/icon-plus.png" alt="＋">
            </div>
            <div class="price-system__item">月額費用</div>
        </div>
        <p class="price-system__text">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
    </section>
    <section class="price-table">
        <h2 class="section-lower-title">料金表</h2>
        <div class="js-scrollable price-table__list">
            <div class="price-table__item">
                <div class="price-table__head">基礎プラン</div>
                <div class="price-table__body">
                    <div class="price-table__monthly">
                        <div class="price-table__money"><?php the_field('basis_plan'); ?></div>
                        <span class="price-table__text">*月額（税抜価格）</span>
                    </div>
                    <ul class="price-table__feature">
                        <li class="price-table__feature-item">カリキュラム作成</li>
                        <li class="price-table__feature-item">TOEFL学習サポート</li>
                        <li class="price-table__feature-item">週一回のビデオMTG</li>
                    </ul>
                </div>
            </div>
            <div class="price-table__item">
                <div class="price-table__head">演習プラン</div>
                <div class="price-table__body">
                    <div class="price-table__monthly">
                        <div class="price-table__money"><?php the_field('exercises_plan'); ?></div>
                        <span class="price-table__text">*月額（税抜価格）</span>
                    </div>
                    <ul class="price-table__feature">
                        <li class="price-table__feature-item">カリキュラム作成</li>
                        <li class="price-table__feature-item">TOEFL学習サポート</li>
                        <li class="price-table__feature-item">週一回のビデオMTG</li>
                        <li class="price-table__feature-item">月二回の模試（解説
                            付き）</li>
                    </ul>
                </div>
            </div>
            <div class="price-table__item">
                <div class="price-table__head price-table__head--recommend"><span class="price-table__head-text">おすすめ</span><span class="price-table__head-text">志望校対策プラン</span></div>
                <div class="price-table__body">
                    <div class="price-table__monthly">
                        <div class="price-table__money price-table__money--yellow"><?php the_field('zhimang_school_plan'); ?></div>
                        <span class="price-table__text">*月額（税抜価格）</span>
                    </div>
                    <ul class="price-table__feature">
                        <li class="price-table__feature-item">カリキュラム作成</li>
                        <li class="price-table__feature-item">TOEFL学習サポート</li>
                        <li class="price-table__feature-item">週一回のビデオMTG</li>
                        <li class="price-table__feature-item">月二回の模試（解説
                            付き）</li>
                        <li class="price-table__feature-item">週一の英語面接対策</li>
                    </ul>
                </div>
            </div>
            <div class="price-table__item">
                <div class="price-table__head">フレックスプラン</div>
                <div class="price-table__body">
                    <div class="price-table__monthly">
                        <div class="price-table__money"><?php the_field('flex_plan'); ?></div>
                        <span class="price-table__text">*月額（税抜価格）</span>
                    </div>
                    <p class="price-table__text">＊別途ご相談ください</p>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_template_part("contexts/template/cta"); ?>
<?php get_footer(); ?>