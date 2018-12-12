<?php
/**
*
*/
	class M_galery extends CI_Model{
		public function gal()
		{
			$gambar = $this->db->get('gallery');
			return $gambar;
			
		}
		function limitG($id,$table){
			$this->db->order_by($id,'DESC');
			$this->db->limit(8);
			return $this->db->get($table);
		}
		function limitF($id,$table){
			$this->db->order_by($id,'DESC');
			$this->db->limit(3);
			return $this->db->get($table);
		}
	}

?>
