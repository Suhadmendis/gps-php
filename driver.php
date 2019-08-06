<!-- Main content -->
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Driver Details</h3>
        </div>
        <form role="form" name ="form1" class="form-horizontal">
            <div class="box-body">

                <div class="form-group">
                    <a onclick="newent();" class="btn btn-default">
                        <span class="fa fa-user-plus"></span> &nbsp; New
                    </a>
                    <a onclick="save_inv();" class="btn btn-default">
                        <span class="fa fa-save"></span> &nbsp; Save
                    </a>
                    
                </div>


                <div id="msg_box"  class="span12 text-center"  >

                </div>
                <div class="col-md-7" >
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="txt_did">Driver ID</label>
                        <div class="col-sm-2">
                            <input type="text" placeholder="Driver ID" id="txt_did" class="form-control input-sm">
                        </div>
                        <div class="col-sm-1">
                            
                            <a onfocus="this.blur()" onclick="NewWindow('search_driver.php', 'mywin', '800', '700', 'yes', 'center');
                                return false" href="">
                            <input type="button" class="btn btn-default" value="..." id="searchcust" name="searchcust">
                        </a>
                            
                            
                        </div>
                        <label class="col-sm-2 control-label" for="invdate">Register Date</label>
                        <div class="col-sm-2">
                            <input type="date" placeholder="Date" id="invdate" value="<?php echo date('Y-m-d'); ?>" class="form-control dt">
                        </div>

                        <!-- include other inputs if needed and include a form submit (save) button -->

                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="fname">Name</label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="First" id="fname" class="form-control input-sm">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Last" id="lname" class="form-control input-sm">
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="mob_no">Mobile No</label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="Mobile" id="mob_no" class="form-control input-sm">
                        </div>                   
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="contdet">Contact Details</label>
                        <div class="col-sm-7">
                            <textarea class="form-control"  id="contdet"></textarea>

                        </div>


                    </div>
                </div>
                <div  class="col-md-2">
                    <input id="doldimg" type="hidden">
                    <img style="width:120px;height:120px;" alt="" id="oldimg" title=""  class="file-preview-image" src="">
                    <div title="Driver Image" class="file-footer-caption">Driver Image</div>
                </div>  



                <div class="col-md-3" >

                    <div id="kv-avatar-errors-1" class="center-block" style="width:120px;"></div>


                    <div class="form-group">
                        <input id="file-3" class="file" type="file" data-preview-file-type="any" data-upload-url="#">


                    </div>
                </div>

                <div id="itemdetails">





                </div>



            </div>
        </form>
    </div>

</section>

<script src="js/driver.js"></script>
