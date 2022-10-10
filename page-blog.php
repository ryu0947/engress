<?php get_header(); ?>
<?php get_template_part("contexts/template/lower-mv"); ?>
<?php get_template_part("contexts/template/breadccrumb"); ?>
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
                'order' => 'DESC',
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
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('full', ['class' => 'blog-lower__img']);
                            }
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
            <div class="pagenation">
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
                    echo '<ul class="pagenation__list"><li class="pagenation__item">';
                    echo join('</li><li class="pagenation__item">', $page_links);
                    echo '</li></ul>';
                }
                ?>
            </div>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php get_template_part("contexts/template/cta"); ?>
<?php get_footer(); ?>