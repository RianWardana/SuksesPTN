<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Input extends MY_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('index_model', 'index_model', TRUE);
		$this->load->model('input_model', 'input_model', TRUE);
	
		$this->data['pelajaran_result'] = $this->index_model->get_pelajaran();
    }

	
	public function index(){
	
		$this->data['function'] = 'input';
		
		if ($this->input->post('input')) {
				if ($this->input_model->input()) {
					redirect(base_url());
				}
				
				else {
					$this->session->set_flashdata('error_input', "
						<div class='alert' style=''>
							<div class='alert alert-danger' role='alert'>
							  <strong>Form input harap diisi dengan benar</strong>
							</div>
						</div>
					");
					
					redirect('input');
				}
				
				
			}
		
		else {
			$this->load->view('navbar_view', $this->data);
			$this->load->view('input_view', $this->data);
			$this->load->view('footer_view');
		}
		
	}
	
}