<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {
	function __construct(){
        parent::__construct();      
        $this->load->model('Model_data');
        $this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
        }
	public function index()
	{
		$data['datas'] = $this->Model_data->tampil_chart()->result();

		$this->load->view('v_chart', $data);
	}
	
	}