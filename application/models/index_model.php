<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Index_model extends CI_Model {

	public function __construct(){
        parent::__construct();
	}
	
	
	public function get_pelajaran() {
		return $this->db->get('pelajaran')->result();
	}
	
	
	public function get_link($pelajaran) {
		return $this->db->where('pelajaran', $pelajaran)->order_by('sorting', 'asc')->get('links')->result();
	}
	
	
	public function banyak_pelajaran() {
		return $this->db->count_all('pelajaran');
	}
	
	
	
	
	
	public function get_available_pelajaran_id() {
		return $this->db->query("SELECT DISTINCT `pelajaran` FROM `links` order by `pelajaran` ASC")->result();
	}
	
	
}