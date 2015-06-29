<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends MY_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('index_model', 'index_model', TRUE);
		$this->load->model('upload_model', 'upload_model', TRUE);
	
		$this->data['pelajaran_result'] = $this->index_model->get_pelajaran();
    }

	
	public function index($pelajaran = 1){
	
		$this->data['function'] = 'upload';
		$this->data['referer'] = $pelajaran;
		$this->load->view('navbar_view', $this->data);
		$this->load->view('upload_view', $this->data);
		$this->load->view('footer_view');
		
	}
	
	
	public function start_upload() {
		$config['upload_path'] = '../files';
		$config['allowed_types'] = 'gif|jpg|png|zip|rar|pdf|doc|docx';
		$config['max_size']	= '10100';
		$config['overwrite'] = 'TRUE';
		
		if ($this->input->post('judul') != '') {
		
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload()) {
				$upload_data = $this->upload->data();
				$file_name = $upload_data["file_name"];
				$full_path = "http://suksesptn.com/files/{$file_name}";
				$this->upload_model->input($full_path);
				redirect(base_url());
			}
			
			else { 
				$this->session->set_flashdata('error_input', "
					<div class='alert' style=''>
						<div class='alert alert-danger' role='alert'>
						  <strong>Uploadnya gagal ya. File-nya kegedean ato formatnya ga sesuai.</strong>
						</div>
					</div>
				");
				
				redirect("upload");
			}
		}
		
		else {
			$this->session->set_flashdata('error_input', "
				<div class='alert' style=''>
					<div class='alert alert-danger' role='alert'>
					  <strong>Form upload harap diisi dengan benar</strong>
					</div>
				</div>
			");
			
			redirect("upload");
		}
		
		
	} // start_upload //
	
}