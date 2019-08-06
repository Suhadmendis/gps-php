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
function load() {


//    localStorage.setItem("lastname", "Smith");

    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Browser does not support HTTP Request");
        return;
    }
    
    var url = "backTrack_data.php";
    url = url + "&dtFrom=" + document.getElementById('dtFrom').value;
    url = url + "&dtTo=" + document.getElementById('dtTo').value;
    url = url + "&txt_name=" + document.getElementById('txt_name').value;
    
    alert(url);
    xmlHttp.onreadystatechange = assign_dt;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);
}

function assign_dt() {
    var XMLAddress1;
    
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
    {
        
        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("markers");
        document.getElementById('map').innerHTML = XMLAddress1[0].childNodes[0].nodeValue;
    }
}