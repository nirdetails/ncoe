<?php
class Courses extends CI_Controller{
    public function index(){
        $data['title'] = 'Courses';
        $data['courses'] = $this->courses_model-> get_courses();

        $this->load->view('templates/header');
        $this->load->view('pages/coursepage',$data);
        $this->load->view('templates/footer');
    }

    // public function allcourses(){
    //     $data['title'] = 'All courses';

    //     $data['courses'] = $this->courses_model-> get_courses();

    //     $this->load->view('templates/header');
    //     $this->load->view('pages/coursepage',$data);
    //     $this->load->view('templates/footer');
    // }

    public function info($course_no = NULL){
        // var_dump($course_no);
        $data['course'] = $this->courses_model->get_courses($course_no);
        // if(empty($data['post'])){
        //     show_404();
        // }
        // var_dump($data['course']);
        $data['title'] = 'Course Page';
        // echo "Awkward";
        $this->load->view('templates/header');
        $this->load->view('pages/courseinfo',$data);
        $this->load->view('templates/footer');
    }
}