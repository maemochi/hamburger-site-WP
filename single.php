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
            <?php the_post_thumbnail('full', array('class' => "p-main__img p-main--single__img")); ?>
            <h2 class="c-title c-title--m p-main__title p-main--single__title"><?php the_title();?></h2>
        </div>
        
        <article class="p-container p-container--single">
        <?php the_content(); ?><!--投稿本文を取得-->
            <!-- <section class="p-description">
                <h2 class="c-title--dark c-title--m p-description__title p-description__title--single">見出しh2</h2>
                <p class="c-text p-description__text">Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
            </section>
            <div class="p-headline--single">
                <h3 class="c-title--dark c-margin">見出しh3</h3>
                <h4 class="c-title--dark c-margin">見出しh4</h4>
                <h5 class="c-title--dark c-margin">見出しh5</h5>
                <h6 class="c-title--dark c-margin">見出しh6</h6>
            </div>

            <blockquote class="p-quotation c-margin--bottom">
                <p class="c-text p-quotation__text c-margin--bottom">Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
                <cite class="c-text">出典元：<a href="#">○○○○○○○○○○○○</a></cite>
            </blockquote>

            <img class="c-img" src="images/product_img01.jpg" alt="チーズバーガーセット">
            
            <section class="p-product c-margin">
                <img src="images/product_img02.jpg" alt="チーズバーガーセット" class="c-img p-product__img">
                <p class="c-text p-product__text c-scrollbar--hidden"> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
            </section>
            <section class="p-product">
                <p class="c-text p-product__text c-scrollbar--hidden"> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                <img src="images/product_img02.jpg" alt="チーズバーガーセット" class="c-img p-product__img">
            </section>
            
            <img src="images/product_img02.jpg" alt="チーズバーガーセット" class="c-img p-product__single-img">

            <div class="p-image-list">
                <img src="images/product_img02.jpg" alt="チーズバーガーセット" class="c-img">
                <img src="images/product_img02.jpg" alt="チーズバーガーセット" class="c-img">
                <img src="images/product_img02.jpg" alt="チーズバーガーセット" class="c-img">
                <img src="images/product_img02.jpg" alt="チーズバーガーセット" class="c-img">
                <img src="images/product_img02.jpg" alt="チーズバーガーセット" class="c-img">
                <img src="images/product_img02.jpg" alt="チーズバーガーセット" class="c-img">
                <img src="images/product_img02.jpg" alt="チーズバーガーセット" class="c-img">
                <img src="images/product_img02.jpg" alt="チーズバーガーセット" class="c-img">
                <img src="images/product_img02.jpg" alt="チーズバーガーセット" class="c-img">
            </div>

            <div class="p-list c-margin">
                <ol>
                    <li>1.リストリストリスト</li>
                    <li>2.リストリストリスト</li>
                </ol>
                <ol>
                    <li>1.リスト2リスト2リスト2</li>
                    <li>2.リスト2リスト2リスト2</li>
                </ol>
                <ol>
                    <li>1.リストリストリスト</li>
                    <li>2.リストリストリスト</li>
                </ol>
            </div>
            <div class="p-list c-margin">
                <ul>
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </ul>
                <ul>
                    <li>リスト2リスト2リスト2</li>
                    <li>リスト2リスト2リスト2</li>
                </ul>
                <ul>
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </ul>
            </div>
        
            <pre class="p-quotation">
                <code class="c-text">
    &lt;html&gt;
        &lt;head&gt;
        &lt;/head&gt;
        &lt;body&gt;
        &lt;/body&gt;
    &lt;/html&gt;
                </code>
            </pre>

            <table class="c-table p-table c-margin--top">
                <colgroup>
                    <col span="1" class="p-table__first-column">
                    <col span="1" class="p-table__second-column">
                </colgroup>
                <tr>
                    <td>テーブル</td>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <td>テーブル</td>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <td>テーブル</td>
                    <td>テーブル</td>
                </tr>
                <tr>
                    <td>テーブル</td>
                    <td>テーブル</td>
                </tr>
            </table>
            
            <button class="c-button c-button--single c-margin">ボタン</button>
            <p class="c-text c-text--bold">boldboldboldboldboldboldbold</p> -->
        </article>
    </main>
<?php endwhile; //5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了
    else: //6.投稿データがなければ//7.ない時の処理
?><p>表示する記事がありません</p>
<?php endif; ?><!--8.条件分岐終了-->

<?php get_footer(); ?>