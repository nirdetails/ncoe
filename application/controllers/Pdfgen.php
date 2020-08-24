<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdfgen extends CI_Controller {
    function pdf($palindex = NULL)
	{
		$data['title'] = 'Test Page';
        $this->load->helper('pdf_helper');
        if($_SESSION['pirivena'] == 1){
            $data['alresults'] = $this->alpirivena_model-> get_palresults($palindex);
        }else{
            $data['alresults'] = $this->alresults_model-> get_alresults();
        }
        
        $data['olresults1'] = $this->olresults_model-> get_olresults1();
        $data['olresults2'] = $this->olresults_model-> get_olresults2();
        $data['olresults3'] = $this->olresults_model-> get_olresults3();
        // var_dump($data['olresults3']);
        // var_dump($data['olresults2']);
        if($_SESSION['course1'] != ""){
            $course_no = $_SESSION['course1'];
            $data['course1'] = $this->courses_model->get_courses($course_no);
        }
        if($_SESSION['course2'] != ""){
            $course_no = $_SESSION['course2'];
            $data['course2'] = $this->courses_model->get_courses($course_no);
        }
        if($_SESSION['course3'] != ""){
            $course_no = $_SESSION['course3'];
            $data['course3'] = $this->courses_model->get_courses($course_no);
        }
    /*
        ---- ---- ---- ----
        your code here
        ---- ---- ---- ----
    */
        
        $this->load->view('pages/pdfreport', $data);
        $this->session->unset_userdata('alindex', 'olindex1', 'olindex2', 'olindex3', 'fullname', 'namewithinitials', 
            'addressline1', 'addressline2', 'addressline3', 'addressline4', 'district', 'nic', 'gender',
            'title', 'ethnicity', 'mobile', 'home', 'email', 'sripada', 'sworker', 'pirivena', 'palindex');
            session_destroy();
	}
}