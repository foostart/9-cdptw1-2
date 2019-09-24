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
                 <img class="img-responsive" src="images/<?php echo $image; ?>.png" data-zoom-image="images/1.png" alt=""><br>
                 <div class="row">
                 <a href="?hinh1" class="col-md-3 col-sm-3 col-lg-3 col-xs-3"> <img class="img-responsive" src="images/1.png" data-zoom-image="images/1.png" alt=""></a>
                 <a href="?hinh2" class="col-md-3 col-sm-3 col-lg-3 col-xs-3"> <img class="img-responsive" src="images/2.png" data-zoom-image="images/1.png" alt=""></a>
                 <a href="?hinh3" class="col-md-3 col-sm-3 col-lg-3 col-xs-3"> <img class="img-responsive" src="images/3.png" data-zoom-image="images/1.png" alt=""></a>
                 <a href="?hinh4" class="col-md-3 col-sm-3 col-lg-3 col-xs-3"> <img class="img-responsive" src="images/4.png" data-zoom-image="images/1.png" alt=""></a>
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
