<?php get_header(); ?>
<div class="mv-lower mv-lower--blog">
    <?php
    $page_category = get_the_category();
    ?>
    <h1 class="mv-lower__title"><?php echo $page_category[0]->name; ?>一覧</h1>
</div>
<?php get_template_part("contexts/template/breadcrumb"); ?>
<section class="blog category">
    <div class="inner">
        <h2 class="section-lower-title">新着記事</h2>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>
                <div class="blog__item">
                    <a class="blog__item-inner" href="<?php the_permalink(); ?>">
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
                            <h3 class="blog__title"><?php the_title(); ?></h3>
                            <p class="blog__text"><?php the_excerpt(); ?></p>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <nav class="pagenation">
            <?php
            if (paginate_links()) {
                $page_links =  paginate_links(array(
                    'mid_size' => 2,
                    'end_size' => 1,
                    'prev_next' => '',
                    'next_text' => '',
                    'type'    => 'array'
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
    </div>
</section>
<?php get_template_part("contexts/template/cta"); ?>
<?php get_footer(); ?>