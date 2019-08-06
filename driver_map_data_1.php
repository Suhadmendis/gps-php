<?php

require("./connection_sql.php");


header("Content-type: text/xml");

function parseToXML($htmlStr) {
    $xmlStr = str_replace('<', '&lt;', $htmlStr);
    $xmlStr = str_replace('>', '&gt;', $xmlStr);
    $xmlStr = str_replace('"', '&quot;', $xmlStr);
    $xmlStr = str_replace("'", '&#39;', $xmlStr);
    $xmlStr = str_replace("&", '&amp;', $xmlStr);
    return $xmlStr;
}

// Select all the rows in the markers table
$sql = "SELECT * FROM driver WHERE availability='1'";


header("Content-type: text/xml");
echo '<markers>';

// Iterate through the rows, adding XML nodes for each
foreach ($conn->query($sql) as $row) {
    // ADD TO XML DOCUMENT NODE
    
    echo '<marker ';
    echo 'id="' . parseToXML($row['did']) . '" ';
    echo 'address="' . parseToXML($row['did']) . '" ';
    echo 'name="' . parseToXML($row['dfName'] . " " . $row['dlName']) . '" ';
    echo 'tel="' . $row['dMobileNo'] . '" '; 
    echo 'lat="' . $row['dlatitude'] . '" ';
    echo 'lng="' . $row['dLongitude'] . '" ';
    echo 'type="CAB"';
    echo '/>';
}
 

// End XML file
echo '</markers>';
?>
