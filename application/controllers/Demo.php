<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

	public function index()
	{
    $this->load->model('modelHeartbeat');
    $this->load->model('modelMusic' );
    $this->load->model('modelNavigationData');
	  $data['songs'] = $this->modelMusic->getData();
    $data['heartbeat'] = $this->modelHeartbeat->getData();
    $data['navigation_data'] = $this->modelNavigationData->getData();
		$this->load->view('demo', $data);
	}
}
