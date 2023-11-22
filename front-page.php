<?php get_header() ?>
<main>
    <!-- front-fv -->
    <section class="front-fv" id="front-fv">
        <div class="front-fv__inner">
            <div class="front-fv__inner-img-div">
                <img src="<?=get_template_directory_uri(); ?>/img/main1.png" alt="ファストビュー画像">
            </div>
            <!-- PCロゴ -->
            <div class="front-fv__inner-p-div">
                <p>保護猫に<br>幸せを！！<br>未来を！！</p>
            </div>
        </div>
    </section>
    <!-- front-fv -->
    <!-- front-wanted -->
    <section class="front-wanted common__sect-width" id="front-wanted">
        <div class="front-wanted__inner">
            <div class="common__border-sign">
                <div class="common__border-sign-img-div">
                    <img src="<?=get_template_directory_uri(); ?>/img/blk-cat-img.png" alt="黒猫のイラスト">
                </div>
                <p>里親募集中</p>
            </div>

            <ul class="front-wanted__wanted_list common__sect-width-narrow">
                <?php
                    // $args = array(
                    //     $post_type = 'post',
                    //     $posts_per_page = 10
                    // );
                    // $the_query = new WP_Query($args);
                ?>

                <?php
                    if(have_posts()):
                        while(have_posts()) : the_post();
                ?>
                    <li class="front-wanted__wanted-card">
                        <a href="<?php the_permalink(); ?>">
                            <div class="front-wanted__wanted-card-img-div">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="front-wanted__wanted-card-p-div">
                                <?php the_excerpt(); ?>
                            </div>
                        </a>
                    </li>
                <?php 
                        endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
            </ul>

            <div class="common__button-div">
                <a href="<?= home_url('/cats-list');?>" class="common__link-button">
                    里親募集中一覧
                </a>
            </div>
        </div>
    </section>
    <!-- front-wanted -->
    <!-- front-event -->
    <section class="front-event common__sect-width" id="front-event">
        <div class="front-event__inner">
            <div class="common__border-sign">
                <div class="common__border-sign-img-div">
                    <img src="<?=get_template_directory_uri(); ?>/img/blk-cat-img.png" alt="黒猫のイラスト">
                </div>
                <p>イベント(譲渡会)</p>
            </div>
            <ul class="front-event__events-list common__sect-width-narrow">
                <li class="front-event__event-card">
                    <a href="#">
                        <time>2023-06-30</time>
                        <p>ああああ県のあああああああいいいいいいいいううううううに参加しました</p>
                    </a>
                </li>
                <li class="front-event__event-card">
                    <a href="#">
                        <time>2023-06-30</time>
                        <p>ああ県のああああああああああああああををををををに参加しました</p>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- front-event -->
    <!-- front-donation -->
    <section class="front-donation common__sect-width" id="front-donation">
        <div class="common__border-sign">
            <div class="common__border-sign-img-div">
                <img src="<?=get_template_directory_uri(); ?>/img/blk-cat-img.png" alt="黒猫のイラスト">
            </div>
            <p>ご寄付</p>
        </div>
        <div class="front-donation-p-div common__sect-width-narrow" >
            <p>当団体は皆さまからの温かいご支援にて成り立っております。<br>これからも当団体へのご支援ご助力賜りたく存じます。</p>
        </div>
    </section>
    <!-- front-donation -->
    <!-- front-query-and-trial -->
    <section class="front-query-and-trial common__sect-width" id="front-query-and-trial">
        <div class="common__border-sign">
            <div class="common__border-sign-img-div">
                <img src="<?=get_template_directory_uri(); ?>/img/blk-cat-img.png" alt="黒猫のイラスト">
            </div>
            <p>トライアル/お問い合わせ</p>
        </div>
        <div class="front-query-and-trial__button common__button-div">
                <a href="#" class="common__link-button">
                    トライアル/お問い合わせ
                </a>
            </div>
    </section>
    <!-- front-query-and-trial -->
</main>
<?php get_footer() ?>