<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Revenue extends CI_Controller {
	
	public function __construct(){
		
        parent::__construct();               
		$this->session->set_userdata(array('url' => current_url()));

        if (!$this->login_model->check_session()) { // not logged in
            redirect(base_url());
        }
		
		$this->load->model('revenue_model');
		
    }
	
	public function action_type_wise_revenue(){

		$this->params['username'] = $this->session->userdata('username');
		
		$data = $this->revenue_model->action_type_wise_revenue();
		
		$this->params['data'] = $data;

		$this->load->view('header_view', $this->params);

		$this->load->view('footer_view', $this->params);

	}
	
	public function product_wise_revenue(){

		$this->params['username'] = $this->session->userdata('username');

		$data = $this->revenue_model->product_wise_revenue();

		$this->params['data'] = $data;

		$this->load->view('header_view', $this->params);

		$this->load->view('footer_view', $this->params);

	}
	
	public function average_revenue_per_domain(){

		$this->params['username'] = $this->session->userdata('username');

		$data = $this->revenue_model->average_revenue_per_domain();

		$this->params['data'] = $data;

		$this->load->view('header_view', $this->params);

		$this->load->view('footer_view', $this->params);
	}
	
}	