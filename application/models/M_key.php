<?php
/**
*
*/
	class M_key extends CI_Model{

		public function feat()
		{
			$key_feature = $this->db->get('key_features');
			return $key_feature;
		}


	}

?>
