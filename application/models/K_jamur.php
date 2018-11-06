<?php
/**
*
*/
class K_jamur extends CI_Model
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
		$this->db->update($table,$data,$where);
	}
	public function insert($table,$date){
		$this->db->insert($table,$data);
	}
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

	public function detailforum($id_forum){
		//ambil data FORUM dari table forum
		$this->db->join('user','forum.id_user = user.id_user', "LEFT");
		$this->db->join('kategori_forum','forum.id_kategori_forum = kategori_forum.id_kategori_forum', "LEFT");
		$this->db->where('id_forum', $id_forum);
		return $this->db->get('forum');
	}
	public function reply($id_reply){
		$this->db->join('user','reply_forum.id_user = user.id_user',"LEFT");
		$this->db->join('forum,reply_forum.id_forum = forum.id_forum',"LEFT");
		$this->db->where('id_reply', $id_reply);
		$this->db->get('reply_forum');
	}
	public function detailproduk($id_produk){
		$this->db->join('kategori_produk','produk.id_kategori_produk = kategori_produk.id_kategori_produk', "LEFT");
		$this->db->where('id_produk', $id_produk);
		return $this->db->get('produk');
	}

	public function produkall(){
		$this->db->join('kategori_produk','produk.id_kategori_produk = kategori_produk.id_kategori_produk', "LEFT");
		return $this->db->get('produk');
	}
}
?>