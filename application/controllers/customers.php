<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends CI_Controller {
	
	public function __construct(){
		
        parent::__construct();               
		$this->session->set_userdata(array('url' => current_url()));

        if (!$this->login_model->check_session()) { // not logged in
            redirect(base_url());
        }
		
		$this->load->model('customers_model');
		
    }
	
	public function signup_payup(){

		$this->params['username'] = $this->session->userdata('username');
		
		$data = $this->customers_model->signup_payup();
		
		$this->params['data'] = $data;

		$this->load->view('header_view', $this->params);

		$this->load->view('footer_view', $this->params);

	}
	
	public function citywise_distribution(){

		$this->params['username'] = $this->session->userdata('username');

		$data = $this->customers_model->citywise_distribution();

		$this->params['data'] = $data;

		$this->load->view('header_view', $this->params);

		$this->load->view('footer_view', $this->params);

	}
	
}	