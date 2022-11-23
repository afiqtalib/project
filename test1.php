    <?php $this->load->view('staff_v_header');?>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>	-->

    <!-- CDN DATATABLE & CSS TABLE -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    
    <!-- Page filter table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script>
    
    
    <!-- LINK DATA TABLE EXPORT -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>


<!-- JS export table/data -->
<script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );
</script>
</script>
    
    <!--START-->
        <h1>gudwgdu</h1>
       <div class="page-wrapper-row full-height">
            <div class="page-wrapper-middle">
                <!-- BEGIN CONTAINER -->
                <div class="page-container">
                    <!-- BEGIN CONTENT -->
                    <div class="page-content-wrapper">
                        <!-- BEGIN CONTENT BODY -->
                        <!-- BEGIN PAGE HEAD-->
                        <div class="page-head">
                            <div class="container">etes
                            </div>
                        </div>
                        <!-- END PAGE HEAD-->
                        <!-- BEGIN PAGE CONTENT BODY -->
                        <div class="page-content">
                            <div class="container">
                                <!-- BEGIN PAGE CONTENT INNER -->
                                <div class="page-content-inner">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <font color="red"><?php $this->load->view('data_messages');?></font>
                                                <!--
                                                <div class="note note-success">
                                                    <span class="caption-subject font-thunderbird bold uppercase">PENDAFTARAN BENGKEL CASUAL SELLING MASTERY DIBUKA</span><br>
                                                    <span class="caption-subject font-thunderbird">Tingkatkan jualan anda dengan cara lebih santai tanpa close sales yang meleret & membosankan.</span>
                                                    <br><br>
                                                    <p> 
                                                        <a href="http://i.wasap.my/casualselling" class="btn sbold green" target="_blank">DAFTAR SEKARANG</a>
                                                    </p>
                                                </div>
                                                -->
                                                <!--
                                                <div class="note note-success">
                                                    <span class="caption-subject font-red-thunderbird bold uppercase">FREE EBOOK: 3 SEBAB UTAMA PROSPEK BUAT KEPUTUSAN MEMBELI</span><br>
                                                    <p> 
                                                        <a href="https://m.me/wasap.my?ref=w3269272" class="btn btn-outline red" target="_blank">Download</a>
                                                    </p>
                                                </div>
                                                -->
                                                
                                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                <!--<form method="post" action="<?php echo base_url(); ?>Export_csv/export">-->
                                                    
                                                <!--<div class="portlet light ">-->
                                                    <div class="portlet-title">
                                                        <div class="caption font-dark">
                                                            <span class="caption-subject font-blue-madison bold uppercase">Failed Pay</span>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <!-- Search form (start) -->
                                                        <div class="form-group row">
                                                                   <!--<form method='post' action="<?= base_url() ?>premium/loadRecordFailedPay" >-->
                                                                        <!--<div class="col-xs-4">-->
                                                                     <!--<input type='text' class="form-control" name='search' value='<?= $search ?>'>-->
                                                                    
                                                                     <!--</div>-->
                                                                      <!--<div class="col-xs-2">-->
                                                                     <!--<input type='submit' name='submit' value='Search' class="btn green">-->
                                                                     
                                                                     <!--</div>-->
                                                                   <!--</form>-->
                                                        </div>
                                                        <br/>
                                                        <!-- Posts List -->
                                                        <table class="table table-striped table-bordered table-hover  order-column" id="example" data-page-length='25'>
                                                             <thead>
                                                                <tr>
                                                                    <th> No. </th>
                                                                    <th> Name </th>
                                                                    <th> Phone </th>
                                                                    <th> Email </th>
                                                                    <th>  Date Submit </th>
                                                                    <th> Total Submit </th>
                                                                    <th> Action </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php 
                                                                    $sno = $row+1;
                                                                    foreach($result as $data)
                                                                    {
                                                                        $newDateCreated = date("d-m-Y h:i:sa", strtotime($data['date_submit']));
                                                                        $ptn = "/^0/";  // Regex
                                                                        $rpltxt = "60";  // Replacement string
                                                                        //echo preg_replace($ptn, $rpltxt, $data['phone']);
                                                                        // $content = substr($data['email'],0, 180)." ...";
                                                                    echo "<tr> ";
                                                                        echo "<td>".$sno."</td>";
                                                                        echo "<td>".$data['name']."</td>";
                                                                        echo "<td>".$data['phone']."</td>";
                                                                        echo "<td>".$data['email']."</td>";
                                                                        echo "<td>".$newDateCreated."</td>";
                                                                        echo "<td>".$data['jumlah_submit']."</td>";
                                                                        echo "<td><a target='_blank' href='https://wasap.my/".preg_replace($ptn, $rpltxt, $data['phone'])."'>WhatsApp</a></td>";
                                                                    echo "</tr>";
                                                                    $sno++;
                                                                    }  
                                                                    
                                                                    if(count($result) == 0){
                                                                      echo "<tr>";
                                                                      echo "<td colspan='5'>No record found.</td>";
                                                                      echo "</tr>";
                                                                    }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                        
        <!-- Paginate -->
        <div>  
            <ul class="pagination pagination-sm showcase-pagination">
                <li><?= $pagination; ?></li>
        </div>
            <!--</div>-->
            <!--</div>-->
        <!-- END EXAMPLE TABLE PORTLET-->
        <!-- stackable -->
        <div id="stack2"  class="modal fade" tabindex="-1" data-focus-on="input:first">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Upgrade Premium</h4>
            </div>
            <div class="modal-body">
               <div id="custom_staff_result"></div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
            </div>
        </div>
        
                                        </div>
                                    </div>
                                </div>
                            <!-- END PAGE CONTENT INNER -->
                            </div>
                        </div>
                    <!-- END PAGE CONTENT BODY -->
                    <!-- END CONTENT BODY -->
                    </div>
                <!-- END CONTENT -->
                </div>
            <!-- END CONTAINER -->
            </div>
        </div>
      
<?php $this->load->view('v_user_footer');?>

    <script type="text/javascript" language="javascript" src=""></script>
