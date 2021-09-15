<?php

class Model_data extends CI_Model{

    function login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query =  $this->db->get('user');
        return $query->num_rows();
    }

    function data_login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('user')->row();
    }
//warga
    public function tampil_warga(){
        return $this->db->get('warga_tb');
    }
    function input_data_warga($data,$table){
        $this->db->insert($table,$data);
    }
    public function detail_warga($id_warga = NULL){
        $query = $this->db->get_where('warga_tb', array('id_warga' => $id_warga))->row();
        return $query;
    }
    public function tampil_chart(){
        $query=$this->db->query("select sum(kendaraan) as totalkendaraan, sum(luarnegri) as totalluarnegri, sum(kumpul) as totalkumpul, sum(bertemu) as totalbertemu, sum(terjangkit) as totalterjangkit, sum(gejala) as totalgejala from warga_tb;");
        
        return $query;
        }
    public function hapus(){
    $query=$this->db->query("TRUNCATE TABLE warga_tb;");
        return $query;
        }
//user
    public function tampil_user(){
        return $this->db->get('user');
        }
    public function hapus_user($id_user)
        {
        $result = $this->db->delete('user', array('id_user' => $id_user)); 
        return $result;
        }
    public function input_data_user($data,$table){
    $this->db->insert($table,$data);
    }
}