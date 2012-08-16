<!DOCTYPE html>
<html>
    <head>
        <title>Calcal</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="<?php echo base_url(); ?>static/css/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAi1czVwATZeCHqMNi3lay72unp-43ln6I&sensor=false">
        </script>
        <script type="text/javascript" src="<?php echo base_url(); ?>static/js/main.js"></script>
    </head>
    <body onload="initialize()">
        <div id="header_bar">
          <div class="menu">
            <div class="item"> <a class="link icon_mail"></a>
              <div class="item_content">
                <h2>Contact us</h2>
                <p> <a href="mailto:info@tympanus.net">eMail</a> <a href="http://www.twitter.com/codrops/">Twitter</a> <a href="http://www.facebook.com/pages/Codrops/159107397912">Facebook</a> </p>
              </div>
            </div>
            <div class="item"> <a class="link icon_help"></a>
              <div class="item_content">
                <h2>Help</h2>
                <p> <a href="#">FAQ</a> <a href="#">Live Support</a> <a href="#">Tickets</a> </p>
              </div>
            </div>
            <div class="item"> <a class="link icon_find"></a>
              <div class="item_content">
                <h2>Search</h2>
                <p>
                  <input type="text">
                  </input>
                  <a href="">Go</a> </p>
              </div>
            </div>
            <div class="item"> <a class="link icon_photos"></a>
              <div class="item_content">
                <h2>Image Gallery</h2>
                <p> <a href="#">Categories</a> <a href="#">Archives</a> <a href="#">Featured</a> </p>
              </div>
            </div>
            <div class="item"> <a class="link icon_home"></a>
              <div class="item_content">
                <h2>Start from here</h2>
                <p> <a href="http://www.tympanus.net/">Services</a> <a href="http://www.tympanus.net/">Portfolio</a> <a href="http://www.tympanus.net/">Pricing</a> </p>
              </div>
            </div>
          </div>
        </div>
        <div id="container">
            <div id="rightcol">
                <input type="text" id="txt_keyword" />
                <input type="button" id="btn_search" />
                <div id="box1" class="box">
                    <div class="header"></div>
                    <div class="content"></div>
                </div>
                <div id="box2" class="box">
                    <div class="header"></div>
                    <div class="content"></div>
                </div>
                <div id="box3" class="box">
                    <div class="header"></div>
                    <div class="content"></div>
                </div>
            </div>
            <div id="map_canvas"></div>
        </div>
                <script src="<?php echo base_url(); ?>static/js/jquery-css-transform.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>static/js/jquery-animate-css-rotate-scale.js" type="text/javascript"></script>
        <script>
            $('.item').hover(
                function(){
                    var $this = $(this);
                    expand($this);
                },
                function(){
                    var $this = $(this);
                    collapse($this);
                }
            );
            function expand($elem){
                var angle = 0;
                var t = setInterval(function () {
                    if(angle == 1440){
                        clearInterval(t);
                        return;
                    }
                    angle += 40;
                    $('.link',$elem).stop().animate({rotate: '+=-40deg'}, 0);
                },10);
                $elem.stop().animate({width:'268px'}, 1000)
                .find('.item_content').fadeIn(400,function(){
                    $(this).find('p').stop(true,true).fadeIn(600);
                });
            }
            function collapse($elem){
                var angle = 1440;
                var t = setInterval(function () {
                    if(angle == 0){
                        clearInterval(t);
                        return;
                    }
                    angle -= 40;
                    $('.link',$elem).stop().animate({rotate: '+=40deg'}, 0);
                },10);
                $elem.stop().animate({width:'52px'}, 1000)
                .find('.item_content').stop(true,true).fadeOut().find('p').stop(true,true).fadeOut();
            }
        </script>
</body>
</html>