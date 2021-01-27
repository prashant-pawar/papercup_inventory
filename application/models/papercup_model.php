<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class papercup_model extends CI_Model {

	public function admin_login($username,$password)
	{
		$this->db->where('admin_username',$username);
		$this->db->where('admin_password',$password);
		$query = $this->db->get('admin_table');
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

}

/* End of file papercup_model.php */
/* Location: ./application/models/papercup_model.php */