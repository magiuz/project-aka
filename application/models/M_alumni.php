<?php 
class M_alumni extends CI_Model{

	function get_all_alumni(){
		$hsl=$this->db->query("SELECT tbl_alumni.*,kelas_nama FROM tbl_alumni JOIN tbl_kelas ON alumni_kelas_id=kelas_id JOIN tbl_jalur ON jalur_masuk=jalur_nama");
		return $hsl;
	}

	function simpan_alumni($nama,$jenkel,$kelas_id,$lulus,$jalur,$kampus,$kesan,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_alumni (alumni_nama,alumni_jenkel,alumni_kelas_id,tahun_lulus,jalur_masuk,alumni_photo) VALUES ('$nama','$jenkel','$kelas_id','$photo')");
		return $hsl;
	}
	function simpan_alumni_tanpa_img($nama,$jenkel,$kelas_id){
		$hsl=$this->db->query("INSERT INTO tbl_alumni (alumni_nama,alumni_jenkel,alumni_kelas_id) VALUES ('$nama','$jenkel','$kelas_id')");
		return $hsl;
	}

	function update_alumni($kode,$nama,$jenkel,$kelas_id,$photo){
		$hsl=$this->db->query("UPDATE tbl_alumni SET alumni_nama='$nama',alumni_jenkel='$jenkel',alumni_kelas_id='$kelas_id',alumni_photo='$photo' WHERE alumni_id='$kode'");
		return $hsl;
	}
	function update_alumni_tanpa_img($kode,$nama,$jenkel,$kelas_id){
		$hsl=$this->db->query("UPDATE tbl_alumni SET alumni_nama='$nama',alumni_jenkel='$jenkel',alumni_kelas_id='$kelas_id' WHERE alumni_id='$kode'");
		return $hsl;
	}
	function hapus_alumni($kode){
		$hsl=$this->db->query("DELETE FROM tbl_alumni WHERE alumni_id='$kode'");
		return $hsl;
	}

	function alumni(){
		$hsl=$this->db->query("SELECT tbl_alumni.*,kelas_nama FROM tbl_alumni JOIN tbl_kelas ON alumni_kelas_id=kelas_id");
		return $hsl;
	}
	function alumni_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_alumni.*,kelas_nama FROM tbl_alumni JOIN tbl_kelas ON alumni_kelas_id=kelas_id limit $offset,$limit");
		return $hsl;
	}

}