<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header.php');
		$this->load->view('includes/menu.php');
		$this->load->view('includes/navbar.php');
		$this->load->view('home_page');
		$this->load->view('includes/footer.php');
	}
}
