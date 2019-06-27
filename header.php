


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
   
        
        <meta name="HandheldFriendly" content="true" />        
        <title>MMM Coperation - Official Website</title>        
        <meta name="keywords" content="MMM Cooperation, mmm, mmm official, mmmextra, mmmofficial, philippines, mmm philippines, philippines mmm, mmmindonesia, mavro, sergey mavrodi, manager, mmm manager, mmm guiders,  mmm tutorial, mmmoffice, social financial, financial apocalypse, online business, MMM Cooperation tutorial" />
        <meta name="description" content="17 Jul 2016 - MMM Cooperation is a community of ordinary people, selflessly helping each other, a kind of the World Fund of mutual aid. This is the first sprout of something new in the modern soulless and ruthless world of greed and hard cash. The goal here is not the money. The goal is to destroy the world's unjust financial system. Financial Apocalypse" />
        <meta name="author" content="Sergey Mavrodi" />
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="3 days" />
        <meta property="og:title" content="MMM Cooperation - Official Website !" />
        <meta property="og:description" content="MMM is a community of ordinary people, selflessly helping each other, a kind of the World Fund of mutual aid. This is the first sprout of something new in the modern soulless and ruthless world of greed and hard cash. The goal here is not the money. The goal is to destroy the world's unjust financial system. Financial Apocalypse" />
        <meta property="og:image" content="image.jpg" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="favicon.ico" type="image/icon" />
        <meta property="og:image" content="fb_logo.jpg" />
        <link rel="stylesheet" href="css/prettyPhoto.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style37.css">
        <link rel="stylesheet" href="css/jquery-ui.css">


        <script src="js/jquery37.js" type="text/javascript" data-cfasync="false"></script>
        <script src="js/modernizr37.js" type="text/javascript" data-cfasync="false"></script>
        <script src="js/plugins37.js" type="text/javascript" data-cfasync="false"></script>
        <script src="js/main.js" type="text/javascript" data-cfasync="false"></script>
        <script src="js/jquery.cookie37.js" type="text/javascript" data-cfasync="false"></script>
        <script src="js/common37.js" type="text/javascript" data-cfasync="false"></script>
        <script src="js/jquery-ui37.js" type="text/javascript" data-cfasync="false"></script>
        <script src="js/jquery.jcarousel.min37.js" type="text/javascript" data-cfasync="false"></script>
        <script src="js/top_1037.js" type="text/javascript" data-cfasync="false"></script>
        <script src="js/liveList37.js" type="text/javascript" data-cfasync="false"></script>
        <script src="//code.jivosite.com/widget.js" jv-id="ueVeKQwK4p" async></script>
      
    <style>.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}</style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       
       <script type="text/javascript">
            function isoDateReviver(value) {
                var dateString = value.substr(6);
                var currentTime = new Date(parseInt(dateString));
                var month = currentTime.getMonth() + 1;
                var day = currentTime.getDate();
                var year = currentTime.getFullYear();
                var date = day + "/" + month + "/" + year;
                return date;
            }
            (function ($) {
                $(function () {
                    var marginTop;
                    var msg = '';
                    $.ajax({
                        type: "POST",
                        contentType: "application/json; charset=utf-8",
                        url: "Default.aspx/DeleteMultiple",
                        data: "{'Message':'" + msg + "'}",
                        dataType: "json",
                        success: function (data) {
                            var item = data.d;
                            $('.gh_fb_main .gh_fb_main_wrap').html('');
                            var jsonData = JSON.parse(item);

                            for (var i = 0; i < jsonData.length; i++) {
                                var date = isoDateReviver(jsonData[i].savedate);
                                var country = jsonData[i].Msg ? (' | <b>' + '' + '</b>') : '';
                                var text = jsonData[i].Msg;
                                $('.gh_fb_main .gh_fb_main_wrap').append('<div class="item">\
                               <p class="date_country"><b>'+ date + '</b> ' + "<br/>" + '</p>\
                               <p class="text">'+ text + '</p>\
                               </div>');
                            }
                            marginTop = 0; setTimeout(initList, 1000 * 60 * 5);
                        }
                    })
                    var initList = function () {
                    };
                    initList(); $('.gh_fb_main').show();
                    var nextAnimate = function () {
                        marginTop -= 1; $('.gh_fb_main .gh_fb_main_wrap').css({ 'margin-top': marginTop }); var firstItem = $('.gh_fb_main .gh_fb_main_wrap .item:first');
                        var firstItemHeight = firstItem.outerHeight(); if (firstItem.position().top + firstItemHeight < $('.gh_fb_main').position().top - 100) {
                            $('.gh_fb_main .gh_fb_main_wrap').append(firstItem.html());
                        }
                        setTimeout(nextAnimate, 70);
                    }; nextAnimate();
                });
            })(jQuery);
        </script>
        <style type="text/css">
            .style1 {
                font-size: 18px;
                font-weight: bold;
                font-family: Arial, Helvetica, sans-serif;
            }
            .style2 {
                color: #FF0000;
            }
        </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130784597-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130784597-1');
</script>

     

</head>
<body class="global en mpage" >
    <script>
    function getrs1() {
        $("#nw").css("display", "none");
    }
    </script>

       <div class="all_wrap">
        <div class="banner" style="background: #2C2C2C"><a href="#"><img src="site/img/banner.jpg" /></a></div>
        <div class="wrapper">

            <div class="started_video" style="display: none;">
                <div class="sv_wrapper">
                    <div class="close" alt="Close" title="Close">&times;</div>
                    <div class="sv_video"></div>
                </div>
            </div>
            <script>
                window.videoUrl = '';
            </script>
            <header   style="">
                <div class="menu_bg">
                    <nav>
                        <a href="./" class="active ">Home</a>
                        <a href="what_is_mmm.php">What is MMM</a>
                        <a href="#">ideology</a>
                        <a href="faq.php">FAQ</a>
                        <a href="mmm_abroad.php">MMM Abroad</a>      
                        <a href="News.php">News</a> 						
                        <a href="Testrimonials.php">Testimonials</a> 
                        
                     
                  
                    </nav>
					<ul style="">

                        <div class="bitcoin-help"><a href="Bitcoin" class="bitcoin-help-btn">Bitcoin</a></div>

                     

                    </ul>
          
                </div>
                <div class="sub_menu">

                    <a href="legality.php" class="grey_buttons">Legality</a>
                    <a href="how_to_start_participating.php" class="grey_buttons1 howstart1" style="float:left; background-color:red">How to participate MMM Cooperation?</a>
                    
                    
                    
                    <a href="registration.php" class="reg_button">Registration</a>



                    <div class="dropdown">
                        <a href="https://mmm-office.net" target="_blank" class="log_button">Login to MMM</a>
                   
                    </div>
                </div>

 

                    <div id="loading-layer">Loading...</div>
</header>
    <div class="logo_wrap">
                <a href="./" title="Return on main" class="logo_href">
                    <i class="logo">Cooperation</i>
                    <i class="sfn">SOCIAL FINANCIAL NETWORK</i>
                    <i class="spm"></i>
                </a>
                <i class="fkmi"></i>
                <br />
              <div class="youtube-group">
<a href="#" class="youtube-item" target="_blank">Official Cooperation</a>
<a href="#" class="youtube-item" target="_blank">MMM Takes Care</a>

</div>
                <br />

            </div>


        