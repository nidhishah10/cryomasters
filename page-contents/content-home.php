<?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Home page Content
 *
 * @package WordPress
 * @subpackage CryoMasters
 * @since CryoMasters 1.0
 */
?>
<?php $home_banner_img = get_field('home_banner_img');?>
<?php if (isset($home_banner_img) && !empty($home_banner_img)): ?>
    <div class="home-banner-sec" style="background-image: url(<?php echo $home_banner_img; ?>);">
        <?php endif;?>
    <div class="wrap">
        <div class="banner-row">
            <div class="banner-info">
                <?php $banner_title = get_field('banner_title');?>
                <?php if (isset($banner_title) && !empty($banner_title)): ?>
                    <h1><?php echo $banner_title; ?></h1>
                <?php endif;?>

                <?php $btn_name = get_field('btn_name');?>
                <?php $btn_url = get_field('btn_url');?>

                    <a href="<?php echo $btn_url; ?>" class="button btn-outline"><?php echo $btn_name; ?></a>

            </div>
            <div class="banner-fig">
                <?php $banner_fig_img = get_field('banner_fig_img');?>
                <?php if (isset($banner_fig_img) && !empty($banner_fig_img)): ?>
                    <figure><img src="<?php echo $banner_fig_img; ?>" alt="CM"></figure>
                <?php endif;?>
            </div>
        </div>
    </div>
    <!--/.wrap-->
    </div>
    <!--/.home-banner-sec-->
    <div class="features-sec-row">
        <div class="cols cols3">
            <?php $feature_info_box = get_field('feature_info_box');?>
            <?php foreach ($feature_info_box as $key => $feature_info) {?>
                <div class="col">
                    <div class="feature-info-box" style="background-image: url(<?php echo $feature_info['feature_img']; ?>);">
                        <div class="feat-desc">
                            <i class="<?php echo $feature_info['icon_class']; ?> "></i>
                            <h3><?php echo $feature_info['feature_title']; ?></h3>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
    <!--/.features-sec-row-->
    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content" class="site-content">
                <?php $background_img = get_field('background_img');?>
                <?php if (isset($background_img) && !empty($background_img)): ?>
                    <div class="main-title-banner" style="background-image: url(<?php echo $background_img; ?>);">
                    <?php endif;?>
                    <div class="wrap">
                        <div class="title-info">
                            <?php $title = get_field('title');?>
                            <?php if (isset($title) && !empty($title)): ?>
                                <h2><?php echo $title; ?></h2>
                            <?php endif;?>
                            <?php $info = get_field('info');?>
                            <?php if (isset($info) && !empty($info)): ?>
                                <p><?php echo $info; ?></p>
                            <?php endif;?>
                        </div>
                    </div>
                    <!--/.wrap-->
                    </div>
                    <!--/.main-title-banner-->
                    <div class="product-detail-main-sec">
                        <?php $product_details = get_field('product_details');?>
                        <?php foreach ($product_details as $key => $product_info) {?>
                            <div class="product-inner-sec">
                                <div class="product-inner-row">
                                    <div class="product-fig">
                                        <figure><img src="<?php echo $product_info['product_img']; ?>" alt=""></figure>
                                    </div>
                                    <div class="product-desc">
                                        <div class="desc-info">
                                            <h3><?php echo $product_info['product_title']; ?></h3>
                                            <p>
                                                <?php echo $product_info['product_info']; ?>
                                            </p>
                                            <a href="<?php echo $product_info['lees_meer_url']; ?>" class="button btn-outline"><?php echo $product_info['lees_meer_btn']; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <!--/.product-detail-main-sec-->
                    <div class="progress-bar-sec">
                        <div class="wrap">
                            <div class="progress-inner-row">
                                <?php $progress_box = get_field('progress_box');?>
                                <?php foreach ($progress_box as $key => $progress_info) {?>
                                    <div class="progress">
                                        <div class="title">
                                            <h3><?php echo $progress_info['progress_title']; ?></h3>
                                        </div>
                                        <div class="barline">
                                            <div class="countbar" data-percentNumber="<?php echo $progress_info['data_percent_number']; ?>"></div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <!--/.wrap-->
                    </div>
                    <!--/.progress-bar-sec-->
                    <div class="process-sec">
                        <div class="wrap2">
                            <div class="title">
                                <?php $process_title = get_field('process_title');?>
                                <?php if (isset($process_title) && !empty($process_title)): ?>
                                    <h2><?php echo $process_title; ?></h2>
                                <?php endif;?>

                                <?php $process_info = get_field('process_info');?>
                                <?php if (isset($process_info) && !empty($process_info)): ?>
                                    <p><?php echo $process_info; ?></p>
                                <?php endif;?>
                            </div>
                            <div class="procees-inner-row">
                                <div class="process-fig-block">
                                    <figure class="main">
                                        <?php $process_inner_img = get_field('process_inner_img');?>
                                        <?php if (isset($process_inner_img) && !empty($process_inner_img)): ?>
                                            <img src="<?php echo $process_inner_img; ?>" alt="Process">
                                        <?php endif;?>

                                        <?php $figcaption_title = get_field('figcaption_title');?>
                                        <?php if (isset($figcaption_title) && !empty($figcaption_title)): ?>
                                            <figcaption><?php echo $figcaption_title; ?></figcaption>
                                        <?php endif;?>

                                    </figure>
                                    <div class="process-slide-block">
                                        <figure>
                                            <?php $process_slider_img = get_field('process_slider_img');?>
                                            <?php if (isset($process_slider_img) && !empty($process_slider_img)): ?>
                                                <img src="<?php echo $process_slider_img; ?>" alt="Slide">
                                            <?php endif;?>
                                        </figure>
                                    </div>
                                </div>
                                <?php $process_fig_block = get_field('process_fig_block');?>
                                <?php foreach ($process_fig_block as $key => $process_block) {?>
                                    <div class="process-fig-block">
                                        <figure class="main"><img src="<?php echo $process_block['process_img']; ?>" alt="Process"></figure>
                                        <div class="process-slide-block">
                                            <figure><img src="<?php echo $process_block['slide_img']; ?>" alt="Slide"></figure>
                                        </div>
                                    </div>
                                <?php }?>
                                <div class="process-fig-block">
                                    <figure class="main">
                                        <?php $process_img1 = get_field('process_img1');?>
                                        <?php if (isset($process_img1) && !empty($process_img1)): ?>
                                            <img src="<?php echo $process_img1; ?>" alt="Process">
                                        <?php endif;?>

                                        <?php $figcaption1 = get_field('figcaption1');?>
                                        <?php if (isset($figcaption1) && !empty($figcaption1)): ?>
                                            <figcaption><?php echo $figcaption1; ?></figcaption>
                                        <?php endif;?>
                                    </figure>


                                    <div class="process-slide-block">
                                        <figure>
                                            <?php $process_slider1 = get_field('process_slider1');?>
                                            <?php if (isset($process_slider1) && !empty($process_slider1)): ?>
                                                <img src="<?php echo $process_slider1; ?>" alt="Slide">
                                            <?php endif;?>
                                        </figure>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--/.wrap-->
                    </div>
                    <!--/.process-sec-->
                    <div class="about-sec">
                        <?php $about_title = get_field('about_title');?>
                        <?php if (isset($about_title) && !empty($about_title)): ?>
                            <div class="title">
                                <h2><?php echo $about_title; ?></h2>
                            </div>
                        <?php endif;?>
                        <div class="cols cols2">
                            <div class="col">
                                <div class="about-info">
                                    <div class="abt-desc">
                                        <?php $about_title1 = get_field('about_title1');?>
                                        <?php if (isset($about_title1) && !empty($about_title1)): ?>
                                            <h3><?php echo $about_title1; ?></h3>
                                        <?php endif;?>

                                        <?php $about_info = get_field('about_info');?>
                                        <?php if (isset($about_info) && !empty($about_info)): ?>
                                            <p>
                                                <?php echo $about_info; ?>
                                            </p>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="about-fig">
                                    <figure>
                                        <?php $about_fig_img = get_field('about_fig_img');?>
                                        <?php if (isset($about_fig_img) && !empty($about_fig_img)): ?>
                                            <img src="<?php echo $about_fig_img; ?>" alt="About-CryoMasters">
                                        <?php endif;?>
                                        <div class="play-btn"><a href="#"><i class="icon-play"></i></a></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.about-sec-->
                        <?php $improvement_img = get_field('improvement_img');?>
                        <?php if (isset($improvement_img) && !empty($improvement_img)): ?>
                        <div class="improvement-sound-sec" style="background-image: url(<?php echo $improvement_img; ?>);">
                        <?php endif;?>

                        <?php $improvement_title = get_field('improvement_title');?>
                        <?php if (isset($improvement_title) && !empty($improvement_title)): ?>
                            <h2><?php echo $improvement_title; ?></h2>
                        <?php endif;?>
                        </div>
            </div>
            <!--/.news-sec-->
        </div>
        <!--/#content-->
    </div>
    <!--/#primary-->
    </div>
    <!--/#main -->