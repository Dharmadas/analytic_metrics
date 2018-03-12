<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Revenue extends CI_Controller {
	
	public function __construct(){
        parent::__construct();               
    }
	
	public function index(){
		$this->load->model('revenue_model');
		
		$this->params['action_type_wise_revenue'] = $this->revenue_model->action_type_wise_revenue();

		$this->params['username'] = $this->session->userdata('username');

		$this->load->view('header_view', $this->params);
		
		$this->load->view('display_table_data', $this->params);

		$this->load->view('footer_view');
	}
	
}	