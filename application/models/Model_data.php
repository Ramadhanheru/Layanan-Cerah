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
	
	public function tampil_user()
	{

		$query = $this->db->get('user');

		return $query;
	}
	
	public function tambah_user($data)
	{
		$this->db->insert('user', $data);

	}
	public function edit_user($id)
	{
		$data = [
			
			"role" => 0
		];
		
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
	}
	public function edit_userr($id)
	{
		$data = [
			
			"role" => 2
		];
		
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
	}
	public function e_user($id)
	{
		$data = [
			'nama' => $this->input->post('nama', true)
					];
		
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
	}
		public function ambil_id_user($id){
		return $this->db->get_where('user',['id_user'=> $id])->row_array();
	}
	public function hapus_user($id)
	{
		$this->db->where('id_user', $id);
		$query = $this->db->delete('user');

	}


	public function tampil_kendaraan(){
		$this->db->select('kendaraan_masuk.*,user.nama');
		$this->db->from('kendaraan_masuk');
		$this->db->join('user','user.id_user = kendaraan_masuk.id_user');
		$query = $this->db->get();
		return $query;
	}
	public function tampil_user_2(){
		return $this->db->get_where('user',['role'=> 2]);
	}

	public function tambah_kendaraan($data)
	{
		$this->db->insert('kendaraan_masuk', $data);

	}
	public function edit_kendaraan($id)
	{
		$data = [
				'id_user' => $this->input->post('mekanik', true),
                'nama_stnk' => $this->input->post('nama_stnk', true),
                'nama_pembawa' => $this->input->post('nama_pembawa', true),
                'tanggal' => $this->input->post('tanggal', true),
                'alamat' => $this->input->post('alamat', true),
                'no_hp' => $this->input->post('no_hp', true),
                'no_polisi' => $this->input->post('no_polisi', true),
                'no_mesin' => $this->input->post('no_mesin', true),
                'tipe' => $this->input->post('tipe', true),
                'km' => $this->input->post('km', true)
					];
		
		$this->db->where('id_kendaraan', $id);
		$this->db->update('kendaraan_masuk', $data);
	}
		public function ambil_id_kendaraan($id){
		$this->db->select('kendaraan_masuk.*,user.nama');
		$this->db->from('kendaraan_masuk');
		$this->db->join('user','user.id_user = kendaraan_masuk.id_user');
		$this->db->where('id_kendaraan',$id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function hapus_kendaraan($id){
	
		$this->db->where('id_kendaraan', $id);
		$query = $this->db->delete('kendaraan_masuk');		

	}


	///////////////////////////////////

	public function tampil_kendaraan_role($id){

		$this->db->select('kendaraan_masuk.*,user.nama');
		$this->db->from('kendaraan_masuk');
		$this->db->join('user','user.id_user = kendaraan_masuk.id_user');
		$this->db->where('kendaraan_masuk.id_user',$id);
		$this->db->where('kendaraan_masuk.status','0');
		$query = $this->db->get();
		return $query;
	}

	public function tampil_kerusakan(){

		$query = $this->db->get('kerusakan');
		return $query;

	}

	public function tampil_gejala_diagnosa($id_kerusakan){
		$this->db->select('basis_pengetahuan.*,gejala.*,jenis_kerusakan.*,kerusakan.*');
		$this->db->from('basis_pengetahuan');
		$this->db->join('gejala','gejala.id_gejala = basis_pengetahuan.id_gejala');
		$this->db->join('jenis_kerusakan','jenis_kerusakan.id_jenis_kerusakan = basis_pengetahuan.id_jenis_kerusakan');
		$this->db->join('kerusakan','kerusakan.id_kerusakan = basis_pengetahuan.id_kerusakan');
		$this->db->where('basis_pengetahuan.id_kerusakan',$id_kerusakan);
		$query = $this->db->get();
		return $query;
	}

	public function tambah_kerusakan($data){
		$this->db->insert('kerusakan',$data);
	}
	public function edit_kerusakan($id){

		$data = [
				'kerusakan' => $this->input->post('kerusakan', true)
					];
		
		$this->db->where('id_kerusakan', $id);
		$this->db->update('kerusakan', $data);

	}

	public function hapus_kerusakan($id){
		$this->db->where('id_kerusakan', $id);
		$query = $this->db->delete('kerusakan');	
	}




	public function tampil_jenis_kerusakan(){
		$query = $this->db->get('jenis_kerusakan');
		return $query;
	}

	public function tambah_jenis_kerusakan($data){
		$this->db->insert('jenis_kerusakan',$data);
	}

	public function edit_jenis_kerusakan($id){
		$data = [
				'kode_kerusakan' => $this->input->post('kode_kerusakan', true),
				'jenis_kerusakan' => $this->input->post('jenis_kerusakan', true),
				'solusi' => $this->input->post('solusi', true)
					];
		
		$this->db->where('id_jenis_kerusakan', $id);
		$this->db->update('jenis_kerusakan', $data);
	}

	public function hapus_jenis_kerusakan($id){
	
		$this->db->where('id_jenis_kerusakan', $id);
		$query = $this->db->delete('jenis_kerusakan');		

	}

	public function tampil_gejala(){

		$query = $this->db->get('gejala');
		return $query;
	}
	public function tambah_gejala($data){
		$this->db->insert('gejala',$data);
	}
	public function edit_gejala($id){

		$data = [
				'kode_gejala' => $this->input->post('kode_gejala', true),
				'gejala' => $this->input->post('gejala', true)
					];
		
		$this->db->where('id_gejala', $id);
		$this->db->update('gejala', $data);

	}

	public function hapus_gejala($id){
		$this->db->where('id_gejala', $id);
		$query = $this->db->delete('gejala');	
	}





	public function tampil_basis_pengetahuan(){
		$this->db->select('basis_pengetahuan.*,kerusakan.*,jenis_kerusakan.*,gejala.*');
		$this->db->from('basis_pengetahuan');
		$this->db->join('kerusakan','kerusakan.id_kerusakan=basis_pengetahuan.id_kerusakan');
		$this->db->join('jenis_kerusakan','jenis_kerusakan.id_jenis_kerusakan=basis_pengetahuan.id_jenis_kerusakan');
		$this->db->join('gejala','gejala.id_gejala=basis_pengetahuan.id_gejala');
		$query = $this->db->get();
		return $query;
	}
	public function tambah_basis_pengetahuan($data){
		$this->db->insert('basis_pengetahuan',$data);
	}
	public function edit_basis_pengetahuan($id){

		$data = [
				'id_kerusakan' => $this->input->post('id_kerusakan', true),
				'id_jenis_kerusakan' => $this->input->post('id_jenis_kerusakan', true),
				'id_gejala' => $this->input->post('id_gejala', true)
					];
		
		$this->db->where('id', $id);
		$this->db->update('basis_pengetahuan', $data);

	}

	public function hapus_basis_pengetahuan($id){
		$this->db->where('id', $id);
		$query = $this->db->delete('basis_pengetahuan');	
	}


	public function get_jenis_kerusakan($id){

		return $this->db->get_where('jenis_kerusakan',['id_jenis_kerusakan' => $id])->row_array();
	}
	public function get_gejala($id){

		$this->db->select('basis_pengetahuan.*,kerusakan.*,jenis_kerusakan.*,gejala.*');
		$this->db->from('basis_pengetahuan');
		$this->db->join('kerusakan','kerusakan.id_kerusakan=basis_pengetahuan.id_kerusakan');
		$this->db->join('jenis_kerusakan','jenis_kerusakan.id_jenis_kerusakan=basis_pengetahuan.id_jenis_kerusakan');
		$this->db->join('gejala','gejala.id_gejala=basis_pengetahuan.id_gejala');
		$this->db->where('basis_pengetahuan.id_jenis_kerusakan',$id);
		$query = $this->db->get();
		return $query;
	}

}