<?php

class StudentController extends CI_Controller{

    function create(){
        $this->load->model('StudentModel');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('father_name','Father Name','required');
        $this->form_validation->set_rules('mother_name','Mother Name','required');
        $this->form_validation->set_rules('father_phone','Father Phone','required');
        $this->form_validation->set_rules('blood_group','Blood Group','required');
        $this->form_validation->set_rules('birth_date','Birth Date','required');
        $this->form_validation->set_rules('zilla','Zilla','required');
        $this->form_validation->set_rules('present_address','Present Address','required');
        $this->form_validation->set_rules('hsc_clg_name','HSC College Name','required');
        $this->form_validation->set_rules('photo','Phone','required');
        $this->form_validation->set_rules('birth_certificate','Birth Certificate','required');


        if($this->form_validation->run() == false){
            $this->load->view('create');
        }else{
            $s_data=array();
            $s_data['name'] = $this->input->post('name');
            $s_data['father_name'] = $this->input->post('father_name');
            $s_data['mother_name'] = $this->input->post('mother_name');
            $s_data['father_phone'] = $this->input->post('father_phone');
            $s_data['blood_group'] = $this->input->post('blood_group');
            $s_data['birth_date'] = $this->input->post('birth_date');
            $s_data['zilla'] = $this->input->post('zilla');
            $s_data['present_address'] = $this->input->post('present_address');
            $s_data['hsc_clg_name'] = $this->input->post('hsc_clg_name');
            $s_data['photo'] = $this->input->post('photo');
            $s_data['birth_certificate'] = $this->input->post('birth_certificate');
            $s_data['created_at'] = date('Y-m-d');
      
            $this->StudentModel->create($s_data);
            // $this->session->set_flashdata('success','Data added');
            redirect(base_url().'index.php/StudentController/index');
                    }

    }
}

?>