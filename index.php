<?php
    //This is PHP now!
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Sues Curtains | Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/texts.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
           <script src="js/modernizr-2.6.1.min.js"></script>
        <script src="js/lean-slider.js"></script>
        <link rel="stylesheet" href="css/lean-slider.css" type="text/css" />
        <link rel="stylesheet" href="css/sliderDesign.css" type="text/css" />
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="wrapper">
            <div id="header">
                <div id="peal"><img src="images/page_leaf.png" alt="page peal"/></div>
                <div id="logo"><img src="images/logo.png" alt="Sues Curtains"/><div id="tele"><img src="images/tele.png" alt="Telephone: 012345687886"/><img src="images/fb_icon.png" alt="Facebook"/></div></div>
            </div>
            <nav class="gradient">
                <ul>
                    <li><a class="navi" href="http://www.google.co.uk">Home</a></li>
                    <li><a class="navi" href="#">Information</a></li>
                    <li><a class="navi" href="#">Contact</a></li>
                </ul>
            </nav>
            <br/>
            <br/>
            <div id="jqScroller">
                <div id="jqholder">
                    <div>
                        <div class="slider-wrapper">
                            <div id="slider">
                                <div class="slide1">
                                    <img src="images/1.jpg" alt="" />
                                </div>
                                <div class="slide2">
                                    <img src="images/2.jpg" alt="" />
                                </div>
                                <div class="slide3">
                                    <img src="images/3.jpg" alt="" />
                                </div>
                                <div class="slide4">
                                    <img src="images/4.jpg" alt="" />
                                </div>
                            </div>
                            <div id="slider-direction-nav"></div>
                            <div id="slider-control-nav"></div>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
            <br/>
            <div id="indexInfo">
                <span class="t1basic">This is some information <br/>
                about sues curtains<br/>
                <br/>
                YAH!</span>
            </div>
        </div>
    
    <!--ADDITIONAL Javascript stubs-->
    <script type="text/javascript">
    $(document).ready(function() {
        var slider = $('#slider').leanSlider({
                        
        });
    });
    </script>
    </body>
</html>
