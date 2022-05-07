<!-- ユーザーから要求された内容が存在しない場合のテンプレート -->

<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="l-main-wrapper">
        <div class="p-main p-main--archive">
            <h2 class="c-title p-main__title p-main--archive__title">Error 404 - Not Found</h2>
            <div class="c-cover p-main--archive__cover"></div>
        </div>
        <article class="p-container p-container--archive">
          <section class="p-description">
            <h2 class="c-title p-description__title">お探しのページは見つかりませんでした。</h2>
            <h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページに戻る</a></h3>
          </section>
        </article>
</main>
<?php get_footer(); ?>