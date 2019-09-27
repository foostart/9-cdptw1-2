<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
$image = 1;
if(isset($_GET['hinh1'])){
    $image = 1;
}else if(isset($_GET['hinh2'])){
    $image = 2;
}else if(isset($_GET['hinh3'])){
    $image = 3;
} else if(isset($_GET['hinh4'])){
    $image = 4;
} else{
    $image = 1;
}

?>
<div class="type-319">
    <div class="container">
        
        <div class="row">   
            <div class="col-md-8 col-lg-8 col-xs-12 col-sm-8"> 
                <div class="link">
                    <p><a href="#">Home </a>/ <a href="#">Sport Wear</a> /<a href="#"> Red Sport T-Shirt</a></p>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">

                <div style = "height: 500px;">
<div class="swiper-container gallery-top">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(./images/1.png)"></div>
      <div class="swiper-slide" style="background-image:url(./images/2.png)"></div>
      <div class="swiper-slide" style="background-image:url(./images/3.png)"></div>
      <div class="swiper-slide" style="background-image:url(./images/4.png)"></div>
      <div class="swiper-slide" style="background-image:url(./images/5.png)"></div>
      <div class="swiper-slide" style="background-image:url(./images/6.png)"></div>
      <div class="swiper-slide" style="background-image:url(./images/7.png)"></div>
      <div class="swiper-slide" style="background-image:url(./images/8.png)"></div>
    </div>
  </div>
   <!-- Add Arrows -->
   <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  <div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(./images/1.png)"></div>
      <div class="swiper-slide" style="background-image:url(./images/2.png)"></div>
      <div class="swiper-slide" style="background-image:url(./images/3.png)"></div>
      <div class="swiper-slide" style="background-image:url(./images/4.png)"></div>
      <div class="swiper-slide" style="background-image:url(./images/5.png)"></div>
      <div class="swiper-slide" style="background-image:url(./images/6.png)"></div>
      <div class="swiper-slide" style="background-image:url(./images/7.png)"></div>
      <div class="swiper-slide" style="background-image:url(./images/8.png)"></div>
    </div>
  </div>

</div>                                                  
             </div>
             <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
                <h1>Red Sport T-Shirt</h1>
                <div class="star-rating">
                    <i class="fa fa-star start" aria-hidden="true"></i>
                    <i class="fa fa-star start" aria-hidden="true"></i>
                    <i class="fa fa-star start" aria-hidden="true"></i>
                    <i class="fa fa-star start" aria-hidden="true"></i>
                    <i class="fa fa-star start" aria-hidden="true">(1 customer review)</i>


                    <div class="price">                        
                        <p>£35.00</p>                        
                    </div>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore 
                            et dolore magna aliqua. Inmensae subtilitatis, obscuris et malesuada fames. Morbi fringilla 
                            convallis sapien, id pulvinar odio volutpat. 
                            Ut enim ad minim veniam, quis nostrud exercitation. Quisque placerat facilisis egestas cillum 
                            dolore.
                        </p>
                    </div>

                    <div class="cart">                          
                        <input class="form-control text-center" value="1">                        
                        <button type="button" class="btn btn-danger">ADD TO CART</button>
                    </div>

                    <div class="clearfix"></div>
                    <span class="posted_in">Categories: 
                        <a href="#" rel="tag">T-Shirt</a>, 
                        <a href="#" rel="tag">Sport Wear</a>
                    </span>
                    <div class="clearfix"></div>
                    <span class="posted_in">Tags: <a href="" rel="tag">dark</a>, 
                        <a href="#" rel="tag">men</a>,
                        <a href="#" rel="tag">watches</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
