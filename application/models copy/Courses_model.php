<?php 
class Courses_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function preferdetails($personaldetails){
        // Students data array
        $data = array(
            'course1' => $this->input->post('course1'),
            'course2' => $this->input->post('course2'),
            'course3' => $this->input->post('course3'),
            'marks' => $this->input->post('marks'),
            'marks2' => $this->input->post('marks2'),
            'marks3' => $this->input->post('marks3'),
            'myfile' => $this->input->post('myfile'),
       );

        // Insert preference detail
         return $this->db->insert('courseselect', $data);//Tablename is used as 'student      


    }
