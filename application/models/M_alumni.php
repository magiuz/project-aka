<?php 
class M_alumni extends CI_Model{

	function get_all_alumni(){
		$hsl=$this->db->query("SELECT tbl_alumni.*,kelas_nama FROM tbl_alumni JOIN tbl_kelas ON alumni_kelas_id=kelas_id");
		return $hsl;
	}

	function simpan_alumni($nis,$nama,$jenkel,$kelas,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_alumni (alumni_nis,alumni_nama,alumni_jenkel,alumni_kelas_id,alumni_photo) VALUES ('$nis','$nama','$jenkel','$kelas','$photo')");
		return $hsl;
	}
	function simpan_alumni_tanpa_img($nis,$nama,$jenkel,$kelas){
		$hsl=$this->db->query("INSERT INTO tbl_alumni (alumni_nis,alumni_nama,alumni_jenkel,alumni_kelas_id) VALUES ('$nis','$nama','$jenkel','$kelas')");
		return $hsl;
	}

	function update_alumni($kode,$nis,$nama,$jenkel,$kelas,$photo){
		$hsl=$this->db->query("UPDATE tbl_alumni SET alumni_nis='$nis',alumni_nama='$nama',alumni_jenkel='$jenkel',alumni_kelas_id='$kelas',alumni_photo='$photo' WHERE alumni_id='$kode'");
		return $hsl;
	}
	function update_alumni_tanpa_img($kode,$nis,$nama,$jenkel,$kelas){
		$hsl=$this->db->query("UPDATE tbl_alumni SET alumni_nis='$nis',alumni_nama='$nama',alumni_jenkel='$jenkel',alumni_kelas_id='$kelas' WHERE alumni_id='$kode'");
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