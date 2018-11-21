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


	}

?>
