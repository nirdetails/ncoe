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

    public function edit(){
        $data['title'] = 'Edit Courses';
        $data['courses'] = $this->courses_model-> get_courses();

        $this->load->view('templates/header');
        // $this->load->view('pages/coursepage',$data);
        $this->load->view('pages/editchoices',$data);
        $this->load->view('templates/footer');
    }

    public function nextpage(){
        
        $course1 = $this->input->post("course1");
        $course2 = $this->input->post("course2");
        $course3 = $this->input->post("course3");
        $pemarks1 = $this->input->post("pemarks1");
        $pemarks2 = $this->input->post("pemarks2");
        $pemarks3 = $this->input->post("pemarks3");
        $category1 = $this->input->post("category1");
        $category2 = $this->input->post("category2");
        $category3 = $this->input->post("category3");

        $gitmarks1 = $this->input->post("gitmk1");
        $gitmarks2 = $this->input->post("gitmk2");
        $gitmarks3 = $this->input->post("gitmk3");

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 10240;
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
            $this->session->set_userdata('pemarks2', $pemarks2);
            $this->session->set_userdata('pemarks3', $pemarks3);

            $this->session->set_userdata('category1', $category1);
            $this->session->set_userdata('category2', $category2);
            $this->session->set_userdata('category3', $category3);
            $this->session->set_userdata('gitmk1', $gitmarks1);
            $this->session->set_userdata('gitmk2', $gitmarks2);
            $this->session->set_userdata('gitmk3', $gitmarks3);
            // var_dump($post_file);
            $this->session->set_userdata('post_file1', $post_file1);
            $this->session->set_userdata('post_file2', $post_file2);
            $this->session->set_userdata('post_file3', $post_file3);
            $this->session->set_userdata('post_filer1', $post_filer1);
            $this->session->set_userdata('post_filer2', $post_filer2);
            $this->session->set_userdata('post_filer3', $post_filer3);
            $this->session->set_userdata('post_filew1', $post_filew1);
            $this->session->set_userdata('post_filew2', $post_filew2);
            $this->session->set_userdata('post_filew3', $post_filew3);
            // $this->courses_model->preferdetails($post_file1, $post_file2, $post_file3, $post_filer1, $post_filer2, $post_filer3, $post_filew1, $post_filew2, $post_filew3);
            
            //next page
            
    }

    public function select(){
        $data['title'] = 'Courses Selection';
        //validation
        $course1 = $this->input->post("course1");
        $course2 = $this->input->post("course2");
        $course3 = $this->input->post("course3");
        $category1 = $this->input->post("category1");
        $category2 = $this->input->post("category2");
        $category3 = $this->input->post("category3");

        $this->form_validation->set_rules('course1', 'course1', 'required');
        // var_dump($course1);
        // $myfile = $this->input->post("myfile");

        if($this->form_validation->run() === FALSE){
            $data['courses'] = $this->courses_model->get_courses();
            $this->load->view('templates/header');
            $this->load->view('pages/prefer',$data);
            $this->load->view('templates/footer');
       
        }else{
            if($course1 == '15' || $course1 == '14' ){
                $this->form_validation->set_rules('category1', 'Category1', 'required');
    
                // var_dump($course1);
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/prefer',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('students/index');
                }
            }
            elseif($course2 == '15' || $course2 == '14'){
                $this->form_validation->set_rules('category2', 'Category2', 'required');
    
                // var_dump($course1);
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/prefer',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('students/index');
                }
            }
            elseif($course2 == '15' || $course2 == '14'){
                $this->form_validation->set_rules('category3', 'Category3', 'required');
    
                // var_dump($course1);
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/prefer',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('students/index');
                }
            }
            
            
            
            elseif($course1 == '28' || $course1 == '29'){
                //$this->form_validation->set_rules('peolmarks', 'Physical Education marks for O/L', 'required', array('required' => 'You must provide Physical Education marks for O/L!'));
				//$this->form_validation->set_rules('pencoemarks', 'Physical Education marks accoding to the gazette', 'required', array('required' => 'You must provide Physical Education marks accoring to the gazette!'));
				$this->form_validation->set_rules('pemarks1', 'Total marks for Physical Education', 'required', array('required' => 'Total marks for Physical Education is required and cannot exceed more than 80'));
                
                // var_dump($course1);
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/prefer',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('students/index');
                }
            }
                elseif( $course2 == '28' || $course2 == '29'){
                    //$this->form_validation->set_rules('peolmarks', 'Physical Education marks for O/L', 'required', array('required' => 'You must provide Physical Education marks for O/L!'));
                    //$this->form_validation->set_rules('pencoemarks', 'Physical Education marks accoding to the gazette', 'required', array('required' => 'You must provide Physical Education marks accoring to the gazette!'));
                    $this->form_validation->set_rules('pemarks2', 'Total marks for Physical Education', 'required', array('required' => 'Total marks for Physical Education is required and cannot exceed more than 80'));
                    
                    // var_dump($course1);
                    if($this->form_validation->run() === FALSE){
                        $data['courses'] = $this->courses_model-> get_courses();
                        
                        $this->load->view('templates/header');
                        $this->load->view('pages/prefer',$data);
                        $this->load->view('templates/footer');
                    }else{
                        $this->nextpage();
                        redirect('students/index');
                    }
                }

                elseif($course3 == '28' || $course3 == '29'){
                    //$this->form_validation->set_rules('peolmarks', 'Physical Education marks for O/L', 'required', array('required' => 'You must provide Physical Education marks for O/L!'));
                    //$this->form_validation->set_rules('pencoemarks', 'Physical Education marks accoding to the gazette', 'required', array('required' => 'You must provide Physical Education marks accoring to the gazette!'));
                    $this->form_validation->set_rules('pemarks3', 'Total marks for Physical Education', 'required', array('required' => 'Total marks for Physical Education is required and cannot exceed more than 80'));
                    
                    // var_dump($course1);
                    if($this->form_validation->run() === FALSE){
                        $data['courses'] = $this->courses_model-> get_courses();
                        
                        $this->load->view('templates/header');
                        $this->load->view('pages/prefer',$data);
                        $this->load->view('templates/footer');
                    }else{
                        $this->nextpage();
                        redirect('students/index');
                    }
                }
            
            elseif($course1 == '42' || $course1 == '43' || $course1 == '44' ){
                $this->form_validation->set_rules('gitmk1', 'GIT marks', 'required');
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/prefer',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('students/index');
                }
            }

            elseif($course2 == '42' || $course2 == '43' || $course2 == '44'){
                $this->form_validation->set_rules('gitmk2', 'GIT marks', 'required');
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/prefer',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('students/index');
                }
            
            }
            elseif( $course3 == '42' || $course3 == '43' || $course3 == '44'){
                $this->form_validation->set_rules('gitmk3', 'GIT marks', 'required');
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/prefer',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('students/index');
                }
            }else{
                $this->nextpage();
                redirect('students/index');
            }
        }
    }
    
    public function editsubmit(){
        $data['title'] = 'Courses Selection';
        //validation
        $course1 = $this->input->post("course1");
        $course2 = $this->input->post("course2");
        $course3 = $this->input->post("course3");
        $this->form_validation->set_rules('course1', 'course1', 'required');
        // var_dump($course1);
        // $myfile = $this->input->post("myfile");

        if($this->form_validation->run() === FALSE){
            $data['courses'] = $this->courses_model-> get_courses();
            
            $this->load->view('templates/header');
            $this->load->view('pages/editchoices',$data);
            $this->load->view('templates/footer');
       
        }else{
            if($course1 == '15' || $course1 == '14' ){
                $this->form_validation->set_rules('category1', 'Category1', 'required');
    
                // var_dump($course1);
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/editchoices',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('submission/index');
                }

            
            }
            
            elseif($course2 == '15' || $course2 == '14' ){
                $this->form_validation->set_rules('category2', 'Category2', 'required');
    
                // var_dump($course1);
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/editchoices',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('submission/index');
                }

            
            }

            if($course3 == '15' || $course3 == '14' ){
                $this->form_validation->set_rules('category3', 'Category3', 'required');
    
                // var_dump($course1);
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/editchoices',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('submission/index');
                }

            
            }
            
            
            
            elseif($course1 == '28' || $course1 == '29' || $course2 == '28' || $course2 == '29' || $course3 == '28' || $course3 == '29'){
                $this->form_validation->set_rules('pemarks1', 'PE marks', 'required');
    
                // var_dump($course1);
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/editchoices',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('submission/index');
                }
            }
            
            elseif($course1 == '28' || $course1 == '29'){
                $this->form_validation->set_rules('pemarks1', 'PE marks', 'required');
    
                // var_dump($course1);
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/editchoices',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('submission/index');
                }
            }
            
            elseif($course1 == '28' || $course1 == '29'){
                $this->form_validation->set_rules('pemarks1', 'PE marks', 'required');
    
                // var_dump($course1);
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/editchoices',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('submission/index');
                }
            }
            elseif( $course2 == '28' || $course2 == '29'){
                $this->form_validation->set_rules('pemarks2', 'PE marks', 'required');
    
                // var_dump($course1);
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/editchoices',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('submission/index');
                }
            }elseif($course3 == '28' || $course3 == '29'){
                $this->form_validation->set_rules('pemarks3', 'PE marks', 'required');
    
                // var_dump($course1);
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/editchoices',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('submission/index');
                }
            }
            
            elseif($course1 == '42' || $course1 == '43' || $course1 == '44' ){
                $this->form_validation->set_rules('gitmk1', 'GIT marks', 'required');
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/editchoices',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('submission/index');
                }
            }

            elseif($course2 == '42' || $course2 == '43' || $course2 == '44' ){
                $this->form_validation->set_rules('gitmk2', 'GIT marks', 'required');
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/editchoices',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('submission/index');
                }
            }

            elseif($course3 == '42' || $course3 == '43' || $course3 == '44' ){
                $this->form_validation->set_rules('gitmk3', 'GIT marks', 'required');
                if($this->form_validation->run() === FALSE){
                    $data['courses'] = $this->courses_model-> get_courses();
                    
                    $this->load->view('templates/header');
                    $this->load->view('pages/editchoices',$data);
                    $this->load->view('templates/footer');
                }else{
                    $this->nextpage();
                    redirect('submission/index');
                }
            }else{
                $this->nextpage();
                redirect('submission/index');
            }
        } 
    }     
}
                // redirect('submission/index');
    

    
