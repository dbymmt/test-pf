<?php get_header(); ?>
<main>
    <section class="front-wanted common__sect-width single-cat">
        <div class="front-wanted__inner">
            <div class="common__border-sign">
                <div class="common__border-sign-img-div">
                    <img src="<?=get_template_directory_uri(); ?>/img/blk-cat-img.png" alt="黒猫のイラスト">
                </div>
                <p>里親募集中</p>
            </div>
        </div>
        <h2 class="single-cat__title"><?php the_title(); ?>ちゃん</h2>
        <div class="single-cat__card">
            <?php the_post_thumbnail();?>
            <?php the_content(); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>