<?php
class Alresults extends CI_Controller{
    public function index(){
        $data['title'] = 'Al index';

        $this->load->view('templates/header');
        $this->load->view('pages/al',$data);
        $this->load->view('templates/footer');
    }


    public function checkalres(){
        $data['title'] = 'alresults';

        $data['alresults'] = $this->alresults_model-> get_alresults();

        $alstream = $this->input->post('sel1');
        $this->session->set_userdata('alstream', $alstream);
        // redirect('alresults');
        $this->load->view('templates/header');
        $this->load->view('pages/alresults',$data);
        $this->load->view('templates/footer');

        // var_dump($alstream);
        
    }
}