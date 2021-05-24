<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model {

	public function insert_user($data){
		$this->db->insert('users',$data);
	}

	public function check_user($data){
	  $this->db->where('users.u_name', $data['u_name']);
      $result = $this->db->get('users');
      return $result;
	}
}

/* End of file Users.php */
/* Location: ./application/models/Users.php */