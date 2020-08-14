<?php
	class Submission extends CI_Controller{
        public function index(){
            $data['title'] = 'Submit your details';
    
            $this->load->view('templates/header');
            $this->load->view('pages/submission',$data);
            $this->load->view('templates/footer');
        }

        public function submit(){
            $data['title'] = 'Form Submit';
            $this->students_model->personaldetails();

            $this->session->unset_userdata('alindex', 'olindex1', 'olindex2', 'olindex3', 'fullname', 'namewithinitials', 
            'addressline1', 'addressline2', 'addressline3', 'addressline4', 'district', 'nic', 'gender',
            'title', 'ethnicity', 'mobile', 'home', 'email', 'sripada', 'sworker', 'pirivena', 'palindex');
            session_destroy();
            redirect('/');
        }
    }