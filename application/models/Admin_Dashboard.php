<?php
/**
 *
 */
class Admin_Dashboard extends CI_Model
{
	public function select($table){
		return $this->db->get($table);
	}

	public function cek_login($table, $where){
		$this->db->where($where);
		return $this->db->get($table)->num_rows();
	}

}

 ?>
