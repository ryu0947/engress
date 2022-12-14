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
    <section class="example">
        <div class="inner">
            <h2 class="section-title section-title--white">TOEFL成功事例</h2>
            <div class="example__list">
                <?php
                $example_group = SCF::get('example');
                foreach ($example_group as $example) :
                ?>
                    <div class="example__item">
                        <p class="example__head"><?php echo $example['clear']; ?></p>
                        <div class="example__picture">
                            <img src="<?php echo wp_get_attachment_url($example['picture']); ?>" alt="">
                        </div>
                        <div class="example__foot">
                            <p class="example__foot-item"><?php echo $example['job']; ?></p>
                            <p class="example__foot-item"><?php echo $example['name']; ?></p>
                            <p class="example__foot-item"><?php echo $example['result']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="flow">
        <div class="inner">
            <h2 class="section-title">ご利用の流れ</h2>
            <ol class="flow__list">
                <li class="flow__item">
                    <div class="flow__number">01</div>
                    <div class="flow__item-body">
                        <div class="flow__item-title">お問い合わせ</div>
                        <p class="flow__item-text">まずはフォームまたはお電話からお申し込みください。</p>
                    </div>
                </li>
                <li class="flow__item">
                    <div class="flow__number">02</div>
                    <div class="flow__item-body">
                        <div class="flow__item-title">ヒアリング</div>
                        <p class="flow__item-text">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
                    </div>
                </li>
                <li class="flow__item">
                    <div class="flow__number">03</div>
                    <div class="flow__item-body">
                        <div class="flow__item-title">学習プランのご提供</div>
                        <p class="flow__item-text">目標達成のために最適な学習プランをご提案致します。</p>
                    </div>
                </li>
                <li class="flow__item">
                    <div class="flow__number">04</div>
                    <div class="flow__item-body">
                        <div class="flow__item-title">ご入会</div>
                        <p class="flow__item-text">お申込み完了後、レッスンがスタートします。</p>
                    </div>
                </li>
            </ol>
        </div>
    </section>
    <section class="faq">
        <div class="inner">
            <h2 class="section-title">よくある質問</h2>
            <div class="faq__item">
                <div class="js-faq__title faq__title" data-is-open="false">Engressはサラリーマンでも<br class="is-sp">学習を続けられるでしょうか？</div>
                <div class="js-faq__item-inner faq__item-inner">
                    <p class="js-faq__text faq__text">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
                </div>
            </div>
            <div class="faq__item">
                <div class="js-faq__title faq__title" data-is-open="false">教材はオリジナルのものを<br class="is-sp">使用しているのでしょうか？</div>
                <div class="js-faq__item-inner faq__item-inner">
                    <p class="js-faq__text faq__text">EngressはTOEFLの過去の問題や最新の試験範囲までを網羅したオリジナルの教材を作成しています。</p>
                </div>
            </div>
            <div class="faq__item">
                <div class="js-faq__title faq__title" data-is-open="false">講師に日本人はいますか？</div>
                <div class="js-faq__item-inner faq__item-inner">
                    <p class="js-faq__text faq__text">はい。各教室に2人以上の日本人講師が常駐しております。</p>
                </div>
            </div>
            <div class="faq__item">
                <div class="js-faq__title faq__title" data-is-open="false">TOEFL以外の海外大学合格の<br class="is-sp">サポートもしてもらえる<br class="is-sp">のでしょうか？</div>
                <div class="js-faq__item-inner faq__item-inner">
                    <p class="js-faq__text faq__text">EngresssではTOEFL以外の英語資格や試験の学習のサポートは行なっておりません。</p>
                </div>
            </div>
        </div>
    </section>
    <section class="information">
        <div class="inner">
            <div class="information__inner">
                <div class="information__blog">
                    <h3 class="information__title">ブログ</h3>
                    <?php
                    $blog_pages = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post_type' => 'post',
                        'orderby' => 'date',
                    ));
                    ?>
                    <?php if ($blog_pages->have_posts()) : ?>
                        <ul class="information__blog-list">
                            <?php while ($blog_pages->have_posts()) : $blog_pages->the_post(); ?>
                                <li class="information__blog-item">
                                    <a class="information__blog-item-inner" href="<?php the_permalink(); ?>">
                                        <div class="information__blog-left">
                                            <div class="information__category">
                                                <?php
                                                $blog_category = get_the_category();
                                                echo $blog_category[0]->name;
                                                ?>
                                            </div>
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('full', ['class' => 'information__blog-img']);
                                            } else {
                                                echo '<img class="information__blog-img" src="' . esc_url(get_template_directory_uri()) . '/img/common/no-img-icatch.png" alt="">';
                                            }
                                            ?>
                                        </div>
                                        <div class="information__blog-right">
                                            <p class="information__blog-text"><?php the_title(); ?></p>
                                            <time class="information__blog-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y-m-d'); ?></time>
                                        </div>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="information__news">
                    <h3 class="information__title">お知らせ</h3>
                    <?php
                    $news_category = get_the_category();
                    $news_pages = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post_type' => 'news',
                        'orderby' => 'date',
                    ));
                    ?>
                    <?php if ($news_pages->have_posts()) : ?>
                        <ul class="information__news-list">
                            <?php while ($news_pages->have_posts()) : $news_pages->the_post(); ?>
                                <li class="information__news-item">
                                    <time class="information__news-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y-m-d'); ?></time>
                                    <a class="information__news-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </li>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_template_part("contexts/template/cta"); ?>
<?php get_footer(); ?>