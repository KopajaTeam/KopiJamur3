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
		// function detgal(){
		// $this->db->join('kategori_forum','forum.id_kategori_forum = kategori_forum.id_kategori_forum');
		// $this->db->where('forum.id_user',$id);
		// return $this->db->get('forum');
		// }
	}

?>
