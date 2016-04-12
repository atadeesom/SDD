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
	private $newline = "\r\n";
	
	/**
	 * This method uses for displaying Event Homepage.
	 * The homepage will get all data seperate by date of records.
	 */
	public function index()
	{
		// Set the page element
		$page_element['page_title'] = "Welcome";
		$page_element['method_name'] = "Index";
		$data['title'] = 'Event list';
		
		// return data to view
		$this->load->view('template/header',$page_element);
		$this->load->view('event/index',$data);
		$this->load->view('template/footer',$data);
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
					$respo['status_massage'] = 'Internal Error: Unable to write file content';
					echo json_encode($respo);
					exit();// throw from this execution
				}
			}

			// Append data into new line.
			$line = $this->newline.$datetime.",".$user_id.",".$user_ip.",".$session_id.",".$message;
			if(!write_file($path, $line , "a+"))
			{
				$respo['status_code'] = 404;
				$respo['status_massage'] = 'Internal Error: Unable to write file content';
				echo json_encode($respo);
				exit(); //throw from this execution
			}
			echo json_encode($respo);
		}else {
			$respo['status_code'] = 400;
			$respo['status_massage'] = 'Bad Request: Parameter is not enough.';
			echo json_encode($respo);
		}
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
}