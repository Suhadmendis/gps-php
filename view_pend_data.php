<?php

require("./connection_sql.php");


header("Content-type: text/xml");


if ($_GET['Command'] == "get_data") {

    if ($_GET['ptype'] == "CAB") {
        $sql = "select * from driver where did = '" . $_GET['id'] . "'";
        $result = $conn->query($sql);
        if ($row = $result->fetch()) {
            $ResponseXML = "";
            $ResponseXML .= "<salesdetails>";
            $ResponseXML .= "<did><![CDATA[" . $row['did'] . "]]></did>";
            $ResponseXML .= "<dfName><![CDATA[" . $row['dfName'] . "]]></dfName>";
            $ResponseXML .= "<dlName><![CDATA[" . $row['dlName'] . "]]></dlName>";
            $ResponseXML .= "<dMobileNo><![CDATA[" . $row['dMobileNo'] . "]]></dMobileNo>";
            $ResponseXML .= "<ptype><![CDATA[" . $_GET['ptype'] . "]]></ptype>";
            
            $ResponseXML .= "</salesdetails>";
            echo $ResponseXML;
        }
    } else {
        $sql = "select * from hires where hireID = '" . $_GET['id'] . "'";
        $result = $conn->query($sql);
        if ($row = $result->fetch()) {
            $ResponseXML = "";
            $ResponseXML .= "<salesdetails>";
            $ResponseXML .= "<hireID><![CDATA[" . $row['hireID'] . "]]></hireID>";
            $ResponseXML .= "<hireT><![CDATA[" . $row['hireT'] . "]]></hireT>";
            $ResponseXML .= "<ptype><![CDATA[" . $_GET['ptype'] . "]]></ptype>";
            $sql = "select * from passenger where pasID = '" . $row['pasID'] . "'";
            $result1 = $conn->query($sql);
            if ($row1 = $result1->fetch()) {
                $ResponseXML .= "<fname><![CDATA[" . $row1['fname'] . "]]></fname>";
                $ResponseXML .= "<lname><![CDATA[" . $row1['lname'] . "]]></lname>";
                $ResponseXML .= "<contact><![CDATA[" . $row1['contact'] . "]]></contact>";
            }
            $ResponseXML .= "</salesdetails>";
            echo $ResponseXML;
        }
    }
}


if ($_GET['Command'] == "save") {
    
    $sql = "update hires set did = '" . $_GET['did'] . "' where hireid = '" . $_GET['hireid'] . "'";
    $result1 = $conn->query($sql);        
    echo "Saved";
    
}