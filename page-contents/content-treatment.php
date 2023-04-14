<?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
    exit;
}

/**
 * The Template Used For Displaying Treatment page Content
 *
 * @package WordPress
 * @subpackage CryoMasters
 * @since CryoMasters 1.0
 */
?>
<?php $banner_img = get_field('banner_img'); ?>
<?php if (isset($banner_img) && !empty($banner_img)) : ?>
    <div class="inner-page-banner" style="background-image: url(<?php echo $banner_img; ?>);">
    <?php endif; ?>
    <div class="wrap">
        <div class="inner-banner-row">
            <?php $banner_title = get_field('banner_title'); ?>
            <?php if (isset($banner_title) && !empty($banner_title)) : ?>
                <h1><?php echo $banner_title; ?></h1>
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
                    <div class="news-inner-sec treatment-inner-sec">
                        <div class="wrap">
                            <div class="treat-title-info">
                                <?php $treatment_info = get_field('treatment_info'); ?>
                                <?php if (isset($treatment_info) && !empty($treatment_info)) : ?>
                                    <p>
                                        <?php echo $treatment_info; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="inner-container">
                                <?php $news_section = get_field('news_section'); ?>
                                <?php foreach ($news_section as $key => $news_section) { ?>
                                    <div class="news-inner-row">
                                        <div class="news-fig">
                                            <figure><img src="<?php echo $news_section['news_fig_img']; ?>" alt="Treatment"></figure>
                                        </div>
                                        <div class="news-desc-box">
                                            <div class="title-info">
                                                <div class="main-title">
                                                    <h4><?php echo $news_section['news_title']; ?></h4>
                                                </div>
                                            </div>
                                            <?php echo $news_section['news_info']; ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="news-inner-row">
                                    <div class="news-fig">
                                        <?php $treatment_img = get_field('treatment_img'); ?>
                                        <?php if (isset($treatment_img) && !empty($treatment_img)) : ?>
                                            <figure><img src="<?php echo $treatment_img; ?>" alt="Treatment"></figure>
                                        <?php endif; ?>
                                    </div>
                                    <div class="desc-container">
                                        <?php $news_desc_box = get_field('news_desc_box'); ?>
                                        <?php foreach ($news_desc_box as $key => $news_box) { ?>
                                            <div class="news-desc-box">
                                                <div class="title-info">
                                                    <div class="main-title">
                                                        <h4><?php echo $news_box['news_title']; ?></h4>
                                                    </div>
                                                </div>
                                                <?php echo $news_box['news_info']; ?>
                                            </div>
                                        <?php }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.wrap-->
                    </div>
                    <!--/.news-inner-sec-->
                </div>
                <!--/.news-sec-->
                <div class="product-detail-main-sec treatment-details">
                    <?php $product_detail_sec = get_field('product_detail_sec'); ?>
                    <?php foreach ($product_detail_sec as $key => $product_sec) { ?>
                        <div class="product-inner-sec">
                            <div class="product-inner-row">
                                <div class="product-fig">
                                    <figure><img src="<?php echo $product_sec['product_img']; ?>" alt=""></figure>
                                </div>
                                <div class="product-desc">
                                    <div class="desc-info">
                                        <h3><?php echo $product_sec['product_title']; ?></h3>
                                        <p>
                                            <?php echo $product_sec['product_info']; ?>
                                        </p>
                                        <a href="<?php echo $product_sec['lees_meer_url']; ?>" class="button btn-outline"><?php echo $product_sec['lees_meer_btn']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!--/.product-detail-main-sec-->
            </div>
            <!--/#content-->
        </div>
        <!--/#primary-->
    </div>
    <!--/#main -->