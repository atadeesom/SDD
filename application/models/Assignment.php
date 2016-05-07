<?php
class Assignment extends CI_Model{
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    /*
     * Get List of Assignment with thier details.
     */
    public function getAssignmentDetailList($cid = 0)
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
    
    public function getAssignmentDetail($cid = 0, $assid = 0)
    {
    	$fileName = FCPATH."application/master/assignment.txt";
    	if(file_exists($fileName)){
    		$myFile = fopen($fileName,"r") or die("Unable to open file!");
    		while (!feof($myFile)) {
    			$textLine = fgets($myFile);
    			$line = array();
    			$line = explode(",",$textLine);
    			if($line[0] == $cid && $assid == $line[1]){
    				$assignment = array(
    						'ass_id' => $line[1],
    						'ass_name' => $line[2],
    						'ass_detail' => $line[3]
    				);
    			}
    		}
    		fclose($myFile);
    		return $assignment;
    	}else{
    		echo 'error setAssignmentList';
    	}
    }
    
    public function getAssignmentScoreList($cid = 0, $assid = 0)
    {
    	$fileName = FCPATH."application/score/assignment.txt";
    	$assignments = array();
    	if(file_exists($fileName)){
    		$myFile = fopen($fileName,"r") or die("Unable to open file!");
    		while (!feof($myFile)) {
    			$textLine = fgets($myFile);
    			$line = array();
    			$line = explode(",",$textLine);
    			if($line[2] == $cid && $line[4] == $assid){
    				$assignment = array(
    						'sid' => $line[0],
    						's_name' => $line[1],
    						'score' => $line[5]
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
    
    public function getAssignmentScoreGraphData($cid = 0, $sid = 0)
    {
    	$fileName = FCPATH."application/score/assignment.txt";
    	//$assignments = array();
    	if(file_exists($fileName)){
    		$myFile = fopen($fileName,"r") or die("Unable to open file!");
    		while (!feof($myFile)) {
    			$textLine = fgets($myFile);
    			$line = array();
    			$line = explode(",",$textLine);
    			if($line[2] == $cid && $line[0] == $sid){
    				$assignment['Assignment '.$line[4]] = $line[5];
    			}
    		}
    		fclose($myFile);
    		return $assignment;
    	}else{
    		echo 'error setAssignmentList';
    	}
    }
   
    public function getAssignmentScoreGraphReportData($cid = 0, $assid = 0){
        $fileName = FCPATH."application/score/assignment.txt";
        $noOfStudent = 0;      
        $score = 0;
        if(file_exists($fileName)){
            $myFile = fopen($fileName,"r") or die("Unable to open file!");
            while (!feof($myFile)) {
                $textLine = fgets($myFile);
                $line = array();
                $line = explode(",",$textLine);
                
                /* if($line[2] == $cid && $line[4] == $assid){
                    $assignment = array(
                            'sid' => $line[0],
                            's_name' => $line[1],
                            'score' => $line[5]
                    );
                    array_push($ReportData, $assignment);
                } */
                
                if($line[2] == $cid and $line[4] == $assid){
                    $score += (int)$line[5];
                    $noOfStudent += 1;
                }
            }
            //close file            
            fclose($myFile);
            return $score/$noOfStudent;
        }else{
            echo 'error setAssignmentList';
        }
    }
}