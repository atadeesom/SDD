<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/***
 * This method uses to manage report element and calculate the result before return to view.
 * @author ctadeesom
 *
 */
class Report extends CI_Controller{
	public function index()
	{
		// Set the page element
		$page_element['page_title'] = "Report";
		$page_element['method_name'] = "Index";
		$data['title'] = 'Report';
		
		// return data to view
		$this->load->view('template/report_header',$page_element);
		$this->load->view('report/teacher_report_class',$data);
		$this->load->view('template/report_footer',$data);
	}
	
	/**
	 * Function: display_class_report uses to gather data from db then 
	 * manipulating data to view.
	 * This function is for teacher user's role.
	 */
	public function display_class_report(){
		//TODO: implement function and return data to view.
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
		}else{
			echo 'error';
		}
		
		//Search Data		
		$sid = $this->input->post('studentId');
		$cid = $this->input->post('courseId');
		
		if ($sid = "") {
			$data2['errorMSG'] = TRUE;
			$data2['studentID'] = "";
			$data2['studentName'] = "";
			$data2['courseName'] = "";
			
			$this->load->view('report/teacher_report_student',$data2);
		}
		else{
			
		$data2['errorMSG'] = FALSE;
		$data2['studentID'] = $sid;
		$assignment = array();
		// Search Assignment
		$fileName = FCPATH."application/score/assignment.txt";
		if(file_exists($fileName)){
			$myFile = fopen($fileName,"r") or die("Unable to open file!");
			$search = array();
			
			while (!feof($myFile)) {
				$textLine = fgets($myFile);
				$line = array();
				$line = explode(",",$textLine);
				if($line[0] == $sid)
				{
					$data2['studentName'] = $line[1];
					if($line[2] == $cid){
						$data2['courseName'] = $line[3];
						$score = array('assg' => $line[4], 'score' => $line[5] );
						array_push($assignment, $score);
					}
				}
				array_push($search, explode(",",$textLine));
			}
			fclose($myFile);
		}
		
		$data = $data2;
	}
		// return data to view
		$this->load->view('template/report_header',$page_element);
		$this->load->view('report/teacher_report_student',$data);
		$this->load->view('template/report_footer',$data);
	}
	public function display_student_report_Search(){
		//Search Data
		$sid = $this->input->post('studentId');
		$cid = $this->input->post('courseId');
		
		if ($sid = "") {
			$data2['errorMSG'] = TRUE;
			$data2['studentID'] = "";
			$data2['studentName'] = "";
			$data2['courseName'] = "";
				
			$this->load->view('report/teacher_report_student',$data2);
		}
		else{
				
			$data2['errorMSG'] = FALSE;
			$data2['studentID'] = $sid;
			$assignment = array();
			// Search Assignment
			$fileName = FCPATH."application/score/assignment.txt";
			if(file_exists($fileName)){
				$myFile = fopen($fileName,"r") or die("Unable to open file!");
				$search = array();
					
				while (!feof($myFile)) {
					$textLine = fgets($myFile);
					$line = array();
					$line = explode(",",$textLine);
					if($line[0] == $sid)
					{
						$data2['studentName'] = $line[1];
						if($line[2] == $cid){
							$data2['courseName'] = $line[3];
							$score = array('assg' => $line[4], 'score' => $line[5] );
							array_push($assignment, $score);
						}
					}
					array_push($search, explode(",",$textLine));
				}
				fclose($myFile);
			}
		
			$data = $data2;
		}
		
		$this->load->view('template/report_header',$page_element);
		$this->load->view('report/teacher_report_student',$data);
		$this->load->view('template/report_footer',$data);
	}
}
