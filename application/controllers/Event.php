<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * This class is about Event Management. It will manipalate data through log file.
 * It will also retrive data from file to show to users.
 * @author ctadeesom
 *
 */
class Event extends CI_Controller {
	
	private $file_extension = ".txt";
	private $file_header_security = 'datetime,user_id,user_ip,session_id,message';
	private $file_header_application = 'datetime,user_id,user_ip,session_id,message';
	private $file_header_stroke = 'datetime,message';
	private $newline = "\r\n";
	
	/**
	 * This method uses for displaying Event Homepage.
	 * The homepage will get all data seperate by date of records.
	 */
	public function index()
	{
		// Set the page element
		$page_element['page_title'] = "Event";
		$page_element['method_name'] = "Index";
		$data['title'] = 'Event list';
		$data['dateCriteria'] = '';
		
		// return data to view
		$this->load->helper('form');
		$this->load->view('template/event_header',$page_element);
		$this->load->view('event/admin_security_log',$data);
		$this->load->view('template/event_footer',$data);
	}

	/**
	 * This method creates a new log file if there is no current date in directory.
	 * Append the new record line, if the file is existed.
	 * This method can accept parameter as JSON POST only.
	 * example of JSON
	 * {"datetime":"2016-05-03 13:00:03",
	 *  "user_id":"5970918821",
	 *  "message":"edit user profile"}
	 * example of output
	 * {"status_code":"200","status_massage":"Success"}
	 */
	public function write_application_log(){
		// Steps
		// 1.Get parameter from JSON parameter
		// 2.Check the file exists.
		// 3.Append log message in new line
		// 4.Return status

		// response result
		$respo['status_code'] = 200;
		$respo['status_massage'] = 'success';

		/*
		 * For test uncomment these lines
		 */
		$datetime = date('Ymd H:i:s');
		$user_id = '9999';
		$user_ip = '192.108.1.1';
		$session_id = 'Ae40329f99';
		$message = "Ko_Test";

		// Check empty element. Element must fill
		if(!(empty($datetime) and empty($user_id) and empty($user_ip) and empty($session_id) and empty($message))) 
		{
			$path = FCPATH.'application/event/application/'.date("Ymd").$this->file_extension;

			// Check current date file exists
			$hasCurrentDateFile = file_exists($path);
			
			// if file not exists
			if(!$hasCurrentDateFile)
			{
				// create new file 
				if (!file_put_contents ($path, $this->file_header_application))
				{
					// response error 
					$respo['status_code'] = 404;
				}
			}
		}
	}
	
	/**
	 * display_security_log will get date from admin then return list of usage to view.
	 */
	public function display_security_log(){
		$dateTerm = $this->input->post('date');
		
		$initailFlag = $this->input->post('initailFlag');
		if(null == $initailFlag || false == $initailFlag){
			$dateTerm = date("Ymd");
			$initailFlag = true;
		}
		
		$firstRow = true;
		$fileName = FCPATH."application/event/security/".$dateTerm.".txt";
		
		if(file_exists($fileName)){
			$myFile = fopen($fileName,"r") or die("Unable to open file!");
			$logs = array();
			while (!feof($myFile)) {
				$textLine = fgets($myFile);
				if($firstRow){
					$firstRow = false;
				}else{
					array_push($logs, explode(",",$textLine));
				}
				//echo fgets($myFile);
			}
			fclose($myFile);
			
			$data['searchResult'] = 'YES';
			$data['logs'] = array();
			array_push($data['logs'],$logs);
		}else{
			$data['searchResult'] = 'YES';
		}
		// Set the page element
		$page_element['page_title'] = "Event";
		$page_element['method_name'] = "index";
		
		$data['dateCriteria'] = $dateTerm;
		
		// return data to view
		$this->load->helper('form');
		$this->load->view('template/event_header',$page_element);
		$this->load->view('event/admin_security_log',$data);
		$this->load->view('template/event_footer',$data);
	}
	
	/**
	 * display_application_log will get date from admin then return list of usage to view.
	 */
	public function display_application_log(){
		
		$dateTerm = $this->input->post('date');
		$firstRow = true;
		
		$initailFlag = $this->input->post('initailFlag');
		if(empty($initailFlag)){
			$dateTerm = date("Ymd");
			$initailFlag = "TRUE";
		}
		
		$fileName = FCPATH."application/event/application/".$dateTerm.".txt";

		if(file_exists($fileName)){
			$myFile = fopen($fileName,"r") or die("Unable to open file!");
			$logs = array();
			while (!feof($myFile)) {
				$textLine = fgets($myFile);
				if($firstRow){
					$firstRow = false;
				}else{
					array_push($logs, explode(",",$textLine));
				}
				//echo fgets($myFile);
			}
			fclose($myFile);
			
			$data['searchResult'] = 'YES';
			$data['logs'] = array();
			array_push($data['logs'],$logs);
		}else{
			$data['searchResult'] = 'YES';
		}
		// Set the page element
		$page_element['page_title'] = "Event";
		$page_element['method_name'] = "index";
		
		$data['dateCriteria'] = $dateTerm;
		$data['initailFlag'] = $initailFlag;
		
		// return data to view
		$this->load->helper('form');
		$this->load->view('template/event_header',$page_element);
		$this->load->view('event/admin_app_log',$data);
		$this->load->view('template/event_footer',$data);
	}
	
