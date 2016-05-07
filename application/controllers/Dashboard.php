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
		
		// load Model to method
		$this->load->model('Course');
		if($uid != null)
		{
			// get user role id
			$uRole = $this->session->userdata('u_role');
			if ($uRole=='01') // Administrator Page
			{
				$this->load->view('template/header',$this->setDataReturnToView());
				$this->load->view('dashboard/admin_dash',$data);
				$this->load->view('template/footer',$data);
			}
			else if($uRole == '02') // Teacher View
			{
				$data = $this->setTeacherData();
				$this->load->view('template/header',$this->setDataReturnToView());
				$this->load->view('dashboard/teacher_dash',$data);
				$this->load->view('template/footer',$data);
			}
			else if($uRole == '03') // Student View
			{
				$data['course_list'] = $this->Course->getCourseDetialList(); 
				$data['sid'] = $uid;
				$this->load->view('template/header',$this->setDataReturnToView());
				$this->load->view('dashboard/student_dash',$data);
				$this->load->view('template/footer',$data);
			}
		}
	}
	
	public function course($cid = 0, $sid = 0){
		
		// Load Model in this controller
		$this->load->model('Assignment');
		$this->load->model('Course');
		$this->load->model('Exam');
		
		if($sid ==0) // set up data for teacher
		{
			$data['assignment_list'] = $this->Assignment->getAssignmentDetailList($cid);
			$data['course'] = $this->Course->getCourseDetail($cid);
			$data['exam_list'] = $this->Exam->setExamDetailList($cid);
			$data['cid'] = $cid;
			
			$this->load->view('template/header',$this->setDataReturnToView());
			$this->load->view('dashboard/teacher_dash_class',$data);
			$this->load->view('template/footer',$data);
		}else{ // set up data for student
			$data['course'] = $this->Course->getCourseDetail($cid);
			$data['cid'] = $cid;
			$data['assignment_data'] = $this->Assignment->getAssignmentScoreGraphData($cid,$sid);
			$data['exam_data'] = $this->Exam->getExamScoreGraphData($cid,$sid);
			
			$this->load->view('template/header',$this->setDataReturnToView());
			$this->load->view('dashboard/student_dash_class',$data);
			$this->load->view('template/footer',$data);
		}
		
	}
	
	public function assignment($cid = 0, $assid = 0){
		// Load Model in this action of controller
		$this->load->model('Assignment');
		$this->load->model('Course');
		
		$data['assignments'] = $this->Assignment->getAssignmentScoreList($cid,$assid);
		$data['course'] = $this->Course->getCourseDetail($cid);
		$data['assignment_details'] = $this->Assignment->getAssignmentDetail($cid,$assid);
		
		$this->load->view('template/header',$this->setDataReturnToView());
		$this->load->view('dashboard/teacher_dash_assignment',$data);
		$this->load->view('template/footer',$data);
	}
	
	public function exam($cid = 0, $eid = 0)
	{
		// Load Model in this controller
		$this->load->model('Assignment');
		$this->load->model('Course');
		$this->load->model('Exam');
		
		$data['assignment_list'] = $this->Assignment->getAssignmentDetailList($cid);
		$data['course'] = $this->Course->getCourseDetail($cid);
		$data['exams'] = $this->Exam->getExamScore($cid,$eid);
		$data['exam_detail'] = $this->Exam->getExamDetail($cid,$eid);
		
		$this->load->view('template/header',$this->setDataReturnToView());
		$this->load->view('dashboard/teacher_dash_exam',$data);
		$this->load->view('template/footer',$data);
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
		$page_element['nav_report_course_active'] = false;
		$page_element['nav_report_student_active'] = false;
		$page_element['nav_deshboard_active'] = true;
		$page_element['nav_event_active'] = false;
		$page_element['nav_event_security_active'] = false;
		$page_element['nav_event_application_active'] = false;
		$page_element['screenName'] = 'Dashboard';
		
		// set user variable 
		$uid = $this->session->userdata('uid');
		if($uid != null){
			$page_element['user_full_name'] = $this->session->userdata('full_name');
			$uRole = $this->session->userdata('u_role');
			$page_element['user_role'] = $uRole == '01' ? 'Administrator' : $uRole == '02' ? 'Teacher' : 'Student';
			
		}
		
	
		return $page_element;
	}
	
	private function setTeacherData()
	{
		$this->load->model('Course');
		$courses = $this->Course->getCourseDetialList();
		
		foreach ($courses as $key => $course)
		{
			$student_amount = count($this->Course->getCourseStudent($course['cid']));
			$courses[$key]['student_amount'] = $student_amount;
		}
		
		$data['course_list'] = $courses;
		
		return $data;
	}
	
}