<?php
/**
 *
 */
class Admin_Dashboard extends CI_Model
{
	public function select($table){
		return $this->db->get($table);
	}
	public function selectlimit($table){
		$this->db->order_by('','');
		$this->db->limit();
		return $this->db->get($table);
	}
	public function selectwhere($table,$where){
		return $this->db->get_where($table, $where);
	}
	function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function update($table,$data,$where){
		$this->db->update($table,$data);
		$this->db->where($where);
	}
	public function insert($table,$date){
		$this->db->insert($table,$data);
	}
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

	public function select_produk(){
		$this->db->join('kategori_produk','produk.id_kategori_produk = kategori_produk.id_kategori_produk', "LEFT");
		return $this->db->get('produk');
	}

}

?>
