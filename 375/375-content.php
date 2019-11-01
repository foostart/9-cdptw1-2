<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-375">
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
                                <a href="#" class="dropdown-toggle" role="button" aria-expanded="true">HOME</a>
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
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" role="button" aria-expanded="false">
                                    SHOP
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="index.php">Features</a></li>
                                    <li><a href="#">Auto Carousel</a></li>
                                    <li><a href="#">Carousel Control</a> </li>
                                    <li><a href="#">Left & Right Navigation</a>
                                    <li><a href="#">Four Columns Grid</a>
                                    <li><a href="#">Pull Right Elements</a>
                                    </li>
                                </ul>
                                
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" role="button" aria-expanded="false">
                                    Mega Menu
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="index.php">Web Developer</a></li>
                                    <li><a href="#">Auto Carousel</a></li>
                                    <li><a href="#">Visua Sudio Control</a> </li>
                                    <li><a href="#">Products Here</a>
                                    <li><a href="#">END HEADER RIGHT CONTENT</a>
                                    <li><a href="#">No Optional Elements</a>
                                    </li>
                                </ul>
                                
                            </li>
                            <li class="dropdown mega-dropdown"> 
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES</a>
                               
                            </li>
                            <li class="dropdown login-res"> <a href="#" class="dropdown-toggle" >Login/Register</a>
                                <ul class="dropdown-menu register">
                                    <li>
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="Username"> </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password"> </div>
                                        <div class="form-group">
                                            <a class="lost_password" href="#">Lost password?</a>
                                            <input type="submit" class="button" value="Login" name="login">
                                        </div>
                                        <a class="create_account" href="#">Create account</a>

                                        <ul>
                                            <li>My Account</li>
                                            <li>Wishlist</li>
                                            <li>Compare</li>
                                        </ul>
                                    </form>
</li>
                                </ul>
                            </li>
                            <li class="dropdown cart"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-shopping-basket"></i>Cart <span class="cart-items-number">0</span></a>
                                <ul class="dropdown-menu" role="menu"> <li>Không có sản phẩm được chọn.</li>  </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- END HEADER RIGHT CONTENT -->
            <!-- START SEARCH BOX -->
            <div id="headersearchform-container" class="group">
                <form role="search" method="get" id="headersearchform" action="#">
                    <div class="group formborder">
                        <input type="text" value="" name="s" id="headers" placeholder="Search products here..." autocomplete="off">
                        <input type="submit" class="button" id="headersearchsubmit" value="Search">
                    </div>
                    <input type="hidden" name="post_type" value="product"> 
                </form>
            </div>
        </div>
        <br>
        <br>
        <!-- END SEARCH BOX -->
        <div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2 style="text-align:center;">
					<strong>OUR CLIENTS SAYS:</strong>
				</h2>
				<br>
				<p class="our-clinets">
					Read clientâ€™s opinions about posuere.
					<br>
					congue aliquet dis penatibus netus tempor a
					congue aliquet dis penatibus netus tempor lorem.

				</p>
			</div>
			<div class="col-md-8">
            <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
	  <div class="card" style="width: 50rem;">
  <img class="card-img-top" src="./images/client1-100x100.png" alt="Card image cap" style="border-radius:90px;">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
	  </div>
      <div class="swiper-slide">
	  <div class="card" style="width: 50rem;">
  <img class="card-img-top" src="./images/client2-100x100.png" alt="Card image cap" style="border-radius:90px;">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
	</div>
      <div class="swiper-slide">
	  <div class="card" style="width: 50rem;">
  <img class="card-img-top" src="./images/client3-100x100.png" alt="Card image cap" style="border-radius:90px;">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
	</div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
   
                    </div>
              
                </div>
            </div>
              <!-- Footer -->
        <div>
        <p style="text-align: center;font-weight:bold;color: #777777;padding-top:50px;"><span><img src="./images/cart1.png" alt="#"></span> Phát Triển Bởi Designer Phạm Văn Hiếu</p>
    </div>
    </div>
</div>