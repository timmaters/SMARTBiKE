<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

	public function index()
	{
		$this->load->model('Db');
		$data['records'] = $this->Db->getData();

		$this->load->view('index', $data);
	}
}
