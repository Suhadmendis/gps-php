<?php

require_once ("connection_sql.php");

date_default_timezone_set('Asia/Colombo');

if (isset($_GET['Command'])) {
    if ($_GET['Command'] == "getnw") {
        header('Content-Type: text/xml');
        $sql = "select did from driver order by did desc";
        $result = $conn->query($sql);
        $row = $result->fetch();
        $tono = ($row['did'] + 1);
        $dt = date('Y-m-d');
        $ResponseXML = "";
        $ResponseXML .= "<salesdetails>";
        $ResponseXML .= "<did><![CDATA[" . $tono . "]]></did>";
        $ResponseXML .= "<dt><![CDATA[" . $dt . "]]></dt>";
        $ResponseXML .= "</salesdetails>";
        echo $ResponseXML;
    }
    if ($_GET["Command"] == "pass_driver") {

 

    $cuscode = $_GET["custno"];

    $sql = "Select * from driver where did='" . $cuscode . "' ";

    $sql = $conn->query($sql);
    if ($row = $sql->fetch()) {
        header('Content-Type: text/xml');
        $ResponseXML = "";
        $ResponseXML .= "<salesdetails>";
        $ResponseXML .= "<did><![CDATA[" . $row['did'] . "]]></did>";
        $ResponseXML .= "<dfName><![CDATA[" . $row['dfName'] . "]]></dfName>";
        $ResponseXML .= "<dlName><![CDATA[" . $row['dlName'] . "]]></dlName>";
        $ResponseXML .= "<dMobileNo><![CDATA[" . $row['dMobileNo'] . "]]></dMobileNo>";
        $ResponseXML .= "<contdet><![CDATA[" . $row['dContact'] . "]]></contdet>";
        $ResponseXML .= "<image><![CDATA[" . $row['image'] . "]]></image>";
        $ResponseXML .= "</salesdetails>";
        echo $ResponseXML;
    }


   
 
}
}
if (isset($_POST['Command'])) {

    if ($_POST['Command'] == "save") {

        if (!isset($_POST['img'])) {
            $target_dir = "uploads/";
            $imageFileType = $_FILES["file"]["tmp_name"];
            $path = $_FILES['file']["name"];
            $imageFileType = pathinfo($path, PATHINFO_EXTENSION);

            $target_file = $target_dir . $_POST['did'] . "." . $imageFileType;
            (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file));
        } else {
            $target_file = $_POST['img'];
        }

        $sql = "select * from driver where did = '" . $_POST['did'] . "'";
        $result = $conn->query($sql);
        if ($row = $result->fetch()) {
            $sql = "update driver set dMobileNo= '" . $_POST['dMobileNo'] . "',dfName='" . $_POST['fname'] . "',dlName='" . $_POST['lname'] . "',dContact='" . $_POST['contdet'] . "',image='" . $target_file . "' where did = '" . $_POST['did'] . "'";
        } else {
            $sql = "insert into driver (dMobileNo,dfName,dlName,dContact,image) values ('" . $_POST['dMobileNo'] . "','" . $_POST['fname'] . "','" . $_POST['lname'] . "','" . $_POST['contdet'] . "','" . $target_file . "')";
        }
        $result = $conn->query($sql);
        echo "The Driver Master File Has been Updated";
    }
}



