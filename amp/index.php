<!-- PHP header -->
<?php require '../pages/amp/header.php' ?>
<!doctype html>
<html AMP lang="en">
<head>
    <meta charset="utf-8">
    <title>Home | Pinna - HTML5, CSS3, AMP Responsive Theme</title>
    <meta name="author" content="Mobius Studio" />
    <meta name="description" content="Pinna is a website template for smart phones and tablets. It is built with HTML5, CSS3 and Google&#39;s AMP project rules." />
    <meta name="keywords" content="premium template, html5, css3, responsive, amp, accelerated mobile pages" />
    <link rel="canonical" href="https://www.gollahalli.me" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,initial-scale=1">

    <!--*
        *   FavIcons
        **-->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#1e1e1e">
    <link rel="icon" type="image/x-icon" sizes="16x16 32x32" href="<?php echo $cdn ?>/img/favicon/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $cdn ?>/img/favicon/favicon-152.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $cdn ?>/img/favicon/favicon-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo $cdn ?>/img/favicon/favicon-120.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $cdn ?>/img/favicon/favicon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?php echo $cdn ?>/img/favicon/favicon-180.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $cdn ?>/img/favicon/favicon-72.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $cdn ?>/img/favicon/favicon-57.png">
    <link rel="icon" href="<?php echo $cdn ?>/img/favicon/favicon-32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="<?php echo $cdn ?>/favicon/img/favicon-144.png">
    <link rel="icon" sizes="192x192" href="<?php echo $cdn ?>/img/favicon/favicon-192.png">
    <link rel="manifest" href="manifest.json">

    <!-- Allow web app to be run in full-screen mode. -->
    <meta name="apple-mobile-web-app-capable"
          content="yes">

    <!-- Configure the status bar. -->
    <meta name="apple-mobile-web-app-status-bar-style"
          content="black">

    <!-- iPad retina portrait startup image -->
    <link href="assets/img/splashScreens/apple-touch-startup-image-1536x2008.png"
          media="(device-width: 768px) and (device-height: 1024px)
	                 and (-webkit-device-pixel-ratio: 2)
	                 and (orientation: portrait)"
          rel="apple-touch-startup-image">

    <!-- iPhone 6 Plus portrait startup image -->
    <link href="assets/img/splashScreens/apple-touch-startup-image-1242x2148.png"
          media="(device-width: 414px) and (device-height: 736px)
	                 and (-webkit-device-pixel-ratio: 3)
	                 and (orientation: portrait)"
          rel="apple-touch-startup-image">

    <!-- iPhone 6 startup image -->
    <link href="assets/img/splashScreens/apple-touch-startup-image-750x1294.png"
          media="(device-width: 375px) and (device-height: 667px)
	                 and (-webkit-device-pixel-ratio: 2)"
          rel="apple-touch-startup-image">

    <!-- iPhone 5 startup image -->
    <link href="assets/img/splashScreens/apple-touch-startup-image-640x1096.png"
          media="(device-width: 320px) and (device-height: 568px)
	                 and (-webkit-device-pixel-ratio: 2)"
          rel="apple-touch-startup-image">

    <!--*
        *   Fonts
        **-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,500">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <!--*
        *   JavaScripts to Include
        **-->
    <script async custom-element=amp-install-serviceworker src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js"></script>
    <script async custom-element=amp-image-lightbox src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>
    <script async custom-element=amp-carousel src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element=amp-sidebar src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element=amp-accordion src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
    <script async  src="https://cdn.ampproject.org/v0.js"></script>

    <!--*
        *   Structured Data
        **-->
    <script type='application/ld+json'>
        {
          "@context": "http://www.schema.org",
          "@type": "person",
          "name": "Akshay Raj Gollahalli",
          "image" : "<?php echo $photo ?>",
          "url": "https://www.gollahalli.me/",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Auckland",
            "addressCountry": "New Zealand"
          },
          "email": "akshay@gollahalli.com"
        }
     </script>

    <!--*
        *   Required CSS Code (AMP Boilerplate)
        **-->
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

    <!--*
        *   Custom CSS Code
        **-->
    <style amp-custom>
        /* GLOBAL STYLES */
        /**---------------------
          *
          * Resets
          *
          *---------------------**/
        figure{margin: 0}
        *{box-sizing: border-box}
        button{background: none; border: none}
        a{text-decoration: none}
        :focus{outline: 0;}
        ul{padding-left: 20px}

        /**---------------------
          *
          * Global Styles
          *
          *---------------------**/
        html{font-size: 62.5%; box-sizing: border-box;}
        body{font-size: 1.3rem; line-height: 1.8; -webkit-font-smoothing: antialiased; color: #818181;}

        .font-1, html{font-family: 'Roboto', serif; font-weight: 300}

        .text-center{text-align: center}
        .margin-0{margin: 0}
        .margin-top-0{margin-top: 0}
        .margin-bottom-0{margin-bottom: 0}
        .minus-margin-top-bottom-15{margin-top: -15px; margin-bottom: -15px}

        .space{height: 10px}
        .space-2{height: 20px}
        .space-3{height: 30px}

        .divider{margin: 13px 0;}
        .divider-30{margin: 30px 0;}
        .divider.colored{height: 1px; background: rgba(0,0,0,.12)}
        .divider-30.colored{height: 1px; background: rgba(0,0,0,.12)}

        .pull-left{float: left}
        .pull-right{float: right}

        .clearfix:after,
        .clearfix:before {
            display: table;
            content: "";
            line-height: 0
        } .clearfix:after {clear: both}

        h2{margin-bottom: 7.5px}
        p{margin: 7.5px 0 0;}
        small{font-size: 1rem; line-height: 1}
        strong,b{font-weight: 500}

        h1,h2,h3,h4,h5,h6{
            font-weight: 500;
            color: #414141;
        }

        h1{font-size: 2.7rem}
        h2{font-size: 1.9rem}
        h3{font-size: 1.7rem}
        h4{font-size: 1.5rem}
        h5{font-size: 1.3rem}
        h6{font-size: 1rem}

        a,
        .primary-color{color: #5782C9}
        .secondary-color{color: #442672}
        .light-color{color: #FFF}
        .light-color-2{color: rgba(255,255,255,.54)}
        .dark-color{color: #333030;}
        .ocean-color{color: #2b90d9;}
        .grass-color{color: #3ac569;}
        .salmon-color{color: #ff7473;}
        .sun-color{color: #feee7d;}
        .alge-color{color: #79a8a9;}
        .flower-color{color: #353866;}

        .primary-bg{background-color: #5782C9}
        .secondary-bg{background-color: #442672}
        .light-bg{background-color: #fff;}
        .dark-bg{background-color: #333030;}
        .ocean-bg{background-color: #2b90d9;}
        .grass-bg{background-color: #3ac569;}
        .salmon-bg{background-color: #ff7473;}
        .sun-bg{background-color: #feee7d;}
        .alge-bg{background-color: #79a8a9;}
        .flower-bg{background-color: #353866;}

        .circle{border-radius: 50%}

        [dir="rtl"] .pull-left{float: right}
        [dir="rtl"] .pull-right{float: left}
        body {text-align: left}
        body[dir="rtl"] {text-align: right}

        .text-center{text-align: center}

        code {
            padding: .2rem .4rem;
            font-size: 90%;
            color: #bd4147;
            background-color: #f7f7f9;
            border-radius: .25rem;
        }

        /**---------------------
          *
          * TimeLine
          *
          *---------------------**/
        .time-line-item{
            padding-left: 100px;
            padding-top: 15px;
            padding-bottom: 15px;
            position: relative;
        }

        .yes-true{
            border-radius: 50%;
            background: #75ce66;
        }

        .no-false{
            border-radius: 50%;
            background: #c03b44;
        }

        .time-line-item:before{
            content: '';
            position: absolute;
            left: 7px;
            top: 0;
            bottom: 0;
            width: 4px;
            background-color: #F0F0F0;
        }

        .time-line-item:after{
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 10px;
            height: 10px;
            margin-top: -10px;
            border-radius: 50%;
            border: 4px solid #F0F0F0;
            background-color: #ffffff;
        }

        .time-line-item amp-img{
            position: absolute;
            top: 50%;
            left: 39px;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        /**---------------------
          *
          * Header Styles
          *
          *---------------------**/
        header{
            position: relative;
            min-height: 55px;
            padding: 0 5px;

            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#5782c9+0,442672+100 */
            background: rgb(87,130,201); /* Old browsers */
        }

        header .fa{
            color: #FFF;
            opacity: .87;
            font-size: 17px;
            line-height: 56px;
            height: 55px;
            padding: 0 15px;
            margin: 0;
        }

        #logo{
            height: 55px;
            line-height: 61px;
            display: inline-block;
        }

        /**---------------------
          *
          * Sidebar Styles
          *
          *---------------------**/
        #mainSideBar{
            min-width: 300px;
            padding-bottom: 30px;
        }

        #mainSideBar > div:not(.divider){
            padding: 17px 20px;
        }

        #mainSideBar figure{
            width: 300px;
            max-width: 100%;
            padding: 20px;
            position: relative;
        }

        #mainSideBar button{
            position: absolute;
            right: 20px;
            top: 20px;
        }

        #mainSideBar amp-img{
            margin-bottom: 5px;
        }

        #mainSideBar h3,
        #mainSideBar h5{
            margin: 0;
            line-height: 1.5;
        }

        #menu{margin-top: 15px}
        #menu div{padding: 0}

        #menu h6,
        #menu a{
            color: inherit;
            font-size: 1.3rem;
            font-weight: 300;
            padding:0;
            border: none;
        }

        #menu a,
        #menu span{
            padding: 14px 20px 14px 53px;
            display: block;
            color: inherit;
            position: relative;

            -webkit-transition: all ease-in-out .2s;
            transition: all ease-in-out .2s;
        }

        #menu section[expanded] > h6 span{
            background-color: rgba(0,0,0,.06);
            color: #5782C9;
        }

        #menu h6 span:after{
            position: absolute;
            right: 20px;
            top: 0;
            font-family: 'FontAwesome';
            font-size: 12px;
            line-height: 47px;
            content: '\f0dd';
        }

        #menu i,
        #mainSideBar li i{
            font-size: 1.7rem;
            position: absolute;
            left: 20px;
        }

        .social-ball{
            font-size: 1.6rem;
            display: inline-block;
            text-align: center;
            line-height: 30px;
            height: 30px;
            width: 30px;
            border-radius: 50%;
            color: #FFF;
            margin-right: 5px;
        }

        .social-ball.fa-twitter{background-color: #00ACED}
        .social-ball.fa-linkedin{background-color: #0177B5}
        .social-ball.fa-github{background-color: #000000}

        /**---------------------
          *
          * Grid
          *
          *---------------------**/
        [class*="col-"]{margin-bottom: 30px;}.container-fluid{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{margin-right:-15px;margin-left:-15px}.row:after,.row:before{display:table;content:" "}.row:after{clear:both}.container-full,.container-full [class*="col-"]{padding-left: 0; padding-right: 0;}.container-full .row{margin-left:0; margin-right:0;}.no-gap [class*="col-"]{padding-right: 0;padding-left: 0;margin-bottom: 0;}.no-gap.row{margin-right: 0; margin-left: 0;}.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}}

        /* /GLOBAL STYLES */

        /* INDEX PAGE STYLES */

        /**---------------------
		  *
		  * Title
		  *
		  *---------------------**/
        .bordered-title{
            border-bottom: 1px solid rgba(0,0,0,.12);
            margin: 0 -15px;
            padding: 0 15px 8px;
        }

        .bordered-title h3{
            margin: 0;
            line-height: 1.4;
        }

        .bordered-title h5{
            opacity: .54;
            margin: 0;
        }

        /**---------------------
          *
          * Icon Info Box
          *
          *---------------------**/
        .icon-info-box{position: relative}

        .icon-info-box i{
            font-size: 15px;
            color: rgba(255,255,255,1);
            background-color: rgb(87,130,201);
            border-radius: 50%;
            overflow: hidden;
            width: 35px;
            height: 35px;
            line-height: 35px;
            text-align: center;

            position: absolute;
            top: 50%;
            left: 0;

            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .icon-info-box i:last-child{
            left: auto;
            right: 20px;
        }

        .icon-info-box div{margin-left: 50px;}

        .icon-info-box h4{margin: 0;}

        .icon-info-box div:first-child{
            margin-left: 0;
            margin-right: 40px;
        }

        .icon-info-box p{margin: 0;}

        /**---------------------
          *
          * Blog Carousel
          *
          *---------------------**/
        .blog-carousel-item amp-img{
            display: block;
        }

        .blog-carousel-item{
            position: relative;
            margin-top: 3px;
            margin-bottom: 3px;
            border-radius: 2.5px;
            overflow: hidden;
            box-shadow: 0 0 3px 0 rgba(0,0,0,.40);
        }

        .blog-carousel-item-caption{
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #FFF;
            padding: 10px 5px;
            line-height: 1;
        }

        .blog-carousel-item-caption h5{
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            width: 100%;
            line-height: 1.3;
            font-size: 1.2rem;
        }

        /**---------------------
          *
          * Grid Gallery with Lightbox
          *
          *---------------------**/
        .lightbox-item-with-caption figcaption{display: none;}
        .lightbox-item-with-caption amp-img{display: block;}
        .amp-image-lightbox-caption{padding: 15px}



        /* /INDEX PAGE STYLES */
    </style>
</head>
<body dir="ltr">
<header itemscope itemtype="https://schema.org/WPHeader">
    <button class="pull-left fa fa-bars" on='tap:mainSideBar.toggle'></button>
    <a id="logo" href="index.php"><amp-img src="<?php echo $cdn ?>/img/logo.png" width="46" height="14"></amp-img></a>
    <a class="pull-right fa fa-envelope" href="mailto:<?php echo $results->about_me->name ?>"></a>
</header><!-- TOP NAVBAR ENDS -->

<div class="container-fluid">
    <div class="space-3"></div>
    <div class="row">
        <div class="col-xs-12">
            <div class="bordered-title">
                <h3>About Me</h3>
            </div><!-- TITLE ENDS -->
        </div><!-- COL-XS-12 ENDS -->
    </div><!-- ROW ENDS -->

    <div class="row">
        <div class="col-xs-12">
<!--            <p class="minus-margin-top-bottom-15">Many video content providers are supported by AMP. Here's a Vimeo example. Important thing about this feature is video will not load and slow down loading of the page, only When user may see.</p>-->
            <?php echo about_me_bio(); ?>
        </div><!-- COL-XS-12 ENDS -->
    </div><!-- ROW ENDS -->

<!--     TimeLine      -->
    <div class="row">
        <div class="col-xs-12">
            <div class="bordered-title">
                <h3>History</h3>
                <h5>Company Time-line</h5>
            </div><!-- TITLE ENDS -->
        </div><!-- COL-XS-12 ENDS -->
    </div><!-- ROW ENDS -->

    <div class="row">
        <div class="col-xs-12">
            <?php echo about_me_education(); ?>
        </div><!-- COL-XS-12 ENDS -->
    </div><!-- ROW ENDS -->


    <div class="row">
        <div class="col-xs-12">
            <div class="bordered-title">
                <h3>Features</h3>
                <h5>Things You'll Love</h5>
            </div><!-- TITLE ENDS -->
        </div><!-- COL-XS-12 ENDS -->
    </div><!-- ROW ENDS -->

    <div class="row">
        <div class="col-sm-6">
            <div class="icon-info-box">
                <i class="fa fa-fighter-jet"></i>
                <div>
                    <h4>Speed is Key</h4>
                    <p>None other mobile template is faster than the Pinna. Test with your mobile connection!</p>
                </div>
            </div><!-- ICON INFO BOX ENDS -->
        </div><!-- COL-SM-6 ENDS -->
        <div class="col-sm-6">
            <div class="icon-info-box">
                <i class="fa fa-battery-full"></i>
                <div>
                    <h4>Battery Efficent</h4>
                    <p>Pinna will never drain your customers battery like other mobile templates.</p>
                </div>
            </div><!-- ICON INFO BOX ENDS -->
        </div><!-- COL-SM-6 ENDS -->
    </div><!-- ROW ENDS -->

    <div class="row">
        <div class="col-sm-6">
            <div class="icon-info-box">
                <i class="fa fa-users"></i>
                <div>
                    <h4>Never Loose Customers</h4>
                    <p>Pinna will deliver content to your customers so fast. Your customers won't bounce anymore!</p>
                </div>
            </div><!-- ICON INFO BOX ENDS -->
        </div><!-- COL-SM-6 ENDS -->
        <div class="col-sm-6">
            <div class="icon-info-box">
                <i class="fa fa-tint"></i>
                <div>
                    <h4>Smooth Experience</h4>
                    <p>Even old phones will run Pinna smoothly because of the AMP and you will profit more!</p>
                </div>
            </div><!-- ICON INFO BOX ENDS -->
        </div><!-- COL-SM-6 ENDS -->
    </div><!-- ROW ENDS -->

    <div class="row">
        <div class="col-sm-6">
            <div class="icon-info-box">
                <i class="fa fa-check"></i>
                <div>
                    <h4>SEO Optimized</h4>
                    <p>Search engines will love your site because the template is so light and UX friendly.</p>
                </div>
            </div><!-- ICON INFO BOX ENDS -->
        </div><!-- COL-SM-6 ENDS -->
        <div class="col-sm-6">
            <div class="icon-info-box">
                <i class="fa fa-hand-peace-o"></i>
                <div>
                    <h4>Structured Data</h4>
                    <p>Give search engines more advanced data to show them on their search list.</p>
                </div>
            </div><!-- ICON INFO BOX ENDS -->
        </div><!-- COL-SM-6 ENDS -->
    </div><!-- ROW ENDS -->

    <div class="row">
        <div class="col-xs-12">
            <div class="bordered-title">
                <h3>Blog</h3>
                <h5>Posts Carousel</h5>
            </div><!-- TITLE ENDS -->
        </div><!-- COL-XS-12 ENDS -->
    </div><!-- ROW ENDS -->

    <div class="row">
        <div class="col-xs-12">
            <p class="minus-margin-top-bottom-15">Here's a <strong>cool carousel</strong> example with Pinna. AMP is not allowing you to use custom javascript but this doesn't mean you can't create <strong>rich web pages</strong>.</p>
        </div><!-- COL-XS-12 ENDS -->
    </div><!-- ROW ENDS -->

    <div class="row">
        <div class="col-xs-12">
            <amp-carousel class="blog-carousel" layout="fixed-height" height=200>
                <?php echo blog(); ?>
            </amp-carousel><!-- BLOG CAROUSEL ENDS -->
        </div><!-- COL-XS-12 ENDS -->
    </div><!-- ROW ENDS -->

    <div class="row">
        <div class="col-xs-12">
            <div class="bordered-title">
                <h3>Videos</h3>
                <h5>Smart Loading</h5>
            </div><!-- TITLE ENDS -->
        </div><!-- COL-XS-12 ENDS -->
    </div><!-- ROW ENDS -->

    <div class="row">
        <div class="col-xs-12">
            <p class="minus-margin-top-bottom-15">Many video content providers are supported by AMP. Here's a Vimeo example. Important thing about this feature is video will not load and slow down loading of the page, only When user may see.</p>
        </div><!-- COL-XS-12 ENDS -->
    </div><!-- ROW ENDS -->
    <div class="divider colored"></div>

    <div class="space-2"></div>

    <div class="text-center">
        <a href="<?php echo $results->about_me->twitter ?>" class="social-ball fa fa-twitter"></a>
        <a href="<?php echo $results->about_me->linkedin ?>" class="social-ball fa fa-linkedin"></a>
        <a href="<?php echo $results->about_me->github ?>" class="social-ball fa fa-github"></a>
    </div><!-- TEXT-CENTER/SOCIAL-ICONS ENDS -->

    <div class="space"></div>

    <div class="text-center">
        <small>Copyright © 2016 by <?php echo $results->about_me->name ?></small>
    </div><!-- TEXT-CENTER/COPYRIGHT ENDS -->

    <div class="space-2"></div>
</div>

<amp-sidebar id='mainSideBar' layout='nodisplay'>
    <figure class="primary-bg">
        <amp-img class="circle" src="<?php echo $photo ?>" width="60" height="60" layout="fixed" attribution="Mobius Studio"></amp-img>
        <figcaption>
            <h3 class="light-color"><?php echo $results->about_me->name ?></h3>
        </figcaption>

        <button on='tap:mainSideBar.toggle' class="fa fa-caret-left light-color"></button>
    </figure><!-- NAVBAR USER CARD ENDS -->

    <nav id="menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
        <a href="index.html">About Me</a>
        <a href="about-us.html">Publications</a>
        <a href="services.html">Skills</a>
        <a href="services.html">Experience</a>
        <a href="services.html">Projects</a>
        <a href="services.html">Tutorials</a>
        <a href="services.html">Blog</a>
        <a href="services.html">Contact</a>
    </nav><!-- MENU ENDS -->

    <div class="divider colored"></div>

    <div>
        <p class="margin-bottom-0"><strong>E-Mail:</strong> <a href="mailto:<?php echo $results->about_me->contact ?>"><?php echo $results->about_me->contact ?></a></p>
    </div><!-- CONTACT INFORMATION ENDS -->

    <div>
        <a href="<?php echo $results->about_me->linkedin ?>" class="social-ball fa fa-linkedin"></a>
        <a href="<?php echo $results->about_me->twitter ?>" class="social-ball fa fa-twitter"></a>
        <a href="<?php echo $results->about_me->github ?>" class="social-ball fa fa-github"></a>
    </div><!-- SOCIAL ICONS ENDS -->
</amp-sidebar><!-- SIDEBAR ENDS -->

<!--<amp-install-serviceworker src="sw.js"
                           data-iframe-src="http://localhost/pinna/LTR/dist/sw.html"
                           layout="nodisplay">
</amp-install-serviceworker>-->
</body>
</html>