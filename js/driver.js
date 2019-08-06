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


function newent() {
    document.getElementById("txt_did").value = "";
    document.getElementById("fname").value = "";
    document.getElementById("lname").value = "";
    document.getElementById("contdet").value = "";
    document.getElementById("doldimg").value = "";
    document.getElementById("mob_no").value = "";
    document.getElementById("msg_box").innerHTML = "";
    document.getElementById("oldimg").src = "";


    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Browser does not support HTTP Request");
        return;
    }

    var url = "driver_data.php";
    url = url + "?Command=" + "getnw";


    xmlHttp.onreadystatechange = assign_dt;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);

}


function assign_dt() {

    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("did");
        document.getElementById('txt_did').value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("dt");
        document.getElementById('invdate').value = XMLAddress1[0].childNodes[0].nodeValue;

    }

}

function save_inv() {

    var files = $('#file-3')[0].files; //where files would be the id of your multi file input
//or use document.getElementById('files').files;
    var name = document.getElementById('file-3');

    t = 0;
    var data = new FormData();
    for (var i = 0, f; f = files[i]; i++) {
        var alpha = name.files[0];
        if (alpha == "") {
            t = 0;
        } else {
            t = 1;
        }
        data.append('file', alpha);
    }

    if (t == 0) {
        data.append('img', document.getElementById('doldimg').value);
    }


    data.append('Command', "save");
    data.append('did', document.getElementById('txt_did').value);
    data.append('invdate', document.getElementById('invdate').value);
    data.append('fname', document.getElementById('fname').value);
    data.append('lname', document.getElementById('lname').value);
    data.append('contdet', document.getElementById('contdet').value);
    data.append('dMobileNo', document.getElementById('txt_did').value);

    $.ajax({
        url: 'driver_data.php',
        data: data,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (msg) {

            document.getElementById('msg_box').innerHTML = "<div class='alert alert-success' role='alert'><span class='center-block'>Saved</span></div>";

        }
    });



}


function custno(custno, stname)
{
    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null)
    {
        alert("Browser does not support HTTP Request");
        return;
    }
    var url = "driver_data.php";
    url = url + "?Command=" + "pass_driver";
    url = url + "&custno=" + custno;
    url = url + "&stname=" + stname;




    xmlHttp.onreadystatechange = passcusresult_driver;

    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);


}


function passcusresult_driver()
{
    var XMLAddress1;

    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
    {



        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("did");
        opener.document.form1.txt_did.value = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("dfName");
        opener.document.form1.fname.value = XMLAddress1[0].childNodes[0].nodeValue;


        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("dlName");
        opener.document.form1.lname.value = XMLAddress1[0].childNodes[0].nodeValue;


        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("dMobileNo");
        opener.document.form1.mob_no.value = XMLAddress1[0].childNodes[0].nodeValue;


        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("contdet");
        opener.document.form1.contdet.value = XMLAddress1[0].childNodes[0].nodeValue;


        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("image");
        opener.document.form1.oldimg.src = XMLAddress1[0].childNodes[0].nodeValue;

        XMLAddress1 = xmlHttp.responseXML.getElementsByTagName("image");
        opener.document.form1.doldimg.value = XMLAddress1[0].childNodes[0].nodeValue;


        self.close();
    }
}