<?php get_header(); ?>
<div class="mv-lower mv-lower--news">
    <h1 class="mv-lower__title">お知らせ</h1>
</div>
<?php get_template_part("contexts/template/breadcrumb"); ?>
<section class="news">
    <div class="inner">
        <h2 class="section-lower-title">お知らせ一覧</h2>
        <div class="news__list">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post() ?>
                    <div class="news__item">
                        <time class="news__date" datetime="<?php the_time("c"); ?>"><?php the_time("Y-m-d"); ?></time>
                        <div class="news__title"><a class="news__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="pagenation">
        <?php
        if (paginate_links()) {
            $page_links =  paginate_links(array(
                'mid_size' => 2,
                'end_size' => 1,
                'prev_next' => '',
                'next_text' => '',
                'type'    => 'array',
            ));
            echo '<ul class="pagenation__list"><li class="pagenation__item">';
            echo join('</li><li class="pagenation__item">', $page_links);
            echo '</li></ul>';
        }
        ?>
    </div>
</section>
<?php get_template_part("contexts/template/cta"); ?>
<?php get_footer(); ?>