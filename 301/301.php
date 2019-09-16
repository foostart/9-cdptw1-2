<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/type-301.less', 'css/type-301.css');
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>type-301</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/font-awesome.min.css">

        <link rel="stylesheet" href="<?php echo $url_path ?>/css/type-301.css">    

        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 

         <script>
        $(document).ready(function () {
            //HEADER
            $(".dropdown1").hover(
                    function () {
                        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeIn("400");
                        $(this).toggleClass('open');
                    },
                    function () {
                        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeOut("400");
                        $(this).toggleClass('open');
                    }
            );
            //SEARCH RESIZE
            if ($(window).width() > 728) {
                $('.search_query', this).click(function () {
                    $('#search_block_top').css({'width': '300px'});
                });
                //CLICK OUTSIDE
                $('.search_query', this).blur(function () {
                    $('#search_block_top').css({'width': '230px'});
                });
            }
            window.onresize = function (event)
            {
                if ($(window).width() < 727) {
                    $('#search_block_top').css({'width': '300px'});
                } else {
                    $('#search_block_top').css({'width': '230px'});
                }
            };

        });
    </script>
    </head>
    <body>

       <?php include $dir_block.'/301-content.php'; ?>

    </body>
</html>