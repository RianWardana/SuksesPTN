<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Edit_model extends CI_Model {

	public function __construct(){
        parent::__construct();
		$this->table = 'links';
	}
	
	
	public function get_last_id() {
		$raw = $this->db->query("SELECT MAX( `id` ) AS `id` FROM `links`")->result();
		foreach($raw as $id){ return $id->id; }
	}
	
	public function get_last_id_pelajaran() {
		$raw = $this->db->query("SELECT MAX( `id` ) AS `id` FROM `pelajaran`")->result();
		foreach($raw as $id){ return $id->id; }
	}
	
	public function save_all() {
		for($no = 1; $no <= $this->get_last_id(); $no++){
			$this->db->where('id', $no)
			->update($this->table, array(
										'pelajaran' => $this->input->post("pelajaran_{$no}"),
										'sorting' => $this->input->post("urutan_{$no}"),
										'name' => $this->input->post("judul_{$no}"),
										'link' => $this->input->post("link_{$no}")
									));	
		}
		
		for($no = 1; $no <= $this->get_last_id_pelajaran(); $no++){
			$this->db->where('id', $no)->update('pelajaran', array('pelajaran' => $this->input->post("nama_pelajaran_{$no}")));
		}
		
		$this->db->query("DELETE FROM `links` WHERE `name` = ''");
			
		return true;
	}
}