<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {

	public $Merged_Vars = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Employee_Jobs');
		$this->load->model('Employees_list');
	}

	public function index(){
		$this->Merged_Vars['view_all_employees'] = $this->Employees_list->getEmployeeList();
		$this->load->view('dash/employees_list', $this->Merged_Vars);
	}

	public function single_employee($e_id){
		$this->Merged_Vars['view_single_employee'] = $this->Employees_list->getSingleEmployee($e_id);
		$this->load->view('dash/single_employee', $this->Merged_Vars);
	}
    
    public function update_single_employee($e_id){
		$this->Merged_Vars['fetch_single_employee'] = $this->Employees_list->getSingleEmployee($e_id);
		$this->load->view('dash/update_employee', $this->Merged_Vars);
	}

	public function update_employee_process($id){
       $e_name = $this->input->post('e_name');
       $e_email = $this->input->post('e_email');
       $e_phone = $this->input->post('e_phone');
       $e_job = $this->input->post('e_job');
       
       $employee_details = array(
       'e_name' => $e_name,
       'e_phone' => $e_phone,
       'e_email' => $e_email,
       'e_job' => $e_job,
       );
       // print_r($employee_details);
       // exit();

       $this->Employees_list->update_employee($employee_details, $id);
       redirect('employees','refresh');
	}
    
    public function add_employee()
	{
		$this->load->view('dash/add_employee');
		
	}
	public function add_employee_process() 
	{
		if($this->input->post('add_employee')){
			$employee = array(
            'e_name' => $this->input->post('e_name'),
            'e_email' => $this->input->post('e_email'),
            'e_phone' => $this->input->post('e_phone'),
            'e_job' => $this->input->post('e_job'),
			);

			if($this->Employees_list->insert_employee($employee)){
				redirect('employees','refresh');
			}
			else
			{
				echo "failure";
			}
			// print_r($employee);
		}
	}

	public function delete_single_employee($e_id){
		$this->Employees_list->delete_employee($e_id);
		redirect('employees/index','refresh');
	}
}

/* End of file Employees.php */
/* Location: ./application/controllers/Employees.php */