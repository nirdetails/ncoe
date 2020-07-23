<?php 
class Students_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function personaldetails($personaldetails){
        // Students data array
        $data = array(
            'fullname' => $this->input->post('fullname'),
            'initials' => $this->input->post('initials'),
            'dob' => $this->input->post('dob'),
            'addressline1' => $this->input->post('addressline1'),
            'addressline2' => $this->input->post('addressline2'),
            'addressline3' => $this->input->post('addressline3'),
            'addressline4' => $this->input->post('addressline4'),
            'district' => $this->input->post('district'),
            'nic' => $this->input->post('nic'),
            'optradio' => $this->input->post('optradio'),//Radio button for gender
            'optradio' => $this->input->post('optradio'),//Radio button for gender
            'title' => $this->input->post('title'),
            'ethnicity' => $this->input->post('ethnicity'),
            'mobile' => $this->input->post('mobile'),
            'home' => $this->input->post('home'),
            'email' => $this->input->post('email'),
        );

        // Insert student personal detail
         return $this->db->insert('student', $data);//Tablename is used as 'student      


    }
