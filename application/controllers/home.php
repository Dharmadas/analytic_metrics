<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){
        parent::__construct();               
    }
	
	public function index()
	{
		if(!$this->login_model->check_session()){
			
			$this->url = $this->session->userdata('url');
			
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			if($this->form_validation->run() == FALSE){				
			
				$this->load->view('login_view');				
				
			}else{				
				$this->username = $this->input->post('username');
				$this->password = $this->input->post('password');				
				
				$this->_validate();
				
			}
			
		}else{
			
			if(!empty($this->url)){
				
				redirect($this->url);
				
			}else{
				
				$this->params['username'] = $this->session->userdata('username');
				$this->load->view('home_view', $this->params);
				
			}
			
		}
	}
	
	function _validate() {
;
        $this->auth = $this->login_model->check_auth($this->username, $this->password);

        if (!$this->auth) {

            $this->params['error'] = 'Invalid username or password.';            
            $this->load->view('login_view', $this->params);
        } else {
			
			$this->login_model->create_session($this->username);
			
			$this->params['username'] = $this->session->userdata('username');

            if (!empty($this->url)) {
				
                redirect($this->url);
				
            } else {
				
                $this->load->view('home_view', $this->params);
				
            }
        }
    }
	
	function end() {

        $this->session->sess_destroy();
        redirect(base_url());
		
    }
	
}
?>