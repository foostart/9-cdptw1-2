<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-357">
    <!---Begin Header-->
    <header id="header" class="style2 cta_button">
        <div class="container">
            <div class="logo-container hasInfoCard">
                <h1 id="logo">
                    <a href="#">
                        <img src="images/logo.png" alt="Kallyas Template for Joomla" title="Click to return to Kallayas Template's homepage">
                    </a>
                </h1>
            </div><!--Logo-->
            <!--========menu========-->

            <ul class="topnav navRight">
                <li class="search">
                    <input type="search" class="search-box" />
                    <span class="search-button">
                        <span class="search-icon"></span>
                    </span>
                </li>
                <!-- BEGIN support clickable button -->
                <li class="support">
                    <a href="#" id="open_sliding_panel">
                        <span class="icon-remove-circle icon-white"></span> 
                        SUPPORT   
                    </a>
                </li>
                <!-- END support clickable button -->
                <!-- BEGIN hidden login/register/remind popups -->
                <li class="login">
                    <a href="#login_panel" data-rel="prettyPhoto[login_panel]">LOGIN</a>
                </li>


                <!-- END hidden login/register/remind popups -->
            </ul><!--Top right-->
            <ul class="topnav navLeft">
                <li class="dropdown cart drop"> 
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-shopping-basket"></i>
                        MY CART
                    </a>
                    <ul class="dropdown-menu" role="menu"> Không có sản phẩm được chọn. </ul>
                </li>  
                <li class="drop">
                    <a href="#">
                        <span class="icon-globe icon-white"></span> 
                        LANGUAGES
                    </a>
                </li>
            </ul><!--Top Left-->

            <a href="#" target="_self" id="ctabutton">
                <strong>FREE</strong>QUOTE                  
                <svg version="1.1" class="trisvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" preserveAspectRatio="none" width="14px" height="5px" viewBox="0 0 14.017 5.006" enable-background="new 0 0 14.017 5.006" xml:space="preserve"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.016,0L7.008,5.006L0,0H14.016z"></path></svg>
            </a><!--Free QUOTE-->


            <!--================-->
            <!--================-->
            <nav class="navbar navbar-default menu2">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collap" >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="collap">
                    <ul class="nav navbar-nav main_menu">
                        <li class="dropdown activemenu"> 
                            <a href="index.php" class="dropdown-toggle" role="button" aria-expanded="true">HOME</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Homepage 2</a></li>
                                <li><a href="#">Homepage 3</a></li>
                                <li><a href="#">Homepage 4</a></li>
                                <li><a href="#">Homepage 5</a></li>
                                <li><a href="#">Homepage 6</a></li>
                                <li><a href="#">Homepage ALL</a></li>
                            </ul>
                        </li><!--Home-->
                        <li class="dropdown mega-dropdown">
                            <a href="#">SLIDERS</a>
                            <ul class="dropdown-menu mega-dropdown-menu" role="menu">
                                <li class="col-md-3">
                                    <ul>
                                        <li class="dropdown-header">IOSSlider</li>
                                        <li><a href="#">Main Slider</a></li>
                                        <li><a href="#">Fixed position(scroll)</a></li>
                                        <li><a href="#">Fixed Width Style</a></li>
                                        <li><a href="#">Faded effect</a></li>
                                        <li><a href="#">With thumb</a></li>
                                    </ul>
                                </li>
                                <li class="col-md-3">
                                    <ul>
                                        <li class="dropdown-header">Fixed Slider</li>
                                        <li><a href="#">Syle 1(Flex Slider)</a></li>
                                        <li><a href="#">Style 2(Nivo Slider)</a></li>
                                        <li><a href="#">Style 3(Wom Slider)</a></li>
                                    </ul>
                                </li>
                                <li class="col-md-3">
                                    <ul>
                                        <li class="dropdown-header">Circular Content</li>
                                        <li><a href="#">Default Style</a></li>
                                        <li><a href="#">Alternative Style</a></li>
                                    </ul>
                                </li>
                                <li class="col-md-3">
                                    <ul>
                                        <li class="dropdown-header">Static Content</li>
                                        <li><a href="#">Default Style</a></li>
                                        <li><a href="#">Style 2/Boxed</a></li>
                                        <li><a href="#">Style 3/Video</a></li>
                                        <li><a href="#">Style 4/Maps</a></li>
                                        <li><a href="#">Style 5/Text pop</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li><!--Silders-->

                        <li class="dropdown"> 
                            <a href="#" class="dropdown-toggle" role="button" aria-expanded="false">ABOUT US</a>
                        </li><!--About Us-->
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" aria-expanded="false">FEATURES</a>
                            <ul class="dropdown-menu mega-dropdown-menu features">
                                <li class="col-sm-4">
                                    <ul>
                                        <li class="dropdown-header">Porfolio</li>
                                        <li><a href="#">Log</a></li>
                                        <li><a href="#">Photo Gallery</a></li>
                                        <li><a href="#">Category Layout</a></li>
                                        <li><a href="#">Sortable Layout</a></li>
                                        <li><a href="#">Carousels Layout</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-4">
                                    <ul>
                                        <li class="dropdown-header">PrettyPhoto(LightBox)</li>
                                        <li><a href="#">PrettyPhoto(open iframe)</a></li>
                                        <li><a href="#">PrettyPhoto(open iframe)</a></li>
                                        <li><a href="#">PrettyPhoto(open iframe)</a></li>
                                        <li><a href="#">PrettyPhoto(open iframe)</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-4">
                                    <ul>
                                        <li class="dropdown-header">Hollyday Slider</li>
                                        <li><a href="#">Christmas</a></li>
                                        <li><a href="#">Easter</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li><!--Features--> 
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" aria-expanded="true">SHOP</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Shop Frontpage</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Categories Laypout</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li><!--Shop-->
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" aria-expanded="true">PAGES</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Process</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li><!--Pages-->
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" aria-expanded="true">STYLES</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Typoghaphy</a></li>
                                <li><a href="#">Table Design</a></li>
                                <li><a href="#">Button Desgin</a></li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">Button Desgin</a></li>
                                <li><a href="#">Button Desgin</a></li>
                            </ul>
                        </li><!--Style-->
                    </ul><!--Main Menu-->
                </div>
            </nav>
            <!--================-->
        </div>
    </header>
    <!--End Header-->
    <div class="clearfix"></div>
    <!--Begin Image-->
    <div id="page_header" class="dark-blue gradient   ">
        <div class="bgback"></div>
        <div class="container">
            <section class="row">
                <div class="col-md-6">  
                </div>
                <div class="col-md-6 ">
                    <div class="header-titles">
                        <h2>PRODUCT LAYOUT</h2> 
                        <h4>Default layout for the product page.</h4>       
                    </div>
                </div>
            </section><!-- end row -->
        </div>
    </div>
    <!--End Image-->
</div>