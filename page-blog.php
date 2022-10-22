<?php get_header(); ?>
<div class="mv-lower mv-lower--blog">
    <h1 class="mv-lower__title"><?php the_title(); ?></h1>
</div>
<?php get_template_part("contexts/template/breadcrumb"); ?>
<section class="blog">
    <div class="inner">
        <h2 class="section-lower-title">新着一覧</h2>
        <div class="blog__list">
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
                    <div class="blog__item">
                        <div class="blog__picture">
                            <div class="blog__category">
                                <?php
                                $category = get_the_category();
                                echo $category[0]->name;
                                ?>
                            </div>
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('full', ['class' => 'blog__img']);
                            } else {
                                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/common/no-img-icatch.png" alt="">';
                            }
                            ?>
                        </div>
                        <div class="blog__info">
                            <time class="blog__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y-m-d'); ?></time>
                            <h3 class="blog__title"><a class="blog__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="blog__text"><?php the_excerpt(); ?></p>
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