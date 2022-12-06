<!-- LOAD RECORD FROM FAIZ TEST -->
<?php
    public function loadRecord($rowno=0){
         
    //call session
   $data['id_staff']=$this->session->userdata('id_staff');
   $this->load->helper('file');
   $data['user_type']=$this->session->userdata('user_type');
   
   //get user details
   $table 					= 'staff';
   $where 			   		= array('id_staff' => $data['id_staff']); 
   $data['rsProfile'] 		= $this->m_query->get_specified_row($table, $where);

    // Search text
    $search_text = "";
    $start_date = "";
    $end_date = "";

    if($this->input->post('submit') != NULL ){
    $search_text = $this->input->post('search');
    $this->session->set_userdata(array("search"=>$search_text));
    } else{
        if($this->session->userdata('search') != NULL){
        $search_text = $this->session->userdata('search');
        }
    }
    if($this->input->post('submit') != NULL ){
        $search_text = $this->input->post('search');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $this->session->set_userdata(array("start_date"=>$start_date, "end_date"=>$end_date));
        } else{
            if($this->session->userdata('search') != NULL){
            $search_text = $this->session->userdata('search');
            }
        }

// Row per page
$rowperpage = 15;

// Row position
if($rowno != 0){
 $rowno = ($rowno-1) * $rowperpage;
}

// All records count
$allcount = $this->m_query->getrecordCount($search_text);

// Get records
$users_record = $this->m_query->getData($rowno,$rowperpage,$search_text);

// Pagination Configuration
$config['base_url'] = base_url().'staff_home/loadRecord';
$config['use_page_numbers'] = TRUE;
$config['total_rows'] = $allcount;
$config['per_page'] = $rowperpage;

// Initialize
$this->pagination->initialize($config);

$data['pagination'] = $this->pagination->create_links();
$data['result'] = $users_record;
$data['row'] = $rowno;
$data['search'] = $search_text;

   if($this->input->post('upgrade')){
               
       $inputData = $this->input->post();
       $char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
       $secretkey = substr(str_shuffle($char), 0, 25);
    
       //update table user jadi premium
       $table     			= "user";
       $arrayData 			= array(
       'rank'			=> '1',
       'package'			=> $inputData['pakej'],
       'secretkey' 	=> $secretkey);
       $where				= array('id'	=> $inputData['id_user'],'rank'	=> '0');
       $this->m_query->update_data($arrayData,$table,$where);
       
       
       //update log table upgrade premium
       $table     		= "upgrade_premium_auto";
       $arrayData 		= array(
       'id_user'		=> $inputData['id_user'],
       'pakej'	=> $inputData['pakej'],
       'date_upgrade'	=> $inputData['tarikh_upgrade'],
       'id_staff'	=> $data['id_staff']);
       $this->m_query->insert_data($arrayData,$table);
       
       //get list upgrade_premium
       $table 					= 'upgrade_premium_auto';
       $where 			   		= array('id_user' => $inputData['id_user']); 
       $cari_list_upgrade_premium	= $this->m_query->get_all_rows($table, $where);
       
       if(count($cari_list_upgrade_premium)<=1){
           
           //get list link
           $table 					= 'wasap_link';
           $where 			   		= array('wasap_user_id' => $inputData['id_user']); 
           $cari_list_link		= $this->m_query->get_all_rows($table, $where);
           
           foreach($cari_list_link as $key => $value)
           {
               //add team sales
               $table     		= "team_sales";
               $arrayData 		= array(
               'id_user'		=> $value['wasap_user_id'],
               'staff_name'	=> $value['custom_name'],
               'staff_phone_no'	=> $value['phone']);
               $this->m_query->insert_data($arrayData,$table);
               $lastId = $this->db->insert_id();
               
               //add custom staff
               $table     		= "custom_staff";
               $arrayData 		= array(
               'id_team_sales'		=> $lastId,
               'id_wasap_link'	=> $value['id'],
               'text'	=> $value['text'],
               'fb_pixel'	=> $value['fb_pixel'],
               'adwords_tag'	=> $value['adwords_tag'],
               'custom_staff_status'	=> '1');
               $this->m_query->insert_data($arrayData,$table);
           }
       }	
       redirect('staff_home');
               
           
           
   }
   
   //get info
   $table 					= 'info';
   $where 			   		= array('info_status' => '1');
   $data['info']= $this->m_query->get_specified_row($table,$where);

// Load view
$this->load->view('staff_v_home', $data);

}

?>