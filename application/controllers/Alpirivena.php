<?php
class Alpirivena extends CI_Controller{
    public function index(){
        $data['title'] = 'Al Pirivena';

        $this->load->view('templates/header');
        $this->load->view('pages/ALpirivena',$data);
        $this->load->view('templates/footer');
    }


    public function checkalres(){
        // $data['title'] = 'alpirivena';

        $data['alresults'] = $this->alpirivena_model-> post_alresults()();

        $pirivena = 1;
        $this->session->set_userdata('pirivena', $pirivena);
        echo "results entered"; 
        // $alstream = $this->input->post('sel1');
        // $this->session->set_userdata('alstream', $alstream);
        // redirect('alresults');
        // $this->load->view('templates/header');
        // $this->load->view('pages/alresults',$data);
        // $this->load->view('templates/footer');

        // var_dump($alstream);
        
    }
}