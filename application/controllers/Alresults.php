<?php
class Alresults extends CI_Controller{
    public function index(){
        $data['title'] = 'Enter A/L index number';

        $this->load->view('templates/header');
        $this->load->view('pages/al',$data);
        $this->load->view('templates/footer');
    }

    // function exist($str, $value){       
    //     list($table, $column) = explode('.', $value, 2);    
    //     $query = $this->CI->db->query("SELECT COUNT(*) AS count FROM $table WHERE $column = '$str'");
    //     $row = $query->row();
      
    //     return ($row->count > 0) ? FALSE : TRUE;
    // }

    public function checkalres($alindex = NULL){
        $data['title'] = 'A/L Results sheet';
        // $this->load->helper('security');
        $this->form_validation->set_rules('index','Index Number', 'required|xss_clean|is_exist[stuents.alindex]');
        // $this->form_validation->set_rules('git','GIT', 'required');

        if($this->form_validation->run() === FALSE){
            $data['title'] = 'Enter A/L index number';
            $this->load->view('templates/header');
            $this->load->view('pages/al', $data);
            $this->load->view('templates/footer');
        } else {
            $alindex = $this->input->post('index');
            $git = $this->input->post('git');

            $this->session->set_userdata('alindex', $alindex);
            $this->session->set_userdata('git', $git);
            $this->session->set_userdata('pdfdone', 0);

            $data['alresults'] = $this->alresults_model-> get_alresults();

            // var_dump($data['alresults']);
            $pirivena = 0;
            $this->session->set_userdata('pirivena', $pirivena);
            // $alstream = $this->input->post('sel1');
            // $this->session->set_userdata('alstream', $alstream);
            // redirect('alresults');
            
            if (empty($data['alresults'])) {
                // list is empty.
                $data['title'] = 'Al index';
                echo "<script>alert('Please enter a valid Index')</script>";
                $this->load->view('templates/header');
                $this->load->view('pages/al',$data);
                $this->load->view('templates/footer');
            }else{
                $this->load->view('templates/header');
                $this->load->view('pages/alresults',$data);
                $this->load->view('templates/footer');
            }
            
        }
        // var_dump($alstream);
    }
}