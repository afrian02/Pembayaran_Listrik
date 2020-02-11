<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarif_Operator extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        check_not_login();
        $this->load->model('tarif_m');
	}
	
	public function index()
	{
		$data['row'] = $this->tarif_m->get();
		$this->template->load('template', 'operator/tarif/tarif_data', $data);
    }
   
}
