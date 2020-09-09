<?php
class Dashboard extends CI_Controller {
    public function view($page = 'dashboard'){
        if(!file_exists(APPPATH.'views/dashboard/'.$page.'.php')){
            show_404();
        }
        $data['title'] = ucfirst($page);
        $this->load->library('session');
        // var_dump($_SESSION["__ci_last_regenerate"]);
        
        if (!isset($_SESSION["__ci_last_regenerate"])){
            redirect('/');
        }
        $this->load->view('templates/header');
        $this->load->view('dashboard/'.$page,$data);
        $this->load->view('templates/footer');

    }

    
}