<?php
/**
*
*/
	class M_prestasi extends CI_Model{

		public function feat()
		{
			$prestas_i = $this->db->get('prestasi');
			return $prestas_i;
		}
	}

?>
