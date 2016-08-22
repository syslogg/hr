$(function(){
    $(".btn-collapse").click(function(){
        $(".nav").slideToggle("fast");
        return false;
    });

    $(".nav-item").each(function(index) {
        $(this).click(function(){
            $(this).children(".nav-sub").slideToggle("fast");
            
        });
    })
    
});