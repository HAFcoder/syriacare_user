<link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">

<section id="inner-banner">
    <div class="overlay"style="background-color:#4E4F53">
        <div class="container" >
            <div class="row"> 
                <div class="col-sm-6"><h1>Donation History</h1></div>
                <div class="col-sm-6">
                  <h6 class="breadcrumb"><a href="index.php">Home</a> / My Donation</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-sec">
    <div class="container">
        <div class="row text-center">
            <div class="con-form clearfix">
                <div class="col-md-12">
                    
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <table id="table_listdonator" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Details</th>
                                        <th class="text-center">Amount</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>20 January 2020</td>
                                        <td>To help funding for Syria Care. </td>
                                        <td>RM 1300</td>
                                        <td><label class="text-success">Successful</label></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>25 January 2020</td>
                                        <td>Funding for Syria food. </td>
                                        <td>RM 2300</td>
                                        <td><label class="text-warning">Pending</label></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>29 January 2020</td>
                                        <td>Funding for Syria Care. </td>
                                        <td>RM 500</td>
                                        <td><label class="text-danger">Failed</label></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/lib/data-table/datatables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/jszip.min.js"></script>
<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="assets/js/init/datatables-init.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        
        $('#table_listdonator').DataTable();
    
    });
</script>