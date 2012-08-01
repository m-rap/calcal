var map;
function initialize() {
    var container = document.getElementById('container');
    var h = container.clientHeight;
    container.style.height = (h - 40) + 'px';
    $('#rightcol .box .content').hide();
    $('#rightcol .box .header').click(function() {
        if ($(this).next().is(':hidden')) {
            $('#rightcol .box .content').slideUp('fast');
            $(this).next().slideToggle('fast');
        } else {
            $(this).next().slideUp('fast');
        }
    });

    var mapOptions = {
        center: new google.maps.LatLng(-7.27776729536892, 112.79326719665528),
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    
    var marker = new google.maps.Marker({
        position: map.getCenter(),
        map: map,
        draggable: true,
        flat: true
    });
    
    google.maps.event.addListener(marker, 'position_changed', function() {
        var latLng = marker.getPosition();
        $('#txt_keyword').val(latLng.lat() + ', ' + latLng.lng());
    });
    
    $('#btn_search').click(function() {
        marker.setPosition(map.getCenter());
    });
}