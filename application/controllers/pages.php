<?php 

class Pages extends CI_Controller {




	 function index($page='home')
	{
		$this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('pages/'.$page);
	$this->load->view('template/footer');
		
	}
}

