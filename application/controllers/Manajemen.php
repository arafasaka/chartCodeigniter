<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen extends CI_Controller {
	function __construct(){
        parent::__construct();      
        $this->load->model('Model_data');
        $this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
        }
	public function index()
	{
		$data['datas'] = $this->Model_data->tampil_user()->result();
		$this->load->view('v_manajemen', $data);

	}
	// public function hapusa($id_user){
	// 	$where = array('id_user' => $id_user);
	// 	$data=$this->db->limit(1)->get_where('user',array('id_user'=>$id_user));
	// 	$this->Model_data->hapus_user($where,'user');
    //     redirect('Manajemen');
    // }

    public function hapus(){
		$id_user = $this->input->post('id_user');

        $result = $this->Model_data->hapus_user($id_user);
		if($result){
		    redirect('Manajemen');
		}else{
            echo '<script>alert("gagal");</script>';
		    redirect('Manajemen');
		}
	}
    function tambah_user(){
        $id_user = $this->input->post('id_user');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

 
        $data = array(
            'id_user' => $id_user,
            'username' => $username,
            'password' => md5($password),
            'level' => $level
            );
        $this->Model_data->input_data_user($data,'user');
        redirect('Manajemen');
    }
	
	}