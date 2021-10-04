<?php 

class Alresults_model extends CI_Model{
   
	public function __construct(){
        $this->load->database();
		$this->load->model('Alresults_model');
    }

    public function get_alresults($year, $syllabus, $alindex){
		
		// check whether there is any record matching with the input combination in the stuents( not students 😁) table.
		$array_inputs = array('AL_year' => $year, 'syllabus' => $syllabus, 'ALindex' => $alindex);
		$query_stu_table = $this->db->select('id, ALindex, AL_year, syllabus')->where($array_inputs)->get('stuents');
		$data_stu_table = $query_stu_table->result_array();

		if( !empty($data_stu_table) ) {

			// If there is a matching record for above constraint, then joins the al_result table for retrieve AL results 
			$this->db->select('AL_index, year, stream, sub1, grade1, sub2, grade2, sub3, grade3, sub4, grade4, medium, zscore');
			$this->db->from('al_result');
			$this->db->join('stuents', 'stuents.ALindex = al_result.AL_index');
			$this->db->where('stuents.ALindex', $alindex);
			$query_join = $this->db->get();
			$data_al_results = $query_join->result_array();
			return $data_al_results;

		} else {
			$error = "There is something wrong with your input data. Please check your input data and try again!";
			echo $error;
		}
    }
}
