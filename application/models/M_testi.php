<?php
/**
*
*/
	class M_testi extends CI_Model{
		public function testi($id_testimoni)
		{
			$this->db->join('user','testimoni.id_user = user.id_user',"LEFT");
			$this->db->join('produk','testimoni.id_produk = produk.id_produk',"LEFT");
			$this->db->where('id_testimoni',$id_testimoni);
		}
	}