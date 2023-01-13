<?php
class M_prestasi extends CI_Model{

	function get_all_prestasi(){
		$hsl=$this->db->query("SELECT prestasi_id,prestasi_nama,prestasi_jenis,prestasi_hasil,prestasi_tingkat,prestasi_tahun,DATE_FORMAT(prestasi_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_prestasi ORDER BY prestasi_id DESC");
		return $hsl;
	}
	function simpan_prestasi($nama,$jenis,$hasil,$tingkat,$tahun){
		$hsl=$this->db->query("INSERT INTO tbl_prestasi(prestasi_nama,prestasi_jenis,prestasi_hasil,prestasi_tingkat,prestasi_tahun) VALUES ('$nama,$jenis,$hasil,$tingkat,$tahun')");
		return $hsl;
	}
	function update_prestasi($kode,$nama,$jenis,$hasil,$tingkat,$tahun){
		$hsl=$this->db->query("UPDATE tbl_prestasi SET prestasi_nama='$nama',prestasi_jenis='$jenis',prestasi_hasil='$hasil' where prestasi_id='$kode'");
		return $hsl;
	}
	
	function hapus_prestasi($kode){
		$hsl=$this->db->query("DELETE FROM tbl_prestasi WHERE prestasi_id='$kode'");
		return $hsl;
	}

	// //Front-end
	// function get_pengumuman_home(){
	// 	$hsl=$this->db->query("SELECT pengumuman_id,pengumuman_judul,pengumuman_deskripsi,DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal,pengumuman_author FROM tbl_pengumuman ORDER BY pengumuman_id DESC limit 3");
	// 	return $hsl;
	// }

	// function pengumuman(){
	// 	$hsl=$this->db->query("SELECT pengumuman_id,pengumuman_judul,pengumuman_deskripsi,DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal,pengumuman_author FROM tbl_pengumuman ORDER BY pengumuman_id DESC");
	// 	return $hsl;
	// }
	// function pengumuman_perpage($offset,$limit){
	// 	$hsl=$this->db->query("SELECT pengumuman_id,pengumuman_judul,pengumuman_deskripsi,pengumuman_tanggal,DATE_FORMAT(pengumuman_tanggal,'%d/%m/%Y') AS tanggal,pengumuman_author FROM tbl_pengumuman ORDER BY pengumuman_id DESC limit $offset,$limit");
	// 	return $hsl;
	// }


}
