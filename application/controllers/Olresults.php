<?php
class Olresults extends CI_Controller{
    public function showresult(){
        
        
        $this->form_validation->set_rules('index1', 'index1', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('olresults/showresult',$data);
            $this->load->view('templates/footer');
        }else{
            $this->olresults_model->get_result()
        }
    }
}
