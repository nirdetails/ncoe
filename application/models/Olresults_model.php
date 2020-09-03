<?php 
class Olresults_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_olresults1($olind1 = FALSE){
        if($olind1 == NULL){
            $olindex1 = $_SESSION['olindex1'];
            $query1 = $this->db->get_where('ol_result', array('OL_index' => $olindex1));

            return $query1->result_array();
        }
        $olindex1 = $this->input->post('index1');
        $query1 = $this->db->get_where('ol_result', array('OL_index' => $olindex1));

        return $query1->result_array();
        // var_dump($query);
    }

    public function get_olresults2($olind2 = FALSE){
        if($olind2 == NULL){
            $olindex2 = $_SESSION['olindex2'];
            $query2 = $this->db->get_where('ol_result', array('OL_index' => $olindex2));

            return $query2->result_array();
        }
        $olindex2 = $this->input->post('index2');
        $query2 = $this->db->get_where('ol_result', array('OL_index' => $olindex2));

        return $query2->result_array();
        // var_dump($query);
    }

    public function get_olresults3($olind3 = FALSE){
        if($olind3 == NULL){
            $olindex3 = $_SESSION['olindex3'];
            $query3 = $this->db->get_where('ol_result', array('OL_index' => $olindex3));
        
            return $query3->result_array();
        }
        $olindex3 = $this->input->post('index3');
        $query3 = $this->db->get_where('ol_result', array('OL_index' => $olindex3));
        
        return $query3->result_array();
        // var_dump($query);
    }
}