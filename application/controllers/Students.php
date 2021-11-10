<?php
	class Students extends CI_Controller{
        public function index(){
            $data['title'] = 'Personal Details Form';
    
            $this->load->view('templates/header');
            $this->load->view('pages/personal',$data);
            $this->load->view('templates/footer');
        }
		// Personal Deatails
		public function personaldetails(){
            $data['title'] = 'Personal Details Form';
             
            $this->form_validation->set_rules('fullname', 'Name in Full', 'required');
            $this->form_validation->set_rules('namewithinitials', 'Name with Initials', 'required');
            $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
            $this->form_validation->set_rules('addressline1', 'Permenant Address', 'required');//all the lines were required.
            // $this->form_validation->set_rules('addressline2', 'Permenant Address', 'required');
            // $this->form_validation->set_rules('addressline3', 'Permenant Address', 'required');
            // $this->form_validation->set_rules('addressline4', 'Permenant Address', 'required');
            $this->form_validation->set_rules('district', 'Recendent District Name and Number', 'required');
            // $this->form_validation->set_rules('nic', 'NIC Number', 'required|is_exist[stuents.NIC]|max_length[12]|min_length[10]');
            $this->form_validation->set_rules('nic', 'NIC Number', 'required|max_length[12]|min_length[10]');
            $this->form_validation->set_rules('gender', 'Gender', 'required');//gender validation
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('ethnicity', 'Ethnicity', 'required');
            // $this->form_validation->set_rules('mobile', 'Mobile', 'required');
            // $this->form_validation->set_rules('home', 'Home', 'required');
            // $this->form_validation->set_rules('email', 'Email', 'required');

            // echo "We are here";
            // var_dump($_REQUEST);

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/personal', $data);
				$this->load->view('templates/footer');
			} else {
                $fullname = $this->input->post("fullname");
                $namewithinitials = $this->input->post("namewithinitials");
                $dob = $this->input->post("dob");
                $addressline1 = $this->input->post("addressline1");
                $addressline2 = $this->input->post("addressline2");
                $addressline3 = $this->input->post("addressline3");
                $addressline4 = $this->input->post("addressline4");
                $district = $this->input->post("district");
                $nic = $this->input->post("nic");
                $gender = $this->input->post("gender");
                $title = $this->input->post("title");
                $ethnicity = $this->input->post("ethnicity");
                $mobile = $this->input->post("mobile");
                $home = $this->input->post("home");
                $email = $this->input->post("email");
                
                // $this->students_model->personaldetails();
                $this->session->set_userdata('fullname', $fullname);
                $this->session->set_userdata('namewithinitials', $namewithinitials);
                $this->session->set_userdata('dob', $dob);
                $this->session->set_userdata('addressline1', $addressline1);
                $this->session->set_userdata('addressline2', $addressline2);
                $this->session->set_userdata('addressline3', $addressline3);
                $this->session->set_userdata('addressline4', $addressline4);
                $this->session->set_userdata('district', $district);
                $this->session->set_userdata('nic', $nic);
                $this->session->set_userdata('gender', $gender);
                $this->session->set_userdata('title', $title);
                $this->session->set_userdata('ethnicity', $ethnicity);
                $this->session->set_userdata('mobile', $mobile);
                $this->session->set_userdata('home', $home);
                $this->session->set_userdata('email', $email);

                $this->load->view('templates/header');
				$this->load->view('pages/declaration', $data);
				$this->load->view('templates/footer');
			}
		}

        public function sripada(){
            $data['title'] = 'Sripada National College of Education';
            $this->form_validation->set_rules('sripada', 'first field', 'required');

            // echo $this->input->post("sripada");
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
				$this->load->view('pages/sripada', $data);
				$this->load->view('templates/footer');
            }
            else{
                $sripada = $this->input->post("sripada");
                if($sripada ==  "Yes"){
                    // echo "yes";
                    $this->form_validation->set_rules('sworker', 'Second field', 'required');
                    if($this->form_validation->run() === FALSE){
                        $this->load->view('templates/header');
                        $this->load->view('pages/sripada', $data);
                        $this->load->view('templates/footer');
                    }else{
                        $sworker = $this->input->post("sworker");

                        if($sripada == "Yes"){
                            $sripadam = 1;
                        }elseif($sripada = "No"){
                            $sripadam = 0;
                        }
                        // var_dump($sworker);
                        if($sworker == "Yes"){
                            $sworkerm = 1;
                        }elseif($sripada = "No"){
                            $sworkerm = 0;
                        }
                        $this->session->set_userdata('sripada', $sripadam);
                        $this->session->set_userdata('sworker', $sworkerm);
                        // $this->load->view('templates/header');
                        // $this->load->view('pages/coursepage', $data);
                        // $this->load->view('templates/footer');
                        redirect('courses/index');
                    }
                }else{   
                    $sworker = $this->input->post("sworker");

                    if($sripada == "Yes"){
                        $sripadam = 1;
                    }elseif($sripada = "No"){
                        $sripadam = 0;
                    }
                    // var_dump($sworker);
                    if($sworker == "Yes"){
                        $sworkerm = 1;
                    }elseif($sripada = "No"){
                        $sworkerm = 0;
                    }
                    $this->session->set_userdata('sripada', $sripadam);
                    $this->session->set_userdata('sworker', $sworkerm);
                    // $this->load->view('templates/header');
                    // $this->load->view('pages/coursepage', $data);
                    // $this->load->view('templates/footer');
                    redirect('courses/index');
                }
            }
            // var_dump($sripadam);
            // var_dump($sworkerm);
        }
	}