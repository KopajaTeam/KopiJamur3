<?php
/**
*
*/
	class M_testi extends CI_Model{

<<<<<<< HEAD
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
			$this->db->where('id_testimoni',$id_testimoni);
			return $this->db->get('testimoni');
		}

	}
?>
=======
	}
>>>>>>> 20309434b95f8d3681aa98ec625e51e00ff0a33c
