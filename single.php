<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage CryoMasters
 * @since 1.0
 * @version 1.0
 */
get_header();?>
<?php $banner_img = get_field('banner_img');?>
<?php if (isset($banner_img) && !empty($banner_img)): ?>
<div class="inner-page-banner" style="background-image: url(<?php echo $banner_img; ?>);">
    <?php endif;?>
        <div class="wrap">
            <div class="inner-banner-row">
                <?php $banner_title = get_field('banner_title');?>
<?php if (isset($banner_title) && !empty($banner_title)): ?>
                <h1><?php echo $banner_title; ?></h1>
                <?php endif;?>
            </div>
        </div><!--/.wrap-->
    </div><!--/.home-page-banner-->
<div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content" class="site-content">
                <div class="news-sec">
                    <div class="news-inner-sec">
                        <div class="wrap2">
                            <div class="news-inner-row">
                                <div class="news-fig">
                                    <figure><img src="<?php echo get_field('blog_img'); ?>" alt="news-image"></figure>
                                </div>
                                <div class="news-desc-box">
                                    <div class="title-info">
                                        <div class="main-title">
                                            <h4><?php the_title();?></h4>
                                            <p><?php echo get_field('news_des'); ?></p>
                                        </div>
                                        <div class="date">
                                            <p><?php echo get_field('news_date'); ?></p>
                                        </div>
                                    </div>
                                    <p>
                                        <?php the_content();?>
                                    </p>
                                    <a href="<?php echo the_permalink(); ?>" class="button btn-outline"><?php echo get_field('lees_meer_btn'); ?></a>
                                </div>
                            </div>

                            </div>
                            <a href="#" class="scroll-btn"><i class="icon-arrow-down"></i></a>
                        </div>
                    </div><!--/.news-inner-sec-->
                </div><!--/.news-sec-->
            </div><!--/#content-->
        </div><!--/#primary-->
	</div><!--/#main -->

<?php get_footer();?>