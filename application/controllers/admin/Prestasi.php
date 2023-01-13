<?php
class Prestasi extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_prestasi');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_prestasi->get_all_prestasi();
		$this->load->view('admin/v_prestasi',$x);
	}

	function simpan_prestasi(){
		$nama=($this->input->post('xnama'));
		$jenis=($this->input->post('xjenis'));
		$hasil=($this->input->post('xhasil'));
		$tingkat=($this->input->post('xtingkat'));
		$tahun=($this->input->post('xtahun'));
		$this->m_prestasi->simpan_prestasi($nama,$jenis,$hasil,$tingkat,$tahun);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/prestasi');
	}

	function update_prestasi(){
		$kode=strip_tags($this->input->post('kode'));
		$nama=strip_tags($this->input->post('xnama'));
		$jenis=strip_tags($this->input->post('xjenis'));
		$hasil=strip_tags($this->input->post('xhasil'));
		$tingkat=strip_tags($this->input->post('xtingkat'));
		$tahun=strip_tags($this->input->post('xtahun'));
		$this->m_prestasi->update_prestasi($kode,$nama,$jenis,$hasil,$tingkat,$tahun);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/prestasi');
	}
	function hapus_prestasi(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_prestasi->hapus_prestasi($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/prestasi');
	}

}