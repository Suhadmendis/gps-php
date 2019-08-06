<!DOCTYPE html>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyClBKRU9iKfSLnXVTvdv11RvKwpCrfdoQI&" type="text/javascript"></script>


<?php
    session_start();
?>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    </head>

    <body>
        <div class="col-md-2" style="height: 750px;">
            <div class="nav-stacked">
                <ul class="nav nav-pills nav-stacked">
                    <h1><a href="index.php"><span  style="color: black;">GPS Tracking</span></a></h1>

                    <li role="presentation" class="active"><a href="#">Home</a></li>
                    <li role="presentation"><a href="#">Profile</a></li>
                    <li role="presentation"><a href="#">Messages</a></li>
                </ul>
            </div>
        </div>


        <div class="col-md-9">
           
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#content1">All Vehicles</a></li>
                <li><a data-toggle="tab" href="#content2">Reports</a></li>
                <li><a data-toggle="tab" href="#content3">BackTrack</a></li>
                <li><a data-toggle="tab" href="#content4">Drivers</a></li>
            </ul>

            <div class="tab-content">
                <div id="content1" class="tab-pane fade in active">
                  
                    <?php
                    include './ba.php';
                    ?>
                </div>
                <div id="content2" class="tab-pane fade">
                   <?php
                    include './ba_1.php';
                    ?>
                </div>
                <div id="content3" class="tab-pane fade">
                    <?php
                    include './ba_2.php';
                    ?>
                </div>
                <div id="content4" class="tab-pane fade">
                    <?php
                    include './ba_3.php';
                    ?>
                </div>
            </div>
        </div>






    </body>
</html>

