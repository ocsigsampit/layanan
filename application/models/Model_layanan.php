<?php
class Model_layanan extends CI_Model{
	
	public function cek_status($no_bps){
		$sql    = $this->db->query("SELECT status FROM tb_berkas WHERE no_bps = '".$no_bps."'");
		$hasil = $sql->row();
		if($hasil){
			return $hasil->status;
		}else{
			return "Err";
		}
	}
    
}