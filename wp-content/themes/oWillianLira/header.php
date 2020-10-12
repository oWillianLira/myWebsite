<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> <?php wp_title('|'); ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?> - <?php wp_title(' | '); ?>">

    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header id="header_owl">
        <div class="container-xl">
            <div class="header_owl">
                <a href="<?php echo get_home_url(); ?>" class="logo_owl">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/09/Logo-name.png"
                        alt="O Willian Lira">
                </a>

                <nav class="menu_owl">
                    <?php
                    $args = array(
                        'menu' => 'menu_owl',
                        'menu_class' => false,
                        'menu_id' => 'from_panel',
                        'container' => false,
                    );
                    wp_nav_menu( $args );
                ?>
                    <!-- <a href="#" class="btn_blue">Quero um site</a> -->
                </nav>

                <div class="wrapper-menu">
                    <div class="line-menu half start"></div>
                    <div class="line-menu"></div>
                    <div class="line-menu half end"></div>
                </div>
            </div>
        </div>
    </header>
