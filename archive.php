<!-- アーカイブ表示用のテンプレート -->

<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="l-main-wrapper">
        <div class="p-main p-main--archive">
            <h2 class="c-title p-main__title p-main--archive__title">Menu:</h2>
            <h4 class="c-title p-main--archive__subtitle"><?php wp_title(''); ?></h4>
            <div class="c-cover p-main--archive__cover"></div>
        </div>
        
        <article class="p-container p-container--archive">
            <section class="p-description">
                <h2 class="c-title p-description__title"><?php single_cat_title(); ?></h2>
                <p class="c-text p-description__text">
                    <?php if (is_category()) : ?> 
                     <?php echo category_description(); ?>
                     <?php endif; ?></p>
            </section>
        <?php
        if(have_posts()):
            while(have_posts()):
                the_post(); ?>
            <section class="c-card p-card">
                <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('large',array('class' => 'p-card__img')); ?>
                <?php else: ?>
                   <img src="<?php echo esc_url(get_theme_file_uri('/images/archive_img.jpg')); ?>" alt="" class="p-card__img">
                <?php endif; ?>
                <div class="p-card__text-box">
                    <h3 class="c-title p-card__title"><?php the_title(); ?></h3>
                    <?php the_content(''); ?>
                    <!-- <?php the_excerpt(); ?> -->
                    <button onclick="location.href='<?php the_permalink(); ?>'" class="c-button p-card__button">詳しく見る</button>
                </div>
            </section>
        <?php endwhile;
            else:
            ?>
            <?php endif; ?>
        </article>

        <?php wp_pagenavi(); ?>

</main>

<?php get_footer(); ?>