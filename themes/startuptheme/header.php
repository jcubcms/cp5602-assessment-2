<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="blog-masthead">
    <div class="container header-menu-top">
        <div class="col-md-3 site-logo-main" style="float: left;
    padding-left: 0px;">
            <?php  if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo();} ?>
        </div>
        <div class="col-md-9 header-menu-main" style="float: left;
    padding: 15px;
    margin-left: 0px;">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'blog-nav list-inline' ) ); ?>
        </div>
    </div>
</div>



    

<div class="container">
    <div class="row">