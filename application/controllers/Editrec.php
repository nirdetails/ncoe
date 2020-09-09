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
        $course1 = $this->input->post("course1");
        $course2 = $this->input->post("course2");
        $course3 = $this->input->post("course3");

        $this->form_validation->set_rules('fullname', 'Name in Full', 'required');
        $this->form_validation->set_rules('namewithinitials', 'Name with Initials', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('addressline1', 'Permenant Address', 'required');
        $this->form_validation->set_rules('district', 'Recendent District Name and Number', 'required');
        $this->form_validation->set_rules('nic', 'NIC Number', 'required|is_exist[stuents.NIC]|max_length[12]|min_length[10]');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('ethnicity', 'Ethnicity', 'required');
        $this->form_validation->set_rules('olindex1', 'Index Number', 'required');
        $this->form_validation->set_rules('course1', 'course1', 'required');
        if($course1 == '15' || $course1 == '14' || $course2 == '15' || $course2 == '14' || $course3 == '15' || $course3 == '14'){
            $this->form_validation->set_rules('category', 'Category', 'required');
        }
        if($course1 == '28' || $course1 == '29' || $course2 == '28' || $course2 == '29' || $course3 == '28' || $course3 == '29'){
            $this->form_validation->set_rules('pemarks', 'PE marks', 'required');
        }
        if($course1 == '42' || $course1 == '43' || $course1 == '44' || $course2 == '42' || $course2 == '43' || $course2 == '44' || $course3 == '42' || $course3 == '43' || $course3 == '44'){
            $this->form_validation->set_rules('gitmk', 'GIT marks', 'required');
        }

        if($this->form_validation->run() === FALSE){
            $data['title'] = 'Edit Your Records...';
            $alindex = $this->input->post('alindex');
            $this->session->set_userdata('alindex', $alindex);

            $data['personal'] = $this->students_model-> getPersonal();
            $data['selection'] = $this->courses_model-> choiceDetails();
            $data['courses'] = $this->courses_model-> get_courses();

            $this->load->view('templates/header');
            $this->load->view('pages/editrec',$data);
            $this->load->view('templates/footer');
        }else{
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
}