	/**
	 * This method create a new log file if this is no current date file in directory
	 * Append the new record if the file existed.
	 * example of JSON
	 * {"datetime":"2016-05-03 13:01:54",
	 *  "user_id":"5970918821",
	 *  "ip":"192.168.1.1",
	 *  "session_id":"2033dfw9ef482dw20s",
	 *  "message":"change password"}
	 *  example of output JSON
	 *  {"status_code":"200","status_massage":"success"}
	 */
	public function write_security_log(){
		// Get parameter from JSON parameter
// 		$datetime = $this->input->post('datetime');
// 		$user_id = $this->input->post('user_id');
// 		$user_ip = $this->input->post('ip');
// 		$session_id = $this->input->post('session_id');
// 		$message = $this->input->post('message');
		
		// response result
		$resp['status_code'] = 200;
		$resp['status_massage'] = 'success';
		
		
		/*
		 * For test uncomment these lines
		 */
		$datetime = date('Ymd H:i:s');
		$user_id = '0091';
		$user_ip = '192.168.1.1';
		$session_id = 'Ae40329f32';
		$message = "TEST";
		
		// Check empty element. Element must fill
		if(!(empty($datetime) and empty($user_id) and empty($user_ip) and empty($session_id) and empty($message))) 
		{
			$path = FCPATH.'application/event/security/'.date("Ymd").$this->file_extension;

			// Check current date file exists
			$hasCurrentDateFile = file_exists($path);
			
			// if file not exists
			if(!$hasCurrentDateFile)
			{
				// create new file 
				if (!file_put_contents ($path, $this->file_header_security))
				{
					// response error 
					$resp['status_code'] = 404;
					$resp['status_massage'] = 'Internal Error: Unable to write file content';
					echo json_encode($resp);
					exit();// throw from this execution
				}
			}
			
			// Append data into new line.
			$line = $this->newline.$datetime.",".$user_id.",".$user_ip.",".$session_id.",".$message;
			if(!write_file($path, $line , "a+"))
			{
				$resp['status_code'] = 404;
				$resp['status_massage'] = 'Internal Error: Unable to write file content';
				echo json_encode($resp);
				exit(); //throw from this execution
			}
			echo json_encode($resp);
		}else {
			$resp['status_code'] = 400;
			$resp['status_massage'] = 'Bad Request: Parameter is not enough.';
			echo json_encode($resp);
		}
	}
	
	/**
	 * This method create a new log file if this is no current date file in directory
	 * Append the new record if the file existed.
	 * example of JSON
	 * {"studentId":"5870948021",
	 *  "courseId":"XXX",
	 *  "assigmentId":"YYY",
	 *  "keystroke":[{
	 *		"start": {"row": 0, "coloum": 0},
	 *		"end": {"row": 0, "coloum": 1},
	 *		"action": "remove",
	 *		"lines": ["s"]
	 *	 },{
	 *		"start": {"row": 0, "coloum": 0},
	 *		"end": {"row": 0, "coloum": 1},
	 *		"action": "remove",
	 *		"lines": ["t"]
	 *	 }]
	 * }
	 * example of output JSON
	 * {"status_code":"200","status_massage":"success"}
	 */
	public function write_keystroke_log(){
		//$studentId = $this->input->post('studentId');
		//$courseId = $this->input->post('courseId');
		//$assignmentId = $this->input->post('assignmentId');
		//$keystroke = $this->input->post('keystroke');
		
		//response result
		$resp['status_code'] = 200;
		$resp['status_message'] = 'success';
		
		/*
		* For Test
		*/
		$datetime = date('Ymd H:i:s');
		$studentId = '520510801';
		$courseId = '204111';
		$assignmentId = 'HW01';
		$keystroke = '[{
	 		"start": {"row": 0, "coloum": 0},
	 		"end": {"row": 0, "coloum": 1},
	 		"action": "remove",
	 		"lines": ["s"]
	 	 },{
	 		"start": {"row": 0, "coloum": 0},
	 		"end": {"row": 0, "coloum": 1},
	 		"action": "remove",
	 		"lines": ["t"]
	 	 }]';
		 
		 // Check empty element. Element must fill
		if(!(empty($datetime) and empty($studentId) and empty($courseId) and empty($assignmentId) and empty($keystroke))){
			$path = FCPATH.'application/event/keystroke/'.$studentId.'_'.$courseId.'_'.$assignmentId.$this->file_extension;
			
			// Check current date file exists
			$hasCurrentDateFile = file_exists($path);
			
			// if file not exists
			if(!$hasCurrentDateFile){
				// create new file 
				if (!file_put_contents ($path, $this->file_header_stroke)){
					// response error 
					$resp['status_code'] = 404;
					$resp['status_massage'] = 'Internal Error: Unable to write file content';
					echo json_encode($resp);
					exit();// throw from this execution
				}
			}
			// Append data into new line.
			$line = $this->newline.$datetime.",".$keystroke;
			if(!write_file($path, $line , "a+")){
				$resp['status_code'] = 404;
				$resp['status_massage'] = 'Internal Error: Unable to write file content';
				echo json_encode($resp);
				exit(); //throw from this execution
			}
			echo json_encode($resp);
		}else{
			$resp['status_code'] = 400;
			$resp['status_massage'] = 'Bad Request: Parameter is not enough.';
			echo json_encode($resp);
		}
	}
}
