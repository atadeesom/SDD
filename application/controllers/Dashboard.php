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
				$this->load->view('template/header',$this->setDataReturnToView());
				$this->load->view('dashboard/teacher_dash',$data);
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
				$this->load->view('template/header',$this->setDataReturnToView());
				$this->load->view('dashboard/student_dash',$data);
				$this->load->view('template/footer',$data);
			}
		}
	}
	
	public function course($cid = 0){
		$data['assignment_list'] = $this->setAssignmentList($cid);
		$data['course'] = $this->getCourse($cid);
		$data['exam_list'] = $this->setExamList($cid);
		
		$this->load->view('template/header',$this->setDataReturnToView());
		$this->load->view('dashboard/teacher_dash_class',$data);
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
	
	private function getCourseList()
	{
		$fileName = FCPATH."application/master/course.txt";
		$courses = array();
		if(file_exists($fileName)){
			$myFile = fopen($fileName,"r") or die("Unable to open file!");
			while (!feof($myFile)) {
				$textLine = fgets($myFile);
				$line = array();
				$line = explode(",",$textLine);
				$course = array(
							'cid' => $line[0],
							'course_name' => $line[1],
							'lecturer' => $line[2]
							);
				array_push($courses, $course);
			}
			fclose($myFile);
			return $courses;
		}else{
			echo 'error getCourseList';
		}
	}
	private function getCourse($cid = 0)
	{
		$fileName = FCPATH."application/master/course.txt";
		if(file_exists($fileName)){
			$myFile = fopen($fileName,"r") or die("Unable to open file!");
			while (!feof($myFile)) {
				$textLine = fgets($myFile);
				$line = array();
				$line = explode(",",$textLine);
				if($line[0]==$cid){
					$course = array(
						'cid' => $line[0],
						'course_name' => $line[1],
						'lecturer' => $line[2]
					);
				}
			}
			fclose($myFile);
			return $course;
		}else{
			echo 'error getCourseList';
		}
	}
	
	private function getCourseStudent($cid = 0)
	{
		$fileName = FCPATH."application/score/assignment.txt";
		$students = array();
		if(file_exists($fileName)){
			$myFile = fopen($fileName,"r") or die("Unable to open file!");
			while (!feof($myFile)) {
				$textLine = fgets($myFile);
				$line = array();
				$line = explode(",",$textLine);
				if($line[2]==$cid)
				{
					$student = array(
							'sid' => $line[0],
							'student_name' => $line[1]
					);
					array_push($students, $student);
				}
			}
			fclose($myFile);
			$arr = array();
			
			foreach($students as $key => $item)
			{
				$arr[$item['sid']][$key] = $item;
			}
			
			ksort($arr, SORT_NUMERIC);
			
			return $arr;
			
		}else{
			echo 'error getCourseStudent';
		}
	}
	
	private function setTeacherData()
	{
		$courses = $this->getCourseList();
		
		foreach ($courses as $key => $course)
		{
			$student_amount = count($this->getCourseStudent($course['cid']));
			$courses[$key]['student_amount'] = $student_amount;
		}
		
		$data['course_list'] = $courses;
		
		return $data;
	}
	
	private function setAssignmentList($cid = 0)
	{
		$fileName = FCPATH."application/master/assignment.txt";
		$assignments = array();
		if(file_exists($fileName)){
			$myFile = fopen($fileName,"r") or die("Unable to open file!");
			while (!feof($myFile)) {
				$textLine = fgets($myFile);
				$line = array();
				$line = explode(",",$textLine);
				if($line[0] == $cid){
					$assignment = array(
						'ass_id' => $line[1],
						'ass_name' => $line[2],
						'ass_detail' => $line[3]
					);
					array_push($assignments, $assignment);
				}
			}
			fclose($myFile);
			return $assignments;
		}else{
			echo 'error setAssignmentList';
		}
	}
	private function setExamList($cid = 0)
	{
		$fileName = FCPATH."application/master/exam.txt";
		$exams = array();
		if(file_exists($fileName)){
			$myFile = fopen($fileName,"r") or die("Unable to open file!");
			while (!feof($myFile)) {
				$textLine = fgets($myFile);
				$line = array();
				$line = explode(",",$textLine);
				if($line[0] == $cid){
					$exam = array(
							'exam_id' => $line[1],
							'exam_name' => $line[2],
							'exam_detail' => $line[3]
					);
					array_push($exams, $exam);
				}
			}
			fclose($myFile);
			return $exams;
		}else{
			echo 'error setExamList';
		}
	}
}