<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        if (!isset($_SESSION)) session_start();
        
        if ($this->session->userdata('login') == TRUE){
            $this->data['have_login'] = TRUE;
			$this->data['username'] = $this->session->userdata('username');
        }
		
		else{
			$this->data['have_login'] = FALSE;
		}
    }   
}