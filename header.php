<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="author" content="Codezilla - https://codzilla.net/">

    <!-- Title  -->
    <title>
        <?php
            $site_description = "One-Stop Solution company";
            $site_name = get_bloginfo('name');
            $logo_dark =  CODZILLA_URL . 'assets/img/logo-darkblue.png';
            $codzilla_favicon =   CODZILLA_URL . 'assets/img/favicon.png';
            //for home page
            if ( $site_description && ( is_home() || is_front_page() ) ):
                echo $site_name;echo ' | '; echo  get_bloginfo('description'); 
            endif;
            // for other post pages
            if (!( is_home() ) && ! is_404() && ! is_front_page() ):
            the_title(); echo ' | '; echo $site_name;
            endif;
        ?>
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="<?= $codzilla_favicon; ?>">   
    <!-- Search Engine -->
    <meta name="keywords" content="Codezilla, One-Stop Solution company in the MENA Region., Software Development, Graphic Design, Digital Marketing, Digital Business Consultation" />
    <meta  name="title" content="<?php  echo $site_name;echo ' - '; echo  $site_description; ?>">
    <meta  name="site_name" content="<?php  echo $site_name;echo ' - '; echo  $site_description; ?>">
    
    <meta name="image" property="og:image" content="<?php echo $logo_dark; ?>">
    <meta name="description" property="og:description" content="Codezilla, One-Stop Solution company in the MENA Region., Software Development, Graphic Design, Digital Marketing, Digital Business Consultation">

    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta  property="og:title" content="<?php  echo $site_name;echo ' - '; echo  $site_description; ?>">
    <meta  property="og:description" content="outstanding digital solutions company in the MENA Region.">
    <meta  property="og:image"itemprop="image" content="<?php echo $logo_dark; ?>">
    <meta property="og:image:url" itemprop="image" content="<?php echo $logo_dark; ?>" />
    <meta property="og:image:type" content="image/png">
    <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="200">
    <meta  property="og:url" content="https://codzilla.net">
    <meta  property="og:site_name" content="<?php  echo $site_name;echo ' - '; echo  $site_description; ?>">
    <meta  property="og:type" content="website">
    <!-- Twitter -->
    <meta name="twitter:title" content="<?php  echo $site_name;echo ' - '; echo  $site_description; ?>">
    <meta name="twitter:description" content="outstanding digital solutions company in the MENA Region.">
    <meta name="twitter:site" content="@codezillaeg">
    <meta name="twitter:creator" content="@codezillaeg">
    <meta name="twitter:image:src" content="<?php echo $logo_dark; ?>">
    
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="<?php  echo $site_name;echo ' - '; echo  $site_description; ?>">
    <meta itemprop="description" content="Codezilla,One-Stop Solution company in the MENA Region.,Software Development,Graphic Design,Digital Marketing,Digital Business Consultation">
    <meta itemprop="image" content="<?php echo $logo_dark; ?>">

    <!--  safari pinned tab svg img -->
    <meta name="msapplication-TileColor" content="<?= get_option('codzilla_primaryColor');?>">
	<meta name="theme-color" content="<?= get_option('codzilla_primaryColor');?>">

    <!--    Aplle icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?=  CODZILLA_URL;?>assets/img/logo180x180.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?=  CODZILLA_URL;?>assets/img/logo32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?=  CODZILLA_URL;?>assets/img/logo16x16.png">
    
    <!-- favicon -->
    <link itemprop="thumbnailUrl" href="<?php echo $logo_dark; ?>">
    <link rel="shortcut icon" href="<?php echo $codzilla_favicon; ?>">

    <!-- Google Fonts -->
    <link rel="preload" href="<?= CODZILLA_URL;?>assets/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= CODZILLA_URL;?>assets/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GJEEM5LGTS"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-GJEEM5LGTS');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-THHNSLC');</script>
    <!-- End Google Tag Manager -->
    
   <?php wp_head(); ?>

</head>

<body>
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THHNSLC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- ==================== Start Loading ==================== -->

    <div id="preloader">
        <div class="ring">
            <img class="preload-img" alt="codezilla" src="<?= CODZILLA_URL;?>assets/img/codezilla-line-white1.svg"  width="90" height="115" >
            <span></span>
        </div>
    </div>

    <!-- ==================== End Loading ==================== -->



    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->



    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->



    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar change navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="<?php bloginfo('url'); ?>">
                <img class="lazyload" data-src="<?= get_option('codzilla_logo_light'); ?>" alt="codezilla" width="50" height="58">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                   <?php codzilla_menu(); ?>
                
                <div class="search">
                    <i class="icon fas fa-search"></i>
                    <div class="search-form text-center custom-font">
                        <form action="<?php echo home_url('/'); ?>" method="get">
                            <input type="text" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
                        </form>
                         
                        <i class="close fas fa-times"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->