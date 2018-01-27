<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">


    <!-- Le styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">



    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand hidden-md-down" href="<?php echo site_url(); ?>"><img class="img-responsive" src="<?php amplified_the_custom_logo(); ?>" alt="Amplified Ale Works"/></a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="tagline hidden-xs hidden-sm"><?php echo amplified_getTagline(); ?></div>
    <div class="collapse navbar-collapse" id="navbarsExample04">
    <?php
    wp_nav_menu([
        'menu'            => 'header-menu',
        'theme_location'  => 'header-menu',
        'container'       => 'div',
        'container_id'    => 'bs4navbar',
        'container_class' => 'collapse navbar-collapse',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav mr-auto',
        'depth'           => 3,
        'fallback_cb'     => 'bs4navwalker::fallback',
        'walker'          => new bs4navwalker()
    ]);
    ?>

    </div>



</nav>

<div class="container-fluid">

