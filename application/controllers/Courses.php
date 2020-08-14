<?php
class Courses extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url', 'form');
    }
    
    public function index(){
        $data['title'] = 'Select Courses';
        $data['courses'] = $this->courses_model-> get_courses();

        $this->load->view('templates/header');
        // $this->load->view('pages/coursepage',$data);
        $this->load->view('pages/prefer',$data);
        $this->load->view('templates/footer');
    }

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

    public function nextpage(){
        
        $course1 = $this->input->post("course1");
        $course2 = $this->input->post("course2");
        $course3 = $this->input->post("course3");
        $pemarks1 = $this->input->post("pemarks1");

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 2048;
        $config['max_file_uploads'] = 3;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('peupload1')){
            $post_file1 = 'nofile';
                
        }else{
            $data = array('upload_data' => $this->upload->data());
            $post_file1 = $_FILES['peupload1']['name'];  
        }
        if(!$this->upload->do_upload('peupload2')){
            $post_file2 = 'nofile';
                
        }else{
            $data = array('upload_data' => $this->upload->data());
            $post_file2 = $_FILES['peupload2']['name'];  
        }
            if(!$this->upload->do_upload('peupload3')){
                $post_file3 = 'nofile';
                
            }else{
                $data = array('upload_data' => $this->upload->data());
                $post_file3 = $_FILES['peupload3']['name'];  
            }

            if(!$this->upload->do_upload('rupload1')){
                $post_filer1 = 'nofile';
                
            }else{
                $data = array('upload_data' => $this->upload->data());
                $post_filer1 = $_FILES['rupload1']['name'];  
            }
            if(!$this->upload->do_upload('rupload2')){
                $post_filer2 = 'nofile';
                
            }else{
                $data = array('upload_data' => $this->upload->data());
                $post_filer2 = $_FILES['rupload2']['name'];  
            }
            if(!$this->upload->do_upload('rupload3')){
                $post_filer3 = 'nofile';
                
            }else{
                $data = array('upload_data' => $this->upload->data());
                $post_filer3 = $_FILES['rupload3']['name'];  
            }

            if(!$this->upload->do_upload('wupload1')){
                $post_filew1 = 'nofile';
                
            }else{
                $data = array('upload_data' => $this->upload->data());
                $post_filew1 = $_FILES['wupload1']['name'];  
            }
            if(!$this->upload->do_upload('wupload2')){
                $post_filew2 = 'nofile';
                
            }else{
                $data = array('upload_data' => $this->upload->data());
                $post_filew2 = $_FILES['wupload2']['name'];  
            }
            if(!$this->upload->do_upload('wupload3')){
                $post_filew3 = 'nofile';
                
            }else{
                $data = array('upload_data' => $this->upload->data());
                $post_filew3 = $_FILES['wupload3']['name'];  
            }
            // var_dump($post_file2);

            $this->session->set_userdata('course1', $course1);
            $this->session->set_userdata('course2', $course2);
            $this->session->set_userdata('course3', $course3);
            $this->session->set_userdata('pemarks1', $pemarks1);
            // var_dump($post_file);
            $this->courses_model->preferdetails($post_file1, $post_file2, $post_file3, $post_filer1, $post_filer2, $post_filer3, $post_filew1, $post_filew2, $post_filew3);
            
            //next page
            redirect('students/index');
    }

    public function select(){
        $data['title'] = 'Course Selection';
        //validation
        $course1 = $this->input->post("course1");
        $this->form_validation->set_rules('course1', 'course1', 'required');
        // $this->form_validation->set_rules('marks', 'marks', 'required');
        // $this->form_validation->set_rules('marks2', 'marks2', 'required');
        // $this->form_validation->set_rules('marks3', 'marks3', 'required');
        // $this->form_validation->set_rules('myfile', 'myfile', 'required');
        

        // $myfile = $this->input->post("myfile");

        if($this->form_validation->run() === FALSE){
            $data['courses'] = $this->courses_model-> get_courses();
            
            $this->load->view('templates/header');
            $this->load->view('pages/prefer',$data);
            $this->load->view('templates/footer');
       
        }else{
            if($course1 == 15 || $course1 == 14){
                $this->form_validation->set_rules('category', 'category', 'required');
    
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/prefer',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                }
            }else{
                $this->nextpage();
            }
        }
    }
            
}
    
