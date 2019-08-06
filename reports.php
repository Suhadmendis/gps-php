
<section>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><b>GET MILEAGE REPORT</b></h3>
        </div>
        <form name= "form1" role="form" class="form-horizontal">
            <div class="box-body">
                <div class="form-group-sm">



                    <a onclick="newent();" class="btn btn-default btn-sm">
                        <span class="fa fa-user-plus"></span> &nbsp; NEW
                    </a>

                    <a onclick="save_inv();" class="btn btn-success btn-sm">
                        <span class="fa fa-save"></span> &nbsp; SAVE
                    </a>
                    <a onclick="edit();" class="btn btn-warning btn-sm">
                        <span class="glyphicon glyphicon-edit"></span> &nbsp; EDIT
                    </a>

                    <a onclick="load();" class="btn btn-info btn-sm">
                        <span class="glyphicon glyphicon-search"></span> &nbsp; FIND
                    </a>

                    <a onclick="print();" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-print"></span> &nbsp; PRINT
                    </a>


                    <a onclick="sess_chk('cancel', 'crn');" class="btn btn-danger btn-sm">
                        <span class="glyphicon glyphicon-trash"></span> &nbsp; DELETE
                    </a>
                    <div class="form-group"></div>
                </div>
                
                
                
                <div id="msg_box"  class="span12 text-center"  ></div>

                <div class="form-group-sm">
                    <label class="col-sm-2 labelColour input-sm" >Select Vehicle Name</label>
                    <div class="col-sm-2 form-group-sm">
                        <?php
                        include './connection_sql.php';
                        echo"<select id = \"vehicle_name\"  class =\"form-control input-sm\">";
                        $sql = "select * from driver group by dfName";
                        foreach ($conn->query($sql) as $row) {
                            echo "<option >" . $row["dfName"] . "</option>";
                        }
                        echo"</select>";
                        ?>
                    </div>
                </div>
                <div class="form-group"></div>
                <div class="form-group-sm">
                    <label class="col-sm-2 labelColour input-sm" >Select Start Date</label>
                    <div class="col-sm-2 form-group-sm">

                        <input type="date" id="dtFrom" value="<?php echo date('Y-m-d'); ?>" class="form-control ">       
                    </div>
                </div>
                <div class="form-group"></div>
                <div class="form-group-sm">
                    <label class="col-sm-2 labelColour input-sm" >Select End Date</label>
                    <div class="col-sm-2 form-group-sm">

                        <input type="date" id="dtTo" value="<?php echo date('Y-m-d'); ?>" class="form-control dt">       
                    </div>
                </div>


            </div>

            <div>
                <br><br>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <b>Vehicle Report table</b>
                            </div>

                            <div id="content"></div>
                            <!-- /.panel-heading -->
                            <!--                                    <div class="panel-body">
                                                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>No</th>
                                                                                <th>Date And Time</th>
                                                                                <th>Latitude</th>
                                                                                <th>Logitude</th>
                                                                                <th>Mileage</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>-->
                            <?php
//                                                include './connection_sql.php';
//                                                $sql = "SELECT * FROM driver where date_time_gps between '" . $_GET["dtFrom"] . "' and '" . $_GET["dtTo"] . "' order by date_time_gps";
//                                                foreach ($conn->query($sql) as $row) {
//                                                    echo "<tr>";
//                                                    echo "<td>" . $row['did'] . "</td>";
//                                                    echo "<td>" . $row['date_time_gps'] . "</td>";
//                                                    echo "<td>" . $row['dlatitude'] . "</td>";
//                                                    echo "<td>" . $row['dLongitude'] . "</td>";
//                                                    echo "<td>" . $row['image'] . "</td>";
//                                                    echo "</tr>";
//                                                }
                            ?>
                            <!--                                            </tbody>
                                                                    </table>
                                                                     /.table-responsive 
                                                                </div>-->
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            </div>
        </form>
    </div>
</section>

<script src="js/report.js"></script>
