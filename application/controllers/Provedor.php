<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provedor extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header.php');
		$this->load->view('includes/menu.php');
		$this->load->view('includes/navbar.php');
		$this->load->view('provedor_page.php');
		$this->load->view('includes/footer.php');
	}
}
