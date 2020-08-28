<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdfgen extends CI_Controller {
    function pdf($palindex = NULL)
	{
        // $_SESSION['pdfdone'] = 1;
        if (!isset($_SESSION["alindex"])){
            redirect('/');
        }
        $data['fullname'] = $_SESSION['fullname'];
        $data['namewithinitials'] = $_SESSION['namewithinitials'];
        $data['addressline1'] = $_SESSION['addressline1'];
        $data['addressline2'] = $_SESSION['addressline2'];
        $data['addressline3'] = $_SESSION['addressline3'];
        $data['addressline4'] = $_SESSION['addressline4'];
        $data['district'] = $_SESSION['district'];
        $data['nic'] = $_SESSION['nic'];
        $data['dob'] = $_SESSION['dob'];
        $data['gender'] = $_SESSION['gender'];
        $data['title'] = $_SESSION['title'];
        $data['ethnicity'] = $_SESSION['ethnicity'];
        $data['mobile'] = $_SESSION['mobile'];
        $data['home'] = $_SESSION['home'];
        $data['email'] = $_SESSION['email'];
        $data['district'] = $_SESSION['district'];
        $data['attempts'] = $_SESSION['attempts'];
        $data['pemarks1'] = $_SESSION['pemarks1'];
        $data['pirivena'] = $_SESSION['pirivena'];
        $data['course1s'] = $_SESSION['course1'];
        $data['course2s'] = $_SESSION['course2'];
        $data['course3s'] = $_SESSION['course3'];

		$data['title'] = 'Test Page';
        $this->load->helper('pdf_helper');
        if($data['pirivena'] == 1){
            $data['alresults'] = $this->alpirivena_model-> get_palresults($palindex);
        }else{
            $data['alresults'] = $this->alresults_model-> get_alresults();
        }
        
        $data['olresults1'] = $this->olresults_model-> get_olresults1();
        $data['olresults2'] = $this->olresults_model-> get_olresults2();
        $data['olresults3'] = $this->olresults_model-> get_olresults3();
        // var_dump($data['olresults3']);
        // var_dump($data['olresults2']);
        if($data['course1s'] != ""){
            $course_no = $data['course1s'];
            $data['course1'] = $this->courses_model->get_courses($course_no);
        }
        if($data['course2s'] != ""){
            $course_no = $data['course2s'];
            $data['course2'] = $this->courses_model->get_courses($course_no);
        }
        if($data['course3s'] != ""){
            $course_no = $data['course3s'];
            $data['course3'] = $this->courses_model->get_courses($course_no);
        }
    /*
        ---- ---- ---- ----
        your code here
        ---- ---- ---- ----
    */
        $this->session->set_userdata('pdfdone', 1);
        
        $this->load->view('pages/pdfreport', $data);
        $this->session->unset_userdata('alindex', 'olindex1', 'olindex2', 'olindex3', 'fullname', 'namewithinitials', 
            'addressline1', 'addressline2', 'addressline3', 'addressline4', 'district', 'nic', 'gender',
            'title', 'ethnicity', 'mobile', 'home', 'email', 'sripada', 'sworker', 'pirivena', 'palindex');
        session_destroy();
    }
}