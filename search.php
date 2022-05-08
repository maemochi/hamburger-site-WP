<!-- 検索結果を表示するためのテンプレート -->

<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="l-main-wrapper">
        <div class="p-main p-main--archive">
            <h2 class="c-title p-main__title p-main--archive__title">Search:</h2>
            <h4 class="c-title p-main--archive__subtitle"><?php echo esc_html($_GET['s']); ?></h4>
            <div class="c-cover p-main--archive__cover"></div>
        </div>
        
        <article class="p-container p-container--archive">
            <section class="p-description">
              <?php if (!$_GET['s']): ?>
                  <h2 class="c-title p-description__title">検索キーワードが未入力です。</h2>
              <?php else: ?>
                  <h2 class="c-title p-description__title">「<?php echo esc_html($_GET['s']); ?>」の検索結果：<?php echo $wp_query->found_posts; ?>件</h2>
            </section>

                <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>

                <section class="c-card p-card">
                    <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('large',array('class' => 'p-card__img')); ?>
                    <?php else: ?>
                      <img src="<?php echo esc_url(get_theme_file_uri('/images/archive_img.jpg')); ?>" alt="" class="p-card__img">
                    <?php endif; ?>
                    <div class="p-card__text-box">
                        <h3 class="c-title p-card__title"><?php the_title(); ?></h3>
                        <?php
                            $content = get_the_content();
                            $check = 'more-';
                                if ( strpos( $content, $check ) !== false ) {
                                the_content('');//続きを読むが入っている場合は投稿内容を表示
                                }else {
                                    the_excerpt();
                                }
                        ?>
                        <button onclick="location.href='<?php the_permalink(); ?>'" class="c-button p-card__button">詳しく見る</button>
                    </div>
                </section>
                <?php endwhile; ?>
                <?php else: ?><p>検索されたキーワードに一致する記事はありませんでした。</p>
                  <?php endif; ?>
        </article>

        <?php wp_pagenavi(); ?><!-- if=trueの時（＝キーワード未入力時）はwp_pagenaviを読み込まない -->

            <?php endif; ?>

</main>
<?php get_footer(); ?>