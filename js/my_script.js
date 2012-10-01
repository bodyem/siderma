$(document).ready(function(){
    $('.item').hover(function(){
        $(this).toggleClass('item item_hover');
    });
    var ok=0;
    var display = $('body').width();
    $('.searchbar input').on("mousemove",function(event) {
       var position = display - 50 - 16 - event.pageX ;
       if (position <= 19) {
           $(this).css({
               "cursor" : "pointer"
           });
        ok = 1;
        }
       else {
           $(this).css({
           "cursor" : "auto"
            });
            ok = 0;
        }
    });
    
    $('.searchbar input').on('click', function(event) {
        var position = display - 50 - 16 - event.pageX ;
        if (position <= 19){
           var what_search = $(this).val();
           window.open('search_rezults.php?search='+what_search,'_self');
           
           }
    })

});