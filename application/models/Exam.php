<?php
class Exam extends CI_Model{
	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	public function setExamDetailList($cid = 0)
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
	
	public function getExamScore($cid = 0, $exam_id = 0)
	{
		$fileName = FCPATH."application/score/exam.txt";
		$exams = array();
		if(file_exists($fileName)){
			$myFile = fopen($fileName,"r") or die("Unable to open file!");
			while (!feof($myFile)) {
				$textLine = fgets($myFile);
				$line = array();
				$line = explode(",",$textLine);
				if($line[2] == $cid && $line[4] == $exam_id){
					$exam = array(
							'sid' => $line[0],
							's_name' => $line[1],
							'score' => $line[5]
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
	
	public function getExamScoreGraphData($cid = 0, $sid = 0)
	{
		$fileName = FCPATH."application/score/exam.txt";
		if(file_exists($fileName)){
			$myFile = fopen($fileName,"r") or die("Unable to open file!");
			while (!feof($myFile)) {
				$textLine = fgets($myFile);
				$line = array();
				$line = explode(",",$textLine);
				if($line[2] == $cid && $line[0] == $sid){
					$exam['Exam '.$line[4]] = $line[5];
				}
			}
			fclose($myFile);
			return $exam;
		}else{
			echo 'error setExamList';
		}
	}
	
	public function getExamDetail($cid = 0, $exam_id = 0)
	{
		$fileName = FCPATH."application/master/exam.txt";
		if(file_exists($fileName)){
			$myFile = fopen($fileName,"r") or die("Unable to open file!");
			while (!feof($myFile)) {
				$textLine = fgets($myFile);
				$line = array();
				$line = explode(",",$textLine);
				if($line[0] == $cid && $line[1] == $exam_id){
					$exam = array(
							'exam_id' => $line[1],
							'exam_name' => $line[2],
							'exam_detail' => $line[3]
					);
				}
			}
			fclose($myFile);
			return $exam;
		}else{
			echo 'error setExamList';
		}
	}
}