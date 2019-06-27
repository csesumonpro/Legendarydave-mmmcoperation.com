$('.owl-carousel').owlCarousel({
    margin:10,
    nav:true,
    navText: ["<img src='/img/left-arrow.PNG'>","<img src='/img/right-arrow.PNG'>"],
    responsive :{
        576 : {
            items:3
        },
        768 : {
            items: 5
        }
    }
})

$('.navbar-toggler').click(function(){
    setTimeout(() => {
        if ( $('#auth').css('visibility') == 'hidden' )
        $('#auth').css('visibility','visible');
        else
            $('#auth').css('visibility','hidden');
    }, 130);
});