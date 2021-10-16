
<?php global $redux ?>
<!DOCTYPE html>
<html <?php echo language_attributes(); ?>>

<head>
    <meta charset=" <?php echo bloginfo('charset') ?>">
    <link rel="icon" href="assets/img/fevicon.png">
    <?php echo wp_head();  ?>
</head>

<body <?php echo body_class()?>>
    <div class="main-wrapper">
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <div id="my_switcher" class="my_switcher">
            <ul>
                <li>
                    <a href="javascript: void(0);" data-theme="light" class="setColor light">
                        <span title="Light Mode">Light</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                        <span title="Dark Mode">Dark</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Start Header -->
  <header class="header axil-header  header-light header-sticky ">
            <div class="header-wrap">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-12">
                        <div class="logo">
                            <a href="index.html">
                                <img width="<?php echo $redux['blog_logo_width']?>.'px'" class="dark-logo" src="<?php echo  $redux['blog_upload_logo']['url'] ?>" alt="Blogar logo">
                                <img class="light-logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logo/logo-white2.png" alt="Blogar logo">
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-6 d-none d-xl-block">
                        <div class="mainmenu-wrapper">
                            <nav class="mainmenu-nav">
                                <?php 

                                wp_nav_menu([
                                    'theme_location' => 'primary_menu',
                                    'container_class'   => 'mainmenu-wrapper',
                                    'menu_class' => 'mainmenu',
                                    'add_li_class' => 'menu-item-has-children'
                                ])
                                
                                ?>      
                                </div>
                            </nav>
                        </div>
                    </div>



                    <div class="col-xl-3 col-lg-8 col-md-8 col-sm-9 col-12">
                        <div class="header-search text-right d-flex align-items-center">
                            <form class="header-search-form">
                                <div class="axil-search form-group">
                                    <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                            <ul class="metabar-block">
                                <li class="icon"><a href="#"><i class="fas fa-bookmark"></i></a></li>
                                <li class="icon"><a href="#"><i class="fas fa-bell"></i></a></li>
                                <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/others/author.png" alt="Author Images"></a></li>
                            </ul>
                            <!-- Start Hamburger Menu  -->
                            <div class="hamburger-menu d-block d-xl-none">
                                <div class="hamburger-inner">
                                    <div class="icon"><i class="fal fa-bars"></i></div>
                                </div>
                            </div>
                            <!-- End Hamburger Menu  -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Start Header -->

        <!-- Start Mobile Menu Area  -->
        <div class="popup-mobilemenu-area">
            <div class="inner">
                <div class="mobile-menu-top">
                    <div class="logo">
                        <a href="index.html">
                            <img class="dark-logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logo/logo-black.png" alt="Logo Images">
                            <img class="light-logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logo/logo-white2.png" alt="Logo Images">
                        </a>
                    </div>
                    <div class="mobile-close">
                        <div class="icon">
                            <i class="fal fa-times"></i>
                        </div>
                    </div>
                </div>
                <ul class="mainmenu">
                    <li class="menu-item-has-children"><a href="#">Home</a>
                        <ul class="axil-submenu">
                            <li><a href="index.html">Home Default</a></li>
                            <li><a href="home-creative-blog.html">Home Creative Blog</a></li>
                            <li><a href="home-seo-blog.html">Home Seo Blog</a></li>
                            <li><a href="home-tech-blog.html">Home Tech Blog</a></li>
                            <li><a href="home-lifestyle-blog.html">Home Lifestyle Blog</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Categories</a>
                        <ul class="axil-submenu">
                            <li><a href="post-details.html">Accessibility</a></li>
                            <li><a href="post-details.html">Android Dev</a></li>
                            <li><a href="post-details.html">Accessibility</a></li>
                            <li><a href="post-details.html">Android Dev</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Post Format</a>
                        <ul class="axil-submenu">
                            <li><a href="post-format-standard.html">Post Format Standard</a></li>
                            <li><a href="post-format-video.html">Post Format Video</a></li>
                            <li><a href="post-format-gallery.html">Post Format Gallery</a></li>
                            <li><a href="post-format-text.html">Post Format Text Only</a></li>
                            <li><a href="post-layout-1.html">Post Layout One</a></li>
                            <li><a href="post-layout-2.html">Post Layout Two</a></li>
                            <li><a href="post-layout-3.html">Post Layout Three</a></li>
                            <li><a href="post-layout-4.html">Post Layout Four</a></li>
                            <li><a href="post-layout-5.html">Post Layout Five</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Pages</a>
                        <ul class="axil-submenu">
                            <li><a href="post-list.html">Post List</a></li>
                            <li><a href="archive.html">Post Archive</a></li>
                            <li><a href="author.html">Author Page</a></li>
                            <li><a href="about.html">About Page</a></li>
                            <li><a href="maintenance.html">Maintenance</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </li>
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
                <div class="buy-now-btn">
                    <a href="#">Buy Now <span class="badge">$15</span></a>
                </div>
            </div>
        </div>
        <!-- End Mobile Menu Area  -->



        <!-- Start Banner Area -->
        <h1 class="d-none">Home Default Blog</h1>
        <div class="slider-area bg-color-grey">
            <div class="axil-slide slider-style-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-activation axil-slick-arrow">
                                <!-- Start Single Slide  -->
                                <div class="content-block">
                                    <!-- Start Post Thumbnail  -->
                                    <div class="post-thumbnail">
                                        <a href="post-details.html">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/gallery-post-01.jpg" alt="Post Images">
                                        </a>
                                    </div>
                                    <!-- End Post Thumbnail  -->

                                    <!-- Start Post Content  -->
                                    <div class="post-content">
                                        <div class="post-cat">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#">
                                                    <span class="hover-flip-item">
                                                        <span data-text="DESIGN">DESIGN</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <h2 class="title"><a href="post-details.html">4 types of research methods all designers should know</a></h2>
                                        <!-- Post Meta  -->
                                        <div class="post-meta-wrapper with-button">
                                            <div class="post-meta">
                                                <div class="post-author-avatar border-rounded">
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/author/author-image-3.png" alt="Author Images">
                                                </div>
                                                <div class="content">
                                                    <h6 class="post-author-name">
                                                        <a class="hover-flip-item-wrapper" href="author.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Rahabi Khan">Rahabi Khan</span>
                                                            </span>
                                                        </a>
                                                    </h6>
                                                    <ul class="post-meta-list">
                                                        <li>Feb 17, 2019</li>
                                                        <li>300k Views</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="social-share-transparent justify-content-end">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fas fa-link"></i></a></li>
                                            </ul>
                                            <div class="read-more-button cerchio">
                                                <a class="axil-button button-rounded hover-flip-item-wrapper" href="post-details.html">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Read Post">Read Post</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Post Content  -->
                                </div>
                                <!-- End Single Slide  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->

        <!-- Start Featured Area  -->
        <div class="axil-featured-post axil-section-gap bg-color-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="title">More Featured Posts.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Single Post  -->
                    <div class="col-lg-6 col-xl-6 col-md-12 col-12 mt--30">
                        <div class="content-block content-direction-column axil-control is-active post-horizontal thumb-border-rounded">
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="APPLE DESIGN">APPLE DESIGN</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="post-details.html">Apple reimagines the iPhone experience
                                        with iOS 14</a></h4>
                                <div class="post-meta">
                                    <div class="post-author-avatar border-rounded">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/author/author-image-2.png" alt="Author Images">
                                    </div>
                                    <div class="content">
                                        <h6 class="post-author-name">
                                            <a class="hover-flip-item-wrapper" href="author.html">
                                                <span class="hover-flip-item">
                                                    <span data-text="Ismat Jahan">Ismat Jahan</span>
                                                </span>
                                            </a>
                                        </h6>
                                        <ul class="post-meta-list">
                                            <li>Feb 17, 2019</li>
                                            <li>300k Views</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-images-1.jpg" alt="Post Images">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Post  -->

                    <!-- Start Single Post  -->
                    <div class="col-lg-6 col-xl-6 col-md-12 col-12 mt--30">
                        <div class="content-block content-direction-column axil-control post-horizontal  thumb-border-rounded">
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="TECH">TECH</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="post-details.html">Flutter: the good, the bad and the
                                        ugly</a></h4>
                                <div class="post-meta">
                                    <div class="post-author-avatar border-rounded">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/author/author-image-1.png" alt="Author Images">
                                    </div>
                                    <div class="content">
                                        <h6 class="post-author-name">
                                            <a class="hover-flip-item-wrapper" href="author.html">
                                                <span class="hover-flip-item">
                                                    <span data-text="Jone Doe">Jone Doe</span>
                                                </span>
                                            </a>
                                        </h6>
                                        <ul class="post-meta-list">
                                            <li>Feb 17, 2019</li>
                                            <li>300k Views</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-images-2.jpg" alt="Post Images">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Post  -->
                </div>
            </div>
        </div>
        <!-- End Featured Area  -->

        <!-- Start Tab Area  -->
        <div class="axil-tab-area axil-section-gap bg-color-white">
            <div class="wrapper">

            <?php
            
            $topic = new WP_Query([
                'post_type' => 'topic',
            ]);

            while($topic -> have_posts()){
                $topic -> the_post();

              echo get_post_meta(get_the_ID(  ),'sp',true);

            };
            
            ?>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="axil-banner mb--30">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/images/add-banner/banner-03.png" alt="Banner Images">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                   
                </div>
            </div>
        </div>
        <!-- End Tab Area  -->

        <!-- Start Categories List  -->
        <div class="axil-categories-list axil-section-gap bg-color-grey">
            <div class="container">
                <div class="row align-items-center mb--30">
                    <div class="col-lg-6 col-md-8 col-sm-8 col-12">
                        <div class="section-title">
                            <h2 class="title">Trending Topics</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-4 col-12">
                        <div class="see-all-topics text-left text-sm-right mt_mobile--20">
                            <a class="axil-link-button" href="#">See All Topics</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Start List Wrapper  -->
                        <div class="list-categories d-flex flex-wrap">

                            <!-- Start Single Category  -->
                            <div class="single-cat">
                                <div class="inner">
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-sm-01.jpg" alt="post categories images">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Sports &#38; Fitness </h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Single Category  -->

                            <!-- Start Single Category  -->
                            <div class="single-cat">
                                <div class="inner">
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-sm-02.jpg" alt="post categories images">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Travel</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Single Category  -->

                            <!-- Start Single Category  -->
                            <div class="single-cat">
                                <div class="inner">
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-sm-03.jpg" alt="post categories images">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">lifestyle</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Single Category  -->

                            <!-- Start Single Category  -->
                            <div class="single-cat">
                                <div class="inner">
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-sm-04.jpg" alt="post categories images">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Health</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Single Category  -->

                            <!-- Start Single Category  -->
                            <div class="single-cat">
                                <div class="inner">
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-sm-05.jpg" alt="post categories images">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Animals</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Single Category  -->

                            <!-- Start Single Category  -->
                            <div class="single-cat">
                                <div class="inner">
                                    <a href="#">
                                        <div class="thumbnail">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-sm-06.jpg" alt="post categories images">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Food &#38; Drink</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Single Category  -->

                        </div>
                        <!-- Start List Wrapper  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Categories List  -->

        <!-- Start Trending Post Area  -->
        <div class="axil-trending-post-area axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="title">Most Popular</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Start Axil Tab Button  -->
                        <ul class="axil-tab-button nav nav-tabs mt--20" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="trend-one" data-toggle="tab" href="#trendone" role="tab" aria-controls="trend-one" aria-selected="true">Accessibility</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="trend-two" data-toggle="tab" href="#trendtwo" role="tab" aria-controls="trend-two" aria-selected="false">Android Dev</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="trend-three" data-toggle="tab" href="#trendthree" role="tab" aria-controls="trend-three" aria-selected="false">Blockchain</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="trend-four" data-toggle="tab" href="#trendfour" role="tab" aria-controls="trend-four" aria-selected="false">Gadgets</a>
                            </li>
                        </ul>
                        <!-- End Axil Tab Button  -->

                        <!-- Start Axil Tab Content  -->
                        <div class="tab-content">

                            <!-- Single Tab Content  -->
                            <div class="row trend-tab-content tab-pane fade show active" id="trendone" role="tabpanel" aria-labelledby="trend-one">
                                <div class="col-lg-8">
                                    <!-- Start Single Post  -->
                                    <div class="content-block trend-post post-order-list axil-control">
                                        <div class="post-inner">
                                            <span class="post-order-list">01</span>
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            <span class="hover-flip-item">
                                                                <span data-text="CASE STUDY">CASE STUDY</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="post-details.html">How a developer and
                                                        designer duo at Deutsche Bank keep remote collaboration
                                                        alive</a></h3>
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="Jone Doe">Jone Doe</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li>Feb 17, 2019</li>
                                                                <li>3 min read</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/trend-post-01.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block trend-post post-order-list is-active">
                                        <div class="post-inner">
                                            <span class="post-order-list">02</span>
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            <span class="hover-flip-item">
                                                                <span data-text="BOOKS">BOOKS</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="post-details.html">The underrated design book
                                                        that transformed the way I work</a></h3>
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="Jane Afroj">Jane Afroj</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li>Feb 17, 2019</li>
                                                                <li>3 min read</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/trend-post-02.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block trend-post post-order-list axil-control">
                                        <div class="post-inner">
                                            <span class="post-order-list">03</span>
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            <span class="hover-flip-item">
                                                                <span data-text="PROCESS">PROCESS</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="post-details.html">Here’s what you should
                                                        (and shouldn’t) do when giving formal feedback</a></h3>
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="Israt Ara">Israt Ara</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li>Feb 17, 2019</li>
                                                                <li>3 min read</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/trend-post-03.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block trend-post post-order-list axil-control">
                                        <div class="post-inner">
                                            <span class="post-order-list">04</span>
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            <span class="hover-flip-item">
                                                                <span data-text="CASE STUDY">CASE STUDY</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="post-details.html">6 ways you can make your design more inclusive and equitable</a></h3>
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="Ismat Jahan">Ismat Jahan</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li>Feb 17, 2019</li>
                                                                <li>3 min read</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/trend-post-04.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->
                                </div>
                            </div>
                            <!-- Single Tab Content  -->

                            <!-- Single Tab Content  -->
                            <div class="row trend-tab-content tab-pane fade" id="trendtwo" role="tabpanel" aria-labelledby="trend-two">
                                <div class="col-lg-8">

                                    <!-- Start Single Post  -->
                                    <div class="content-block trend-post post-order-list axil-control">
                                        <div class="post-inner">
                                            <span class="post-order-list">01</span>
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            <span class="hover-flip-item">
                                                                <span data-text="CASE STUDY">CASE STUDY</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="post-details.html">How a developer and
                                                        designer duo at Deutsche Bank keep remote collaboration
                                                        alive</a></h3>
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="Jakowar">Jakowar</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li>Feb 17, 2019</li>
                                                                <li>3 min read</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/trend-post-01.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block trend-post post-order-list axil-control is-active">
                                        <div class="post-inner">
                                            <span class="post-order-list">02</span>
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            <span class="hover-flip-item">
                                                                <span data-text="BOOKS">BOOKS</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="post-details.html">The underrated design book
                                                        that transformed the way I work</a></h3>
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="Jasika">Jasika</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li>Feb 17, 2019</li>
                                                                <li>3 min read</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/trend-post-02.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block trend-post post-order-list axil-control">
                                        <div class="post-inner">
                                            <span class="post-order-list">03</span>
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            <span class="hover-flip-item">
                                                                <span data-text="PROCESS">PROCESS</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="post-details.html">Here’s what you should
                                                        (and shouldn’t) do when giving formal feedback</a></h3>
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="Israt Ara">Israt Ara</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li>Feb 17, 2019</li>
                                                                <li>3 min read</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/trend-post-03.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block trend-post post-order-list axil-control">
                                        <div class="post-inner">
                                            <span class="post-order-list">04</span>
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            <span class="hover-flip-item">
                                                                <span data-text="CASE STUDY">CASE STUDY</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="post-details.html">How a developer and
                                                        designer duo at Deutsche Bank keep remote collaboration
                                                        alive</a></h3>
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="John Jane">John Jane</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li>Feb 17, 2019</li>
                                                                <li>3 min read</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/trend-post-04.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                </div>
                            </div>
                            <!-- Single Tab Content  -->

                            <!-- Single Tab Content  -->
                            <div class="row trend-tab-content tab-pane fade" id="trendthree" role="tabpanel" aria-labelledby="trend-two">
                                <div class="col-lg-8">

                                    <!-- Start Single Post  -->
                                    <div class="content-block trend-post post-order-list axil-control">
                                        <div class="post-inner">
                                            <span class="post-order-list">01</span>
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            <span class="hover-flip-item">
                                                                <span data-text="CASE STUDY">CASE STUDY</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="post-details.html">How a developer and
                                                        designer duo at Deutsche Bank keep remote collaboration
                                                        alive</a></h3>
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="Najmul">Najmul</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li>Feb 17, 2019</li>
                                                                <li>3 min read</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/trend-post-01.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block trend-post post-order-list axil-control is-active">
                                        <div class="post-inner">
                                            <span class="post-order-list">02</span>
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            <span class="hover-flip-item">
                                                                <span data-text="BOOKS">BOOKS</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="post-details.html">The underrated design book
                                                        that transformed the way I work</a></h3>
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="Kanak Lota">Kanak Lota</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li>Feb 17, 2019</li>
                                                                <li>3 min read</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/trend-post-02.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block trend-post post-order-list axil-control">
                                        <div class="post-inner">
                                            <span class="post-order-list">03</span>
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            <span class="hover-flip-item">
                                                                <span data-text="PROCESS">PROCESS</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="post-details.html">Here’s what you should
                                                        (and shouldn’t) do when giving formal feedback</a></h3>
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="Nowsin Afroj">Nowsin Afroj</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li>Feb 17, 2019</li>
                                                                <li>3 min read</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/trend-post-03.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block trend-post post-order-list axil-control">
                                        <div class="post-inner">
                                            <span class="post-order-list">04</span>
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            <span class="hover-flip-item">
                                                                <span data-text="CASE STUDY">CASE STUDY</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="post-details.html">How a developer and
                                                        designer duo at Deutsche Bank keep remote collaboration
                                                        alive</a></h3>
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="Ismat Jahan">Ismat Jahan</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li>Feb 17, 2019</li>
                                                                <li>3 min read</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/trend-post-04.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                </div>
                            </div>
                            <!-- Single Tab Content  -->

                            <!-- Single Tab Content  -->
                            <div class="row trend-tab-content tab-pane fade" id="trendfour" role="tabpanel" aria-labelledby="trend-two">
                                <div class="col-lg-8">

                                    <!-- Start Single Post  -->
                                    <div class="content-block trend-post post-order-list axil-control">
                                        <div class="post-inner">
                                            <span class="post-order-list">01</span>
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            <span class="hover-flip-item">
                                                                <span data-text="CASE STUDY">CASE STUDY</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="post-details.html">How a developer and
                                                        designer duo at Deutsche Bank keep remote collaboration
                                                        alive</a></h3>
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="Ismat Jahan">Ismat Jahan</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li>Feb 17, 2019</li>
                                                                <li>3 min read</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/trend-post-01.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block trend-post post-order-list axil-control is-active">
                                        <div class="post-inner">
                                            <span class="post-order-list">02</span>
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            <span class="hover-flip-item">
                                                                <span data-text="BOOKS">BOOKS</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="post-details.html">The underrated design book
                                                        that transformed the way I work</a></h3>
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="Jasika">Jasika</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li>Feb 17, 2019</li>
                                                                <li>3 min read</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/trend-post-02.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block trend-post post-order-list axil-control">
                                        <div class="post-inner">
                                            <span class="post-order-list">03</span>
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            <span class="hover-flip-item">
                                                                <span data-text="PROCESS">PROCESS</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="post-details.html">Here’s what you should
                                                        (and shouldn’t) do when giving formal feedback</a></h3>
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="Najmul Alom">Najmul Alom</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li>Feb 17, 2019</li>
                                                                <li>3 min read</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/trend-post-03.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block trend-post post-order-list axil-control">
                                        <div class="post-inner">
                                            <span class="post-order-list">04</span>
                                            <div class="post-content">
                                                <div class="post-cat">
                                                    <div class="post-cat-list">
                                                        <a class="hover-flip-item-wrapper" href="#">
                                                            <span class="hover-flip-item">
                                                                <span data-text="CASE STUDY">CASE STUDY</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="post-details.html">How a developer and
                                                        designer duo at Deutsche Bank keep remote collaboration
                                                        alive</a></h3>
                                                <div class="post-meta-wrapper">
                                                    <div class="post-meta">
                                                        <div class="content">
                                                            <h6 class="post-author-name">
                                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                                    <span class="hover-flip-item">
                                                                        <span data-text="Jakarark">Jakarark</span>
                                                                    </span>
                                                                </a>
                                                            </h6>
                                                            <ul class="post-meta-list">
                                                                <li>Feb 17, 2019</li>
                                                                <li>3 min read</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="social-share-transparent justify-content-end">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/trend-post-04.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->
                                </div>
                            </div>
                            <!-- Single Tab Content  -->
                        </div>
                        <!-- End Axil Tab Content  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Trending Post Area  -->

        <!-- Start Post Grid Area  -->
        <div class="axil-post-grid-area axil-section-gap bg-color-grey">
            <div class="container">
                <div class="row axil-section-gapBottom">
                    <div class="col-lg-12">
                        <div class="axil-social-wrapper bg-color-white radius">
                            <ul class="social-with-text">
                                <li class="twitter"><a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
                                <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
                                <li class="instagram"><a href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
                                <li class="youtube"><a href="#"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
                                <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i><span>Pinterest</span></a></li>
                                <li class="discord"><a href="#"><i class="fab fa-discord"></i><span>Discord</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="title">Most Popular</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <ul class="axil-tab-button nav nav-tabs mt--20" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="grid-one" data-toggle="tab" href="#gridone" role="tab" aria-controls="grid-one" aria-selected="true">Accessibility</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="grid-two" data-toggle="tab" href="#gridtwo" role="tab" aria-controls="grid-two" aria-selected="false">Android Dev</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="grid-three" data-toggle="tab" href="#gridthree" role="tab" aria-controls="grid-three" aria-selected="false">Blockchain</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="grid-four" data-toggle="tab" href="#gridfour" role="tab" aria-controls="grid-four" aria-selected="false">Gadgets</a>
                            </li>
                        </ul>
                        <!-- Start Tab Content  -->
                        <div class="grid-tab-content tab-content mt--10">

                            <!-- Start Single Tab Content  -->
                            <div class="single-post-grid tab-pane fade show active" id="gridone" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-7 col-md-12 col-12">
                                        <!-- Start Post Grid  -->
                                        <div class="content-block post-grid post-grid-large mt--30">
                                            <div class="post-thumbnail">
                                                <a href="post-details.html">
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-grid-01.jpg" alt="Post Images">
                                                </a>
                                            </div>
                                            <div class="post-grid-content">
                                                <div class="post-content">
                                                    <div class="post-cat">
                                                        <div class="post-cat-list">
                                                            <a class="hover-flip-item-wrapper" href="#">
                                                                <span class="hover-flip-item">
                                                                    <span data-text="DESIGN">DESIGN</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h3 class="title"><a href="post-details.html">Get Ready To Up Your
                                                            Creative Game With The New DJI Mavic Air 2</a></h3>
                                                    <div class="post-meta-wrapper">
                                                        <div class="post-meta">
                                                            <div class="post-author-avatar border-rounded">
                                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/author/author-image-2.png" alt="Author Images">
                                                            </div>
                                                            <div class="content">
                                                                <h6 class="post-author-name">
                                                                    <a class="hover-flip-item-wrapper" href="author.html">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Ismat Jahan">Ismat Jahan</span>
                                                                        </span>
                                                                    </a>
                                                                </h6>
                                                                <ul class="post-meta-list">
                                                                    <li>Feb 17, 2019</li>
                                                                    <li>300k Views</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <ul class="social-share-transparent justify-content-end">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start Post Grid  -->
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                                                <!-- Start Post Grid  -->
                                                <div class="content-block post-grid mt--30">
                                                    <div class="post-thumbnail">
                                                        <a href="post-details.html">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-grid-07.jpg" alt="Post Images">
                                                        </a>
                                                    </div>
                                                    <div class="post-grid-content">
                                                        <div class="post-content">
                                                            <div class="post-cat">
                                                                <div class="post-cat-list">
                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="LIFESTYLE">LIFESTYLE</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <h4 class="title"><a href="post-details.html">The underrated
                                                                    design book
                                                                    that transformed the</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start Post Grid  -->
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                                                <!-- Start Post Grid  -->
                                                <div class="content-block post-grid mt--30">
                                                    <div class="post-thumbnail">
                                                        <a href="post-details.html">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-grid-08.jpg" alt="Post Images">
                                                        </a>
                                                    </div>
                                                    <div class="post-grid-content">
                                                        <div class="post-content">
                                                            <div class="post-cat">
                                                                <div class="post-cat-list">
                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="TRAVEL">TRAVEL</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <h4 class="title"><a href="post-details.html">Apple reimagines
                                                                    the iPhone experience with iOS 14 </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start Post Grid  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab Content  -->

                            <!-- Start Single Tab Content  -->
                            <div class="single-post-grid tab-pane fade" id="gridtwo" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-7 col-md-12 col-12">
                                        <!-- Start Post Grid  -->
                                        <div class="content-block post-grid post-grid-large mt--30">
                                            <div class="post-thumbnail">
                                                <a href="post-details.html">
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-grid-09.jpg" alt="Post Images">
                                                </a>
                                            </div>
                                            <div class="post-grid-content">
                                                <div class="post-content">
                                                    <div class="post-cat">
                                                        <div class="post-cat-list">
                                                            <a class="hover-flip-item-wrapper" href="#">
                                                                <span class="hover-flip-item">
                                                                    <span data-text="DESIGN">DESIGN</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h3 class="title"><a href="post-details.html">Get Ready To Up Your
                                                            Creative Game With The New DJI Mavic Air 2</a></h3>
                                                    <div class="post-meta-wrapper">
                                                        <div class="post-meta">
                                                            <div class="post-author-avatar border-rounded">
                                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/author/author-image-2.png" alt="Author Images">
                                                            </div>
                                                            <div class="content">
                                                                <h6 class="post-author-name">
                                                                    <a class="hover-flip-item-wrapper" href="author.html">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Ismat Jahan">Ismat Jahan</span>
                                                                        </span>
                                                                    </a>
                                                                </h6>
                                                                <ul class="post-meta-list">
                                                                    <li>Feb 17, 2019</li>
                                                                    <li>300k Views</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <ul class="social-share-transparent justify-content-end">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start Post Grid  -->
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                                                <!-- Start Post Grid  -->
                                                <div class="content-block post-grid mt--30">
                                                    <div class="post-thumbnail">
                                                        <a href="post-details.html">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-grid-02.jpg" alt="Post Images">
                                                        </a>
                                                    </div>
                                                    <div class="post-grid-content">
                                                        <div class="post-content">
                                                            <div class="post-cat">
                                                                <div class="post-cat-list">
                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="LIFESTYLE">LIFESTYLE</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <h4 class="title"><a href="post-details.html">The underrated
                                                                    design book
                                                                    that transformed the</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start Post Grid  -->
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                                                <!-- Start Post Grid  -->
                                                <div class="content-block post-grid mt--30">
                                                    <div class="post-thumbnail">
                                                        <a href="post-details.html">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-grid-03.jpg" alt="Post Images">
                                                        </a>
                                                    </div>
                                                    <div class="post-grid-content">
                                                        <div class="post-content">
                                                            <div class="post-cat">
                                                                <div class="post-cat-list">
                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="TRAVEL">TRAVEL</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <h4 class="title"><a href="post-details.html">Apple reimagines
                                                                    the
                                                                    iPhone experience with iOS 14 </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start Post Grid  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab Content  -->

                            <!-- Start Single Tab Content  -->
                            <div class="single-post-grid tab-pane fade" id="gridthree" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-7 col-md-12 col-12">
                                        <!-- Start Post Grid  -->
                                        <div class="content-block post-grid post-grid-large mt--30">
                                            <div class="post-thumbnail">
                                                <a href="post-details.html">
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-grid-09.jpg" alt="Post Images">
                                                </a>
                                            </div>
                                            <div class="post-grid-content">
                                                <div class="post-content">
                                                    <div class="post-cat">
                                                        <div class="post-cat-list">
                                                            <a class="hover-flip-item-wrapper" href="#">
                                                                <span class="hover-flip-item">
                                                                    <span data-text="DESIGN">DESIGN</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h3 class="title"><a href="post-details.html">Get Ready To Up Your
                                                            Creative Game With The New DJI Mavic Air 2</a></h3>
                                                    <div class="post-meta-wrapper">
                                                        <div class="post-meta">
                                                            <div class="post-author-avatar border-rounded">
                                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/author/author-image-2.png" alt="Author Images">
                                                            </div>
                                                            <div class="content">
                                                                <h6 class="post-author-name">
                                                                    <a class="hover-flip-item-wrapper" href="author.html">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Ismat Jahan">Ismat Jahan</span>
                                                                        </span>
                                                                    </a>
                                                                </h6>
                                                                <ul class="post-meta-list">
                                                                    <li>Feb 17, 2019</li>
                                                                    <li>300k Views</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <ul class="social-share-transparent justify-content-end">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start Post Grid  -->
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                                                <!-- Start Post Grid  -->
                                                <div class="content-block post-grid mt--30">
                                                    <div class="post-thumbnail">
                                                        <a href="post-details.html">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-grid-07.jpg" alt="Post Images">
                                                        </a>
                                                    </div>
                                                    <div class="post-grid-content">
                                                        <div class="post-content">
                                                            <div class="post-cat">
                                                                <div class="post-cat-list">
                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="LIFESTYLE">LIFESTYLE</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <h4 class="title"><a href="post-details.html">The underrated
                                                                    design book
                                                                    that transformed the</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start Post Grid  -->
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                                                <!-- Start Post Grid  -->
                                                <div class="content-block post-grid mt--30">
                                                    <div class="post-thumbnail">
                                                        <a href="post-details.html">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-grid-08.jpg" alt="Post Images">
                                                        </a>
                                                    </div>
                                                    <div class="post-grid-content">
                                                        <div class="post-content">
                                                            <div class="post-cat">
                                                                <div class="post-cat-list">
                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="TRAVEL">TRAVEL</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <h4 class="title"><a href="post-details.html">Apple reimagines
                                                                    the
                                                                    iPhone experience with iOS 14 </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start Post Grid  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab Content  -->

                            <!-- Start Single Tab Content  -->
                            <div class="single-post-grid tab-pane fade" id="gridfour" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-7 col-md-12 col-12">
                                        <!-- Start Post Grid  -->
                                        <div class="content-block post-grid post-grid-large mt--30">
                                            <div class="post-thumbnail">
                                                <a href="post-details.html">
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-grid-01.jpg" alt="Post Images">
                                                </a>
                                            </div>
                                            <div class="post-grid-content">
                                                <div class="post-content">
                                                    <div class="post-cat">
                                                        <div class="post-cat-list">
                                                            <a class="hover-flip-item-wrapper" href="#">
                                                                <span class="hover-flip-item">
                                                                    <span data-text="DESIGN">DESIGN</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h3 class="title"><a href="post-details.html">Get Ready To Up Your
                                                            Creative Game With The New DJI Mavic Air 2</a></h3>
                                                    <div class="post-meta-wrapper">
                                                        <div class="post-meta">
                                                            <div class="post-author-avatar border-rounded">
                                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/author/author-image-2.png" alt="Author Images">
                                                            </div>
                                                            <div class="content">
                                                                <h6 class="post-author-name">
                                                                    <a class="hover-flip-item-wrapper" href="author.html">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Ismat Jahan">Ismat Jahan</span>
                                                                        </span>
                                                                    </a>
                                                                </h6>
                                                                <ul class="post-meta-list">
                                                                    <li>Feb 17, 2019</li>
                                                                    <li>300k Views</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <ul class="social-share-transparent justify-content-end">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start Post Grid  -->
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                                                <!-- Start Post Grid  -->
                                                <div class="content-block post-grid mt--30">
                                                    <div class="post-thumbnail">
                                                        <a href="post-details.html">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-grid-02.jpg" alt="Post Images">
                                                        </a>
                                                    </div>
                                                    <div class="post-grid-content">
                                                        <div class="post-content">
                                                            <div class="post-cat">
                                                                <div class="post-cat-list">
                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="LIFESTYLE">LIFESTYLE</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <h4 class="title"><a href="post-details.html">The underrated
                                                                    design book
                                                                    that transformed the</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start Post Grid  -->
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-6 col-12">
                                                <!-- Start Post Grid  -->
                                                <div class="content-block post-grid mt--30">
                                                    <div class="post-thumbnail">
                                                        <a href="post-details.html">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-grid-03.jpg" alt="Post Images">
                                                        </a>
                                                    </div>
                                                    <div class="post-grid-content">
                                                        <div class="post-content">
                                                            <div class="post-cat">
                                                                <div class="post-cat-list">
                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="TRAVEL">TRAVEL</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <h4 class="title"><a href="post-details.html">Apple reimagines
                                                                    the
                                                                    iPhone experience with iOS 14 </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start Post Grid  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab Content  -->

                        </div>
                        <!-- End Tab Content  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Post Grid Area  -->

        <!-- Start Post List Wrapper  -->
        <div class="axil-post-list-area post-listview-visible-color axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-8">
                        <div class="axil-banner">
                            <div class="thumbnail">
                                <a href="#">
                                    <img class="w-100" src="<?php echo get_template_directory_uri() ?>/assets/images/add-banner/banner-01.png" alt="Banner Images">
                                </a>
                            </div>
                        </div>
                        <!-- Start Post List  -->
                        <div class="content-block post-list-view axil-control is-active mt--30">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-list-11.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="FOOD">FOOD</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="post-details.html">Security isn’t just a technology problem
                                        it’s about design, too </a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Jane Ara">Jane Ara</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->

                        <!-- Start Post List  -->
                        <div class="content-block post-list-view axil-control mt--30">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-list-12.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="LIFESTYLE">LIFESTYLE</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="post-details.html">The 1 tool that helps remote teams collaborate better</a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Fatima Jane">Fatima Jane</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->

                        <!-- Start Post List  -->
                        <div class="content-block post-list-view axil-control mt--30">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-list-15.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="TRAVEL">TRAVEL</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="post-details.html">Traditional design won’t save us in the COVID-19 era</a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Esrat Ara">Esrat Ara</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->

                        <!-- Start Post List  -->
                        <div class="content-block post-list-view axil-control mt--30">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-list-13.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="DESIGN">DESIGN</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="post-details.html">Get Ready To Up Your Creative Game With The New DJI Mavic Air 2</a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                    <span class="hover-flip-item">
                                                        <span data-text="John Doe">John Doe</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->

                        <!-- Start Post List  -->
                        <div class="content-block post-list-view axil-control mt--30">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-list-14.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="FOOD">FOOD</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="post-details.html">Security isn’t just a technology problem
                                        it’s about design, too </a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Asifa Fr">Asifa Fr</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->

                    </div>
                    <div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
                        <!-- Start Sidebar Area  -->
                        <div class="sidebar-inner">

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_categories mb--30">
                                <ul>
                                    <li class="cat-item">
                                        <a href="#" class="inner">
                                            <div class="thumbnail">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/category-image-01.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Tech</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#" class="inner">
                                            <div class="thumbnail">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/category-image-02.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Style</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#" class="inner">
                                            <div class="thumbnail">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/category-image-03.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Travel</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#" class="inner">
                                            <div class="thumbnail">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/category-image-04.jpg" alt="">
                                            </div>
                                            <div class="content">
                                                <h5 class="title">Food</h5>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_search mb--30">
                                <h5 class="widget-title">Search</h5>
                                <form action="#">
                                    <div class="axil-search form-group">
                                        <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </form>
                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_postlist mb--30">
                                <h5 class="widget-title">Popular on Blogar</h5>
                                <!-- Start Post List  -->
                                <div class="post-medium-block">

                                    <!-- Start Single Post  -->
                                    <div class="content-block post-medium mb--20">
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/small-images/blog-sm-01.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="post-details.html">The underrated design book that transformed the way I
                                                    work </a></h6>
                                            <div class="post-meta">
                                                <ul class="post-meta-list">
                                                    <li>Feb 17, 2019</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block post-medium mb--20">
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/small-images/blog-sm-02.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="post-details.html">Here’s what you should (and shouldn’t) do when</a>
                                            </h6>
                                            <div class="post-meta">
                                                <ul class="post-meta-list">
                                                    <li>Feb 17, 2019</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block post-medium mb--20">
                                        <div class="post-thumbnail">
                                            <a href="post-details.html">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/small-images/blog-sm-03.jpg" alt="Post Images">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="post-details.html">How a developer and designer duo at Deutsche Bank keep
                                                    remote</a></h6>
                                            <div class="post-meta">
                                                <ul class="post-meta-list">
                                                    <li>Feb 17, 2019</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                </div>
                                <!-- End Post List  -->

                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_social mb--30">
                                <h5 class="widget-title">Stay In Touch</h5>
                                <!-- Start Post List  -->
                                <ul class="social-icon md-size justify-content-center">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-slack"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                                <!-- End Post List  -->
                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="axil-single-widget widget widget_instagram mb--30">
                                <h5 class="widget-title">Instagram</h5>
                                <!-- Start Post List  -->
                                <ul class="instagram-post-list-wrapper">
                                    <li class="instagram-post-list">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/small-images/instagram-01.jpg" alt="Instagram Images">
                                        </a>
                                    </li>
                                    <li class="instagram-post-list">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/small-images/instagram-02.jpg" alt="Instagram Images">
                                        </a>
                                    </li>
                                    <li class="instagram-post-list">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/small-images/instagram-03.jpg" alt="Instagram Images">
                                        </a>
                                    </li>
                                    <li class="instagram-post-list">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/small-images/instagram-04.jpg" alt="Instagram Images">
                                        </a>
                                    </li>
                                    <li class="instagram-post-list">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/small-images/instagram-05.jpg" alt="Instagram Images">
                                        </a>
                                    </li>
                                    <li class="instagram-post-list">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/small-images/instagram-06.jpg" alt="Instagram Images">
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Post List  -->
                            </div>
                            <!-- End Single Widget  -->
                        </div>
                        <!-- End Sidebar Area  -->



                    </div>
                </div>
            </div>
        </div>
        <!-- End Post List Wrapper  -->

        <!-- Start Video Area  -->
        <div class="axil-video-post-area axil-section-gap bg-color-black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="title">Featured Video</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-12 col-md-6 col-12">
                        <!-- Start Post List  -->
                        <div class="content-block post-default image-rounded mt--30">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-dark-01.jpg" alt="Post Images">
                                </a>
                                <a class="video-popup position-top-center" href="post-details.html"><span
                                        class="play-icon"></span></a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="CAREERS">CAREERS</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h3 class="title"><a href="post-details.html">Security isn’t just a technology problem
                                        it’s about design, too</a></h3>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <h6 class="post-author-name">
                                                <a class="hover-flip-item-wrapper" href="author.html">
                                                    <span class="hover-flip-item">
                                                        <span data-text="Ismat Jahan">Ismat Jahan</span>
                                                    </span>
                                                </a>
                                            </h6>
                                            <ul class="post-meta-list">
                                                <li>Feb 17, 2019</li>
                                                <li>3 min read</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Post List  -->
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-md-6 col-12">
                        <div class="row">
                            <!-- Start Post List  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="content-block post-default image-rounded mt--30">
                                    <div class="post-thumbnail">
                                        <a href="post-details.html">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-dark-04.jpg" alt="Post Images">
                                        </a>
                                        <a class="video-popup size-medium position-top-center" href="post-details.html"><span class="play-icon"></span></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-cat">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#">
                                                    <span class="hover-flip-item">
                                                        <span data-text="DESIGN">DESIGN</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <h5 class="title"><a href="post-details.html">Get Ready To Up Your Creative Game With The </a></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post List  -->

                            <!-- Start Post List  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="content-block post-default  image-rounded mt--30">
                                    <div class="post-thumbnail">
                                        <a href="post-details.html">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-dark-03.jpg" alt="Post Images">
                                        </a>
                                        <a class="video-popup size-medium position-top-center" href="post-details.html"><span class="play-icon"></span></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-cat">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#">
                                                    <span class="hover-flip-item">
                                                        <span data-text="LEADERSHIP">LEADERSHIP</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <h5 class="title"><a href="post-details.html">Traditional design won’t save us in the COVID-19 era</a></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post List  -->

                            <!-- Start Post List  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="content-block post-default image-rounded mt--30">
                                    <div class="post-thumbnail">
                                        <a href="post-details.html">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-dark-04.jpg" alt="Post Images">
                                        </a>
                                        <a class="video-popup size-medium position-top-center" href="post-details.html"><span class="play-icon"></span></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-cat">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#">
                                                    <span class="hover-flip-item">
                                                        <span data-text="PRODUCT UPDATES">PRODUCT UPDATES</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <h5 class="title"><a href="post-details.html">New: Freehand Templates, built for the whole team</a></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post List  -->

                            <!-- Start Post List  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="content-block post-default image-rounded mt--30">
                                    <div class="post-thumbnail">
                                        <a href="post-details.html">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/post-images/post-dark-05.jpg" alt="Post Images">
                                        </a>
                                        <a class="video-popup size-medium position-top-center" href="post-details.html"><span class="play-icon"></span></a>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-cat">
                                            <div class="post-cat-list">
                                                <a class="hover-flip-item-wrapper" href="#">
                                                    <span class="hover-flip-item">
                                                        <span data-text="COLLABORATION">COLLABORATION</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <h5 class="title"><a href="post-details.html">The 1 tool that helps remote teams
                                                collaborate better</a></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post List  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Video Area  -->

        <!-- Start Instagram Area  -->
        <div class="axil-instagram-area axil-section-gap bg-color-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="title">Instagram</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--30">
                    <div class="col-lg-12">
                        <ul class="instagram-post-list">
                            <li class="single-post">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/small-images/instagram-md-01.jpg" alt="Instagram Images">
                                    <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li class="single-post">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/small-images/instagram-md-02.jpg" alt="Instagram Images">
                                    <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li class="single-post">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/small-images/instagram-md-03.jpg" alt="Instagram Images">
                                    <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li class="single-post">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/small-images/instagram-md-04.jpg" alt="Instagram Images">
                                    <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li class="single-post">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/small-images/instagram-md-05.jpg" alt="Instagram Images">
                                    <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                            <li class="single-post">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/small-images/instagram-md-06.jpg" alt="Instagram Images">
                                    <span class="instagram-button"><i class="fab fa-instagram"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Instagram Area  -->

  

        <!-- Start Footer Area  -->
        <div class="axil-footer-area axil-footer-style-1 footer-variation-2">
            <div class="footer-mainmenu">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                               <?php dynamic_sidebar('footer_one')?>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <h2 class="title">Politics</h2>
                                <div class="inner">
                                    <ul class="ft-menu-list">
                                        <li><a href="#">Executive</a></li>
                                        <li><a href="#">Senate</a></li>
                                        <li><a href="#">House</a></li>
                                        <li><a href="#">Judiciary</a></li>
                                        <li><a href="#">Global Economy</a></li>
                                        <li><a href="#">Foreign policy</a></li>
                                        <li><a href="#">Polls</a></li>
                                        <li><a href="#">Elections</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <h2 class="title">Entertainment</h2>
                                <div class="inner">
                                    <ul class="ft-menu-list">
                                        <li><a href="#">Celebrity News</a></li>
                                        <li><a href="#">Movies</a></li>
                                        <li><a href="#">TV News</a></li>
                                        <li><a href="#">Disasters</a></li>
                                        <li><a href="#">Music News</a></li>
                                        <li><a href="#">Environment</a></li>
                                        <li><a href="#">Style News</a></li>
                                        <li><a href="#">Entertainment Video</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <h2 class="title">Business</h2>
                                <div class="inner">
                                    <ul class="ft-menu-list">
                                        <li><a href="#">Environment</a></li>
                                        <li><a href="#">Conflicts</a></li>
                                        <li><a href="#">Terrorism</a></li>
                                        <li><a href="#">Disasters</a></li>
                                        <li><a href="#">Global Economy</a></li>
                                        <li><a href="#">Environment</a></li>
                                        <li><a href="#">Religion</a></li>
                                        <li><a href="#">Scandals</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <h2 class="title">Health</h2>
                                <div class="inner">
                                    <ul class="ft-menu-list">
                                        <li><a href="#">Movies</a></li>
                                        <li><a href="#">Conflicts</a></li>
                                        <li><a href="#">Terrorism</a></li>
                                        <li><a href="#">Disasters</a></li>
                                        <li><a href="#">Global Economy</a></li>
                                        <li><a href="#">Environment</a></li>
                                        <li><a href="#">Religion</a></li>
                                        <li><a href="#">Scandals</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <h2 class="title">About</h2>
                                <div class="inner">
                                    <ul class="ft-menu-list">
                                        <li><a href="#">U.N.</a></li>
                                        <li><a href="#">Conflicts</a></li>
                                        <li><a href="#">Terrorism</a></li>
                                        <li><a href="#">Disasters</a></li>
                                        <li><a href="#">Global Economy</a></li>
                                        <li><a href="#">Environment</a></li>
                                        <li><a href="#">Religion</a></li>
                                        <li><a href="#">Scandals</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Footer Top Area  -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-4">
                            <div class="logo">
                                <a href="index.html">
                                    <img class="dark-logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logo/logo-black.png" alt="Logo Images">
                                    <img class="white-logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logo/logo-white2.png" alt="Logo Images">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8">
                            <!-- Start Post List  -->
                            <div class="d-flex justify-content-start mt_sm--15 justify-content-md-end align-items-center flex-wrap">
                                <h5 class="follow-title mb--0 mr--20">Follow Us</h5>
                                <ul class="social-icon color-tertiary md-size justify-content-start">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- End Post List  -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Footer Top Area  -->

            <!-- Start Copyright Area  -->
            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-8">
                            <div class="copyright-left">
                                <ul class="mainmenu justify-content-start">
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                        <span data-text="Contact Us">Contact Us</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                        <span data-text="Terms of Use">Terms of Use</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                        <span data-text="AdChoices">AdChoices</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                        <span data-text="Advertise with Us">Advertise with Us</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                        <span data-text="Blogar Store">Blogar Store</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="copyright-right text-left text-md-right mt_sm--20">
                                <p class="b3">All Rights Reserved © 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area  -->
        </div>
        <!-- End Footer Area  -->

        <!-- Start Back To Top  -->
        <a id="backto-top"></a>
        <!-- End Back To Top  -->

    </div>

   <?php echo wp_footer(  )?>
</body>


<!-- Mirrored from axilthemes.com/demo/template/blogar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Oct 2021 12:47:32 GMT -->
</html>