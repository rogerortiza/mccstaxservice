<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->config('email');
		$this->load->library('email');
		$data['message'] = '';

		if($this->input->method() == 'post'){
			$from = $this->config->item('smtp_user');
			$who = $this->input->post('email');
			$to = 'info@mccstaxservice.com';
			$subject = $this->input->post('tipo-servicio');
			$message = 'Mensaje de <strong>'.$who.'</strong> que dice: '.$this->input->post('message');

			$this->email->set_newline("\r\n");
			$this->email->from($from);
			$this->email->to($to);
			$this->email->subject($subject);
			$this->email->message($message);
			
			if ($this->email->send()) {
				$data['message'] = 'Gracias, tu solucitud ha sido enviada';
				$this->load->view('home', $data);
			} else {
				show_error($this->email->print_debugger());
			}

		}
		else {
			$this->load->view('header');
			$this->load->view('home', $data);
			$this->load->view('footer');
		}
		
	}
}
