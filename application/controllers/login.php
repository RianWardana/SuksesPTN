<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('login_model', 'login_model', TRUE);
    }

	public function index(){
	
		if($this->session->userdata('login') == TRUE){
			redirect('edit');
		}
		
		else{
			$this->data['function'] = 'login';
			
			if($this->login_model->check_valid()){
				if($this->login_model->check_login()){
					redirect('edit');
				}
				
				else{
					$this->session->set_flashdata('error_login', "
						<div class='alert'>
							<div class='alert alert-danger' role='alert'>
							  <strong>NISN dan Password tidak benar</strong>
							</div>
						</div>
					");
					redirect('login');
				}
				
			}
			
			else{
				$this->session->set_flashdata('error_login', "
					<div class='alert'>
						<div class='alert alert-danger' role='alert'>
						  <strong>NISN dan Password tidak valid</strong>
						</div>
					</div>
				");
					
				$this->load->view('navbar_view', $this->data);
				$this->load->view('login_view');
				$this->load->view('footer_view');
			}
		}
	
	}
	
	public function logout(){
		$this->login_model->logout();
		redirect('');
	}
	
}