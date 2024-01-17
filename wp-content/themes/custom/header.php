<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class("single single-atail_projects"); ?> data-token="#"
      data-share="[&quot;facebook&quot;,&quot;twitter&quot;]">
<?php wp_body_open(); ?>
<!--Preloader-->
<div class="atail-preloader-wrapper">
        <span>
            <span class="atail-dot"></span>
            <span class="atail-dot"></span>
            <span class="atail-dot"></span>
        </span>
    <div class="atail-preloader">
        <span>
            <span class="atail-dot"></span>
            <span class="atail-dot"></span>
            <span class="atail-dot"></span>
        </span>
    </div>
</div>
<!--/Preloader-->
<?php 
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>
<div class="atail  container-fluid  ">

    <header class="atail-header">
        <div class=" container-fluid ">
            <div class="logo  atail-logo-portrait">
                <a href="index.html">
                    <span class="atail-text-logo">
                        <?php if($image[0]){ ?>
                        <img src="<?php echo $image[0]; ?>" alt="Logo">
                        <?php
                    }
                        ?>
                    </span>
                </a>
            </div>
            <div class="show-nav">
                <span data-action="show-nav">
                    <span>
                        <span></span>
                        <span></span>
                    </span>
                </span>
            </div>
            <nav class="row">
                <div class="grid-bg row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                </div>
                <?php 
                wp_nav_menu(array(
                    'menu_class' => 'nav-list',
                    'container'  => '',
                    'menu_id'    => 'menu-1',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'items_wrap'  => '<ol id="%1$s" class="%2$s">%3$s</ol>',
                ));
                ?>
            </nav>
        </div>
    </header>








