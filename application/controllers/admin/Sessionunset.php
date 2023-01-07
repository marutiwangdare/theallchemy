<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sessionunset extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
	}
	public function sessionunset()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->set_flashdata('info-message_success','You are logout successfully.');
	    redirect(base_url().'Allchemy_adm');
	}
}
