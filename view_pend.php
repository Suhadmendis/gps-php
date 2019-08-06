<script src="http://maps.google.com/maps/api/js?key=AIzaSyClBKRU9iKfSLnXVTvdv11RvKwpCrfdoQI" type="text/javascript"></script>

<!-- Main content -->
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Pending Hires</h3>
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


                    <div id="map" style="width: 700px; height: 500px"></div>
                </div>

                <div class="col-md-5" >
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="txt_did">Driver IsssD</label>
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


                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="txt_hireid">Hire ID</label>
                        <div class="col-sm-2">
                            <input type="text" placeholder="ID" id="txt_hireid" class="form-control input-sm">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Time" id="txthtime" class="form-control input-sm">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="fname">Name</label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="First" id="fname1" class="form-control input-sm">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Last" id="lname1" class="form-control input-sm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="mob_no">Mobile No</label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="Mobile" id="mob_no1" class="form-control input-sm">
                        </div>                   
                    </div>

                    <div class="form-group">
                        <a onclick="save();" class="btn btn-primary">
                            <span class="fa fa-save"></span> &nbsp; Assign Driver
                        </a>
                    </div>

                </div>
            </div>

        </form>
    </div> 

</section>

<script src="js/view_pen.js"></script>
<script src="js/view_pend.js"></script>
<script>load();</script>



