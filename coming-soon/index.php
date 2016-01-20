<?php
    if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') {
        if(!headers_sent()) {
            header("Status: 301 Moved Permanently");
            header(sprintf(
                'Location: https://%s%s',
                $_SERVER['HTTP_HOST'],
                $_SERVER['REQUEST_URI']
            ));
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="https://www.gollahalli.me">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Akshay Raj Gollahalli is a PhD student in AUT university and this website showcases his work.">
    <meta name="author" content="Akshay Raj Gollahalli">
    <meta name="keywords" content="computer science, brain computer interface, artificial intelligence"/>
    <meta name="rights" content="All rights reserved by Akshay Raj Gollahalli" />
    <link rel="icon" href="../../favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <!--<div class="masthead clearfix">-->
                <!--<div class="inner">-->
                    <!--<h3 class="masthead-brand">Cover</h3>-->
                    <!--<nav>-->
                        <!--<ul class="nav masthead-nav">-->
                            <!--<li class="active"><a href="#">Home</a></li>-->
                            <!--<li><a href="#">Features</a></li>-->
                            <!--<li><a href="#">Contact</a></li>-->
                        <!--</ul>-->
                    <!--</nav>-->
                <!--</div>-->
            <!--</div>-->

            <div class="inner cover">
                <h1 class="cover-heading">gollahalli</h1>
                <p class="lead">Coming soon!</p>
                <p class="lead">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </p>
            </div>

            <!--<div class="mastfoot">-->
                <!--<div class="inner">-->
                    <!--<p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>-->
                <!--</div>-->
            <!--</div>-->

        </div>

    </div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/jquery.js"><\/script>')</script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
