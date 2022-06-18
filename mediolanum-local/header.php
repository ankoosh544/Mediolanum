<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package mediolanum
 */
$_ver = bin2hex(random_bytes(10));
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Mediolanum</title>

    <!-- Bootstrap core JavaScript
       ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/bootstrap/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/bootstrap/css/custom.css">
<script type="text/javascript" src="<?= get_stylesheet_directory_uri() ?>/bootstrap/js/main.js"></script>
    <!-- media query -->
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/bootstrap/css/media-query.css?ver=<?php echo $_ver;?>"/>
    <!-- font style -->


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/bootstrap/css/bootstrap.min.css"/>



    <!-- Google Font -->
  
    <!-- Custom styles for this template -->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->





    <head  role="banner">
        <?php get_template_part('Template/_header') ?>
       


    </head><!-- #masthead -->

<body data-spy="scroll" data-target="#navbar">








