<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

	public function index()
	{
<<<<<<< HEAD
		$this->load->model('Db');
		$data['records'] = $this->Db->getData();

		$this->load->view('demo', $data);
=======
		$this->load->view('index');
>>>>>>> e2efed090d8b8af3cadacbe0b08e179ac520a22a
	}
}
