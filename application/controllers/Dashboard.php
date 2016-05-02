<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	public function index($uid = 0)
	{
		// Set the page element
		$page_element['page_title'] = "Welcome";
		$page_element['method_name'] = "Index";
		$data['title'] = 'Welcome';
		
		
		$fileName = FCPATH."application/user/user_authen.txt";
		
		if(file_exists($fileName)){
			$myFile = fopen($fileName,"r") or die("Unable to open file!");
			$user = array();
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
			$uRole = $user[3];
			
			if ($uRole=='01') // Administrator Page
			{
				$this->load->view('template/dashboard_header',$page_element);
				$this->load->view('dashboard/teacher_dash',$data);
				$this->load->view('template/dashboard_footer',$data);
			}
			else if($uRole == '02') // Teacher View
			{
				$this->load->view('template/dashboard_header',$page_element);
				$this->load->view('dashboard/teacher_dash',$data);
				$this->load->view('template/dashboard_footer',$data);
			}
			else if($uRole == '03') // Student View
			{
				$this->load->view('template/dashboard_header',$page_element);
				$this->load->view('dashboard/student_dash',$data);
				$this->load->view('template/dashboard_footer',$data);
			}
		}else{
			echo 'error';
		}
	}
}