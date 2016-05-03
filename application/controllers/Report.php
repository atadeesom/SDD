<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/***
 * This method uses to manage report element and calculate the result before return to view.
 * @author ctadeesom
 *
 */
class Report extends CI_Controller{
    
    private function setDataReturnToView(){
        // Set the page element
        $page_element['page_title'] = "Report";
        $page_element['method_name'] = "index";
    
        $page_element['nav_report_active'] = true;
        $page_element['nav_deshboard_active'] = false;
        $page_element['nav_event_active'] = false;
        
        //set other page
        $page_element['nav_event_security_active'] = false;
        $page_element['nav_event_application_active'] = false;
    
        $page_element['title'] = 'Report';
        $page_element['screenName'] = 'Report';
        
        // set user variable
        $uid = $this->session->userdata('uid');
        if($uid != null){
        	$page_element['user_full_name'] = $this->session->userdata('full_name');
        	$uRole = $this->session->userdata('u_role');
        	$page_element['user_role'] = $uRole == '01' ? 'Administrator' : $uRole == '02' ? 'Teacher' : 'Student';
        		
        }
    
        return $page_element;
    }
    
	public function index()
	{
		// Set the page element
		$data['title'] = 'Report';
		
		// return data to view
		$page_element = $this->setDataReturnToView();
		$page_element['nav_report_student_active'] = false;
		$page_element['nav_report_course_active'] = false;
		
		$this->load->view('template/header',$page_element);
		$this->load->view('report/teacher_report_class',$data);
		$this->load->view('template/footer',$data);
	}
	
	/**
	 * Function: display_class_report uses to gather data from db then 
	 * manipulating data to view.
	 * This function is for teacher user's role.
	 */
	public function display_class_report(){
		//TODO: implement function and return data to view.
		
	    $page_element = $this->setDataReturnToView();
	    $page_element['nav_report_student_active'] = false;
	    $page_element['nav_report_course_active'] = true;
	    $data = array();
	    // return data to view
	    $this->load->view('template/header',$page_element);
	    $this->load->view('report/teacher_report_student',$data);
	    $this->load->view('template/footer',$data);
	}

	
	/**
	 * Function display_student_report uses to gather data from db then
	 * manipulate data to view.
	 * This function is for teacher user's role.
	 */
	public function display_student_report(){
		//TODO: implement function and return data to view.
		// Set the page element
		$page_element['page_title'] = "Report";
		$page_element['method_name'] = "Index";
		$data['title'] = 'Report';
		$chk = $this->input->post('chk');
		
		$data['classes_list'] = array();
		
		$fileName = FCPATH."application/master/course.txt";
		
		if(file_exists($fileName)){
			$myFile = fopen($fileName,"r") or die("Unable to open file!");
			$classes = array();
			while (!feof($myFile)) {
				$textLine = fgets($myFile);
				
				array_push($classes, explode(",",$textLine));
			}
			fclose($myFile);

			$data['classes_list'] = $classes;
			$data['errorMSG'] = 1;
			
		}else{
			echo 'error';
		}
		
		//Search Data		
		$sid = $this->input->post('studentId');
		$cid = $this->input->post('courseId');
		
		if ($chk == "") {
			$data['errorMSG'] = 2;
			$data['studentID'] = "";
			$data['studentName'] = "";
			$data['courseName'] = "";
			$data['chk_err'] = 1;
		}
			
		$data['errorMSG'] = 1;
		$data['studentID'] = $sid;
		$assignment = array();
		$exam = array();
		
		// Search Assignment
		$fileName = FCPATH."application/score/assignment.txt";
		if(file_exists($fileName)){
			$myFile = fopen($fileName,"r") or die("Unable to open file!");
			$search = array();
			$count = 0;
			
			while (!feof($myFile)) {
				$textLine = fgets($myFile);
				$line = array();
				$line = explode(",",$textLine);
				if($line[0] == $sid)
				{
					$data['studentName'] = $line[1];
					if($line[2] == $cid){
						$data['courseName'] = $line[3];
						$score = array('assg' => $line[4], 'score' => $line[5] );
						array_push($assignment, $score);
					}
				}
				array_push($search, explode(",",$textLine));
				$count = sizeof($search);		
			}
			fclose($myFile);
		}
		
		$data['assignment'] = $assignment;
		
		// Search Exam
		$fileNameExam = FCPATH."application/score/exam.txt";
		if(file_exists($fileNameExam)){
			$myFile = fopen($fileNameExam,"r") or die("Unable to open file!");
			$search = array();
			$count = 0;
				
			while (!feof($myFile)) {
				$textLine = fgets($myFile);
				$line = array();
				$line = explode(",",$textLine);
				if($line[0] == $sid)
				{
					$data['studentName'] = $line[1];
					if($line[2] == $cid){
						$data['courseName'] = $line[3];
						$score = array('exam' => $line[4], 'score' => $line[5] );
						array_push($exam, $score);
					}
				}
				array_push($search, explode(",",$textLine));
				
			}
			fclose($myFile);
		}
		
		$data['exam'] = $exam;
		
// 		echo '<pre>';
// 		print_r($exam);
// 		exit();
		
		// return data to view
		$this->load->view('template/report_header',$page_element);
		$this->load->view('report/teacher_report_student',$data);
		$this->load->view('template/report_footer',$data);
	}
	
	
	
	
}