<?php 
class Students_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function personaldetails(){
        // Students data array
        $data = array(
            'fullname' => $this->input->post('fullname'),
            'namewithinitials' => $this->input->post('namewithinitials'),
            'dob' => $this->input->post('dob'),
            'Addressl1' => $this->input->post('addressline1'),
            'Addressl2' => $this->input->post('addressline2'),
            'Addressl3' => $this->input->post('addressline3'),
            'Addressl4' => $this->input->post('addressline4'),
            'Resdistrict' => $this->input->post('district'),
            'id' => $this->input->post('nic'),
            'gender' => $this->input->post('gender'),//Radio button for gender
            // 'optradio' => $this->input->post('optradio'),//Radio button for gender
            'Title' => $this->input->post('title'),
            'Ethnicity' => $this->input->post('ethnicity'),
            'Mobile' => $this->input->post('mobile'),
            'home' => $this->input->post('home'),
            'email' => $this->input->post('email'),
            'ALindex' => $this->input->post('alindex'),
            'OLindex1' => $this->input->post('olindex1'),
            'OLindex2' => $this->input->post('olindex2'),
            'OLindex3' => $this->input->post('olindex3'),
            'sripadancoe'=> $this->input->post('sripada'),
            'stateworker'=> $this->input->post('sworker'),
            'pirivena'=> $this->input->post('pirivena')
        );

        // Insert student personal detail
        return $this->db->insert('al_pirivena', $data);//Tablename is used as 'student      


    }
}