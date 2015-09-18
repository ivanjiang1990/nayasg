<?php $mark = "contact";?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Naya Manpower agency & IT Service | Singapore foreign workers agency agent agencies | Singapore Manpower | Singapore Employment agencies agency</title>
        <meta name="description" content="Naya Manpower agency & IT Service is a professional foreign Employment agent agency agencies service in Singapore(SG).">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="keywords" content="employment agency, recruitment agency, foreign worker, prc worker, china worker, workers, agent, recruit, myanmar , agencies, employ, hire, manpower, services, job, foreigner, jobs, foreigners, skilled, unskilled, employment agency in Singapore">



        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo-misc.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="#/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <section id="pageloader">
            <div class="loader-item fa fa-spin colored-border"></div>
        </section> <!-- /#pageloader -->

        <?php include "includes/head.php" ?>

        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="row">
                    <div class="section-header col-md-12">
                        <h2>Contact Us</h2>
                        <span>You will get a satisfactory answer.</span>
                    </div> <!-- /.section-header -->
                </div> <!-- /.row -->
                <div class="contact-form">
                    <div class="box-content col-md-12">
                        <div class="row">
                            <div class="col-md-7">
                                <p>Address: 7 Kallang Place SG 339153<br/>Phone Number: 97851352</p>
                                <h3 class="contact-title">Send Us Email</h3>
                                <div class="contact-form-inner">
                                    <form method="post" action="#" name="contactform" id="contactform">
                                        <p>
                                            <label for="name">Your Name:</label>
                                            <input name="name" type="text" id="name">
                                        </p>
                                        <p>
                                            <label for="email">Email Address:</label>
                                            <input name="email" type="text" id="email"> 
                                        </p>
                                        <p>
                                            <label for="phone">Phone Number:</label>
                                            <input name="phone" type="text" id="phone">   
                                        </p>
                                        <p>
                                            <label for="comments">Your message:</label>
                                            <textarea name="comments" id="comments"></textarea>    
                                        </p>
                                        <input type="submit" class="mainBtn" id="submit" value="Send Message" />
                                    </form>
                                </div> <!-- /.contact-form-inner -->
                                <div id="message"></div>
                            </div> <!-- /.col-md-7 -->
                            <div class="col-md-5">
                                <div class="googlemap-wrapper">
                                    <div id="map_canvas" class="map-canvas"></div>
                                </div>
                            </div> <!-- /.col-md-5 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.box-content -->
                </div> <!-- /.contact-form -->
            </div> <!-- /.inner-content -->
        </div> <!-- /.content-wrapper -->

        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        
        <!-- Google Map Init-->
        <script type="text/javascript">
            jQuery(function($){
                $('#map_canvas').gmap3({
                    marker:{
                        address: '1.316519,103.86756' 
                    },
                        map:{
                        options:{
                        zoom: 17,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });
            });
        </script>

        <!-- Preloader -->
        <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() { // makes sure the whole site is loaded
                $('.loader-item').fadeOut(); // will first fade out the loading animation
                    $('#pageloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
                $('body').delay(350).css({'overflow-y':'visible'});
            })
            //]]>
        </script>

    </body>
</html>
