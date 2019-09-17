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
        <div class="u3a-responsive-menu">
          <div class="col-md-5 col-lg-4">

          </div>
          <?php //if (have_posts() ): 
            //while(have_posts()) : the_post(); ?>

            <div class="col-md-8 pull-right">
              <nav class="blog-nav">
                    <ul  data-menu-style="horizontal" id="respMenu">
                        <?php wp_list_pages('&title_li=' ); ?>
                    </ul>
              </nav>
            </div>
        </div>
    </div>

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title"><?php bloginfo( 'name' ); ?></h1>
        <?php $description = get_bloginfo( 'description', 'display' ); ?>
        <?php if($description) { ?><p class="lead blog-description"><?php echo $description ?></p><?php } ?>
    </div>

    <?php get_template_part('parts/slider'); ?>

    <div class="row">