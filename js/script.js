$(function() {
    $('.p-header__menu').on('click', function() {
        $('.l-sidebar').toggleClass('open');
        $('.c-cover__overlay').toggleClass('active');
        $('body').css('overflow','hidden');
    });
    $('.p-sidebar__button').on('click', function() {
        $('.l-sidebar').removeClass('open');
        $('.c-cover__overlay').removeClass('active');
        $('body').css('overflow','visible');
    });
    $(window).resize(function() {
        $('.l-sidebar').removeClass('open');
        $('.c-cover__overlay').removeClass('active');
        $('body').css('overflow','visible');
    });
});



//===========jQuery作動のチェック用=============
// $(function() {
//     alert("jQueryが正常に動作しています！");
//   });
