<!-- 投稿を表示するためのテンプレート -->

<?php get_header(); ?>
<?php get_sidebar(); ?>

<!-- ループ処理 -->
<?php
    if(have_posts()):  //1.投稿データがあるかの条件分岐
        while(have_posts()):  //2.表示する投稿データがあれば繰り返し処理開始
            the_post(); ?>

<main class="l-main-wrapper">
        <div class="p-main p-main--single">
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('full', array('class' => "p-main__img p-main--single__img")); ?>
                <?php else: ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/single_bg_pc.jpg')); ?>" alt="" class="p-main__img p-main--single__img">
                <?php endif; ?>
            <h1 class="c-title c-title--m p-main__title p-main--single__title"><?php the_title();?></h1>
        </div>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class('p-container p-container--single p-article'); ?>>
        <?php the_content(); ?><!--投稿本文を取得-->
        </article>
        <?php wp_link_pages( array(
            'before' => '<div class="wp-pagenavi wp-pagenavi--post">',
            'after' => '</div>',
        )); ?>
</main>

<?php endwhile; //5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了
    else: //6.投稿データがなければ//7.ない時の処理
?><p>表示する記事がありません</p>
<?php endif; ?><!--8.条件分岐終了-->

<?php get_footer(); ?>