<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/***
 * This class uses for controlling user authentication and login
 * @author ctadeesom
 *
 */
class Home extends CI_Controller{
	public function index(){
		
		$this->load->view('login/login_home');
	}
	
}