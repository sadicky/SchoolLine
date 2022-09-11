<?php
$title = 'Accueil';
?>

<html lang="fr">

<head>
  <meta charset="utf-8">
  <title><?= $title ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon and touch icons -->
  <link rel="shortcut icon" href="Public/Images/logo.jpg" type="image/x-icon">

<!-- Styles -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
<link href="Public/Bootstrap-3/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- font-awesome -->
<link href="Public/Bootstrap-3/assets/js/dropdown-menu/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
<link href="Public/Bootstrap-3/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
<link href="Public/Bootstrap-3/assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
<link href="Public/Bootstrap-3/assets/js/audioplayer/audioplayer.css" rel="stylesheet" type="text/css"><!-- Audioplayer -->
<link href="Public/Bootstrap-3/assets/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->


<body role="document">

    <!-- device test, don't remove. javascript needed! -->
    <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
    <!-- device test end -->

    <div id="k-head" class="container">
        <!-- container + head wrapper -->

        <div class="row">
            <!-- row -->

            <div class="col-lg-12">

                <div id="k-site-logo" class="pull-left">
                    <!-- site logo -->

                    <h1 class="k-logo">
                        <a href="/" title="Home Page">
                            <img src="Public/Bootstrap-3/assets/img/logo.png" alt="Site Logo" class="img-responsive" />
                        </a>
                    </h1>

                    <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"></span></a><!-- alternative menu button -->

                </div><!-- site logo end -->

                <nav id="k-menu" class="k-main-navig">
                    <!-- main navig -->

                    <ul id="drop-down-left" class="k-dropdown-menu">
                        <li>
                            <a href="news.html" title="communications">com & news</a>
                        </li>
                        <li>
                            <a href="events.html" title="Nos Evènements">Evènements</a>
                        </li>
                        <li>
                            <a href="#" class="Pages Collection" title="Apprendre ici">Matieres</a>
                            <ul class="sub-menu">
                                <li><a href="news-single.html">Math-Physique</a></li>
                                <li><a href="events-single.html">Littéraire</a></li>
                                <li><a href="courses-single.html">Bio-Chimie</a></li>
                                <li><a href="gallery-single.html">Agronomie</a></li>
                                <li><a href="news-stacked.html">Commerciale</a></li>
                                <li><a href="search-results.html">Rechercher Par Classe</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="about-us.html" title="Nos services">A Propos</a>
                        </li>
                        <li>
                            <a href="contact-us.html" title="Contactez-nous">Contacts</a>
                        </li>
                    </ul>

                </nav><!-- main navig end -->

            </div>

        </div><!-- row end -->

    </div><!-- container + head wrapper end -->

    <div id="k-body">
        <!-- content wrapper -->

        <div class="container">
            <!-- container -->

            <div class="row">
                <!-- row -->

                <div id="k-top-search" class="col-lg-12 clearfix">
                    <!-- top search -->

                    <form action="#" id="top-searchform" method="get" role="search">
                        <div class="input-group">
                            <input type="text" name="s" id="sitesearch" class="form-control" autocomplete="off" placeholder="Type in keyword(s) then hit Enter on keyboard" />
                        </div>
                    </form>

                    <div id="bt-toggle-search" class="search-icon text-center"><i class="s-open fa fa-search"></i><i class="s-close fa fa-times"></i></div><!-- toggle search button -->

                </div><!-- top search end -->

                <div class="k-breadcrumbs col-lg-12 clearfix">
                    <!-- breadcrumbs -->

                    <ol class="breadcrumb">
                        <li><a href="#">Schoolline</a></li>
                        <li class="active"><?= $title ?></li>
                    </ol>

                </div><!-- breadcrumbs end -->

            </div><!-- row end -->

            <div class="row no-gutter fullwidth">
                <!-- row -->

                <div class="col-lg-12 clearfix">
                    <!-- featured posts slider -->

                    <div id="carousel-featured" class="carousel slide" data-interval="4000" data-ride="carousel">
                        <!-- featured posts slider wrapper; auto-slide -->

                        <ol class="carousel-indicators">
                            <!-- Indicators -->
                            <li data-target="#carousel-featured" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-featured" data-slide-to="1"></li>
                            <li data-target="#carousel-featured" data-slide-to="2"></li>
                            <li data-target="#carousel-featured" data-slide-to="3"></li>
                            <li data-target="#carousel-featured" data-slide-to="4"></li>
                        </ol><!-- Indicators end -->

                        <div class="carousel-inner">
                            <!-- Wrapper for slides -->

                            <div class="item active">
                                <img src="Public/Bootstrap-3/assets/img/slide-3.jpg" alt="Image slide 3" />
                                <div class="k-carousel-caption pos-1-3-right scheme-dark">
                                    <div class="caption-content">
                                        <h3 class="caption-title">Learning makes us stronger for life</h3>
                                        <p>
                                            We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <img src="Public/Bootstrap-3/assets/img/slide-2.jpg" alt="Image slide 2" />
                                <div class="k-carousel-caption pos-1-3-left scheme-light">
                                    <div class="caption-content">
                                        <h3 class="caption-title">Learning makes us stronger for life</h3>
                                        <p>
                                            We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <img src="Public/Bootstrap-3/assets/img/slide-1.jpg" alt="Image slide 1" />
                                <div class="k-carousel-caption pos-2-3-right scheme-dark">
                                    <div class="caption-content">
                                        <h3 class="caption-title">Learning makes us stronger for life</h3>
                                        <p>
                                            We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
                                        </p>
                                        <p>
                                            <a href="#" class="btn btn-sm btn-danger" title="Button">READ MORE</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <img src="Public/Bootstrap-3/assets/img/slide-4.jpg" alt="Image slide 4" />
                                <div class="k-carousel-caption pos-2-3-left scheme-light">
                                    <div class="caption-content">
                                        <h3 class="caption-title">Learning makes us stronger for life</h3>
                                        <p>
                                            We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
                                        </p>
                                        <p>
                                            <a href="#" class="btn btn-sm btn-danger" title="Button">READ MORE</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <img src="Public/Bootstrap-3/assets/img/slide-5.jpg" alt="Image slide 5" />
                                <div class="k-carousel-caption pos-c-2-3 scheme-dark no-bg">
                                    <div class="caption-content">
                                        <h3 class="caption-title title-giant">Learning makes us stronger for life</h3>
                                        <p>
                                            We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
                                        </p>
                                        <p>
                                            <a href="#" class="btn btn-sm btn-danger" title="Button">READ MORE</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div><!-- Wrapper for slides end -->

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-featured" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="right carousel-control" href="#carousel-featured" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                        <!-- Controls end -->

                    </div><!-- featured posts slider wrapper end -->

                </div><!-- featured posts slider end -->

            </div><!-- row end -->

            <div class=" col-padded container-fluid">

                <h1 class="page-title">A Propos</h1>

                <div class="news-body">

                    <p class="call-out"> <b>Institut Mwanga d'Uvira(IMU)</b> est une école conventionnée catholique de la RDCongo, au
                        Sud-Kivu basée à Uvira. Ecole catholique de référence, cet établissement a 4 sections: Scientifique,Commercial
                        ,Littéraire et Agronomie.
                    </p>

                    <p>
                        Duis ornare magna sit amet dui eleifend imperdiet. Aliquam at porta elit. Proin lorem lacus, tempus id diam sit amet, porttitor tempor lectus. Praesent id felis sagittis, suscipit ligula sed, condimentum nisi. In non commodo risus. Praesent fringilla ligula in orci consectetur pulvinar. Nunc facilisis metus pellentesque, vestibulum libero eget, varius elit. Aliquam sed gravida dui, a imperdiet eros. Cras dignissim libero id feugiat pharetra. Nullam ut bibendum est, sed tincidunt massa.
                    </p>
                    <div class="row k-equal-height">
                        <!-- row -->

                        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                            <!-- pie chart -->
                            <h6>Easy Pie Chart 1</h6>
                            <div class="k-chart-wrap">
                                <div class="chart" data-percent="92" data-width="120" data-line="15" data-color="#16a990">92%</div>
                                <div class="label">Graduated Students</div>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                            <!-- pie chart -->
                            <h6>Easy Pie Chart 2</h6>
                            <div class="k-chart-wrap">
                                <div class="chart" data-percent="78" data-width="120" data-line="15" data-color="#e98925">78%</div>
                                <div class="label">Grduated with A</div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                            <!-- pie chart -->
                            <h6>Easy Pie Chart 3</h6>
                            <div class="k-chart-wrap">
                                <div class="chart" data-percent="61" data-width="120" data-line="15" data-color="#c5cace">61%</div>
                                <div class="label">School Rats</div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                            <!-- pie chart -->
                            <h6>Easy Pie Chart N</h6>
                            <div class="k-chart-wrap">
                                <div class="chart" data-percent="17" data-width="120" data-line="15" data-color="#198ebd">17%</div>
                                <div class="label">Failed Exams</div>
                            </div>
                        </div>

                    </div>
                </div><!-- row end -->

                <div class="row no-gutter">
                    <!-- row -->

                    <div class="col-lg-4 col-md-4">
                        <!-- upcoming events wrapper -->

                        <div class="col-padded col-shaded">
                            <!-- inner custom column -->

                            <ul class="list-unstyled clear-margins">
                                <!-- widgets -->

                                <li class="widget-container widget_up_events">
                                    <!-- widgets list -->

                                    <h1 class="title-widget">Upcoming Events</h1>

                                    <ul class="list-unstyled">

                                        <li class="up-event-wrap">

                                            <h1 class="title-median"><a href="#" title="Annual alumni game">Annual alumni game</a></h1>

                                            <div class="up-event-meta clearfix">
                                                <div class="up-event-date">Jul 25, 2015</div>
                                                <div class="up-event-time">9:00 - 11:00</div>
                                            </div>

                                            <p>
                                                Fusce condimentum pulvinar mattis. Nunc condimentum sapien sit amet odio vulputate, nec suscipit orci pharetra... <a href="#" class="moretag" title="read more">MORE</a>
                                            </p>

                                        </li>

                                        <li class="up-event-wrap">

                                            <h1 class="title-median"><a href="#" title="School talents gathering">School talents gathering</a></h1>

                                            <div class="up-event-meta clearfix">
                                                <div class="up-event-date">Aug 25, 2015</div>
                                                <div class="up-event-time">8:30 - 10:30</div>
                                            </div>

                                            <p>
                                                Pellentesque lobortis, arcu eget condimentum auctor, magna neque faucibus dui, ut varius diam neque sed diam... <a href="#" class="moretag" title="read more">MORE</a>
                                            </p>

                                        </li>

                                        <li class="up-event-wrap">

                                            <h1 class="title-median"><a href="#" title="School talents gathering">Campus "Open Doors"</a></h1>

                                            <div class="up-event-meta clearfix">
                                                <div class="up-event-date">Sep 04, 2015</div>
                                                <div class="up-event-date">Sep 11, 2015</div>
                                            </div>

                                            <p>
                                                Donec fringilla lacinia laoreet. Vestibulum ultrices blandit tempor. Aenean magna elit, varius eget quam a, posuere... <a href="#" class="moretag" title="read more">MORE</a>
                                            </p>

                                        </li>

                                    </ul>

                                </li><!-- widgets list end -->

                            </ul><!-- widgets end -->

                        </div><!-- inner custom column end -->

                    </div><!-- upcoming events wrapper end -->

                    <div class="col-lg-4 col-md-4">
                        <!-- recent news wrapper -->

                        <div class="col-padded">
                            <!-- inner custom column -->

                            <ul class="list-unstyled clear-margins">
                                <!-- widgets -->

                                <li class="widget-container widget_recent_news">
                                    <!-- widgets list -->

                                    <h1 class="title-widget">School News</h1>

                                    <ul class="list-unstyled">

                                        <li class="recent-news-wrap">

                                            <h1 class="title-median"><a href="#" title="Megan Boyle flourishes...">Megan Boyle flourishes at Boston University</a></h1>

                                            <div class="recent-news-meta">
                                                <div class="recent-news-date">Jun 12, 2014</div>
                                            </div>

                                            <div class="recent-news-content clearfix">
                                                <figure class="recent-news-thumb">
                                                    <a href="#" title="Megan Boyle flourishes..."><img src="Public/Bootstrap-3/assets/img/recent-news-thumb-1.jpg" class="attachment-thumbnail wp-post-image" alt="Thumbnail 1" /></a>
                                                </figure>
                                                <div class="recent-news-text">
                                                    <p>
                                                        Megan Boyle is flourishing at Boston University in Boston. Our High School Class of 2012 member is majoring... <a href="#" class="moretag" title="read more">MORE</a>
                                                    </p>
                                                </div>
                                            </div>

                                        </li>

                                        <li class="recent-news-wrap">

                                            <h1 class="title-median"><a href="#" title="Buntington Alum...">Buntington Alum Marc Bloom Pens New Book</a></h1>

                                            <div class="recent-news-meta">
                                                <div class="recent-news-date">Jun 10, 2014</div>
                                            </div>

                                            <div class="recent-news-content clearfix">
                                                <figure class="recent-news-thumb">
                                                    <a href="#" title="Buntington Alum..."><img src="Public/Bootstrap-3/assets/img/recent-news-thumb-2.jpg" class="attachment-thumbnail wp-post-image" alt="Thumbnail 2" /></a>
                                                </figure>
                                                <div class="recent-news-text">
                                                    <p>
                                                        Marc Bloom has a lot to say. He likes to share his experiences and opinions with others, so the 2011 Buntington... <a href="#" class="moretag" title="read more">MORE</a>
                                                    </p>
                                                </div>
                                            </div>

                                        </li>

                                        <li class="recent-news-wrap">

                                            <h1 class="title-median"><a href="#" title="Cody Rotschild Enjoys...">Cody Rotschild Enjoys Life in Montreal</a></h1>

                                            <div class="recent-news-meta">
                                                <div class="recent-news-date">Jun 05, 2014</div>
                                            </div>

                                            <div class="recent-news-content clearfix">
                                                <figure class="recent-news-thumb">
                                                    <a href="#" title="Cody Rotschild Enjoys..."><img src="Public/Bootstrap-3/assets/img/recent-news-thumb-3.jpg" class="attachment-thumbnail wp-post-image" alt="Thumbnail 3" /></a>
                                                </figure>
                                                <div class="recent-news-text">
                                                    <p>
                                                        Cody Rotschild might have graduated with Buntington High School’s Class of 2011, but she is really a woman... <a href="#" class="moretag" title="read more">MORE</a>
                                                    </p>
                                                </div>
                                            </div>

                                        </li>

                                    </ul>

                                </li><!-- widgets list end -->

                            </ul><!-- widgets end -->

                        </div><!-- inner custom column end -->

                    </div><!-- recent news wrapper end -->

                    <div class="col-lg-4 col-md-4">
                        <!-- misc wrapper -->

                        <div class="col-padded col-shaded">
                            <!-- inner custom column -->

                            <ul class="list-unstyled clear-margins">
                                <!-- widgets -->

                                <li class="widget-container widget_course_search">
                                    <!-- widget -->

                                    <h1 class="title-titan">Espace Elève</h1>
                                     <div id="errorMsg"></div><br/>
                                    <form role="search" method="POST" id="course-finder" action="#">
                                        <div class="input-group">
                                            <input type="text" placeholder="votre matricule ici..." autocomplete="off" class="form-control" id="mat" name="mat" />
                                            <span class="input-group-btn"><button type="submit" name="submit" id="submit" class="btn btn-default">GO!</button></span>
                                        </div>
                                        <span class="help-block">* Entrez votre matricule pour vous connecter</span>
                                    </form>
                                    <span class="help-block">
                                    <?php 
                                    if (isset($msg)) {
                                        // code...
                                        echo $msg;
                                    }
                                     ?></span>

                                </li><!-- widget end -->

                                <li class="widget-container widget_text">
                                    <!-- widget -->

                                    <a href="#" class="custom-button cb-green" title="How to apply?">
                                        <i class="custom-button-icon fa fa-check-square-o"></i>
                                        <span class="custom-button-wrap">
                                            <span class="custom-button-title">How to apply?</span>
                                            <span class="custom-button-tagline">Join us whenewer you feel it’s time!</span>
                                        </span>
                                        <em></em>
                                    </a>

                                    <a href="#" class="custom-button cb-gray" title="Campus tour">
                                        <i class="custom-button-icon fa  fa-play-circle-o"></i>
                                        <span class="custom-button-wrap">
                                            <span class="custom-button-title">Campus tour</span>
                                            <span class="custom-button-tagline">Student's life at the glance. Take a tour...</span>
                                        </span>
                                        <em></em>
                                    </a>

                                    <a href="#" class="custom-button cb-yellow" title="Prospectus">
                                        <i class="custom-button-icon fa  fa-leaf"></i>
                                        <span class="custom-button-wrap">
                                            <span class="custom-button-title">Prospectus</span>
                                            <span class="custom-button-tagline">Request a free School Prospectus!</span>
                                        </span>
                                        <em></em>
                                    </a>

                                </li><!-- widget end -->

                                <li class="widget-container widget_sofa_twitter">
                                    <!-- widget -->

                                    <ul class="k-twitter-twitts list-unstyled">

                                        <li class="twitter-twitt">
                                            <p>
                                                <a href="https://twitter.com/DanielleFilson">@MattDeamon</a> Why it always has to be so complicated? Try to get it via this link <a href="http://usap.co/potter">mama.co/hpot</a> Good luck mate!
                                            </p>
                                        </li>

                                    </ul>

                                    <div class="k-twitter-twitts-footer">
                                        <a href="#" class="k-twitter-twitts-follow" title="Follow!"><i class="fa fa-twitter"></i>&nbsp; Follow us!</a>
                                    </div>

                                </li><!-- widget end -->

                            </ul><!-- widgets end -->

                        </div><!-- inner custom column end -->

                    </div><!-- misc wrapper end -->

                </div><!-- row end -->

            </div><!-- container end -->

        </div><!-- content wrapper end -->

        <div id="k-footer">
            <!-- footer -->

            <div class="container">
                <!-- container -->

                <div class="row no-gutter">
                    <!-- row -->

                    <div class="col-lg-4 col-md-4">
                        <!-- widgets column left -->

                        <div class="col-padded col-naked">

                            <ul class="list-unstyled clear-margins">
                                <!-- widgets -->

                                <li class="widget-container widget_nav_menu">
                                    <!-- widgets list -->

                                    <h1 class="title-widget">Useful links</h1>

                                    <ul>
                                        <li><a href="#" title="menu item">Placement Exam Schedule</a></li>
                                        <li><a href="#" title="menu item">Superintendent's Hearing Audio</a></li>
                                        <li><a href="#" title="menu item">Budget Central</a></li>
                                        <li><a href="#" title="menu item">Job Opportunities - Application</a></li>
                                        <li><a href="#" title="menu item">College Acceptances as of May 12</a></li>
                                    </ul>

                                </li>

                            </ul>

                        </div>

                    </div><!-- widgets column left end -->

                    <div class="col-lg-4 col-md-4">
                        <!-- widgets column center -->

                        <div class="col-padded col-naked">

                            <ul class="list-unstyled clear-margins">
                                <!-- widgets -->

                                <li class="widget-container widget_recent_news">
                                    <!-- widgets list -->

                                    <h1 class="title-widget">Contact</h1>

                                    <div itemscope itemtype="http://data-vocabulary.org/Organization">

                                        <h2 class="title-median m-contact-subject" itemprop="name">Institut Mwanga d'Uvira</h2>

                                        <div class="m-contact-address" itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
                                            <span class="m-contact-street" itemprop="street-address">Uvira, Quartier Songo, Avenue de la Mission</span>
                                            <span class="m-contact-city-region"><span class="m-contact-city" itemprop="locality">Uvira</span>, <span class="m-contact-region" itemprop="region">Sud-Kivu</span></span>
                                            <span class="m-contact-zip-country"><span class="m-contact-zip" itemprop="postal-code">BP:18,</span> <span class="m-contact-country" itemprop="country-name">
                                                    République démocratique du Congo</span></span>
                                        </div>

                                        <div class="m-contact-tel-fax">
                                            <span class="m-contact-tel">Tel: <span itemprop="tel">+243 97-551-3678/+243 81-551-3688</span></span>
                                            <span class="m-contact-fax">Fax: <span itemprop="fax">82-870-9032</span></span>
                                        </div>

                                    </div>

                                    <div class="social-icons">

                                        <ul class="list-unstyled list-inline">

                                            <li><a href="mailto:dsadicky@gmail.com" title="Contact us"><i class="fa fa-envelope"></i></a></li>
                                            <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>

                                        </ul>

                                    </div>

                                </li>

                            </ul>

                        </div>

                    </div><!-- widgets column center end -->

                    <div class="col-lg-4 col-md-4">
                        <!-- widgets column right -->

                        <div class="col-padded col-naked">

                            <ul class="list-unstyled clear-margins">
                                <!-- widgets -->

                                <li class="widget-container widget_sofa_flickr">
                                    <!-- widgets list -->

                                    <h1 class="title-widget">Quelques images</h1>

                                    <ul class="k-flickr-photos list-unstyled">
                                        <li><a href="#" title="Flickr photo"><img src="Public/Bootstrap-3/assets/img/flickr-1.jpg" alt="Photo 1" /></a></li>
                                        <li><a href="#" title="Flickr photo"><img src="Public/Bootstrap-3/assets/img/flickr-2.jpg" alt="Photo 2" /></a></li>
                                        <li><a href="#" title="Flickr photo"><img src="Public/Bootstrap-3/assets/img/flickr-3.jpg" alt="Photo 3" /></a></li>
                                        <li><a href="#" title="Flickr photo"><img src="Public/Bootstrap-3/assets/img/flickr-4.jpg" alt="Photo 4" /></a></li>
                                        <li><a href="#" title="Flickr photo"><img src="Public/Bootstrap-3/assets/img/flickr-5.jpg" alt="Photo 5" /></a></li>
                                        <li><a href="#" title="Flickr photo"><img src="Public/Bootstrap-3/assets/img/flickr-6.jpg" alt="Photo 6" /></a></li>
                                        <li><a href="#" title="Flickr photo"><img src="Public/Bootstrap-3/assets/img/flickr-7.jpg" alt="Photo 7" /></a></li>
                                        <li><a href="#" title="Flickr photo"><img src="Public/Bootstrap-3/assets/img/flickr-8.jpg" alt="Photo 8" /></a></li>
                                    </ul>

                                </li>

                            </ul>

                        </div>

                    </div><!-- widgets column right end -->

                </div><!-- row end -->

            </div><!-- container end -->

        </div><!-- footer end -->

        <div id="k-subfooter">
            <!-- subfooter -->

            <div class="container">
                <!-- container -->

                <div class="row">
                    <!-- row -->

                    <div class="col-lg-12">

                        <p class="copy-text text-inverse text-center">
                            <?= date('Y') ?> - Institut Mwanga d'Uvira. Tous droits reservés.
                        </p>

                    </div>

                </div><!-- row end -->

            </div><!-- container end -->

        </div><!-- subfooter end -->
         <!-- jQuery -->
    <script src="Public/Bootstrap-3/assets/jQuery/jquery-2.1.1.min.js"></script>
    <script src="Public/Bootstrap-3/assets/jQuery/jquery-migrate-1.2.1.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="Public/Bootstrap-3/assets/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Drop-down -->
    <script src="Public/Bootstrap-3/assets/js/dropdown-menu/dropdown-menu.js"></script>
    
    <!-- Fancybox -->
	<script src="Public/Bootstrap-3/assets/js/fancybox/jquery.fancybox.pack.js"></script>
    <script src="Public/Bootstrap-3/assets/js/fancybox/jquery.fancybox-media.js"></script><!-- Fancybox media -->
    
    <!-- Responsive videos -->
    <script src="Public/Bootstrap-3/assets/js/jquery.fitvids.js"></script>
    
    <!-- Audio player -->
	<script src="Public/Bootstrap-3/assets/js/audioplayer/audioplayer.min.js"></script>
    
    <!-- Pie charts -->
    <script src="js/jquery.easy-pie-chart.js"></script>
    
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
    
    <!-- Theme -->
    <script src="Public/Bootstrap-3/assets/js/theme.js"></script>

        </html>