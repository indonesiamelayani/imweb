<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template extends CI_Controller
{
	public function index()
	{
		$data['content']	= 'analytic';
		$this->load->view('templates/default', $data); ////asd
	}
}
