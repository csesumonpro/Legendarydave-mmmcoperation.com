"use strict";

//(function ($) {
//    $(function () {
//        var marginTop; var initList = function () {
//            $('.gh_fb_main .gh_fb_main_wrap').html('');
//            window.WINLETTERS_LIVE_LIST.forEach(function (item) {
//                var date = item.datetime.split(' ')[0]; var country = item.siteName ? (' | <b>' + item.siteName + '</b>') : '';

//                var text = item.text; $('.gh_fb_main .gh_fb_main_wrap').append('<div class="item">\
//                    <p class="date_country"><b>'+date+'</b> '+country+'</p>\
//            <p class="text">'+"dfgydfy"+'</p>\
//            </div>');
//            }); marginTop = 0; setTimeout(initList, 1000 * 60 * 5);
//        }; initList(); $('.gh_fb_main').show(); var nextAnimate = function () {
//            marginTop -= 1; $('.gh_fb_main .gh_fb_main_wrap').css({ 'margin-top': marginTop }); var firstItem = $('.gh_fb_main .gh_fb_main_wrap .item:first');
//            var firstItemHeight = firstItem.outerHeight(); if (firstItem.position().top + firstItemHeight < $('.gh_fb_main').position().top - 100) {
//                $('.gh_fb_main .gh_fb_main_wrap').append(firstItem.html());
//            }
//setTimeout(nextAnimate,70);};nextAnimate();});})(jQuery);