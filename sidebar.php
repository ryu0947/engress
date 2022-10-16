<aside class="sidebar">
    <div class="sidebar__item">
        <h3 class="sidebar__title">関連記事</h3>
        <?php
        $category = get_the_category();
        $related_pages = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'post',
            'post__not_in' => array(get_the_ID()),
            'category__in' => array($category[0]->term_id),
            'orderby' => 'date',
        ));
        ?>
        <?php if ($related_pages->have_posts()) : ?>
            <ul class="related-list">
                <?php while ($related_pages->have_posts()) : $related_pages->the_post() ?>
                    <li class="related__item">
                        <a href="<?php the_permalink(); ?>" class="related__inner">
                            <div class="related__thumb">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('full', ['class' => 'related__img']);
                                } else {
                                    echo '<img class="related__img" src="' . esc_url(get_template_directory_uri()) . '/img/common/no-img-icatch.png" alt="">';
                                }
                                ?>
                            </div>
                            <div class="related__title">
                                <?php the_title(); ?>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
    <div class="sidebar__item">
        <h3 class="sidebar__title">カテゴリー</h3>
        <?php
        $categories = get_categories(
            array(
                'type' => 'post',
                'number' => '3',
                'order' => 'DESC'
            )
        );
        ?>
        <ul class="category-list">
            <?php foreach ($categories as $category) : ?>
                <li class="category__item">
                    <a class="category__link" href="<?php echo get_category_link($category->term_id); ?>" class="category__link">
                        <?php echo $category->name ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</aside>