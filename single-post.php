<?php get_header(); ?>
<?php get_template_part("contexts/template/breadcrumb"); ?>
<div class="blog-wrapper">
    <main class="primary">
        <article class="article article-blog">
            <div class="article__head">
                <div class="article__category">
                    <?php
                    $categorys = get_the_category();
                    echo $categorys[0]->name;
                    ?>
                </div>
                <h1 class="article__title article__title--blog"><?php the_title(); ?></h1>
                <div class="article__info">
                    <div class="article__share">
                        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v15.0" nonce="idoHqXI1"></script>
                        <a class="twitter-btn" href="https://twiter.com/share?url=<?php the_permalink(); ?>" target="_blank" rel="nofollow noopener" data-lang="ja" data-show-count="false">
                            <svg class="twitter-svg" xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 512 512">
                                <path class="twitter-icon" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                            </svg>
                            <span class="twitter-btn-text">ツイート</span>
                        </a>
                    </div>
                    <time class="article__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y-m-d'); ?></time>
                </div>
                <div class="article__thumb">
                    <?php the_post_thumbnail('full'); ?>
                </div>
            </div>
            <section class="article__body">
                <?php the_content(); ?>
            </section>
            <section class="article-recommend">
                <h2 class="article-recommend__title">おすすめの記事</h2>
                <?php
                $recommend_posts = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'post',
                    'tag' => 'pickup',
                    'orderby' => 'date',
                ));
                ?>
                <?php if ($recommend_posts->have_posts()) : ?>
                    <ul class="article-recommend__list">
                        <?php while ($recommend_posts->have_posts()) : $recommend_posts->the_post(); ?>
                            <li class="article-recommend__item">
                                <a class="article-recommend__inner" href="<?php the_permalink(); ?>">
                                    <div class="article-recommend__thumb">
                                        <div class="article-recommend__label">
                                            <?php
                                            $recommend_tag = get_the_tags();
                                            echo $recommend_tag[0]->name;
                                            ?>
                                        </div>
                                        <?php
                                        the_post_thumbnail('full', ['class' => 'article-recommend__img']);
                                        ?>
                                    </div>
                                    <div class="article-recommend__meta">
                                        <time class="article-recommend__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y-m-d'); ?></time>
                                        <div class="article-recommend__name">
                                            <?php the_title(); ?>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </section>
        </article>
    </main>
    <aside class="aside">
    </aside>
</div>
<?php get_template_part("contexts/template/cta"); ?>
<?php get_footer(); ?>