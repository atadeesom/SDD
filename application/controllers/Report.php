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
	 * Function display_section_report uses to gather data from db then
	 * manipulate data to view.
	 * This function is for teacher user's role.
	 */
	public function display_section_report(){
		//TODO: implement function and return data to view.
	}
	
	/**
	 * Function display_student_report uses to gather data from db then
	 * manipulate data to view.
	 * This function is for teacher user's role.
	 */
	public function display_student_report(){
		//TODO: implement function and return data to view.
	}
}