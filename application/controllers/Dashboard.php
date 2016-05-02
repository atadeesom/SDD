<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	public function index($uid = 0)
	{
		// Check User in Session
		if($uid != 0)
		{
			$this->getUserAuthen($uid);
		}
		$uid = $this->session->userdata('uid');
		$data = array(); 
		if($uid != null)
		{
			// get user role id
			$uRole = $this->session->userdata('u_role');
			
			if ($uRole=='01') // Administrator Page
			{
				$this->load->view('template/dashboard_header',$this->setDataReturnToView());
				$this->load->view('dashboard/teacher_dash',$data);
				$this->load->view('template/dashboard_footer',$data);
			}
			else if($uRole == '02') // Teacher View
			{
				$this->load->view('template/dashboard_header',$this->setDataReturnToView());
				$this->load->view('dashboard/teacher_dash',$data);
				$this->load->view('template/dashboard_footer',$data);
			}
			else if($uRole == '03') // Student View
			{
				$this->load->view('template/header',$this->setDataReturnToView());
				$this->load->view('dashboard/student_dash',$data);
				$this->load->view('template/footer',$data);
			}
		}
	}
	private function getUserAuthen($uid = null){
		
		// Get User Authentication
		$fileName = FCPATH."application/user/user_authen.txt";
		$user = array();
		if(file_exists($fileName)){
			$myFile = fopen($fileName,"r") or die("Unable to open file!");
			while (!feof($myFile)) {
				$textLine = fgets($myFile);
				$line = array();
				$line = explode(",",$textLine);
				if($line[0] == $uid)
					$user = $line;
			}
			fclose($myFile);
			/*
			 * user[0] = uid
			 * user[1] = user name
			 * user[2] = pwd
			 * user[3] = user role 01-Administator, 02-Teacher, 03-Student
			 * user[4] = Full Name
			 */
			
		}else{
			echo 'error';
		}
		
		// set data to session
		$newdata = array(
				'uid'  => $user[0],
				'user_name'     => $user[1],
				'u_role' => $user[3],
				'full_name' => $user[4]
		);
		
		$this->session->set_userdata($newdata);
	}
	
	private function setDataReturnToView(){
		// Set the page element
		$page_element['page_title'] = "Dashboard";
		$page_element['method_name'] = "";
		$page_element['title'] = 'Dashboard';
	
		$page_element['nav_report_active'] = false;
		$page_element['nav_deshboard_active'] = true;
		$page_element['nav_event_active'] = false;
		$page_element['nav_event_security_active'] = false;
		$page_element['nav_event_application_active'] = false;
		$page_element['screenName'] = 'Dashboard';
	
		return $page_element;
	}
}