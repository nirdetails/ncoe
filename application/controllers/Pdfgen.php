<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdfgen extends CI_Controller {
    function pdf()
	{
		$data['title'] = 'Test Page';
        $this->load->helper('pdf_helper');
        
        $data['alresults'] = $this->alresults_model-> get_alresults();
        $data['olresults1'] = $this->olresults_model-> get_olresults1();
        $data['olresults2'] = $this->olresults_model-> get_olresults2();
        $data['olresults3'] = $this->olresults_model-> get_olresults3();
        // var_dump($data['olresults3']);
        // var_dump($data['olresults2']);
    /*
        ---- ---- ---- ----
        your code here
        ---- ---- ---- ----
    */
	    $this->load->view('pages/pdfreport', $data);
	}
}