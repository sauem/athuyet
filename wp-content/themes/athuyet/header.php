<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="<?= ASSET ?>/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?= ASSET ?>/css/animate.min.css"/>
    <link rel="stylesheet" href="<?= ASSET ?>/css/icofont.min.css"/>
    <link rel="stylesheet" href="<?= ASSET ?>/css/meanmenu.css"/>
    <link rel="stylesheet" href="<?= ASSET ?>/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="<?= ASSET ?>/css/magnific-popup.min.css"/>
    <link rel="stylesheet" href="<?= ASSET ?>/css/style.css"/>
    <link rel="stylesheet" href="<?= ASSET ?>/css/dark.css"/>
    <link rel="stylesheet" href="<?= ASSET ?>/css/responsive.css"/>
    <title><?php bloginfo('name') ?> - <?php bloginfo('description') ?></title>
    <link rel="icon" type="image/png" href="<?= get_site_icon_url() ?>"/>

    <?php wp_head(); ?>

</head>

<body>

<?php
wp_body_open();
get_template_part('parts/navbar');
?>
