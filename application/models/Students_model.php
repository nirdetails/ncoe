<?php 
class Students_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function personaldetails(){
        // Students data array
        $data = array(
            'fullname' => $this->input->post('fullname'),
            'namewithinitials' => $this->input->post('namewithinitials'),
            'dob' => $this->input->post('dob'),
            'Addressl1' => $this->input->post('addressline1'),
            'Addressl2' => $this->input->post('addressline2'),
            'Addressl3' => $this->input->post('addressline3'),
            'Addressl4' => $this->input->post('addressline4'),
            'Resdistrict' => $this->input->post('district'),
            'NIC' => $this->input->post('nic'),
            'gender' => $this->input->post('gender'),//Radio button for gender
            // 'optradio' => $this->input->post('optradio'),//Radio button for gender
            'Title' => $this->input->post('title'),
            'Ethnicity' => $this->input->post('ethnicity'),
            'AL_year' => $this ->input->post('year'),
            'Mobile' => $this->input->post('mobile'),
            'home' => $this->input->post('home'),
            'email' => $this->input->post('email'),
            'ALindex' => $this->input->post('alindex'),
			'syllabus' => $this->input->post('syllabus'),
            'OLindex1' => $this->input->post('olindex1'),
            'OL_year1' => $this->input->post('year1'),
            'OLindex2' => $this->input->post('olindex2'),
            'OL_year2' => $this->input->post('year2'),
            'OLindex3' => $this->input->post('olindex3'),
            'OL_year3' => $this->input->post('year3'),
            'sripadancoe'=> $this->input->post('sripada'),
            'stateworker'=> $this->input->post('sworker'),
            'pirivena'=> $this->input->post('pirivena'),
            'pemarks'=> $this->input->post('pemarks'),
            'git'=> $this->input->post('gitmk')
        );

        // Insert student personal detail
        return $this->db->insert('stuents', $data);//Tablename is used as 'student      


    }

    public function getPersonal(){
        $alindex = $this->input->post('alindex');
        $this->db->where('ALindex', $alindex);
        $query = $this->db->get('stuents');

        return $query->result_array();
    }

    public function getStudents(){
        $query = $this->db->get('stuents');
        return $query->result_array();
    } 

    public function updatepersonal(){
        $alindex = $this->input->post('alindex');


        $pemarks = null;
        if($this->input->post('pemarks1')){
            $pemarks = $this->input->post('pemarks1');
        }

        elseif($this->input->post('pemarks2')){
            $pemarks = $this->input->post('pemarks2');
        }
        elseif($this->input->post('pemarks3')){
            $pemarks = $this->input->post('pemarks3');
        }
        else{
            $pemarks = $this->input->post('sample');
        }

        
        $gitmk = null;
        if($this->input->post('course1') == "42" || $this->input->post('course1') == "43" || $this->input->post('course1') == "44"){
            $gitmk = $this->input->post('gitmk1');
        }

        if($this->input->post('course2') == "42" || $this->input->post('course2') == "43" || $this->input->post('course2') == "44"){
            $gitmk = $this->input->post('gitmk2');
        }

        if($this->input->post('course3') == "42" || $this->input->post('course3') == "43" || $this->input->post('course3') == "44"){
            $gitmk = $this->input->post('gitmk3');
        }

        $data = array(
            'fullname' => $this->input->post('fullname'),
            'namewithinitials' => $this->input->post('namewithinitials'),
            'dob' => $this->input->post('dob'),
            'Addressl1' => $this->input->post('addressline1'),
            'Addressl2' => $this->input->post('addressline2'),
            'Addressl3' => $this->input->post('addressline3'),
            'Addressl4' => $this->input->post('addressline4'),
            'Resdistrict' => $this->input->post('district'),
            'NIC' => $this->input->post('nic'),
            'gender' => $this->input->post('gender'),//Radio button for gender
            // 'optradio' => $this->input->post('optradio'),//Radio button for gender
            'Title' => $this->input->post('title'),
            'Ethnicity' => $this->input->post('ethnicity'),
            'AL_year' => $this ->input->post('year'),
            'Mobile' => $this->input->post('mobile'),
            'home' => $this->input->post('home'),
            'email' => $this->input->post('email'),
            // 'syllabus' => $this->input->post('syllabus'),
            // 'OLindex1' => $this->input->post('olindex1'),
            // 'OL_year1' => $this->input->post('year1'),
            // 'OLindex2' => $this->input->post('olindex2'),
            // 'OL_year2' => $this->input->post('year2'),
            // 'OLindex3' => $this->input->post('olindex3'),
            // 'OL_year3' => $this->input->post('year3'),
            // 'sripadancoe'=> $this->input->post('sripada'),
            // 'stateworker'=> $this->input->post('sworker'),
            // 'pirivena'=> $this->input->post('pirivena'),

            'pemarks'=>  $pemarks,
            'git' => $gitmk,
            // 'version'=> $this->input->post('version')
        );

        $this->db->where('ALindex', $alindex);
		return $this->db->update('stuents', $data);
    }
}
