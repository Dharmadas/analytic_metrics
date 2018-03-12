<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Domains extends CI_Controller {
	
	public function __construct(){
		
        parent::__construct();               
		$this->session->set_userdata(array('url' => current_url()));

        if (!$this->login_model->check_session()) { // not logged in
            redirect(base_url());
        }
		
		$this->load->model('domains_model');
		
    }
	
	public function domain_count(){

		$this->params['username'] = $this->session->userdata('username');
		
		$data = $this->domains_model->domain_count();
		
		$this->params['data'] = $data;

		$this->load->view('header_view', $this->params);

		$this->load->view('footer_view', $this->params);

	}
	
	public function domain_registration_term(){

		$this->params['username'] = $this->session->userdata('username');

		$data = $this->domains_model->domain_registration_term();

		$this->params['data'] = $data;

		$this->load->view('header_view', $this->params);

		$this->load->view('footer_view', $this->params);

	}
	
	public function domains_per_customer(){

		$this->params['username'] = $this->session->userdata('username');

		$data = $this->domains_model->domains_per_customer();

		$this->params['data'] = $data;

		$this->load->view('header_view', $this->params);

		$this->load->view('footer_view', $this->params);
	}

	public function domains_under_management(){

		$this->params['username'] = $this->session->userdata('username');

		$data = $this->domains_model->domains_under_management();

		$this->params['data'] = $data;

		$this->load->view('header_view', $this->params);

		$this->load->view('footer_view', $this->params);
	}
	
}	