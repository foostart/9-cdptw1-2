<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-301">
    <div id="header" class="group header_with_search margin-bottom">
        <div class="container">
            <!-- START LOGO -->
            <div id="logo">
                <a id="logo-img" href="#" title="Sistina"> <img src="images/logo.png" alt="" /> </a>
            </div>
            
            <!-- END LOGO -->
            <!-- START HEADER RIGHT CONTENT -->
            <div id="header-right-content">
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collap" >
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="collap">
                        <ul class="nav navbar-nav nava">
                            <li class="dropdown activemenu"> 
                                <a href="#" class="dropdown-toggle" role="button" aria-expanded="true">HOME<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="index.php">Home II</a></li>
                                    <li><a href="#">Home III</a></li>
                                    <li><a href="#">Home IV(no shop)</a> </li>
                                    <li><a href="#">Home V</a>
                                    <li><a href="#">Home VI</a>
                                    <li><a href="#">Home VII</a>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                        <!--  -->
                        <ul class="nav navbar-nav nava">
                            <li class="dropdown activemenu"> 
                                <a href="#" class="dropdown-toggle" role="button" aria-expanded="true">WATCHLIST<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="index.php">Content</a></li>
                                    <li><a href="#">Screenshot</a></li>
                                    <li><a href="#">Stander</a> </li>
                                    <li><a href="#">Header Right Content</a>
                                    <li><a href="#">OutLine</a>
                                    <li><a href="#">Dropdown Right Content</a>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                        <!--  -->
                        <ul class="nav navbar-nav nava">
                            <li class="dropdown activemenu"> 
                                <a href="#" class="dropdown-toggle" role="button" aria-expanded="true">
                                <img src="./images/1.jpg" alt="#"><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><img src="./images/2.jpg" alt="#">Pháp</a></li>
                                    <li><a href="#"><img src="./images/3.jpg" alt="#">Anh</a></li>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                        <!--  -->
                        <ul class="nav navbar-nav nava">
                            <li class="dropdown activemenu"> 
                                <a href="#" class="dropdown-toggle" role="button" aria-expanded="true">
                                <img src="./images/3.jpg" alt="#"><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><img src="./images/4.jpg" alt="#">Mỹ</a></li>
                                    <li><a href="#"><img src="./images/7.jpg" alt="#">Đức</a></li>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                        <!--  -->
                    </div>
                </nav>
            </div>
           
    </div>
    <div class="container">
        <div class="top-header">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input placeholder="Cart: (emty)" type="text" class="form-control input-lg ">
                    </div>
                </div>
                <div class="col-md-4">
                    <h1 style="text-align:center;font-weight:bold;font-size:2.975em;">Alysum</h1>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input id="search" placeholder="Search" type="text" class="form-control input-lg">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>