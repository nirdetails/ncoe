<?php 
class Alresults_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_alresults($alindex){
        $this->db->where('AL_index', $alindex);
        $query = $this->db->get('al_result');
    }
}
