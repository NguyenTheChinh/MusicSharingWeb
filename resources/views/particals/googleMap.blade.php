<div id="googleMap"></div>
<script>
    function mapMusicSharing() {
        myCenter=new google.maps.LatLng(20.9936257,105.8490514,17);
        var mapOptions= {
            center:myCenter,
            zoom:12, scrollwheel: false, draggable: false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

        var marker = new google.maps.Marker({
            position: myCenter,
        });
        marker.setMap(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6AXWniNtUPzzFsRnIADghUECXvKlNptI &callback=mapMusicSharing"></script>