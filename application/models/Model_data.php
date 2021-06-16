<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_Model
{
	public function totalUser(){
		$this->db->select('count(id_pengguna) as total' );
		$this->db->from('pengguna');
		$this->db->where('role','2');
		$this->db->or_where('role','3');
		return $this->db->get()->row_array();
	}
	public function totalBriefing(){
		$this->db->select('count(*) as total' );
		$this->db->from('briefing');
		return $this->db->get()->row_array();
	}
	public function totalBriefingYa(){
		$this->db->select('count(*) as total' );
		$this->db->from('briefing');
		$this->db->where('morning','Ya');
		return $this->db->get()->row_array();
	}
	public function totalBriefingTidak(){
		$this->db->select('count(*) as total' );
		$this->db->from('briefing');
		$this->db->where('morning','Tidak');
		return $this->db->get()->row_array();
	}
	public function totalBriefingSudahToday(){
		$this->db->select('count(*) as total' );
		$this->db->from('briefing');
		$this->db->where('tanggal', date('Y-m-d'));
		return $this->db->get()->row_array();
	}

	//
	public function getJan(){
		$this->db->select('briefing.id_pengguna,pengguna.kantor, COUNT(*) AS jumlah_bulanan');
		$this->db->from('briefing');
		$this->db->join('pengguna','pengguna.id_pengguna = briefing.id_pengguna');
		$this->db->where('MONTH(tanggal)=1');
		$this->db->group_by('id_pengguna');
		return $this->db->get();

	}public function getFeb(){
		$this->db->select('briefing.id_pengguna,pengguna.kantor, COUNT(*) AS jumlah_bulanan');
		$this->db->from('briefing');
		$this->db->join('pengguna','pengguna.id_pengguna = briefing.id_pengguna');
		$this->db->where('MONTH(tanggal)=2');
		$this->db->group_by('id_pengguna');
		return $this->db->get();

	}public function getMar(){
		$this->db->select('briefing.id_pengguna,pengguna.kantor, COUNT(*) AS jumlah_bulanan');
		$this->db->from('briefing');
		$this->db->join('pengguna','pengguna.id_pengguna = briefing.id_pengguna');
		$this->db->where('MONTH(tanggal)=3');
		$this->db->group_by('id_pengguna');
		return $this->db->get();

	}public function getApr(){
		$this->db->select('briefing.id_pengguna,pengguna.kantor, COUNT(*) AS jumlah_bulanan');
		$this->db->from('briefing');
		$this->db->join('pengguna','pengguna.id_pengguna = briefing.id_pengguna');
		$this->db->where('MONTH(tanggal)=4');
		$this->db->group_by('id_pengguna');
		return $this->db->get();

	}
	public function getMei(){
		$this->db->select('briefing.id_pengguna,pengguna.kantor, COUNT(*) AS jumlah_bulanan');
		$this->db->from('briefing');
		$this->db->join('pengguna','pengguna.id_pengguna = briefing.id_pengguna');
		$this->db->where('MONTH(tanggal)=5');
		$this->db->group_by('id_pengguna');
		return $this->db->get();

	}
	public function getJun(){
		$this->db->select('briefing.id_pengguna,pengguna.kantor, COUNT(*) AS jumlah_bulanan');
		$this->db->from('briefing');
		$this->db->join('pengguna','pengguna.id_pengguna = briefing.id_pengguna');
		$this->db->where('MONTH(tanggal)=6');
		$this->db->group_by('id_pengguna');
		return $this->db->get();

	}
	public function getJul(){
		$this->db->select('briefing.id_pengguna,pengguna.kantor, COUNT(*) AS jumlah_bulanan');
		$this->db->from('briefing');
		$this->db->join('pengguna','pengguna.id_pengguna = briefing.id_pengguna');
		$this->db->where('MONTH(tanggal)=7');
		$this->db->group_by('id_pengguna');
		return $this->db->get();

	}
	public function getAgu(){
		$this->db->select('briefing.id_pengguna,pengguna.kantor, COUNT(*) AS jumlah_bulanan');
		$this->db->from('briefing');
		$this->db->join('pengguna','pengguna.id_pengguna = briefing.id_pengguna');
		$this->db->where('MONTH(tanggal)=8');
		$this->db->group_by('id_pengguna');
		return $this->db->get();

	}
	public function getSep(){
		$this->db->select('briefing.id_pengguna,pengguna.kantor, COUNT(*) AS jumlah_bulanan');
		$this->db->from('briefing');
		$this->db->join('pengguna','pengguna.id_pengguna = briefing.id_pengguna');
		$this->db->where('MONTH(tanggal)=9');
		$this->db->group_by('id_pengguna');
		return $this->db->get();

	}
	public function getOkt(){
		$this->db->select('briefing.id_pengguna,pengguna.kantor, COUNT(*) AS jumlah_bulanan');
		$this->db->from('briefing');
		$this->db->join('pengguna','pengguna.id_pengguna = briefing.id_pengguna');
		$this->db->where('MONTH(tanggal)=10');
		$this->db->group_by('id_pengguna');
		return $this->db->get();

	}
	public function getNov(){
		$this->db->select('briefing.id_pengguna,pengguna.kantor, COUNT(*) AS jumlah_bulanan');
		$this->db->from('briefing');
		$this->db->join('pengguna','pengguna.id_pengguna = briefing.id_pengguna');
		$this->db->where('MONTH(tanggal)=11');
		$this->db->group_by('id_pengguna');
		return $this->db->get();

	}
	public function getDes(){
		$this->db->select('briefing.id_pengguna,pengguna.kantor, COUNT(*) AS jumlah_bulanan');
		$this->db->from('briefing');
		$this->db->join('pengguna','pengguna.id_pengguna = briefing.id_pengguna');
		$this->db->where('MONTH(tanggal)=12');
		$this->db->group_by('id_pengguna');
		return $this->db->get();

	}
	public function getUserBriefing(){
		$this->db->select('briefing.id_pengguna,pengguna.kantor, COUNT(*) AS jumlah_bulanan');
		$this->db->from('briefing');
		$this->db->join('pengguna','pengguna.id_pengguna = briefing.id_pengguna');
		$this->db->group_by('id_pengguna');
		return $this->db->get();

	}
	///

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

	public function tambah_peralatan($data){
		$this->db->insert('checking_peralatan', $data);
	}

	public function tambah_kenyamanan($data){
		$this->db->insert('checking_kenyamanan', $data);
	}

	public function tambah_toilet($data){
		$this->db->insert('checking_toilet', $data);
	}
	public function tambah_atm($data){
		$this->db->insert('checking_atm', $data);
	}

	////////////////////////////////////////////////

	public function tambah_morning_briefing($data){
		$this->db->insert('briefing', $data);
	}

	
	public function tampil_morning_ya_briefing($id){
		$this->db->select('*');
		$this->db->from('briefing');
		$this->db->where('id_pengguna', $id);
		$this->db->where('tanggal', date('Y-m-d'));
		$this->db->where('morning', 'Ya');
		return $this->db->get()->row_array();
	}
	
	public function tampil_briefing($id){
		$this->db->select('*');
		$this->db->from('briefing');
		$this->db->where('tanggal', date('Y-m-d'));
		$this->db->where('id_pengguna', $id);
		return $this->db->get()->row_array();
	}

	public function tampil_briefing_by_pengguna($id){
		$this->db->select('briefing.*, pengguna.nama as nama,
			pengguna.unit as unit,pengguna.kantor as kantor,');
		$this->db->from('briefing');
		$this->db->join('pengguna','pengguna.id_pengguna = briefing.id_pengguna');
		$this->db->where('briefing.id_pengguna', $id);
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}

	public function tampil_checking_peralatan_by_pengguna($id){
		$this->db->select('checking_peralatan.*, pengguna.nama as nama,
			pengguna.unit as unit,pengguna.kantor as kantor, pengguna.alamat as alamat');
		$this->db->from('checking_peralatan');
		$this->db->join('pengguna','pengguna.id_pengguna = checking_peralatan.id_pengguna');
		$this->db->where('checking_peralatan.id_pengguna', $id);
		return $this->db->get();
	}

	public function tampil_checking_kenyamanan_by_pengguna($id){
		$this->db->select('checking_kenyamanan.*, pengguna.nama as nama,
			pengguna.unit as unit,pengguna.kantor as kantor, pengguna.alamat as alamat');
		$this->db->from('checking_kenyamanan');
		$this->db->join('pengguna','pengguna.id_pengguna = checking_kenyamanan.id_pengguna');
		$this->db->where('checking_kenyamanan.id_pengguna', $id);
		return $this->db->get();
	}

	public function tampil_checking_toilet_by_pengguna($id){
		$this->db->select('checking_toilet.*, pengguna.nama as nama,
			pengguna.unit as unit,pengguna.kantor as kantor, pengguna.alamat as alamat');
		$this->db->from('checking_toilet');
		$this->db->join('pengguna','pengguna.id_pengguna = checking_toilet.id_pengguna');
		$this->db->where('checking_toilet.id_pengguna', $id);
		return $this->db->get();
	}
	
	public function tampil_checking_atm_by_pengguna($id){
		$this->db->select('checking_atm.*, pengguna.nama as nama,
			pengguna.unit as unit,pengguna.kantor as kantor, pengguna.alamat as alamat');
		$this->db->from('checking_atm');
		$this->db->join('pengguna','pengguna.id_pengguna = checking_atm.id_pengguna');
		$this->db->where('checking_atm.id_pengguna', $id);
		return $this->db->get();
	}

	public function print_berdasarkan_tgl($id,$year,$month){

		$query = $this->db->query("SELECT * FROM briefing WHERE YEAR(tanggal) = $year AND MONTH(tanggal) = $month AND id_pengguna = $id;");
		return $query;
	}

	public function print_checking_peralatan_by_id($id){
		$this->db->select('checking_peralatan.*, pengguna.nama as nama,
			pengguna.unit as unit,pengguna.kantor as kantor, pengguna.alamat as alamat');
		$this->db->from('checking_peralatan');
		$this->db->join('pengguna','pengguna.id_pengguna = checking_peralatan.id_pengguna');
		$this->db->where('checking_peralatan.id', $id);
		return $this->db->get()->row_array();

	}
	public function print_checking_kenyamanan_by_id($id){
		$this->db->select('checking_kenyamanan.*, pengguna.nama as nama,
			pengguna.unit as unit,pengguna.kantor as kantor, pengguna.alamat as alamat');
		$this->db->from('checking_kenyamanan');
		$this->db->join('pengguna','pengguna.id_pengguna = checking_kenyamanan.id_pengguna');
		$this->db->where('checking_kenyamanan.id', $id);
		return $this->db->get()->row_array();

	}
	public function print_checking_toilet_by_id($id){
		$this->db->select('checking_toilet.*, pengguna.nama as nama,
			pengguna.unit as unit,pengguna.kantor as kantor, pengguna.alamat as alamat');
		$this->db->from('checking_toilet');
		$this->db->join('pengguna','pengguna.id_pengguna = checking_toilet.id_pengguna');
		$this->db->where('checking_toilet.id', $id);
		return $this->db->get()->row_array();

	}
	public function print_checking_atm_by_id($id){
		$this->db->select('checking_atm.*, pengguna.nama as nama,
			pengguna.unit as unit,pengguna.kantor as kantor, pengguna.alamat as alamat');
		$this->db->from('checking_atm');
		$this->db->join('pengguna','pengguna.id_pengguna = checking_atm.id_pengguna');
		$this->db->where('checking_atm.id', $id);
		return $this->db->get()->row_array();

	}
	public function tampil_kantor_cabang(){
		$this->db->select('*');
		$this->db->from('pengguna');
		$this->db->where('role','2');
		$this->db->or_where('role','3');
		return $this->db->get();
	}
	public function tambah_kantor_cabang($data){
		$this->db->insert('pengguna', $data);
	}
	public function hapus_kantor_cabang($id)
	{
		$this->db->where('id_pengguna', $id);
		$query = $this->db->delete('pengguna');

	}

	//////////////////////////////////////////////////////

	public function tampil_semua_briefing(){
		$this->db->select('briefing.*, pengguna.nama as nama,
			pengguna.unit as unit,pengguna.kantor as kantor,');
		$this->db->from('briefing');
		$this->db->join('pengguna','pengguna.id_pengguna = briefing.id_pengguna');
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}
	public function hapus_briefing($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->delete('briefing');

	}

	////////////////////////////////////////////////////////
	public function tampil_checking_peralatan(){
		$this->db->select('checking_peralatan.*, pengguna.nama as nama,
			pengguna.unit as unit,pengguna.kantor as kantor, pengguna.alamat as alamat');
		$this->db->from('checking_peralatan');
		$this->db->join('pengguna','pengguna.id_pengguna = checking_peralatan.id_pengguna');
		return $this->db->get();
	}
	public function hapus_checking_peralatan($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->delete('checking_peralatan');

	}

	//////////////////////////////////////////////////////
	public function tampil_checking_kenyamanan(){
		$this->db->select('checking_kenyamanan.*, pengguna.nama as nama,
			pengguna.unit as unit,pengguna.kantor as kantor, pengguna.alamat as alamat');
		$this->db->from('checking_kenyamanan');
		$this->db->join('pengguna','pengguna.id_pengguna = checking_kenyamanan.id_pengguna');
		return $this->db->get();
	}
	public function hapus_checking_kenyamanan($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->delete('checking_kenyamanan');

	}
	//////////////////////////////////////////////////////
	public function tampil_checking_toilet(){
		$this->db->select('checking_toilet.*, pengguna.nama as nama,
			pengguna.unit as unit,pengguna.kantor as kantor, pengguna.alamat as alamat');
		$this->db->from('checking_toilet');
		$this->db->join('pengguna','pengguna.id_pengguna = checking_toilet.id_pengguna');
		return $this->db->get();
	}
	public function hapus_checking_toilet($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->delete('checking_toilet');

	}
	//////////////////////////////////////////////////////
	public function tampil_checking_atm(){
		$this->db->select('checking_atm.*, pengguna.nama as nama,
			pengguna.unit as unit,pengguna.kantor as kantor, pengguna.alamat as alamat');
		$this->db->from('checking_atm');
		$this->db->join('pengguna','pengguna.id_pengguna = checking_atm.id_pengguna');
		return $this->db->get();
	}
	public function hapus_checking_atm($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->delete('checking_atm');

	}

}