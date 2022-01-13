$(window).on('load',function () {
    $(".trigger").on('click',function(){
       $('.hover_bkgr_fricc').show();
    });
    $('.hover_bkgr_fricc').on('click',function(){
        $('.hover_bkgr_fricc').hide();
    });
    $('.popupCloseButton').on('click',function(){
        $('.hover_bkgr_fricc').hide();
    });
});
