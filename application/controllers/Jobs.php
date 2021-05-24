<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {
    
    public $Merged_Vars = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Employee_Jobs');
	}

	public function index()
	{
		$this->load->view('dash/add_job');
	}

	public function view_jobs(){
		$this->Merged_Vars['view_all_jobs'] = $this->Employee_Jobs->getJobList();
		$this->load->view('dash/job_list', $this->Merged_Vars);
	}

	public function add_job()
	{
		if($this->input->post('add_job')){
			$j_name = $this->input->post('j_name');

			$jobs_data = array(
				'j_name' => $j_name
			);

			$this->Employee_Jobs->add_job($jobs_data);
			redirect('jobs/view_jobs' , 'refresh');
		}
	}
	public function update_job($j_id){
		$this->load->view('dash/update_job', $j_id);

		
	}
    
    public function update_job_process($j_id){
    	 
      if($this->input->post('update_job')){

      	$job_details = array(
        'j_name' => $this->input->post('j_name')
      	);

        $check = $this->Employee_Jobs->update_job_details($job_details,$j_id);
        if($check)
        {
        	redirect('jobs/view_jobs','refresh');
        }
      }
    }


 

    public function delete_job_process($j_id){

        $check = $this->Employee_Jobs->delete_job_details($j_id);
        if($check)
        {
        	redirect('jobs/view_jobs','refresh');
        }
      
    }

}

/* End of file Jobs.php */
/* Location: ./application/controllers/Jobs.php */