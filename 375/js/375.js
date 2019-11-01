$(document).ready(function(){
    $(".dropdown").click(            
        
        function(){
            $('.dropdown-menu', this).not('.dropdown-menu').stop(true).slideDown("400");
            $(this).toggleClass('open'); 
        },
        
        function(){
            $('.dropdown-menu', this).not('.dropdown-menu').stop(true).slideUp("400");
            $(this).toggleClass('open'); 
        },
    );
});