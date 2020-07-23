<?php 
class Olresults_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_olresults(){
        $olindex1 = $this->input->post('index1');
        $olindex2 = $this->input->post('index2');
        $olindex3 = $this->input->post('index3');

        if($olindex2 == '' && $olindex3 == ''){
            $query = $this->db->get_where('ol_result', array('OL_index' => $olindex1));
        }else if($olindex2 != '' && $olindex3 == ''){
            $query = $this->db->get_where('ol_result', array('OL_index' => $olindex1, 'OL_index' => $olindex2));
        }else{
            $query = $this->db->get_where('ol_result', array('OL_index' => $olindex1, 'OL_index' => $olindex2, 'OL_index' => $olindex3));
        }

        return $query->result_array();
        // var_dump($query);
    }
}