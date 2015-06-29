<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MY_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('index_model', 'index_model', TRUE);
		$this->data['pelajaran_result'] = $this->index_model->get_pelajaran();
		
		$this->banyak_pelajaran = $this->index_model->banyak_pelajaran() + 1;
		
		for($count = 1; $count < $this->banyak_pelajaran; $count++){
			$this->data['link_result'][$count] = $this->index_model->get_link($count);
		}
    }

	
	public function index(){
	
		$this->data['function'] = 'index';
		
		$this->data['pelajaran_available_id'] = $this->index_model->get_available_pelajaran_id();
		
		$this->load->view('navbar_view', $this->data);
		$this->load->view('index_view', $this->data);
		$this->load->view('footer_view');
		
	}
	
}