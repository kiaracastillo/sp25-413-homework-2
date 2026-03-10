<?php
/* header.php */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="header">

<div class="top-line"></div>

        <div class="head-top">
            
    <div class="wrap head-inner">

        <div class="head-date">
       
        <?php echo date('l, F j, Y'); ?>
        </div>

        <div class="head-links">
        
        <a href="#">Newsletter</a>

            <a href="#">Subscribe</a>
 </div>

    </div>


</div>

<div class="wrap">

    <div class="logo-area">

        <?php
        if ( has_custom_logo() ) {

            the_custom_logo();
        } else {

        ?>

        <h1 class="site-title">
           
        <a href="<?php echo home_url('/'); ?>">
                <?php bloginfo('name'); ?>
            </a>


        </h1>

        <p class="site-tag"><?php bloginfo('description'); ?></p>

        <?php } ?>

    </div>

</div>

<nav class="menu">

    <div class="wrap">

    <?php
        wp_nav_menu(array(

            'theme_location' => 'menu-principal',
            'menu_class' => 'nav-list',
            'container' => false
        ));
        ?>

    </div>


</nav>

</header>