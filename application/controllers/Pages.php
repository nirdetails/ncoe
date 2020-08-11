<?php
class Pages extends CI_Controller {
    public function view($page = 'home'){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }
        $data['title'] = ucfirst($page);
        $this->load->library('session');
        // var_dump($_SESSION["__ci_last_regenerate"]);

        if (!isset($_SESSION["__ci_last_regenerate"])){
            header("location: index.php");
        }
        $this->load->view('templates/header');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer');

    }
}