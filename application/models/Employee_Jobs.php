<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_Jobs extends CI_Model {

	public function add_job($job_details){
           
           $this->db->insert('jobs',$job_details);
	}

	public function getJobList(){
		$jobs = $this->db->get('jobs');
		if($jobs->num_rows() > 0){
			return $jobs;
		}
		else{
			return FALSE;
		}
	}

	public function showJobList(){
		$jobs = $this->db->get('jobs');
		if($jobs->num_rows() > 0){
			return $jobs;
		}
		else{
			return FALSE;
		}
	}

	public function update_job_details($job_details,$j_id){
		$this->db->where('jobs.j_id', $j_id);
		if($this->db->update('jobs', $job_details)){
			return true;
		}
		else
		{
			return false;
		}
	}

	public function delete_job_details($j_id){
		$this->db->where('jobs.j_id', $j_id);
		if($this->db->delete('jobs')){
			return true;
		}
		else
		{
			return false;
		}
	}

	

}

/* End of file Jobs.php */
/* Location: ./application/models/Jobs.php */