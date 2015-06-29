<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Upload_model extends CI_Model {

	public function __construct(){
        parent::__construct();
		$this->table = 'links';
	}
	
	
	public function get_last_id() {
		return $this->db->count_all($this->table);
	}
	
	
	public function input($full_path) {
		
		if (  ($this->input->post('judul')!='') ) {
			$data = array(
			   'pelajaran' => $this->input->post('pelajaran'),
			   'name' => $this->input->post('judul'),
			   'link' => $full_path
			);
			
			$this->db->insert($this->table, $data);
			return TRUE;
		}
		
		else {
			return FALSE;
		}
	}
}