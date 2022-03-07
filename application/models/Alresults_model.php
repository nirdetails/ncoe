<?php 
class Alresults_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

   

public function get_alresults($alindex = FALSE ){
    if($alindex == NULL && isset($_SESSION['alindex']) && !empty($_SESSION['alindex'] && $year=NULL && isset($_SESSION['year']) && !empty($_SESSION['year']))){
        $alindex = $_SESSION['alindex'];
        $year = $_SESSION['year'];
        $query = $this->db->get_where('al_result', array('AL_index' => $alindex, 'year' => $year));

        return $query->result_array();
    }
    $alindex = $this->input->post('alindex');

    $year = $this->input->post('year');
    $query = $this->db->get_where('al_result', array('AL_index' => $alindex,'year' => $year ));

    return $query->result_array();
    //var_dump($query);
}


    public function get_alresults1($alindex = FALSE){
        if($alindex == NULL){
            $alindex = $_SESSION['alindex'];
            $this->db->where('AL_index', $alindex);
            $query = $this->db->get('al_result');

            return $query->result_array();
        }
        $alindex = $this->input->post('index');
        $this->db->where('AL_index', $alindex);
        $query = $this->db->get('al_result');

        return $query->result_array();
        // var_dump($query);
    }
}
