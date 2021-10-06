<?php
class MulikaPirivena extends CI_Controller{
    public function index(){
        $data['title'] = 'Enter Mulika Pirivena Exam index number';

        $this->load->view('templates/header');
        $this->load->view('pages/mulika_pirivena',$data);
        $this->load->view('templates/footer');
    }

    public function checkmulres($olind1 = NULL, $olind2 = NULL, $olind3 = NULL){
        $data['title'] = 'Mulika Pirivena Exam Results';

        $this->form_validation->set_rules('index1', 'Index Number', 'required|is_exist[stuents.olindex1]|is_exist[stuents.olindex2]|is_exist[stuents.olindex3]');
        $this->form_validation->set_rules('index2', 'Index Number', 'is_exist[stuents.olindex1]|is_exist[stuents.olindex2]|is_exist[stuents.olindex3]');
        $this->form_validation->set_rules('index3', 'Index Number', 'is_exist[stuents.olindex1]|is_exist[stuents.olindex2]|is_exist[stuents.olindex3]');
        
        $this->form_validation->set_rules('sel1', 'Number of attempts', 'required');

        if($this->form_validation->run()===FALSE) {
            $data['title'] = 'Enter Mulika Pirivena Exam index number';

            $this->load->view('templates/header');
            $this->load->view('pages/mulika_pirivena',$data);
            $this->load->view('templates/footer');
        } else {
            $olindex1 = $this->input->post('index1');
            $olindex2 = $this->input->post('index2');
            $olindex3 = $this->input->post('index3');
            $attempts = $this->input->post('sel1');

            if($olindex1 != ""){
                $data['olresults1'] = $this->mulikapirivena_model->get_mulika_pirivena_results1($olind1);
            } else {
                $data['olresults1'] = '';
                $olindex1 = 'N/A';
            }
            if($olindex2 != "" && $olindex2 != $olindex1){
                $data['olresults2'] = $this->mulikapirivena_model->get_mulika_pirivena_results2($olind2);
                // var_dump($data['olresults2']);
                if(!empty($data['olresults2'])){
                    if($data['olresults2'][0]['year'] != $data['olresults1'][0]['year'] ){
                    
                    }else{
                        $data['olresults2'] = '';
                        $olindex2 = 'N/A';
                    }
                    // var_dump($data['olresults2'][0]);
                }  
            }else{
                $data['olresults2'] = '';
                $olindex2 = 'N/A';
            }
            if($olindex2 != "" && $olindex3 != "" && $olindex3 != $olindex1 && $olindex3 != $olindex2){
                $data['olresults3'] = $this->mulikapirivena_model->get_mulika_pirivena_results3($olind3);
                if(!empty($data['olresults3']) && !empty($data['olresults2'])){
                    if($data['olresults3'][0]['year'] != $data['olresults1'][0]['year'] && $data['olresults3'][0]['year'] != $data['olresults2'][0]['year']){
                    
                    }else{
                        $data['olresults3'] = '';
                        $olindex3 = 'N/A';
                    }
                }
            }else{
                $data['olresults3'] = '';
                $olindex3 = 'N/A';
            }
            if ($olindex1 == "N/A" || empty($data['olresults1'])) {
                echo "<script>alert('Please enter a valid Index')</script>";
                $data['title'] = 'Enter Mulika Pirivena Exam index number';

                $this->load->view('templates/header');
                $this->load->view('pages/mulika_pirivena',$data);
                $this->load->view('templates/footer');
            }elseif ($olindex2 != "N/A" && empty($data['olresults2'])) {
                echo "<script>alert('Please enter a valid Index2')</script>";
                $data['title'] = 'Enter Mulika Pirivena Exam index number';

                $this->load->view('templates/header');
                $this->load->view('pages/mulika_pirivena',$data);
                $this->load->view('templates/footer');
            }elseif ($olindex3 != "N/A" && empty($data['olresults3'])) {
                echo "<script>alert('Please enter a valid Index3')</script>";
                $data['title'] = 'Enter Mulika Pirivena Exam index number';

                $this->load->view('templates/header');
                $this->load->view('pages/mulika_pirivena',$data);
                $this->load->view('templates/footer');
            }
            else{
            // redirect('alresults');
                $this->load->view('templates/header');
                $this->load->view('pages/mulikapirivenaresults',$data);
                $this->load->view('templates/footer');
            }



            $pirivena = 1;
            $this->session->set_userdata('pirivena', $pirivena);
            $this->load->view('templates/header');
            $this->load->view('pages/mulikapirivenaresults',$data);
            $this->load->view('templates/footer');

        }
    }
}
?>