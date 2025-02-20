<?php
class MulikaPirivena extends CI_Controller{
    public function index(){
        $data['title'] = 'Enter Mulika Pirivena Examination Index Number(s)';

        $this->load->view('templates/header');
        $this->load->view('pages/mulika_pirivena',$data);
        $this->load->view('templates/footer');
    }

    public function checkmulres($olind1 = NULL, $olind2 = NULL, $olind3 = NULL,$yea1=NULL,$yea2=NULL,$yea3=NULL){
        $data['title'] = 'Mulika Pirivena Examination Results';
        $this->form_validation->set_rules('sel1', 'Number of attempts', 'required');
        $attempts = $this->input->post('sel1');

        if($attempts==1)
        {
         $this->form_validation->set_rules('year1','Ol Year1','required|Integer');
         $this->form_validation->set_rules('index1', 'Index Number1', 'required|is_exist[stuents.olindex1]|is_exist[stuents.olindex2]|is_exist[stuents.olindex3]',array('is_exist' => 'Index Number1 you entered is already exist, Please contact us for more support.'));
        }
        else if($attempts==2)
        {
        $this->form_validation->set_rules('year1','Ol Year1','required|Integer');
        $this->form_validation->set_rules('index1', 'Index Number1', 'required|is_exist[stuents.olindex1]|is_exist[stuents.olindex2]|is_exist[stuents.olindex3]',array('is_exist' => 'Index Number1 you entered is already exist, Please contact us for more support.'));
        $this->form_validation->set_rules('year2','Ol Year2','required|Integer');
        $this->form_validation->set_rules('index2', 'Index Number2', 'required|is_exist[stuents.olindex1]|is_exist[stuents.olindex2]|is_exist[stuents.olindex3]',array('is_exist' => 'Index Number2 you entered is already exist, Please contact us for more support.'));
        }
        else if($attempts==3)
        {
        $this->form_validation->set_rules('year1','Ol Year1','required|Integer');
        $this->form_validation->set_rules('index1', 'Index Number1', 'required|is_exist[stuents.olindex1]|is_exist[stuents.olindex2]|is_exist[stuents.olindex3]',array('is_exist' => 'Index Number1 you entered is already exist, Please contact us for more support.'));
        $this->form_validation->set_rules('year2','Ol Year2','required|Integer');
        $this->form_validation->set_rules('index2', 'Index Number2', 'required|is_exist[stuents.olindex1]|is_exist[stuents.olindex2]|is_exist[stuents.olindex3]',array('is_exist' => 'Index Number2 you entered is already exist, Please contact us for more support.'));
        $this->form_validation->set_rules('year3','Ol Year3','required|Integer');
        $this->form_validation->set_rules('index3', 'Index Number3', 'required|is_exist[stuents.olindex1]|is_exist[stuents.olindex2]|is_exist[stuents.olindex3]',array('is_exist' => 'Index Number3 you entered is already exist, Please contact us for more support.'));
        }
        
        // $this->form_validation->set_rules('year1', );

        
        if($this->form_validation->run() === FALSE){
            $data['title'] = 'Enter Mulika Pirivena Examination Index Number(s)';
            $this->load->view('templates/header');
            $this->load->view('pages/mulika_pirivena', $data);
            $this->load->view('templates/footer');
        } 
        else {
            $year1 = $this->input->post('year1');
            $olindex1 = $this->input->post('index1');
            $year2 = $this->input->post('year2');
            $olindex2 = $this->input->post('index2');
            $year3 = $this->input->post('year3');
            $olindex3 = $this->input->post('index3');
            

            
           
           

            $attempts = $this->input->post('sel1');
            
            if($olindex1 != "" && $year1 !=""){
                $data['olresults1'] = $this->mulikapirivena_model-> get_mulika_pirivena_results1($olind1,$yea1);
            } else if($olindex1 != ""){
                $data['olresults1'] = '';
                $olindex1 = 'N/A';           
            } else {
                $data['olresults1'] = '';
                $year1= 'N/A';
            }

            if(($olindex2 != "" && $olindex2 != $olindex1) && ($year2 != "" && $year2 != $year1)){
                $data['olresults2'] = $this->mulikapirivena_model-> get_mulika_pirivena_results2($olind2,$yea2);
                // var_dump($data['olresults2']);
                if(!empty($data['olresults2'])){
                    if($data['olresults2'][0]['year'] != $data['olresults1'][0]['year'] ){
                    
                    
                    }else if ($olindex2 !="" && empty($data['olresults2'])){
                        $data['olresults2'] = '';
                        $olindex2 = 'N/A';
                        
                    }
                    else{

                        $data['olresults2'] = '';
                        $year2 = 'N/A';
                    }
                    // var_dump($data['olresults2'][0]);
                }  
            }
            else{
                $data['olresults2'] = '';
                $olindex2 = 'N/A';
                $year2 = 'N/A';

            }
            if(($olindex2 != "" && $olindex3 != "" && $olindex3 != $olindex1 && $olindex3 != $olindex2) && ($year2 != "" && $year3 != "" && $year3 != $year1 && $year3 != $year2)){
                $data['olresults3'] = $this->mulikapirivena_model-> get_mulika_pirivena_results3($olind3,$yea3);   
                if(!empty($data['olresults3']) && !empty($data['olresults2'])){
                    if($data['olresults3'][0]['year'] != $data['olresults1'][0]['year'] && $data['olresults3'][0]['year'] != $data['olresults2'][0]['year']){
                       
                    } else{
                        $data['olresults3'] = '';
                        $olindex3 = 'N/A';
                        $year3 = 'N/A';
                    }
                }
            }else{
                $data['olresults3'] = '';
                $olindex3 = 'N/A';
                $year3 = 'N/A';
            } 
            
            if (($year1 != "N/A" || $olindex1 !="N/A") && empty($data['olresults1'])){
                echo "<script>alert('Year or Index is incorrect for first attempt')</script>";
                $data['title'] = 'Enter Mulika Pirivena Examination Index Number(s)';

                $this->load->view('templates/header');
                $this->load->view('pages/mulika_pirivena',$data);
                $this->load->view('templates/footer');
            } else if (($year2 != "N/A"  || $olindex2 !="N/A" )&& empty($data['olresults2'])) {
                echo "<script>alert('Year or Index is incorrect for second attempt')</script>";
                $data['title'] = 'Enter Mulika Pirivena Examination Index Number(s)';

                $this->load->view('templates/header');
                $this->load->view('pages/mulika_pirivena',$data);
                $this->load->view('templates/footer');
            } elseif (($year3 != "N/A"  || $olindex3 !="N/A" )&& empty($data['olresults3'])) {
                echo "<script >alert('Year or Index is incorrect for third attempt')</script>";
                $data['title'] = 'Enter Mulika Pirivena Examination Index Number(s)';

                $this->load->view('templates/header');
                $this->load->view('pages/mulika_pirivena',$data);
                $this->load->view('templates/footer');
            } else{
            // redirect('alresults');
            $data['title'] = 'Mulika Pirivena Examination Results Sheet';

            $this->load->view('templates/header');
            $this->load->view('pages/mulikapirivenaresults',$data);
            $this->load->view('templates/footer');
            }



            $this->session->set_userdata('year1', $year1);
            $this->session->set_userdata('olindex1', $olindex1);
            $this->session->set_userdata('year2', $year2);
            $this->session->set_userdata('olindex2', $olindex2);
            $this->session->set_userdata('year3', $year3);
            $this->session->set_userdata('olindex3', $olindex3);
            $this->session->set_userdata('attempts', $attempts);
            $this->session->set_userdata('pirivena', 1);


            

        }
        // var_dump($data);
        
    }
}
?>
