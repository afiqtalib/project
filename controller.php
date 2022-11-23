<?php

public function loadRecordFailedPay($rowno=0){
         
    //call session
   $data['id_staff']=$this->session->userdata('id_staff');
   $this->load->helper('file');
   //write_file('/home/wasap/public_html/system/log.txt', $this->session->userdata('id_admin').' - ','a');
   $data['user_type']=$this->session->userdata('user_type');
   
   //get user details
   $table 					= 'staff';
   $where 			   		= array('id_staff' => $data['id_staff']); 
   $data['rsProfile'] 		= $this->m_query->get_specified_row($table, $where);

    // Search text
    // $search_text = "";
    // if($this->input->post('submit') != NULL ){
    // $search_text = $this->input->post('search');
    // $this->session->set_userdata(array("search"=>$search_text));
    // }
    // else{
    // if($this->session->userdata('search') != NULL){
    // $search_text = $this->session->userdata('search');
    // }
    // }

    // Row per page
    // $rowperpage = 10;

    // Row position
    // if($rowno != 0){
    // $rowno = ($rowno-1) * $rowperpage;
    // }

    // All records count
    // $allcount = $this->m_query->getrecordCountFailedPay($search_text);

    // Get records
    // $users_record = $this->m_query->getDataFailedPay($rowno,$rowperpage,$search_text);

    // Pagination Configuration
    // $config['base_url'] = base_url().'premium/loadRecordFailedPay';
    // $config['use_page_numbers'] = TRUE;
    // $config['total_rows'] = $allcount;
    // $config['per_page'] = $rowperpage;

    // Initialize
    // $this->pagination->initialize($config);

    // $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    // $data['row'] = $rowno;
    // $data['search'] = $search_text;

    

    // Load view utk test staff_failed_pay2 ori staff_failed_pay
    $this->load->view('staff_failed_pay2', $data);

}
?>