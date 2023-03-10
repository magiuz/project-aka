<?php
class Galeri extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->view('templates/header_1');
		$this->load->model('m_galeri');
		$this->load->model('m_album');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	
	}
	function index(){
		$x['alb']=$this->m_album->get_all_album();
		$x['all_galeri']=$this->m_galeri->get_all_galeri();
		$x['isi_gambar'] = $this->db->query('SELECT * FROM tbl_galeri ORDER BY galeri_tanggal DESC'); 
		$this->load->view('depan/v_galeri',$x);
		$this->load->view('templates/footer');
	}
	function album(){
		$idalbum=$this->uri->segment(3);
		$x['alb']=$this->m_album->get_all_album();
		$x['data']=$this->m_galeri->get_galeri_by_album_id($idalbum);
		$this->load->view('depan/v_galeri_per_album',$x);

	}
}
