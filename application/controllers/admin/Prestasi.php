<?php
class Prestasi extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_prestasi ');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}

    function index(){
		$x['data']=$this->m_prestasi->get_all_prestasi();
		$this->load->view('admin/v_prestasi',$x);
	}

    function simpan_guru(){
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name']))
        {
            if ($this->upload->do_upload('filefoto'))
            {
                    $gbr = $this->upload->data();
                    //Compress Image
                    $config['image_library']='gd2';
                    $config['source_image']='./assets/images/'.$gbr['file_name'];
                    $config['create_thumb']= FALSE;
                    $config['maintain_ratio']= FALSE;
                    $config['quality']= '60%';
                    $config['width']= 300; 
                    $config['height']= 300;
                    $config['new_image']= './assets/images/'.$gbr['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();

                    $photo=$gbr['file_name'];
                    $nama=strip_tags($this->input->post('xnama'));
                    $jenis=strip_tags($this->input->post('xjenis'));
                    $hasil=strip_tags($this->input->post('xhasil'));
                    $tingkat=strip_tags($this->input->post('xtingkat'));

                    $this->m_prestasi->simpan_prestasi($nama,$jenis,$hasil,$tingkat);
                    echo $this->session->set_flashdata('msg','success');
                    redirect('admin/prestasi');
            }else{
                echo $this->session->set_flashdata('msg','warning');
                redirect('admin/prestasi');
            }
             
        }else{
            $jenis=strip_tags($this->input->post('xjenis'));
            $hasil=strip_tags($this->input->post('xhasil'));
            $tingkat=strip_tags($this->input->post('xtingkat'));

            $this->m_prestasi->simpan_prestasi_tanpa_nama($jenis,$hasil,$tingkat);
            echo $this->session->set_flashdata('msg','success');
            redirect('admin/prestasi');
        }
        
}