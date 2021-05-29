<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_Model
{

	//

	public function login($user)
	{
		$this->db->select('*');
		$this->db->from('pengguna');
		$this->db->where('username', $user);
		return $this->db->get()->row_array();
	}

	public function ambil_id_profile($id){
		return $this->db->get_where('pengguna',['id_pengguna'=> $id])->row_array();
	}

	public function tambah_kenyamanan($data){
		$this->db->insert('checking_kenyamanan', $data);
	}
	

}