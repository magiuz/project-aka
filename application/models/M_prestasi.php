<?php 
class M_prestasi extends CI_Model{

	function get_all_prestasi(){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasi");
		return $hsl;
	}

	function simpan_prestasi($nama,$jenis,$hasil,$tingkat){
		$hsl=$this->db->query("INSERT INTO tbl_prestasi (prestasi_nama,prestasi_jenis,prestasi_hasil,prestasi_tingkat) VALUES ('$nama,$jenis,$hasil,$tingkat')");
		return $hsl;
	}

	function simpan_prestasi_tanpa_nama($jenis,$hasil,$tingkat){
		$hsl=$this->db->query("INSERT INTO tbl_prestasi (prestasi_jenis,prestasi_hasil,prestasi_tingkat) VALUES ('$jenis,$hasil,$tingkat')");
		return $hsl;
	}

	function update_prestasi($kode,$nama,$jenis,$hasil,$tingkat){
		$hsl=$this->db->query("UPDATE tbl_prestasi SET prestasi_nama='$nama',prestasi_jenis='$jenis',prestasi_hasil='$hasil',prestasi_tingkat='$tingkat' WHERE prestasi_id='$kode'");
		return $hsl;
	}
	function update_prestasi_tanpa_nama($kode,$jenis,$hasil,$tingkat){
		$hsl=$this->db->query("UPDATE tbl_prestasi  SET prestasi_nama ='$nama',prestasi_jenis='$jenis',prestasi_hasil='$hasil',prestasi_tingkat='$tingkat',guru_tgl_lahir='$tgl_lahir',guru_mapel='$mapel' WHERE guru_id='$kode'");
		return $hsl;
	}
	function hapus_prestasi($kode){
        $hsl=$this->db->query("DELETE FROM tbl_prestasi WHERE prestasi_id='$kode'");
		return $hsl;
	}

	//front-end
	function prestasi(){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasi");
		return $hsl;
	}
	function prestasi_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_prestasi limit $offset,$limit");
		return $hsl;
	}

}