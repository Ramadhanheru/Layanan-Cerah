<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();

			if($this->session->userdata('role')!= '2')
				redirect ('login');
	}
	public function index()
	{
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$this->load->view('template/header',$data);
		$this->load->view('dashboard');
		$this->load->view('template/footer');
	}

	public function briefing(){
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$this->load->view('template/header',$data);
		$this->load->view('briefing');
		$this->load->view('template/footer');
	}
	public function checking_kenyamanan(){
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$data['objek'] = $this->db->get('objek_checking');
		$data['kondisi'] = $this->db->get('kondisi_checking');
		$this->load->view('template/header',$data);
		$this->load->view('checking_kenyamanan',$data);
		$this->load->view('template/footer');
	}
	public function tambah_kenyamanan(){
		$this->form_validation->set_rules('nama_cabang','nama_cabang','required|trim');
		$this->form_validation->set_rules('alamat_cabang','alamat_cabang','required|trim');
		$this->form_validation->set_rules('hari','hari','required|trim');
		$this->form_validation->set_rules('tanggal','tanggal','required|trim');
		$this->form_validation->set_rules('waktu','waktu','required|trim');
		$this->form_validation->set_rules('petugas1','petugas1','required|trim');
		$this->form_validation->set_rules('petugas2','petugas2','required|trim');
		$this->form_validation->set_rules('O1','O1','required|trim');
		$this->form_validation->set_rules('O2','O2','required|trim');
		$this->form_validation->set_rules('O3','O3','required|trim');
		$this->form_validation->set_rules('O4','O4','required|trim');
		$this->form_validation->set_rules('O5','O5','required|trim');
		$this->form_validation->set_rules('O6','O6','required|trim');
		$this->form_validation->set_rules('O7','O7','required|trim');
		$this->form_validation->set_rules('O8','O8','required|trim');

		if( $this->form_validation->run()==false){
			$this->checking_kenyamanan();

		}else{

			
			 $data = [
			 	'id_pengguna' => $this->input->post('id_pengguna', true),
                'hari' => $this->input->post('hari', true),
                'tanggal' => $this->input->post('tanggal', true),
                'waktu' => $this->input->post('waktu', true),
                'petugas1' => $this->input->post('petugas1', true),
                'petugas2' => $this->input->post('petugas2', true),
                'O1' => $this->input->post('O1', true),
                'K1' => $this->input->post('K1', true),
                'O2' => $this->input->post('O2', true),
                'K2' => $this->input->post('K2', true),
                'O3' => $this->input->post('O3', true),
                'K3' => $this->input->post('K3', true),
                'O4' => $this->input->post('O4', true),
                'K4' => $this->input->post('K4', true),
                'O5' => $this->input->post('O5', true),
                'K5' => $this->input->post('K5', true),
                'O6' => $this->input->post('O6', true),
                'K6' => $this->input->post('K6', true),
                'O7' => $this->input->post('O7', true),
                'K7' => $this->input->post('K7', true),
                'O8' => $this->input->post('O8', true),
                'K8' => $this->input->post('K8', true)
            ];

				$proses = $this->Model_data->tambah_kenyamanan($data);
				$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"> Data berhasil ditambah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </div>');
				redirect('cabang/checking_kenyamanan');
		}
	}
}
