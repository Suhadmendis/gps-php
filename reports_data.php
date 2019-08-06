<?php
require("./connection_sql.php");
header("Content-type: text/xml");
if ($_GET["Command"] == "getcontent") {

    $R = "";
    $ResponseXML = "";
    $sql = "SELECT * FROM driver where date_time_gps between '" . $_GET["dtFrom"] . "' and '" . $_GET["dtTo"] . "' order by date_time_gps";
    $ResponseXML .= "<salesdetails>";
    foreach ($conn->query($sql) as $row) {

        $R .= "<div class='panel-body'>
        <table width='100%' class='table table-striped table-bordered table-hover' id='dataTables-example'>
                <thead>
                   <tr>
                    <th width = '121'>First Name</th>
                    <th width = '121'>Last Name</th>
                    <th width = '121'>Longitude</th>
                    <th width = '121'>Latitude</th>
                    <th width = '121'>Date And Time</th>
                </tr>
         </thead>
            <tbody>
                <tr>
                    <th>" . $row['dfName'] . "</th>
                    <th>" . $row['dlName'] . "</th>
                    <th>" . $row['dlatitude'] . "</th>
                    <th>" . $row['dLongitude'] . "</th>
                    <th>" . $row['date_time_gps'] . "</th>
                </tr>
            </tbody>
        </table>
    </div>";
}
    $ResponseXML .= "<content><![CDATA[" . $R . "]]></content>";
    $ResponseXML .= "</salesdetails>";
    echo $ResponseXML;
    
}
?>
