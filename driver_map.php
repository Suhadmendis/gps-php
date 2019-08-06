<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Google Maps AJAX + mySQL/PHP Example</title>
        <script src="http://maps.google.com/maps/api/js?key= AIzaSyAlxJtXVduPCmyHxIFSsbkZW87IH-rUt_g"
        type="text/javascript"></script>
        <script type="text/javascript">
            //<![CDATA[
            var customIcons = {
                restaurant: {
                    icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png',
                    shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
                },
                CAB: {
                    icon: 'http://downloadicons.net/sites/default/files/a-taxi-icon-12540.png',
                    shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
                }
            };
            function load() {
                var map = new google.maps.Map(document.getElementById("map"), {
                    center: new google.maps.LatLng(6.9270786, 79.9),
                    zoom: 13,
                    mapTypeId: 'roadmap'
                });
                var infoWindow = new google.maps.InfoWindow;
                // Change this depending on the name of your PHP file
                downloadUrl("driver_map_data.php", function (data) {
                    var xml = data.responseXML;
                    var markers = xml.documentElement.getElementsByTagName("marker");
                    for (var i = 0; i < markers.length; i++) {
                        var id = markers[i].getAttribute("id");
                        var name = markers[i].getAttribute("name");
                        var address = markers[i].getAttribute("address");
                        var address1 = markers[i].getAttribute("address1");
                        var tel = markers[i].getAttribute("tel");
                        var type = markers[i].getAttribute("type");
                        var point = new google.maps.LatLng(
                                parseFloat(markers[i].getAttribute("lat")),
                                parseFloat(markers[i].getAttribute("lng")));

                        var html = "";
                        if (type == "PAS") {
                            html = "<b>" + name + "</b> <br/><b>From</b> =" + address1 + "<br/><b>To</b> =" + address;
                        } else {
                            html = "<b>" + name + "</b> <br/><b>Mob</b> =" + tel + "<br/>";
                        }
                        var icon = customIcons[type] || {};
                        var marker = new google.maps.Marker({
                            id: id,
                            map: map,
                            position: point,
                            icon: icon.icon,
                            shadow: icon.shadow
                        });
                        bindInfoWindow(marker, map, infoWindow, html, id);
                    }
                });
            }
            function bindInfoWindow(marker, map, infoWindow, html, id) {
                google.maps.event.addListener(marker, 'click', function () {
                    infoWindow.setContent(html);
                    infoWindow.open(map, marker);
                    //window.location = "www.cickstart.com/" + id;
                });
            }
            function downloadUrl(url, callback) {
                var request = window.ActiveXObject ?
                        new ActiveXObject('Microsoft.XMLHTTP') :
                        new XMLHttpRequest;
                request.onreadystatechange = function () {
                    if (request.readyState == 4) {
                        request.onreadystatechange = doNothing;
                        callback(request, request.status);
                    }
                };
                request.open('GET', url, true);
                request.send(null);
            }


            function doNothing() {

            }

            function loadnw() {
                load();
                var html = "<b>sdsds</b> <br/>ddd";
                var infoWindow = new google.maps.InfoWindow;
                var id = "ccc";
                var point = new google.maps.LatLng(6.9271484, 79.8926666);
                var marker = new google.maps.Marker({
                    id: "cc",
                    map: map,
                    position: point
                });
                bindInfoWindow(marker, map, infoWindow, html, id);

            }
            //]]>
        </script>
    </head>

    <body onload="load()">
        <div id="map" style="width: 1000px; height: 800px"></div>

        <a onclick="load();">Add New Loc</a>

    </body>
</html>