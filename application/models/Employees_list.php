<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees_list extends CI_Model {

	public function insert_employee($employee){
       if($this->db->insert('employees',$employee)){
       	return true;
       }
       else{
       	return false;
       } 
	}

	public function getEmployeeList(){
		$employees = $this->db->get('employees');
		if($employees->num_rows() > 0)
		{
			return $employees;
		}
		else{
			return false;
		}
	}

	public function getSingleEmployee($e_id){
       $this->db->where('employees.e_id',$e_id);
       return $this->db->get('employees');
     
	}

	public function update_employee($employee_details, $e_id){
       $this->db->where('employees.e_id',$e_id);
       return $this->db->update('employees', $employee_details);
	}
    
    public function delete_employee($id){
    	$this->db->where('employees.e_id', $id);
    	$this->db->delete('employees');
    	
    }
	

}

/* End of file Employees_list.php */
/* Location: ./application/models/Employees_list.php */