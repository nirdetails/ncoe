<?php
class Olresults extends CI_Controller{
    public function index(){
        $data['title'] = 'Ol index';

        $this->load->view('templates/header');
        $this->load->view('pages/ol',$data);
        $this->load->view('templates/footer');
    }


    public function checkolres(){
        $data['title'] = 'olresults';

        $data['olresults'] = $this->olresults_model-> get_olresults();
        // redirect('alresults');
        $this->load->view('templates/header');
        $this->load->view('pages/olresults',$data);
        $this->load->view('templates/footer');

        // var_dump($data);
        
    }
}
