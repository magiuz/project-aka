<?php
class saranaprasarana extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->view('templates/header_1');
        $this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
    }
    function index()
    {
        $x['tot_guru'] = $this->db->get('tbl_guru')->num_rows();
        $x['tot_siswa'] = $this->db->get('tbl_siswa')->num_rows();
        $x['tot_files'] = $this->db->get('tbl_files')->num_rows();
        $x['tot_agenda'] = $this->db->get('tbl_agenda')->num_rows();
        $this->load->view('depan/v_saranaprasarana', $x);
        $this->load->view('templates/footer');
    }
}
