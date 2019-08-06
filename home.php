<?php
include "header.php";
?>



<?php
if (isset($_GET['url'])) {
    if ($_GET['url'] == "driver") {
        include_once './driver.php';
    }
    if ($_GET['url'] == "view_p") {
        include_once './view_pend.php';
    }
    if ($_GET['url'] == "view_fleet") {
        include_once './view_freed.php';
    }
    if ($_GET['url'] == "new") {
        include_once './new.php';
    }
    if ($_GET['url'] == "reports") {
        include_once './reports.php';
    }
    if ($_GET['url'] == "backTrack") {
        include_once './backTrack.php';
    }
    if ($_GET['url'] == "mainWindow") {
        include_once './main_window.php';
    }
}
?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>


<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->

<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    $(function () {
        $('.dt').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    });
</script>
<?php
include_once './footer.php';
?>

</body>
</html>
<script src="js/jquery.js"></script>
<script src="js/fileinput.js"></script>
<script>
    $("#file-3").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary btn-sm",
        fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
    });
</script>
<script src="js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/app.min.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>

<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->


<!-- DataTables JavaScript -->
<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
<script src="vendor/metisMenu/metisMenu.min.css"></script>
<!-- Custom Theme JavaScript -->
<script src="dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

<script src="js/comman.js"></script>

<script>
    $("body").addClass("sidebar-collapse");



</script>    


<?php
include 'login.php';
?>
