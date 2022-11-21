<?php $this->load->view('staff_v_header');?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>	


<script type="text/javascript">
     // Start jQuery function after page is loaded
        $(document).ready(function(){
            
            
         // Initiate DataTable function comes with plugin
        // $('#dataTable').DataTable();
         // Start jQuery click function to view Bootstrap modal when view info button is clicked
            //$('.view_data').click(function(){
                
                $('#employeeList').dataTable({
                });
                
                $("#employeeList").on('click','.view_data',function() {
             // Get the id of selected phone and assign it in a variable called phoneData
                var id_user = $(this).attr('id');
                // Start AJAX function
                $.ajax({
                 // Path for controller function which fetches selected phone data
                    url: "<?php echo base_url() ?>staff_home/get_user",
                    // Method of getting data
                    method: "POST",
                    // Data is sent to the server
                    data: {id_user:id_user},
                    // Callback function that is executed after data is successfully sent and recieved
                    success: function(data){
                     // Print the fetched data of the selected phone in the section called #phone_result 
                     // within the Bootstrap modal
                        $('#custom_staff_result').html(data);
                        // Display the Bootstrap modal
                        $('#stack2').modal('show');
                    }
             });
             // End AJAX function
         });
     });  
    </script>
       <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                            <!-- BEGIN PAGE HEAD-->
                            <div class="page-head">
                                <div class="container">
                                   
                                   
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
                                                
                            
                                                
                                                    
                                                <div class="portlet light ">
                                                    <div class="portlet-title">
                                                        <div class="caption font-dark">
                                                          
                                                            <span class="caption-subject font-blue-madison bold uppercase">Failed Pay</span>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="portlet-body">
                                                       
                                                     
                                                           
                                                     
                                                            <!-- Search form (start) -->
                                                            <div class="form-group row">
                                                                        
                                                                      
                                                                    
   <form method='post' action="<?= base_url() ?>staff_home/listuserhistory" >
        <div class="col-xs-4">
     <input type='text' class="form-control" name='search' value='<?= $search ?>'>
     <!--<br><input type="submit" name="export" class="btn btn-success btn-xs" value="Export to CSV" />-->
     </div>
      <div class="col-xs-2">
     <input type='submit' name='submit' value='Search' class="btn green">
     
     </div>
   </form>
   </div>
   <br/>

   <!-- Posts List -->

     <table class="table table-striped table-bordered table-hover  order-column"  data-page-length='25'>
           <thead>
    <tr><th> No. </th>
      <th> Name </th>
                                                                    <th> Phone </th>
                                                                    
                                                                    <th> Email </th>
                                                                     <th>  Date Submit </th>
                                                                    <!--<th> Total Submit </th>-->
                                                                   <th> Premium Type</th>
                                                                   <th> Action </th>
    </tr>
    </thead>
     <tbody>
    <?php 
     $sno = $row+1;
    foreach($result as $data){
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
    // echo "<td>".$data['jumlah_submit']."</td>";
      echo "<td>".$data['premium_type']."</td>";
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
		
                                                       
                                                    </div>
                                                </div>
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