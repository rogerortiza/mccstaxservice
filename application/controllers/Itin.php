<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itin extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
	}
	
	public function index()
	{
		$data['message'] = '';
		$data['headerContent'] = 2;

		$this->load->view('shared/header', $data);
		$this->load->view('itin/main', $data);
		$this->load->view('shared/right_aside');
		$this->load->view('shared/footer');
	}
}
