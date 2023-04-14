<?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
    exit;
}

/**
 * The Template Used For Displaying Subject page Content
 *
 * @package WordPress
 * @subpackage CryoMasters
 * @since CryoMasters 1.0
 */
?>
<?php $inner_banner_img = get_field('inner_banner_img'); ?>
<?php if (isset($inner_banner_img) && !empty($inner_banner_img)) : ?>
    <div class="inner-page-banner" style="background-image: url(<?php echo $inner_banner_img; ?>);">
    <?php endif; ?>
    <div class="wrap">
        <div class="inner-banner-row">
            <?php $inner_banner_title = get_field('inner_banner_title'); ?>
            <?php if (isset($inner_banner_title) && !empty($inner_banner_title)) : ?>
                <h1><?php echo $inner_banner_title; ?></h1>
            <?php endif; ?>
        </div>
    </div>
    <!--/.wrap-->
    </div>
    <!--/.home-page-banner-->
    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content" class="site-content">
                <div class="news-sec subject-sec">
                    <div class="news-inner-sec">
                        <div class="wrap2">
                            <div class="news-inner-row">
                                <div class="news-fig">
                                    <?php $news_fig_img = get_field('news_fig_img'); ?>
                                    <?php if (isset($news_fig_img) && !empty($news_fig_img)) : ?>
                                        <figure><img src="<?php echo $news_fig_img; ?>" alt="news-image"></figure>
                                    <?php endif; ?>
                                </div>
                                <div class="news-desc-box">
                                    <div class="title-info">
                                        <div class="main-title">
                                            <?php $news_title = get_field('news_title'); ?>
                                            <?php if (isset($news_title) && !empty($news_title)) : ?>
                                                <h4><?php echo $news_title; ?></h4>
                                            <?php endif; ?>

                                            <?php $news_info = get_field('news_info'); ?>
                                            <?php if (isset($news_info) && !empty($news_info)) : ?>
                                                <p><?php echo $news_info; ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="date">
                                            <?php $news_date = get_field('news_date'); ?>
                                            <?php if (isset($news_date) && !empty($news_date)) : ?>
                                                <p><?php echo $news_date; ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php $news_details = get_field('news_details'); ?>
                                    <?php if (isset($news_details) && !empty($news_details)) : ?>
                                        <p>
                                            <?php echo $news_details; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="news-inner-row">
                                <div class="news-fig">
                                    <?php $news_row_img = get_field('news_row_img'); ?>
                                    <?php if (isset($news_row_img) && !empty($news_row_img)) : ?>
                                        <figure><img src=" <?php echo $news_row_img; ?>" alt="news-image"></figure>
                                    <?php endif; ?>
                                </div>
                                <div class="news-desc-box">
                                    <?php $news_des_box = get_field('news_des_box'); ?>
                                    <?php if (isset($news_des_box) && !empty($news_des_box)) : ?>
                                        <p>
                                            <?php echo $news_des_box; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php $news_des_box1 = get_field('news_des_box1'); ?>
                            <?php if (isset($news_des_box1) && !empty($news_des_box1)) : ?>
                                <p>
                                    <?php echo $news_des_box1; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!--/.news-inner-sec-->
                </div>
                <!--/.news-sec-->
            </div>
            <!--/#content-->
        </div>
        <!--/#primary-->
    </div>
    <!--/#main -->