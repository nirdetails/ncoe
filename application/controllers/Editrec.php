<?php
class Editrec extends CI_Controller{
    public function index(){
        $data['title'] = 'Edit Your Records...';

        $this->form_validation->set_rules('alindex', 'AL Index Number', 'required');
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('pages/home', $data);
            $this->load->view('templates/footer');
        }else{
            $alindex = $this->input->post('alindex');
            $this->session->set_userdata('alindex', $alindex);

            $data['personal'] = $this->students_model-> getPersonal();
            $data['selection'] = $this->courses_model-> choiceDetails();
            $data['courses'] = $this->courses_model-> get_courses();

            if(empty($data['personal'])){
                echo "<script>alert('No existing records!')</script>";
                $this->load->view('templates/header');
                $this->load->view('pages/home', $data);
                $this->load->view('templates/footer');
            }else{
                $this->load->view('templates/header');
                $this->load->view('pages/editrec',$data);
                $this->load->view('templates/footer');
            }
        }
    }

    public function editdata(){
        $this->load->helper('pdf_helper');
        $this->students_model->updatepersonal();
        $this->courses_model->updatecourses();

        $data['personal'] = $this->students_model-> getPersonal();
        $data['selection'] = $this->courses_model-> choiceDetails();
        $data['courses'] = $this->courses_model-> get_courses();

        $data['alresult'] = $this->alresults_model-> get_alresults();
        $data['olresults1'] = $this->olresults_model-> edit_ol1();
        $data['olresults2'] = $this->olresults_model-> edit_ol2();
        $data['olresults3'] = $this->olresults_model-> edit_ol3();

        $this->session->set_userdata('pdfdone', 1);
        $this->load->view('pages/pdfedit', $data);
    }
}