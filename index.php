<!-- メインのテンプレート -->
<?php get_header(); ?>
<?php get_sidebar(); ?>

    <main class="l-main-wrapper">
        <div class="p-main p-main--front">
            <h2 class="c-title p-main__title p-main--front__title">ダミーサイト</h2>
        </div>

        <article>
                <ul class="p-branch-menu">
                    <li class="p-branch-menu__content p-branch-menu__content--first">
                        <?php $category_first_id = get_cat_ID('Take Out'); ?><!-- カテゴリ名を入れてカテゴリIDを取得 -->
                        <h2 class="c-title p-branch-menu__title"><a href="<?php echo get_category_link( $category_first_id ); ?>"><?php echo get_cat_name( $category_first_id ); ?></a></h2>
                        <span class="c-line p-branch-menu__line"></span>
                        
                        <?php
                        $args = array (
                            'category' => $category_first_id, //カテゴリID
                            'posts_per_page' => 2, //取得件数
                            'orderby' => 'rand' //ランダム表示
                        );
                        $postslist = get_posts( $args );
                        if( $postslist ):
                        foreach ( $postslist as $post ):
                        setup_postdata( $post );
                        ?>
                        <dl class="p-branch-menu__item">
                            <dt><h3 class="c-title p-branch-menu__subtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></dt>
                            <dd class="c-text p-branch-menu__text"><?php the_excerpt(); ?></dd>
                        </dl>
                        <?php endforeach;
                        wp_reset_postdata(); ?>
                        
                        <?php else: ?><!-- 該当の投稿が無い場合、以下のデフォルト表示 -->
                        <dl class="p-branch-menu__item">
                            <dt><h3 class="c-title p-branch-menu__subtitle">Take Out</h3></dt>
                            <dd class="c-text p-branch-menu__text">当店のテイクアウトで利用できる商品を掲載しています</dd>
                        </dl>
                        <dl class="p-branch-menu__item">
                            <dt><h3 class="c-title p-branch-menu__subtitle">Take Out</h3></dt>
                            <dd class="c-text p-branch-menu__text">当店のテイクアウトで利用できる商品を掲載しています</dd>
                        </dl>
                        <?php endif; ?>
                    </li>

                    <li class="p-branch-menu__content p-branch-menu__content--second">
                        <?php $category_second_id = get_cat_ID('Eat In'); ?><!-- カテゴリ名を入れてカテゴリIDを取得 -->
                        <h2 class="c-title p-branch-menu__title"><a href="<?php echo get_category_link( $category_second_id ); ?>"><?php echo get_cat_name( $category_second_id ); ?></a></h2>
                        <span class="c-line p-branch-menu__line"></span>

                        <?php
                        $args = array (
                            'category' => $category_second_id, //カテゴリID
                            'posts_per_page' => 2, //取得件数
                            'orderby' => 'rand' //ランダム表示
                        );
                        $postslist = get_posts( $args );
                        if( $postslist ):
                        foreach ( $postslist as $post ):
                        setup_postdata( $post );
                        ?>
                        <dl class="p-branch-menu__item">
                            <dt><h3 class="c-title p-branch-menu__subtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></dt>
                            <dd class="c-text p-branch-menu__text"><?php the_excerpt(); ?></dd>
                        </dl>
                        <?php endforeach;
                        wp_reset_postdata(); ?>

                        <?php else: ?><!-- 該当の投稿が無い場合、以下のデフォルト表示 -->
                        <dl class="p-branch-menu__item"> 
                            <dt><h3 class="c-title p-branch-menu__subtitle">Eat In</h3></dt>
                            <dd class="c-text p-branch-menu__text">当店のイートインで利用できる商品を掲載しています</dd>
                        </dl>
                        <dl class="p-branch-menu__item">
                            <dt><h3 class="c-title p-branch-menu__subtitle">Eat In</h3></dt>
                            <dd class="c-text p-branch-menu__text">当店のイートインで利用できる商品を掲載しています</dd>
                        </dl> 
                        <?php endif; ?>
                    </li>
                </ul>
        </article>

        <section class="p-access">
            <div class="c-cover c-cover--light p-access__cover p-access__cover--first"></div>
            <div class="c-cover c-cover--light p-access__cover p-access__cover--second"></div>
            <?php
            $access_page_id = get_page_by_path('access'); //固定ページ（access）のID取得
            $page = get_post( $access_page_id );
            $title = $page -> post_title;
            $content = $page -> post_content; ?>
            <h2 class="c-title c-title--m p-access__title"><a href="<?php echo esc_url(home_url('/access') ); ?>"><?php echo( $title ) ?></a></h2>
            <span class="c-line p-access__line"></span>
            <p class="p-access__text">
                <?php 
                echo strip_tags($content);
                ?>
            </p>
        </section>
    </main>

<?php get_footer(); ?>