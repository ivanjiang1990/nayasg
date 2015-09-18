<?php
/*
 * Created on Dec 9, 2014
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
        <header class="site-header container-fluid">
            <div class="top-header">
                <div class="logo col-md-6 col-sm-6">
                    <!--<h1><a href="index.php"><em>Na</em>ya</a></h1>-->
                    <a href="index.php"><img src="images/naya_logo_web1.png"></img></a>
                    <span>Manpower Agency & IT Service</span>
                    <span>Licence NO:14C7367</span>
                </div> <!-- /.logo -->
                <div class="social-top col-md-6 col-sm-6">
                	
                    <!--<ul>
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                        <li><a href="#" class="fa fa-flickr"></a></li>
                        <li><a href="#" class="fa fa-rss"></a></li>
                    </ul>-->
                </div> <!-- /.social-top -->
            </div> <!-- /.top-header -->
            <div class="main-header">
                <div class="row">
                    <div class="main-header-left col-md-3 col-sm-6 col-xs-8">
                        <a id="search-icon" class="btn-left fa fa-search" href="#search-overlay"></a>
                        <div id="search-overlay">
                            <a href="#search-overlay" class="close-search"><i class="fa fa-times-circle"></i></a>
                            <div class="search-form-holder">
                                <h2>Type keywords and hit enter</h2>
                                <form id="search-form" action="#">
                                    <input type="search" name="s" placeholder="" autocomplete="off" />
                                </form>
                            </div>
                        </div><!-- #search-overlay -->
                        <a href="#" class="btn-left arrow-left fa fa-angle-left"></a>
                        <a href="#" class="btn-left arrow-right fa fa-angle-right"></a>
                    </div> <!-- /.main-header-left -->
                    <div class="menu-wrapper col-md-9 col-sm-6 col-xs-4">
                        <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                        <ul class="sf-menu hidden-xs hidden-sm">
                            <li <?php if($mark=="index") echo "class=\"active\""?> ><a href="index.php">Home</a></li>
                            <li <?php if($mark=="services") echo "class=\"active\""?>><a href="services.php">Services</a></li>
                            <li <?php if($mark=="projects") echo "class=\"active\""?>><a href="#">Projects</a>
                                <ul>
                                    <li><a href="projects-2.php">Two Columns</a></li>
                                    <li><a href="projects-3.php">Three Columns</a></li>
                                    <li><a href="project-details.php">Project Single</a></li>
                                </ul>
                            </li>
                            <li <?php if($mark=="contact") echo "class=\"active\""?>><a href="contact.php">Contact</a></li>
                        </ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            <div id="responsive-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="#">Projects</a>
                        <ul>
                            <li><a href="projects-2.php">Two Columns</a></li>
                            <li><a href="projects-3.php">Three Columns</a></li>
                            <li><a href="project-details.php">Project Single</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </header> <!-- /.site-header -->