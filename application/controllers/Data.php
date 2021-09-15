<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
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

		$this->load->view('v_data', $data);

	}
	public function detail($id_warga){
		$this->load->model('Model_data');
		$detail = $this->model_data->detail_warga($id_warga);
		$data['detail'] = $detail;
		$this->load->view('v_detail', $data);
	}
	public function hapus(){
		$data['datas'] = $this->Model_data->hapus();
		$this->load->view('v_home', $data);
	}
	
	}