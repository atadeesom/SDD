<?php
class Course extends CI_Model{
	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	public function getCourseDetialList()
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
	
	public function getCourseDetail($cid = 0)
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
	
	public function getCourseStudent($cid = 0)
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
}