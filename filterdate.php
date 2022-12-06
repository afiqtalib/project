<!-- CODE FROM TELE  -->
<?php 
    function searchDate($start_date, $end_date, $id_tujuanlapor, $id_kategorilapor, $usergroup){
        $this->db->select('*');
        $this->db->from('upgrade_premium_auto');
           if($start_date!="" && $end_date!=""){
                $query = 'date_submit BETWEEN "$start_date" AND "$end_date"'; 
                $this->db->where($query);    
           }
       }
?>


<!-- CONTROLLER -->
<?php 
     public function index() { 
        $start_date = $this->input->get('start_date');
        $end_date = $this->input->get('end_date');
        ...
    }
?>

<!-- VIEW -->
    <th>
       <input type="text" class="form-control" name="start_date" placeholder="From">
   </th>
   <th>
       <input type="text" class="form-control" name="end_date" placeholder="To">
   </th>
   <button type="submit" class="btn btn-primary">Search</button>


   <!-- method lain ni  controlelr-->
<?php 
    public function get_failed_pay_range_date() {
        $start_date=$this->input->post('start_date');
        $end_date= $this->input->post('end_date');
        $data['charge_tickets'] = $this->m_query->get_range_date($start_date,$end_date);
        // $data['charge_tickets'] = $this->m_query->list_charges($this->input->post('start_date'), $this->input->post('end_date'));
        $this->load->view( 'premium/get_failed_pay_range_date', $data );
        }
?>

<?php 
// model
    public function get_range_date($start_date, $end_date) //This function returns an array
    {   $this->db->join( 'user u', 'a.id = u.id' );
        $where = '(a.status_id="0" or a.status_id="2" or a.status_id="3")';
        $this->db->where($where);
        $this->db->where('DATE(date_submit) >=', $start_date);
        $this->db->where('DATE(date_submit) <=', $end_date);
        $query = $this->db->get('upgrade_premium_auto a'); //create query
        return $query->result_array(); //creates array from query
    }
?>

<script type="text/javascript">

    $(document).ready(function (){
        $('.start_date').datepicker({
    dateFormat: 'yy-mm-dd'});
    });

    $(document).ready(function (){
        $('.end_date').datepicker({
    dateFormat: 'yy-mm-dd'});
    });
</script>

<div class="container">
<?php 
    $attributes = array('id'=>'get_failed_pay_range_date', 'class'=> 'form-horizontal');
    echo form_open('premium/get_failed_pay_range_date', $attributes);
?>

<div class="form-group">
    <?php $ldata = array('class' => 'control-label col-sm-4');
    echo form_label('From','start_date', $ldata ); 
    $data = array('class' => 'form-control start_date','name' => 'start_date');?>
    <div class="col-sm-4"><?php echo form_input($data);?></div>
</div>

<div class="form-group text-center">
    <?php $ldata = array('class' => 'control-label col-sm-4');
    echo form_label('To','end_date', $ldata ); 
    $data = array('class' => 'form-control end_date','name' => 'end_date');?>
    <div class="col-sm-4"><?php echo form_input($data);?></div>
</div>

<div class="form-group">
    <div class="text-center">
    <?php $data = array('class' => 'btn btn-primary','name' => 'submit','value' => 'submit');
    echo form_submit($data); ?>
    </div>
</div>
<?php echo form_close();?>  
<br>

<h2> Charge Tickets </h2>
<br>


<?php if(isset($_POST['submit'])):?>
    <table class="table table-hover table-bordered table-condensed">
    <tr class="table-header">
          <td><b>Date Created</b></td>
          <td><b>Posted</b></td>
          <td><b>First Name</b></td>
          <td><b>Last Name</b></td>
          <td><b>Charge Ticket #</b></td>
          <td><b>Grand Total</b></td>
          <td><b>View</b></td>
          <td><b>Delete</b></td>
    </tr>
    <?php foreach ($charge_tickets as $object){ ?>
    <tr>
        <td><?php echo $object['ch_date'];?></td>
        <td><?php echo $object['posted'];?></td>
        <td><?php echo ucwords(strtolower($object['fname']));?></td>
        <td><?php echo ucwords(strtolower($object['lname']));?></td>
        <td><?php echo ucwords(strtolower($object['ch_ticket_id']));?></td>
        <td></td>
        <td></td>
        <td></td>
     </tr>      
    <?php } ?>  
  </table>
<?php endif;?>
</div>