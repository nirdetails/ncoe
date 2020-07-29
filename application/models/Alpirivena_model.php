<?php 
class Alpirivena_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    } 

    public function post_alresults(){
        $data = array(
            'al_index' => $this->input->post('index'),
            'stream'
        );
        
        // var_dump($query);
    }
}