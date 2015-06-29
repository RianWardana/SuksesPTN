<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Halo extends MY_Controller {

	public function __construct(){
		parent::__construct();		
    }

	
	public function index(){
	
		$this->data['function'] = 'halo';
		
		
		$this->load->view('navbar_view', $this->data);
		$this->load->view('halo_view');
		$this->load->view('footer_view');
		
	}
	
}