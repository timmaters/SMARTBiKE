<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $config['useragent']    = 'CodeIgniter';
        $config['protocol']     = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.googlemail.com';
        $config['smtp_user']    = 'businesssmartbike@gmail.com'; // Your gmail id
        $config['smtp_pass']    = 'SMARTBiK'; // Your gmail Password
        $config['smtp_port']    = 465;
        $config['wordwrap']     = TRUE;
        $config['wrapchars']    = 76;
        $config['mailtype']     = 'html';
        $config['charset']      = 'iso-8859-1';
        $config['validate']     = FALSE;
        $config['priority']     = 3;
        $config['newline']      = "\r\n";
        $config['crlf']         = "\r\n";

        $this->load->library('email');
        $this->email->initialize($config);

        $this->email->from($this->input->post('email'), $this->input->post('name'));
        $this->email->to('businesssmartbike@gmail.com');
        $this->email->cc($this->input->post('email'));

        $this->email->subject($this->input->post('title'));
        $this->email->message($this->input->post('message'));

        $this->email->send();

		    $this->load->view('index'/*, $data*/);
	}
}
