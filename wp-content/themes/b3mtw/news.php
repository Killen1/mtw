<?php
/**
 Template Name: News
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header(); ?>
<div class="bg-paper padding-bottom-10">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center padding-bottom-10 border-bottom">News</h1>
            </div>
        </div>
        <?php
            query_posts(
                array(
                    'post_type' => 'post',
                    'paged' => $paged,
                    'orderby'=>  'date',
                    'posts_per_page' => 5,
                    'cat' => '-3, -4, -5, -6'
                )
            );
        ?>
        <?php if (have_posts()) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <? //echo "<pre>"; print_r($posts); die();?>
                <div class="news-post-wrapper border-bottom">
                    <div class="row">
                        <div class="col-xs-12">
                            <div id="<?php the_ID(); ?>" class="post-wrapper margin-bottom-20">
                                <h2 class="text-center"><?php the_title(); ?></h2>
                                <p class="text-center"><i class="fa fa-calendar"></i> <?php the_date();?> | <?php the_author(); ?> </p>
                                <div class="news-image text-center margin-bottom-10">
                                    <?php if( has_post_thumbnail()) :?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php echo get_the_post_thumbnail( $post_id, array(360,360), array('alt' => 'News Image') ); ?>
                                        </a>
                                    <?else:?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <img src="<?php echo SITE_ROOT ?>images/mtw-logo.png" alt="Maynard &amp; The Walnut">
                                        </a>
                                    <?php endif ;?>
                                </div>
                                <div class="clearfix margin-right-10 margin-bottom-10">
                                    <div class="addthis_toolbox addthis_default_style pull-right">
                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count" addthis:url="<?php the_permalink(); ?>" addthis:title="<?php the_title(); ?>"></a>
                                        <a class="addthis_button_tweet" addthis:url="<?php the_permalink(); ?>" addthis:title="<?php the_title(); ?>"></a>
                                        <a class="addthis_counter addthis_pill_style"></a>
                                    </div>
                                </div>
                                <div class="new-content">
                                    <?php the_content();?>
                                </div>
                                <div class="text-center">
                                    <p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Comment <i class="fa fa-comment"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;?>
        <?php endif; ?>
        <?php news_pagination(); ?>
    </div>
</div>
<?php get_footer();?>