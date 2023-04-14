<?php
//Exit if Directly accessed
if (!defined('ABSPATH')) {
	exit;
}

/**
 * The Template Used For Displaying Contact page Content
 *
 * @package WordPress
 * @subpackage CryoMasters
 * @since CryoMasters 1.0
 */
?>
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
    </div>
    <!--/.wrap-->
    </div>
    <!--/.home-page-banner-->
    <div id="main">
        <div id="primary" class="content-area one-column">
            <div id="content" class="site-content">
                <div class="contact-detials-sec">
                    <div class="wrap">
                        <div class="cols cols2">
                            <div class="col">
                                <?php $contact_desc_box = get_field('contact_desc_box');?>
                                <?php foreach ($contact_desc_box as $key => $contact_box) {?>
                                    <div class="contact-desc-box">
                                        <h4><?php echo $contact_box['title']; ?></h4>

                                        <?php echo $contact_box['info']; ?>

                                    </div>
                                <?php }?>

                                <div class="contact-social">
                                    <?php $follow_us_title = get_field('follow_us_title');?>
                                    <?php if (isset($follow_us_title) && !empty($follow_us_title)): ?>
                                        <h4><?php echo $follow_us_title; ?></h4>
                                    <?php endif;?>
                                    <ul>
                                        <?php $social_icon_box = get_field('social_icon_box');?>
                                        <?php foreach ($social_icon_box as $key => $social_box) {?>
                                            <li><a href="<?php echo $social_box['social_url']; ?>" target="_blank" class="facebook"><i class="<?php echo $social_box['icon_class']; ?>"></i></a></li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col">
                                <div class="comp-fig">
                                    <?php $contact_logo = get_field('contact_logo');?>
                                    <?php if (isset($contact_logo) && !empty($contact_logo)): ?>
                                        <figure><img src="<?php echo $contact_logo; ?>" alt="CM"></figure>
                                    <?php endif;?>
                                    <div class="contact-card">
                                        <div class="card-info-top">
                                            <?php $card_address = get_field('card_address');?>
                                            <?php if (isset($card_address) && !empty($card_address)): ?>
                                                <h5><?php echo $card_address; ?>)</h5>
                                            <?php endif;?>
                                            <ul>
                                                <?php $address = get_field('address');?>
                                                <?php if (isset($address) && !empty($address)): ?>
                                                    <li>
                                                        <address><?php echo $address; ?></address>
                                                    </li>
                                                <?php endif;?>
                                                <?php $number = get_field('number');?>
                                                <?php if (isset($number) && !empty($number)): ?>
                                                    <li><a target="_blank" href="tel:+491735724638"><?php echo $number; ?></a></li>
                                                <?php endif;?>

                                                <?php $email = get_field('email');?>
                                                <?php if (isset($email) && !empty($email)): ?>
                                                    <li><a target="_blank" href="mailto:info@cryomasters.de"><?php echo $email; ?></a></li>
                                                <?php endif;?>
                                            </ul>
                                        </div>
                                        <div class="card-info-bottom">
                                            <?php $card_info_title = get_field('card_info_title');?>
                                            <?php if (isset($card_info_title) && !empty($card_info_title)): ?>
                                                <h5><?php echo $card_info_title; ?></h5>
                                            <?php endif;?>

                                            <?php $card_detail = get_field('card_detail');?>
                                            <?php if (isset($card_detail) && !empty($card_detail)): ?>
                                                <span><?php echo $card_detail; ?></span>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.wrap-->
                </div>
                <!--/.contact-detials-sec-->
                <div class="conversation-sec">
                    <div class="wrap">
                        <?php $conversation_title = get_field('conversation_title');?>
                        <?php if (isset($conversation_title) && !empty($conversation_title)): ?>
                            <div class="title">
                                <h2><?php echo $conversation_title; ?></h2>
                            </div>
                        <?php endif;?>
                        <div class="cols cols2">
                            <div class="col">
                                    <?php $conversation_form_short_code = get_field('conversation_form_short_code');?>
                                    <?php if (isset($conversation_form_short_code) && !empty($conversation_form_short_code)): ?>
                                        <?php echo do_shortcode($conversation_form_short_code); ?>
                                    <?php endif;?>
                            </div>
                            <div class="col">
                                <?php $conversation_info = get_field('conversation_info');?>
                                <?php foreach ($conversation_info as $key => $conversation_info) {?>
                                    <div class="conv-info">
                                        <h4><?php echo $conversation_info['conv_title']; ?></h4>
                                        <?php echo $conversation_info['conv_info']; ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!--/.wrap-->
                </div>
                <!--/.conversation-sec-->
            </div>
            <!--/.wrap-->
        </div>
        <!--/#content-->
    </div>
    <!--/#primary-->
    </div>
    <!--/#main -->