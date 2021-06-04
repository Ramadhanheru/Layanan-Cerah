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
	public function dashboard()
	{
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$id= $this->session->userdata('id_pengguna');
		$data['query'] = $this->Model_data->tampil_briefing_by_pengguna($id);
		$this->load->view('template/header',$data);
		$this->load->view('dashboard',$data);
		$this->load->view('template/footer');
	}

	public function briefing(){
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$id= $this->session->userdata('id_pengguna');
		$data['query'] = $this->Model_data->tampil_morning_ya_briefing($id);
		$data['query1'] = $this->Model_data->tampil_briefing($id);
		$this->load->view('template/header',$data);
		$this->load->view('briefing',$data);
		$this->load->view('template/footer');
	}
	public function tambah_morning_briefing(){
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();

		$cekgambar1 = $_POST['morning'];
		$foto = $_FILES['foto1']['name'];

			if($cekgambar1=='Ya'){
		$this->form_validation->set_rules('morning','morning','required|trim');
		$this->form_validation->set_rules('tanggal','tanggal','required|trim');
		$this->form_validation->set_rules('waktu1','waktu1','required|trim');
		if($foto==""){
			$this->form_validation->set_rules('foto1','foto1','required|trim');
		}
		if( $this->form_validation->run()==false){
			$this->briefing();

		}else{
			 $data = [
			 	'id_pengguna' => $this->input->post('id_pengguna', true),
                'tanggal' => $this->input->post('tanggal', true),
                'waktu1' => $this->input->post('waktu1', true),
                'morning' => $this->input->post('morning', true),
                'foto1' => $this->uploadfoto1()
            ];

				$proses = $this->Model_data->tambah_morning_briefing($data);
				$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"> Data berhasil ditambah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </div>');
				redirect('cabang/briefing');
		}

			}else{

		$this->form_validation->set_rules('morning','morning','required|trim');
		$this->form_validation->set_rules('tanggal','tanggal','required|trim');
		$this->form_validation->set_rules('keterangan','keterangan','required|trim');
		if( $this->form_validation->run()==false){
			$this->briefing();

		}else{
			 $data = [
			 	'id_pengguna' => $this->input->post('id_pengguna', true),
                'tanggal' => $this->input->post('tanggal', true),
                'morning' => $this->input->post('morning', true),
                'afternoon' => 'Tidak',
                'waktu2' => '00:00:00',
                'keterangan' => $this->input->post('keterangan', true)
            ];

				$proses = $this->Model_data->tambah_morning_briefing($data);
				$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"> Data berhasil ditambah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </div>');
				redirect('cabang/briefing');
		}
			}

		

	}

	public function tambah_afternoon_briefing(){
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();

		$cekgambar1 = $_POST['afternoon'];
		$foto = $_FILES['foto2']['name'];

			if($cekgambar1=='Ya'){
		$this->form_validation->set_rules('afternoon','afternoon','required|trim');
		$this->form_validation->set_rules('tanggal','tanggal','required|trim');
		$this->form_validation->set_rules('waktu2','waktu2','required|trim');
		if($foto==""){
			$this->form_validation->set_rules('foto1','foto1','required|trim');
		}
		if( $this->form_validation->run()==false){
			$this->briefing();

		}else{
			 $data = [
                'waktu2' => $this->input->post('waktu2', true),
                'afternoon' => $this->input->post('afternoon', true),
                'foto2' => $this->uploadfoto2()
            ];

            	$this->db->where('id', $this->input->post('id'));
				$this->db->update('briefing', $data);
				$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"> Data berhasil ditambah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </div>');
				redirect('cabang/briefing');
		}

			}else{

		$this->form_validation->set_rules('afternoon','afternoon','required|trim');
		$this->form_validation->set_rules('tanggal','tanggal','required|trim');
		$this->form_validation->set_rules('keterangan','keterangan','required|trim');
		if( $this->form_validation->run()==false){
			$this->briefing();

		}else{
			 $data = [
			 	'afternoon' => $this->input->post('afternoon', true),
			 	'waktu2' => '00:00:00',
                'keterangan' => $this->input->post('keterangan', true)
            ];

				$this->db->where('id', $this->input->post('id'));
				$this->db->update('briefing', $data);
				$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"> Data berhasil ditambah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </div>');
				redirect('cabang/briefing');
		}
			}

		

	}

	public function uploadfoto1()
    {
        //$config['file_name'] = '';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|HEIC';
        $config['max_size']      = '200000';
        $config['upload_path']   = FCPATH .'./uploadfile/';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto1')) {
            return  $this->upload->data('file_name');
        } else{
            echo $this->upload->display_errors();
        }
    }

    public function uploadfoto2()
    {
        //$config['file_name'] = '';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|HEIC';
        $config['max_size']      = '200000';
        $config['upload_path']   = FCPATH .'./uploadfile/';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto2')) {
            return  $this->upload->data('file_name');
        } else{
            echo $this->upload->display_errors();
        }
    }

