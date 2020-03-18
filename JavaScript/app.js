$(document).ready(function(){
    $('.btn-navigation').click(function(){
        $(this).find('.barre').toggleClass('white');
        $('.nav-bar-escalade').toggleClass('isOpen');

    }); 
});