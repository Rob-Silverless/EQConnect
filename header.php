<?php /** Header @package eqconnect */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="UTF-8">
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>EQ Connect</title>

<link rel="stylesheet" href="https://use.typekit.net/ecw2sdp.css"><!--TYPEKIT INJECT-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page" class="site-wrapper">

<header>
    <nav id="nav">
        <div class="container cols-3-18 mobile-nav align-vert-c">
            <div class="col">
                <a class="menu-trigger" href="#">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
            <div class="col align-center">
                <a href="#top">
                    <?php get_template_part("template-parts/logo"); ?>
                </a>
            </div>
        </div>


        <div class="container cols-6-18 align-vert-c desktop-nav">
            <div class="col" id="logo">
                <a href="#top">
                    <?php get_template_part("template-parts/logo"); ?>
                </a>
            </div>
            <div class="col">
                <?php
                wp_nav_menu(array(
                    'theme_location'  => 'main-menu',
                    'container_class' => 'mainMenu'
                ));
                ?>
            </div>
        </div>
    </nav>
</header>

<div class="offscreen-nav">
    <div class="close menu-trigger"><i class="fas fa-times"></i></div>
    <?php get_template_part("template-parts/logo"); ?>
    <?php 
    wp_nav_menu(array(
        'theme_location'  => 'main-menu',
        'container_class' => 'mainMenu'
    ));
    ?>
</div>

		<main><!--closes in footer.php-->
