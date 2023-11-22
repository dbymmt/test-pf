<?php
/*
    Template Name: Archives
 */
?>

<?php get_header(); ?>
<main>
    <section class="front-wanted common__sect-width archive-cats-list">
        <div class="front-wanted__inner">
            <div class="common__border-sign">
                <div class="common__border-sign-img-div">
                    <img src="<?=get_template_directory_uri(); ?>/img/blk-cat-img.png" alt="黒猫のイラスト">
                </div>
                <p>里親募集中</p>
            </div>
            <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10
                    );
                    $the_query = new WP_Query($args);
            ?>

            <ul class="front-wanted__wanted_list common__sect-width-narrow">
            
            <?php
                    if($the_query->have_posts()):
                        while($the_query->have_posts()): $the_query->the_post();
                ?>
                    <li class="front-wanted__wanted-card archive-cats-list_card">
                        <a href="<?php the_permalink(); ?>">
                            <h4><?php the_title(); ?>ちゃん</h4>
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
        </div>
    </section>
</main>
<?php get_footer(); ?>