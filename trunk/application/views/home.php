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
        <script type="text/javascript">
            var map;
            function initialize() {
                var mapOptions = {
                    center: new google.maps.LatLng(-34.397, 150.644),
                    zoom: 8,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
            }
            window.onload = function() {
                var height = $('#container').height();
                $('#container').height(height - 40);
                $('#rightcol .box .content').hide();
                $('#rightcol .box .header').click(function() {
                    var id = $(this).parent().attr('id');
                    $('#rightcol #' + id + '.box .content').toggle('fast');
                });
                initialize();
            }
        </script>
    </head>
    <body>
        <div id="header_bar"></div>
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
    </body>
</html>