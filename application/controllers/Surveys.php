<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surveys extends CI_Controller {

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
	public function index()
	{
		$this->load->view('times/index');
	}
	
	public function process_form()
	{
		$visit = $this->session->userdata('counter');
		$visit++;
		$this->session->set_userdata('counter', $visit);

		$view_data['user_info'] = array(
			'name' =>  $this->input->post('name'),
			'dojo_location' => $this->input->post('dojo_location'),
			'favorite_language' => $this->input->post('favorite_language'),
			'comment' => $this->input->post('comment'),
			'count_visit' => $visit
		);
		$this->load->view('times/result.php', $view_data);
	}
}
