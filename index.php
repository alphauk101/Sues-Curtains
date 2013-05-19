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
                <div class="clsHeader"><img src="images/logoB.png" alt="Sue's Curtains"/>
                <br/>
                <span class="t1basic">Curtain Makers for over 30 years</span>
                </div>
                <div id="headerCall" class="clsHeader"><span class="t1basic">For a free consultation contact Sue on: 07980 151972</span></div>
                <a href="contact.php"><div id="contactButton" class="clsHeader" onmouseover="this.style.background='#48036F'" onmouseout="this.style.background='#7109AA'"><span class="tButton">CONTACT SUE NOW</span></div></a>
            </div>
            <nav>
                <ul>
                    <li><a class="navi" href="http://www.google.co.uk"><span class="tNav">Home</span></a></li>
                    <li><a class="navi" href="#"><span class="tNav">Information</span></a></li>
                    <li><a class="navi" href="#"><span class="tNav">Contact</span></a></li>
                </ul>
            </nav>
            <!--Main body div below nav-->
            <div id="main">
            <br/><br/>
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
