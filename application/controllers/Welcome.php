<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	/**
	 * This method uses to manage our homepage.
	 */
	public function index()
	{
		// Set the page element
		$page_element['page_title'] = "Welcome";
		$page_element['method_name'] = "Index";
		$data['title'] = 'Welcome';
		
		// return data to view
		$this->load->view('template/header',$page_element);
		$this->load->view('dashboard/student_dash_class',$data);
		$this->load->view('template/footer',$data);
	}

	/**
	 * This method uses for view testing only.
	 */
	public function load(){
		// Set the page element
		$page_element['page_title'] = "Welcome";
		$page_element['method_name'] = "Load";
		$data['title'] = 'Welcome';
		
		// return data to view
		$this->load->view('template/header',$page_element);
		$this->load->view('welcome_message',$data);
		$this->load->view('template/footer',$data);
	}
}
