<?php
/**
*
*/
	class M_testi extends CI_Model{


		//List testi
		public function testi()
		{
			$this->db->join('user','testimoni.id_user = user.id_user',"LEFT");
			$this->db->join('produk','testimoni.id_produk = produk.id_produk',"LEFT");
			// $this->db->where('id_testimoni',$id_testimoni);
			return $this->db->get('testimoni');
		}
		
		//Coba Model
		public function testmon($id_testimoni){
			$this->db->join('user','testimoni.id_user = user.id_user',"LEFT");
			$this->db->join('produk','testimoni.id_produk = produk.id_produk',"LEFT");
			$this->db->where('testimoni.id_user',$id_testimoni);
			return $this->db->get('testimoni');
		}

	}
?>
