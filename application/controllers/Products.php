<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header.php');
		$this->load->view('includes/menu.php');
		$this->load->view('includes/navbar.php');
		$this->load->view('products/products_page.php');
		$this->load->view('includes/footer.php');
	}
}
