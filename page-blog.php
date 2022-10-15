<?php get_header(); ?>
<div class="mv-lower mv-lower--blog">
    <h1 class="mv-lower__title"><?php the_title(); ?></h1>
</div>
<?php get_template_part("contexts/template/breadcrumb"); ?>
<section class="blog-lower">
    <div class="inner">
        <h2 class="section-lower-title">新着記事</h2>
        <div class="blog-lower__list">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $post_pages = new WP_Query(array(
                'posts_per_page' => 10,
                'paged' => $paged,
                'post_type' => 'post',
                'orderby' => 'date',
                'post_status' => 'publish'
            ));
            ?>
            <?php if ($post_pages->have_posts()) : ?>
                <?php while ($post_pages->have_posts()) : $post_pages->the_post() ?>
                    <div class="blog-lower__item">
                        <div class="blog-lower__picture">
                            <div class="blog-lower__category">
                                <?php
                                $categorys = get_the_category();
                                echo $categorys[0]->name;
                                ?>
                            </div>
                            <?php
                            the_post_thumbnail('full', ['class' => 'blog-lower__img']);
                            ?>
                        </div>
                        <div class="blog-lower__info">
                            <time class="blog-lower__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y-m-d'); ?></time>
                            <h3 class="blog-lower__title"><a class="blog-lower__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="blog__lower__text"><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <nav class="pagenation">
                <?php
                if ($post_pages->max_num_pages > 1) {
                    $page_links =  paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => 'page/%#%/',
                        'current' => max(1, $paged),
                        'mid_size' => 2,
                        'end_size' => 1,
                        'prev_next' => '',
                        'next_text' => '',
                        'type'    => 'array',
                        'total' => $post_pages->max_num_pages
                    ));

                    echo '<ul class="pagenation__list">';
                    foreach ($page_links as $page_link) {
                        echo '<li class="pagenation__item">';
                        echo $page_link;
                        echo '</li>';
                    }
                    echo '</ul>';
                }
                ?>
            </nav>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php get_template_part("contexts/template/cta"); ?>
<?php get_footer(); ?>