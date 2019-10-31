<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<!-----Product Row---->
<div class="container">
        <div class="row" style="padding-top:15px;">
            <div class="col-md-3">
                <div class="externalframe">
                    <a href="./chitiet.html" style="text-decoration: none;color: black">
                        <div class="boder"><img src="./images/8.jpg" alt="#"
                                class="img-responsive"></div>
                        <p class="title">Iphone Xs Max 256GB</p>
                        <p class="price">35.990.000₫</p>
                        <p>-----------------------------------------------</p>
                        <p class="description">
                            Màn hình:6.5,super Retina<br>HĐH:ios12<br>CPU: 4GB,ROM:256GB<br>Camara:Chính 12MP & phụ
                            12MP,selfie:7MP<br>PIN:3174 mAH
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="buying">Mua</button>
                            </div>
                            <div class="col-md-6"><button class="installment">Trả Góp</button></div>
                        </div>
                    </a>
                </div>
               
                <!------->
               
               
                <!------->
            </div>
            <div class="col-md-3">
                <div class="externalframe">
                    <a href="./chitiet.html" style="text-decoration: none;color: black">
                        <div class="boder"><img src="./images/9.jpg" alt="#"
                                class="img-responsive"> </div>
                        <p class="title">Iphone Xs 256GB</p>
                        <p class="price">32.990.000₫</p>
                        <p>-----------------------------------------------</p>
                        <p class="description">
                            Màn hình:6.5,super Retina<br>HĐH:ios12<br>CPU: 4GB,ROM:256GB<br>Camara:Chính 12MP & phụ
                            12MP,selfie:7MP<br>PIN:3174 mAH
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="buying">Mua</button>
                            </div>
                            <div class="col-md-6"><button class="installment">Trả Góp</button></div>
                        </div>

                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="externalframe">
                    <a href="./chitiet.html" style="text-decoration: none;color: black">
                        <div class="boder"><img src="./images/10.jpg" alt="#"
                                class="img-responsive"></div>
                        <p class="title">Iphone Xs Max 64GB</p>
                        <p class="price">29.990.000₫</p>
                        <p>-----------------------------------------------</p>
                        <p class="description">
                            Màn hình:6.5,super Retina<br>HĐH:ios12<br>CPU: 4GB,ROM:256GB<br>Camara:Chính 12MP & phụ
                            12MP,selfie:7MP<br>PIN:3174 mAH
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="buying">Mua</button>
                            </div>
                            <div class="col-md-6"><button class="installment">Trả Góp</button></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="externalframe">
                    <a href="./chitiet.html" style="text-decoration: none;color: black">
                        <div class="boder">
                            <img src="./images/11.jpg" alt="#" class="img-responsive"></div>
                        <p class="title">Iphone X 256GB</p>
                        <p class="price">27.990.000₫</p>
                        <p>-----------------------------------------------</p>
                        <p class="description">
                            Màn hình:6.5,super Retina<br>HĐH:ios12<br>CPU: 4GB,ROM:256GB<br>Camara:Chính 12MP & phụ
                            12MP,selfie:7MP<br>PIN:3174 mAH
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="buying">Mua</button>
                            </div>
                            <div class="col-md-6"><button class="installment">Trả Góp</button></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!---FooTer-->
    
    <p style="text-align: center;font-weight:bold;color: #777777;padding-top:15px;">&copy; Phát Triển Bởi Designer Phạm Văn Hiếu</p>