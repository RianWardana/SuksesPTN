<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit extends MY_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('index_model', 'index_model', TRUE);
		$this->load->model('edit_model', 'edit_model', TRUE);
		
		$this->data['pelajaran_result'] = $this->index_model->get_pelajaran();
		$this->banyak_pelajaran = $this->index_model->banyak_pelajaran() + 1;
		
		for($count = 1; $count < $this->banyak_pelajaran; $count++) {
			$this->data['link_result'][$count] = $this->index_model->get_link($count);
		}
    }

	
	public function index(){
	
		$this->data['function'] = 'edit';
		
		if ($this->session->userdata('login') == FALSE) {
			redirect('login');
		}
		
		else {
			// User clicks 'Simpan' //
			if ($this->input->post('save_all')) {
				if ($this->edit_model->save_all()) {
					$this->session->set_flashdata('info_save', "
						<div class='alert'>
							<div class='alert alert-success' role='alert'>
							  <strong>Perubahan berhasil disimpan</strong>
							</div>
						</div>
					");
				}
				
				else {}
				redirect('edit');
			}
			
			// Default edit page //
			else {
				$this->load->view('navbar_view', $this->data);
				$this->load->view('edit_view', $this->data);
				$this->load->view('footer_view');
			}
		}
		
	}
	
}