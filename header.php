<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Include google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,600;0,800;1,100;1,300;1,400;1,600;1,800&family=Teko:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- End of google fonts -->
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <div id="wrapper">
        <header id="header">
            <div class="wrap">
                <div class="header-row">
                    <?php $logo = get_field('header_logo', 'option');?>
                    <?php if (isset($logo) && !empty($logo)): ?>
                        <a href="<?php bloginfo('url');?>" id="logo" title="<?php bloginfo('name');?>">
                            <img src="<?php echo $logo; ?>" width="222" height="71" alt="CryoMasters">
                        </a>
                    <?php endif;?>
                    <nav id="mainmenu">
                        <?php
if (has_nav_menu('main-menu')):
	wp_nav_menu(array('theme_location' => 'main-menu', 'container' => '', 'container_class' => '', 'items_wrap' => '<ul>%3$s</ul>'));
endif;
?>
                    </nav>
                    <!--/#mainmenu-->
                </div>
            </div>
            <!--/.wrap-->
        </header>
        <!--/#header-->
        </header>
        <!--/#header-->