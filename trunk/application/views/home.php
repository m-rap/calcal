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
                initialize();
            }
        </script>
    </head>
    <body>
        <div id="header_bar"></div>
        <div id="container">
            <div id="right_col"></div>
            <div id="map_canvas"></div>
        </div>
    </body>
</html>