////////////////////////////////////////////////////////////////////////
	public function checking_peralatan(){
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$data['objek'] = $this->db->get('objek_checking');
		$data['kondisi'] = $this->db->get('kondisi_checking');
		$id= $this->session->userdata('id_pengguna');
		$data['query'] = $this->Model_data->tampil_checking_peralatan_by_pengguna($id);

		$this->load->view('template/header',$data);
		$this->load->view('checking_peralatan',$data);
		$this->load->view('template/footer');
	}
	public function tambah_peralatan(){
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
			$this->checking_peralatan();

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

				$proses = $this->Model_data->tambah_peralatan($data);
				$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"> Data berhasil ditambah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </div>');
				redirect('cabang/checking_peralatan');
		}
	}

	////////////////////////////////////////////////////////////////////////
	public function checking_kenyamanan(){
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$data['objek'] = $this->db->get('objek_checking');
		$data['kondisi'] = $this->db->get('kondisi_checking');
		$id= $this->session->userdata('id_pengguna');
		$data['query'] = $this->Model_data->tampil_checking_kenyamanan_by_pengguna($id);

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
                'K6' => $this->input->post('K6', true)
            ];

				$proses = $this->Model_data->tambah_kenyamanan($data);
				$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"> Data berhasil ditambah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </div>');
				redirect('cabang/checking_kenyamanan');
		}
	}
	////////////////////////////////////////////////////////////////////////

	////////////////////////////////////////////////////////////////////////
	public function checking_toilet(){
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$data['objek'] = $this->db->get('objek_checking');
		$data['kondisi'] = $this->db->get('kondisi_checking');
		$id= $this->session->userdata('id_pengguna');
		$data['query'] = $this->Model_data->tampil_checking_toilet_by_pengguna($id);

		$this->load->view('template/header',$data);
		$this->load->view('checking_toilet',$data);
		$this->load->view('template/footer');
	}
	public function tambah_toilet(){
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
		$this->form_validation->set_rules('O9','O9','required|trim');
		$this->form_validation->set_rules('O10','O10','required|trim');
		$this->form_validation->set_rules('O11','O11','required|trim');
		$this->form_validation->set_rules('O12','O12','required|trim');
		$this->form_validation->set_rules('O13','O13','required|trim');

		if( $this->form_validation->run()==false){
			$this->checking_toilet();

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
                'O7' => $this->input->post('O7', true),
                'O8' => $this->input->post('O8', true),
                'K9' => $this->input->post('K9', true),
                'O10' => $this->input->post('O10', true),
                'K10' => $this->input->post('K10', true),
                'O11' => $this->input->post('O11', true),
                'K11' => $this->input->post('K11', true),
                'O12' => $this->input->post('O12', true),
                'K12' => $this->input->post('K12', true),
                'O13' => $this->input->post('O13', true),
                'K13' => $this->input->post('K13', true)
                
            ];

				$proses = $this->Model_data->tambah_toilet($data);
				$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"> Data berhasil ditambah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </div>');
				redirect('cabang/checking_toilet');
		}
	}
	////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////
	public function checking_atm(){
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$data['objek'] = $this->db->get('objek_checking');
		$data['kondisi'] = $this->db->get('kondisi_checking');
		$id= $this->session->userdata('id_pengguna');
		$data['query'] = $this->Model_data->tampil_checking_atm_by_pengguna($id);
		$this->load->view('template/header',$data);
		$this->load->view('checking_atm',$data);
		$this->load->view('template/footer');
	}
	public function tambah_atm(){
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

		if( $this->form_validation->run()==false){
			$this->checking_atm();

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
                'O6' => $this->input->post('O6', true)
                
            ];

				$proses = $this->Model_data->tambah_atm($data);
				$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"> Data berhasil ditambah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </div>');
				redirect('cabang/checking_atm');
		}
	}
	////////////////////////////////////////////////////////////////////////
}
