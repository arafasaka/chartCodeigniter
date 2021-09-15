<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
        parent::__construct();      
        $this->load->model('Model_data');
        $this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
        }
	public function index()
	{
		$data['datas'] = $this->Model_data->tampil_warga()->result();
		check_not_login();
		$this->load->view('v_home', $data);

	}
	function tambah_aksi(){
		date_default_timezone_set('Asia/Karachi');
		$now = date('Y-m-d');	
			$id_warga = $this->input->post('id_warga');
			$nama_warga = $this->input->post('nama_warga');
			$alamat_warga = $this->input->post('alamat_warga');
			$tgl_warga = $this->input->post('tgl_warga');
			$kendaraan = $this->input->post('kendaraan');
			$luarnegri = $this->input->post('luarnegri');
			$kumpul = $this->input->post('kumpul');
			$bertemu = $this->input->post('bertemu');
			$terjangkit = $this->input->post('terjangkit');
			$gejala = $this->input->post('gejala');
	
	 
			$data = array(
				'id_warga' => $id_warga,
				'nama_warga' => $nama_warga,
				'alamat_warga' => $alamat_warga,
				'tgl_warga' => date('Y-m-d'),
				'kendaraan' => $kendaraan,
				'luarnegri' => $luarnegri,
				'kumpul' => $kumpul,
				'bertemu' => $bertemu,
				'terjangkit' => $terjangkit,
				'gejala' => $gejala,
				
				);
			$this->model_data->input_data_warga($data,'warga_tb');
			redirect('Home');
		} 
	}