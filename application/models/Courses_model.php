<?php 
class Courses_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_courses($course_no = FALSE){
        if($course_no == NULL){
            $query = $this->db->get('courses');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('courses', array('course_no' => $course_no));
		return $query->row_array();
        // var_dump($query);
    }
}