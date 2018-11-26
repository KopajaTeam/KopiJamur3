<?php
/**
*
*/
	class M_key extends CI_Model{

		public function feat()
		{
			$unggula_n = $this->db->get('unggulan');
			return $unggula_n;
		}


	}

?>
