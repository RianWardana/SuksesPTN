<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Input_model extends CI_Model {

	public function __construct(){
        parent::__construct();
		$this->table = 'links';
	}
	
	
	public function get_last_id() {
		return $this->db->count_all($this->table);
	}
	
	
	public function input() {
		
		if (  ($this->input->post('judul')!='') && ($this->input->post('link')!='')  ) {
			$data = array(
			   'pelajaran' => $this->input->post('pelajaran'),
			   'name' => $this->input->post('judul'),
			   'link' => $this->input->post('link')
			);
			
			$this->db->insert($this->table, $data);
			return TRUE;
		}
		
		else {
			return FALSE;
		}
	}
}