<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web_services extends CI_Controller {
	
	public function __construct(){
		
        parent::__construct();               
		$this->session->set_userdata(array('url' => current_url()));

        if (!$this->login_model->check_session()) { // not logged in
            redirect(base_url());
        }
		
		$this->load->model('web_services_model');
		
    }
	
	public function product_count(){

		$this->params['username'] = $this->session->userdata('username');
		
		$data = $this->web_services_model->product_count();
		
		$this->params['data'] = $data;

		$this->load->view('header_view', $this->params);

		$this->load->view('footer_view', $this->params);

	}
	
	public function ws_count(){

		$this->params['username'] = $this->session->userdata('username');

		$data = $this->web_services_model->ws_count();

		$this->params['data'] = $data;

		$this->load->view('header_view', $this->params);

		$this->load->view('footer_view', $this->params);

	}
	
	public function ws_registration_term(){

		$this->params['username'] = $this->session->userdata('username');

		$data = $this->web_services_model->ws_registration_term();

		$this->params['data'] = $data;

		$this->load->view('header_view', $this->params);

		$this->load->view('footer_view', $this->params);
	}

	public function ws_distribution(){

		$this->params['username'] = $this->session->userdata('username');

		$data = $this->web_services_model->ws_distribution();

		$this->params['data'] = $data;

		$this->load->view('header_view', $this->params);

		$this->load->view('footer_view', $this->params);
	}

	public function ws_under_management(){

		$this->params['username'] = $this->session->userdata('username');

		$data = $this->web_services_model->ws_under_management();

		$this->params['data'] = $data;

		$this->load->view('header_view', $this->params);

		$this->load->view('footer_view', $this->params);
	}
	
}	