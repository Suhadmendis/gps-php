<script src="http://maps.google.com/maps/api/js?key=AIzaSyClBKRU9iKfSLnXVTvdv11RvKwpCrfdoQI" type="text/javascript"></script>
<script type="text/javascript">
    //<![CDATA[
    var customIcons = {
        PAS: {
            icon: 'http://www.alldayrentacar.com/wp-content/uploads/2015/09/icoCountPassengerL.png',
            shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
        },
        CAB: {
            icon: 'http://downloadicons.net/sites/default/files/a-taxi-icon-12540.png',
            shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
        }
    };
    function load() {
        var map = new google.maps.Map(document.getElementById("map"), {
            center: new google.maps.LatLng(6.9536887, 79.8600295),
            zoom: 13,
            mapTypeId: 'roadmap'
        });
        var infoWindow = new google.maps.InfoWindow;
        // Change this depending on the name of your PHP file
        downloadUrl("driver_map_data_1.php", function (data) {
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
                    type: type,
                    map: map,
                    position: point,
                    icon: icon.icon,
                    shadow: icon.shadow
                });
                bindInfoWindow(marker, map, infoWindow, html, id);
            }
            document.getElementById('txt_did').value = "";
            document.getElementById('fname').value = "";
            document.getElementById('lname').value = "";
            document.getElementById('mob_no').value = "";
            document.getElementById('txt_hireid').value = "";
            document.getElementById('txthtime').value = "";
            document.getElementById('fname1').value = "";
            document.getElementById('lname1').value = "";
            document.getElementById('mob_no1').value = "";
            document.getElementById('msg_box').innerHTML = "";
        });
    }
    function bindInfoWindow(marker, map, infoWindow, html, id) {
        google.maps.event.addListener(marker, 'click', function () {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
            getdata(this.id, this.type);
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
    function GetXmlHttpObject() {
        var xmlHttp = null;
        try {
            // Firefox, Opera 8.0+, Safari
            xmlHttp = new XMLHttpRequest();
        } catch (e) {
            // Internet Explorer
            try {
                xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
        }
        return xmlHttp;
    }

    function getdata(cdata, cdata1) {

        xmlHttp = GetXmlHttpObject();
        if (xmlHttp == null) {
            alert("Browser does not support HTTP Request");
            return;
        }

        var url = "view_pend_data.php";
        url = url + "?Command=" + "get_data";
        url = url + "&id=" + cdata;
        url = url + "&ptype=" + cdata1;


        xmlHttp.onreadystatechange = assign_dt;
        xmlHttp.open("GET", url, true);
        xmlHttp.send(null);

    }




    function assign_dt() {

        var XMLAddress1;

        if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {

            XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("ptype");
            if (XMLAddress1[0].childNodes[0].nodeValue == "CAB") {

                document.getElementById('txt_did').value = "";
                document.getElementById('fname').value = "";
                document.getElementById('lname').value = "";
                document.getElementById('mob_no').value = "";


                XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("did");
                document.getElementById('txt_did').value = XMLAddress1[0].childNodes[0].nodeValue;

                XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("dfName");
                document.getElementById('fname').value = XMLAddress1[0].childNodes[0].nodeValue;

                XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("dlName");
                document.getElementById('lname').value = XMLAddress1[0].childNodes[0].nodeValue;

                XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("dMobileNo");
                document.getElementById('mob_no').value = XMLAddress1[0].childNodes[0].nodeValue;



            } else {

                document.getElementById('txt_hireid').value = "";
                document.getElementById('txthtime').value = "";
                document.getElementById('fname1').value = "";
                document.getElementById('lname1').value = "";
                document.getElementById('mob_no1').value = "";



                XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("hireID");
                document.getElementById('txt_hireid').value = XMLAddress1[0].childNodes[0].nodeValue;

                XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("hireT");
                document.getElementById('txthtime').value = XMLAddress1[0].childNodes[0].nodeValue;

                XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("fname");
                document.getElementById('fname1').value = XMLAddress1[0].childNodes[0].nodeValue;

                XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("lname");
                document.getElementById('lname1').value = XMLAddress1[0].childNodes[0].nodeValue;

                XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("contact");
                document.getElementById('mob_no1').value = XMLAddress1[0].childNodes[0].nodeValue;


            }





        }

    }

    function doNothing() {

    }


    //]]>
</script>


<!-- Main content -->
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Free Drivers</h3>
        </div>
        <form role="form" class="form-horizontal">
            <div class="box-body">

                <div class="form-group">
                    <a onclick="load();" class="btn btn-default">
                        <span class="fa fa-refresh"></span> &nbsp; Refresh
                    </a>

                </div>


                <div id="msg_box"  class="span12 text-center"  >

                </div>
                <div class="col-md-7" >
                    <div id="map" style="width: 650px; height: 400px"></div>
                </div>

                <div class="col-md-5" >
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="txt_did">Driver ID</label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="Driver ID" id="txt_did" class="form-control input-sm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="fname">Name</label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="First" id="fname" class="form-control input-sm">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Last" id="lname" class="form-control input-sm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="mob_no">Mobile No</label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="Mobile" id="mob_no" class="form-control input-sm">
                        </div>                   
                    </div>

                    <div class="form-group">

                    </div>


                    

                </div>
            </div>
        </form>
    </div> 

</section>


<script src="js/view_pend.js">
