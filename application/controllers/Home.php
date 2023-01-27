<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_galeri');
		$this->load->model('m_pengumuman');
		$this->load->model('m_agenda');
		$this->load->model('m_files');
		$this->load->model('m_pengunjung');
		//$this->load->view('templates/header_1');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
			$x['berita']=$this->m_tulisan->get_berita_home();
			$x['pengumuman']=$this->m_pengumuman->get_pengumuman_home();
			$x['agenda']=$this->m_agenda->get_agenda_home();
			$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
			$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
			$x['tot_files']=$this->db->get('tbl_files')->num_rows();
			$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
			$x['isi_tulisan']=$this->db->get('tbl_tulisan')->num_rows();
			
			//$x['isi_gambar']=$this->db->get('tbl_galeri');
			 //$x['isi_berita']=$this->db->get('tbl_tulisan');
			 $x['data'] = $this->db->query('SELECT * FROM tbl_alumni ORDER BY tahun_lulus DESC');
			 $x['isi_berita'] = $this->db->query('SELECT * FROM tbl_tulisan ORDER BY tulisan_tanggal DESC'); 
			 $x['isi_gambar'] = $this->db->query('SELECT * FROM tbl_galeri ORDER BY galeri_tanggal DESC'); 
			//$query_gambar = $this->db->get_where('tbl_tulisan', array('tulisan_gambar' => $gambar));
			/*foreach ($x['isi_berita']->result() as $row)
{
        echo $row->tulisan_gambar;
} */
			$this->load->view('depan/v_home',$x);
			$this->load->view('templates/footer');
	}

}
