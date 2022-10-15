<?php get_header(); ?>
<?php get_template_part("contexts/template/breadcrumb"); ?>

<article class="article article-news">
    <div class="inner">
        <div class="article__head">
            <h1 class="article__title article__title--news"><?php the_title(); ?></h1>
            <time class="article__date article__date--right" datetime="<?php the_time('c'); ?>"><?php the_time('Y-m-d'); ?></time>
        </div>
        <section class="article__body">
            <?php the_content(); ?>
        </section>
    </div>
</article>

<?php get_template_part("contexts/template/cta"); ?>
<?php get_footer(); ?>