<?php 
class M_alumni extends CI_Model{

	function get_all_alumni(){
		$hsl = $this->db->query("SELECT tbl_alumni.*, kelas_nama, jalur_nama FROM tbl_alumni 
                        JOIN tbl_kelas ON alumni_kelas_id = kelas_id
                        JOIN tbl_jalur ON jalur_masuk = jalur_id");
		return $hsl;
	}

	function simpan_alumni($nama,$jenkel,$kelas_id,$lulus,$jalur,$kampus,$kesan,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_alumni (alumni_nama,alumni_jenkel,alumni_kelas_id,tahun_lulus,jalur_masuk,alumni_kampus,alumni_kesan,alumni_photo) VALUES ('$nama','$jenkel','$kelas_id','$lulus','$jalur','$kampus','$kesan','$photo')");
		return $hsl;
	}
	function simpan_alumni_tanpa_img($nama,$jenkel,$kelas_id,$lulus,$jalur,$kampus,$kesan){
		$hsl=$this->db->query("INSERT INTO tbl_alumni (alumni_nama,alumni_jenkel,alumni_kelas_id,tahun_lulus,jalur_masuk,alumni_kampus,alumni_kesan) VALUES ('$nama','$jenkel','$kelas_id','$lulus','$jalur','$kampus','$kesan')");
		return $hsl;
	}

	function update_alumni($kode,$nama,$jenkel,$kelas_id,$lulus,$jalur,$kampus,$kesan,$photo){
		$hsl=$this->db->query("UPDATE tbl_alumni SET alumni_nama='$nama',alumni_jenkel='$jenkel',alumni_kelas_id='$kelas_id',tahun_lulus='$lulus',jalur_masuk='$jalur',alumni_kampus='$kampus',alumni_kesan='$kesan',alumni_photo='$photo' 
		WHERE alumni_id='$kode'");
		return $hsl;
	}
	function update_alumni_tanpa_img($kode,$nama,$jenkel,$kelas_id,$lulus,$jalur,$kampus,$kesan){
		$hsl=$this->db->query("UPDATE tbl_alumni SET alumni_nama='$nama',alumni_jenkel='$jenkel',alumni_kelas_id='$kelas_id',tahun_lulus='$lulus',jalur_masuk='$jalur',alumni_kampus='$kampus',alumni_kesan='$kesan'
		WHERE alumni_id='$kode'");
		return $hsl;
	}
	function hapus_alumni($kode){
		$hsl=$this->db->query("DELETE FROM tbl_alumni WHERE alumni_id='$kode'");
		return $hsl;
	}

	function alumni(){
		$hsl=$this->db->query("SELECT tbl_alumni.*, kelas_nama, jalur_nama FROM tbl_alumni 
		JOIN tbl_kelas ON alumni_kelas_id = kelas_id
		JOIN tbl_jalur ON jalur_masuk = jalur_id");
	return $hsl;
	}
	function alumni_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_alumni.*, kelas_nama, jalur_nama FROM tbl_alumni 
		JOIN tbl_kelas ON alumni_kelas_id = kelas_id
		JOIN tbl_jalur ON jalur_masuk = jalur_id limit $offset,$limit");
	return $hsl;
	}

}