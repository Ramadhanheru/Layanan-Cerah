<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

			if($this->session->userdata('role')!= '1')
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
		$this->load->view('template/header',$data);
		$this->load->view('dashboard');
		$this->load->view('template/footer');
	}
	public function kantor_cabang()
	{
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$data['query'] = $this->Model_data->tampil_kantor_cabang();
		$this->load->view('template/header',$data);
		$this->load->view('kantor_cabang',$data);
		$this->load->view('template/footer');
	}
	public function role_aktif($id)
	{
		$this->db->set('role','2');
         $this->db->where('id_pengguna', $id);
		$this->db->update('pengguna');
		$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"><h6> Data berhasil diubah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
				redirect('welcome/kantor_cabang');
	}
	public function role_tidak_aktif($id)
	{
		$this->db->set('role','3');
         $this->db->where('id_pengguna', $id);
		$this->db->update('pengguna');
		$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"><h6> Data berhasil diubah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
				redirect('welcome/kantor_cabang');
	}
	public function tambah_kantor_cabang(){
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[pengguna.username]', ['is_unique' => 'This username has already registered!']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', ['min_length' => 'Kata sandi terlalu pendek!']);
		$this->form_validation->set_rules('nama','nama','trim|required');
		$this->form_validation->set_rules('unit','unit','trim|required');
		$this->form_validation->set_rules('kantor','kantor','trim|required');
		$this->form_validation->set_rules('alamat','alamat','trim|required');
		$cekgambar1 = $_FILES['foto']['name'];
		if ($cekgambar1==null) {
			$this->form_validation->set_rules('foto','foto','trim|required');
		}

		if($this->form_validation->run()==false){
			$this->kantor_cabang();

		}else{

			$data = [
			 	'username' => $this->input->post('username', true),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'nama' => $this->input->post('nama', true),
                'unit' => $this->input->post('unit', true),
                'kantor' => $this->input->post('kantor', true),
                'alamat' => $this->input->post('alamat', true),
                'foto' => $this->uploadfoto()
            ];

				$proses = $this->Model_data->tambah_kantor_cabang($data);
				$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"><h6> Data berhasil ditambah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
				redirect('welcome/kantor_cabang');
		}
		
	}
	public function uploadfoto(){
		 //$config['file_name'] = '';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|HEIC|mp4';
        $config['max_size']      = 0;
        $config['upload_path']   = FCPATH .'./uploadfile/';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
            return  $this->upload->data('file_name');
        } else{
            echo $this->upload->display_errors();
        }
	}

	public function hapus_kantor_cabang($id){
		$briefing = $this->db->get_where('briefing', ['id_pengguna' => $id])->row_array();
		$peralatan = $this->db->get_where('checking_peralatan', ['id_pengguna' => $id])->row_array();
		$kenyamanan = $this->db->get_where('checking_kenyamanan', ['id_pengguna' => $id])->row_array();
		$toilet = $this->db->get_where('checking_toilet', ['id_pengguna' => $id])->row_array();
		$atm = $this->db->get_where('checking_atm', ['id_pengguna' => $id])->row_array();
		if ($briefing) {
			$this->session->set_flashdata('message','<div class ="alert alert-danger  " roles="alert"><h6> Data gagal dihapus ! dikarenakan data sedang dipakai di Absensi Briefing <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
				redirect('welcome/kantor_cabang');
		}elseif ($peralatan) {
			$this->session->set_flashdata('message','<div class ="alert alert-danger  " roles="alert"><h6> Data gagal dihapus ! dikarenakan data sedang dipakai di Checking Peralatan <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
				redirect('welcome/kantor_cabang');
		}elseif ($kenyamanan) {
			$this->session->set_flashdata('message','<div class ="alert alert-danger  " roles="alert" Data gagal dihapus ! dikarenakan data sedang dipakai di Checking Kenyamanan <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
				redirect('welcome/kantor_cabang');
		}elseif ($toilet) {
			$this->session->set_flashdata('message','<div class ="alert alert-danger  " roles="alert"><h6> Data gagal dihapus ! dikarenakan data sedang dipakai di Checking Toilet  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
				redirect('welcome/kantor_cabang');
		}elseif ($atm) {
			$this->session->set_flashdata('message','<div class ="alert alert-danger  " roles="alert"><h6> Data gagal dihapus ! dikarenakan data sedang dipakai di Checking ATM <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
				redirect('welcome/kantor_cabang');
		} else {
				$data = $this->Model_data->hapus_kantor_cabang($id);
			if (!$data) {
				$this->session->set_flashdata('message','<div class ="alert alert-success " roles="alert"><h6> Data berhasil dihapus ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
				redirect('welcome/kantor_cabang');
			} else {
				$this->session->set_flashdata('message','<div class ="alert alert-danger  " roles="alert"><h6> Data gagal dihapus ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
				redirect('welcome/kantor_cabang');
				
			}
		}
		
		
	}
	public function edit_kantor_cabang($id){
		$data['user'] =  $this->db->get_where('pengguna', ['id_pengguna' => $id])->row_array();

		$this->form_validation->set_rules('nama','nama','trim|required');
		$this->form_validation->set_rules('unit','unit','trim|required');
		$this->form_validation->set_rules('kantor','kantor','trim|required');
		$this->form_validation->set_rules('alamat','alamat','trim|required');

		if($this->form_validation->run()==false){
			$this->kantor_cabang();

		}else{

			$cekgambar1 = $_FILES['foto']['name'];

			if($cekgambar1){

		$config['allowed_types'] = 'gif|jpg|png|jpeg|HEIC';
        $config['max_size']      = '2000000';
        $config['upload_path']   = FCPATH .'./uploadfile/';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {

        	$old_image = $data['user']['foto'];
        	if($old_image != 'avatar.png'){
        		unlink(FCPATH . 'uploadfile/' . $old_image);
        	}

            $new_image =  $this->upload->data('file_name');
            $this->db->set('foto',$new_image);
            $this->db->where('id_pengguna', $id);
			$this->db->update('pengguna');
        } else{
            return "avatar.png";
        }
			}

			$data = [
			 	'username' => $this->input->post('username', true),
                'nama' => $this->input->post('nama', true),
                'unit' => $this->input->post('unit', true),
                'kantor' => $this->input->post('kantor', true),
                'alamat' => $this->input->post('alamat', true)
            ];

		$this->db->set($data);
		$this->db->where('id_pengguna', $id);
		$this->db->update('pengguna');
				$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"><h6> Data berhasil ditambah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
				redirect('welcome/kantor_cabang');
		}

	}
	public function pdf_kantor_cabang(){
			/* Create PDF File*/
      	$this->load->library('pdf');
		$data ['query']= $this->Model_data->tampil_kantor_cabang();
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();

		$this->load->view('pdf_kantor_cabang',$data);
	    $paper_size='Legal';
	    $orientation='landscape';
	    $data_header= array('title' => 'Convert to Pdf');
	    $html = $this->output->get_output();
	    $this->pdf->set_paper($paper_size, $orientation, $data_header);

	    $this->pdf->load_html($html);
	    $this->pdf->render();
	    $this->pdf->stream('Laporan Pengguna Layanan-Cerah.pdf', array('Attachment' =>0));
	}
	public function excel_kantor_cabang(){
		$data ['query']= $this->Model_data->tampil_kantor_cabang();
		$this->load->view('excel_kantor_cabang',$data);
	}



	//////////////////////////////////////////////////////////////////
	// Briefing

	public function briefing(){
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$data['query'] = $this->Model_data->tampil_semua_briefing();
		$this->load->view('template/header',$data);
		$this->load->view('briefing',$data);
		$this->load->view('template/footer');
	}
	public function hapus_briefing($id){
		$data = $this->Model_data->hapus_briefing($id);
		if (!$data) {
			$this->session->set_flashdata('message','<div class ="alert alert-success " roles="alert"><h6> Data berhasil dihapus ! 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
			redirect('welcome/briefing');
		} else {
			$this->session->set_flashdata('message','<div class ="alert alert-danger  " roles="alert"><h6> Data gagal dihapus ! 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
			redirect('welcome/briefing');
			
		}
	}
	public function pdf_semua_briefing(){
			/* Create PDF File*/
      	$this->load->library('pdf');
		$data ['query']= $this->Model_data->tampil_semua_briefing();
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();

		$this->load->view('pdf_semua_briefing',$data);
	    $paper_size='Legal';
	    $orientation='potrait';
	    $data_header= array('title' => 'Convert to Pdf');
	    $html = $this->output->get_output();
	    $this->pdf->set_paper($paper_size, $orientation, $data_header);

	    $this->pdf->load_html($html);
	    $this->pdf->render();
	    $this->pdf->stream('Laporan Briefing Layanan-Cerah.pdf', array('Attachment' =>0));
	}
	public function excel_semua_briefing(){
		$data ['query']= $this->Model_data->tampil_semua_briefing();
		$this->load->view('excel_semua_briefing',$data);
	}

	public function edit_briefing($id){
		$this->form_validation->set_rules('tanggal','tanggal','trim|required');
		$this->form_validation->set_rules('morning','morning','trim|required');
		$this->form_validation->set_rules('waktu1','waktu1','trim|required');
		if($this->form_validation->run()==false){
			$this->briefing();

		}else{

			$data = [
			 	'tanggal' => $this->input->post('tanggal', true),
                'morning' => $this->input->post('morning', true),
                'waktu1' => $this->input->post('waktu1', true),
                'afternoon' => $this->input->post('afternoon', true),
                'waktu2' => $this->input->post('waktu2', true),
                'keterangan' => $this->input->post('keterangan', true)

            ];

		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('briefing');
				$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"><h6> Data berhasil ditambah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
				redirect('welcome/briefing');
		}
		}

	
	////////////////////////////////////////////////////////
		public function checking_peralatan(){
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		// $data['objek'] = $this->db->get('objek_checking');
		// $data['kondisi'] = $this->db->get('kondisi_checking');
		// $id= $this->session->userdata('id_pengguna');

		$data['query'] = $this->Model_data->tampil_checking_peralatan();

		$this->load->view('template/header',$data);
		$this->load->view('checking_peralatan',$data);
		$this->load->view('template/footer');
	}
	public function print_checking_peralatan($id){
		/* Create PDF File*/
      	$this->load->library('pdf');
		$data ['query']= $this->Model_data->print_checking_peralatan_by_id($id);
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$this->load->view('print_checking_peralatan_by_id',$data);

	    $paper_size='Legal';
	    $orientation='potrait';
	    $data_header= array('title' => 'Convert to Pdf');
	    $html = $this->output->get_output();
	    $this->pdf->set_paper($paper_size, $orientation, $data_header);

	    $this->pdf->load_html($html);
	    $this->pdf->render();
	    $this->pdf->stream('Laporan Checking Peralatan Layanan-Cerah.pdf', array('Attachment' =>0));

	}
	public function pdf_checking_peralatan(){
		/* Create PDF File*/
      	$this->load->library('pdf');
		$data ['query']= $this->Model_data->tampil_checking_peralatan();
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$this->load->view('pdf_checking_peralatan',$data);

	    $paper_size='Legal';
	    $orientation='potrait';
	    $data_header= array('title' => 'Convert to Pdf');
	    $html = $this->output->get_output();
	    $this->pdf->set_paper($paper_size, $orientation, $data_header);

	    $this->pdf->load_html($html);
	    $this->pdf->render();
	    $this->pdf->stream('Laporan Checking Peralatan Layanan-Cerah.pdf', array('Attachment' =>0));

	}

	public function edit_checking_peralatan($id){

		$data['query'] = $this->Model_data->tampil_checking_peralatan();
		$this->form_validation->set_rules('hari','hari','required|trim');
		$this->form_validation->set_rules('tanggal','tanggal','required|trim');
		$this->form_validation->set_rules('waktu','waktu','required|trim');
		$this->form_validation->set_rules('petugas1','petugas1','required|trim');
		$this->form_validation->set_rules('petugas2','petugas2','required|trim');
		if( $this->form_validation->run()==false){
			$this->checking_peralatan();

		}else{

			$data = [
                'hari' => $this->input->post('hari', true),
                'tanggal' => $this->input->post('tanggal', true),
                'waktu' => $this->input->post('waktu', true),
                'petugas1' => $this->input->post('petugas1', true),
                'petugas2' => $this->input->post('petugas2', true)
            ];

            	$this->db->set($data);
				$this->db->where('id', $id);
				$this->db->update('checking_peralatan');
				$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"><h6> Data berhasil ditambah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
				redirect('welcome/checking_peralatan');
		}

		}
		public function hapus_checking_peralatan($id){
		$data = $this->Model_data->hapus_checking_peralatan($id);
		if (!$data) {
			$this->session->set_flashdata('message','<div class ="alert alert-success " roles="alert"><h6> Data berhasil dihapus ! 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
			redirect('welcome/checking_peralatan');
		} else {
			$this->session->set_flashdata('message','<div class ="alert alert-danger  " roles="alert"><h6> Data gagal dihapus ! 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
			redirect('welcome/checking_peralatan');
			
		}
	}

		//////////////////////////////////////////////////////////////////////////////

		public function checking_kenyamanan(){
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		// $data['objek'] = $this->db->get('objek_checking');
		// $data['kondisi'] = $this->db->get('kondisi_checking');
		// $id= $this->session->userdata('id_pengguna');
		
		$data['query'] = $this->Model_data->tampil_checking_kenyamanan();

		$this->load->view('template/header',$data);
		$this->load->view('checking_kenyamanan',$data);
		$this->load->view('template/footer');
	}

	public function pdf_checking_kenyamanan(){
		/* Create PDF File*/
      	$this->load->library('pdf');
		$data ['query']= $this->Model_data->tampil_checking_kenyamanan();
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$this->load->view('pdf_checking_kenyamanan',$data);

	    $paper_size='Legal';
	    $orientation='potrait';
	    $data_header= array('title' => 'Convert to Pdf');
	    $html = $this->output->get_output();
	    $this->pdf->set_paper($paper_size, $orientation, $data_header);

	    $this->pdf->load_html($html);
	    $this->pdf->render();
	    $this->pdf->stream('Laporan Checking Kenyamanan Layanan-Cerah.pdf', array('Attachment' =>0));

	}
	public function print_checking_kenyamanan($id){
		/* Create PDF File*/
      	$this->load->library('pdf');
		$data ['query']= $this->Model_data->print_checking_kenyamanan_by_id($id);
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$this->load->view('print_checking_kenyamanan_by_id',$data);

	    $paper_size='Legal';
	    $orientation='potrait';
	    $data_header= array('title' => 'Convert to Pdf');
	    $html = $this->output->get_output();
	    $this->pdf->set_paper($paper_size, $orientation, $data_header);

	    $this->pdf->load_html($html);
	    $this->pdf->render();
	    $this->pdf->stream('Laporan Checking kenyamanan Layanan-Cerah.pdf', array('Attachment' =>0));

	}
	public function edit_checking_kenyamanan($id){

		$data['query'] = $this->Model_data->tampil_checking_kenyamanan();
		$this->form_validation->set_rules('hari','hari','required|trim');
		$this->form_validation->set_rules('tanggal','tanggal','required|trim');
		$this->form_validation->set_rules('waktu','waktu','required|trim');
		$this->form_validation->set_rules('petugas1','petugas1','required|trim');
		$this->form_validation->set_rules('petugas2','petugas2','required|trim');
		if( $this->form_validation->run()==false){
			$this->checking_kenyamanan();

		}else{

			$data = [
                'hari' => $this->input->post('hari', true),
                'tanggal' => $this->input->post('tanggal', true),
                'waktu' => $this->input->post('waktu', true),
                'petugas1' => $this->input->post('petugas1', true),
                'petugas2' => $this->input->post('petugas2', true)
            ];

            	$this->db->set($data);
				$this->db->where('id', $id);
				$this->db->update('checking_kenyamanan');
				$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"><h6> Data berhasil ditambah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
				redirect('welcome/checking_kenyamanan');
		}

		}
		public function hapus_checking_kenyamanan($id){
		$data = $this->Model_data->hapus_checking_kenyamanan($id);
		if (!$data) {
			$this->session->set_flashdata('message','<div class ="alert alert-success " roles="alert"><h6> Data berhasil dihapus ! 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
			redirect('welcome/checking_kenyamanan');
		} else {
			$this->session->set_flashdata('message','<div class ="alert alert-danger  " roles="alert"><h6> Data gagal dihapus ! 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
			redirect('welcome/checking_kenyamanan');
			
		}
	}
	//////////////////////////////////////////////////////////////////////////////

		public function checking_toilet(){
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		// $data['objek'] = $this->db->get('objek_checking');
		// $data['kondisi'] = $this->db->get('kondisi_checking');
		// $id= $this->session->userdata('id_pengguna');
		
		$data['query'] = $this->Model_data->tampil_checking_toilet();

		$this->load->view('template/header',$data);
		$this->load->view('checking_toilet',$data);
		$this->load->view('template/footer');
	}

	public function pdf_checking_toilet(){
		/* Create PDF File*/
      	$this->load->library('pdf');
		$data ['query']= $this->Model_data->tampil_checking_toilet();
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$this->load->view('pdf_checking_toilet',$data);

	    $paper_size='Legal';
	    $orientation='potrait';
	    $data_header= array('title' => 'Convert to Pdf');
	    $html = $this->output->get_output();
	    $this->pdf->set_paper($paper_size, $orientation, $data_header);

	    $this->pdf->load_html($html);
	    $this->pdf->render();
	    $this->pdf->stream('Laporan Checking toilet Layanan-Cerah.pdf', array('Attachment' =>0));

	}
	public function print_checking_toilet($id){
		/* Create PDF File*/
      	$this->load->library('pdf');
		$data ['query']= $this->Model_data->print_checking_toilet_by_id($id);
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$this->load->view('print_checking_toilet_by_id',$data);

	    $paper_size='Legal';
	    $orientation='potrait';
	    $data_header= array('title' => 'Convert to Pdf');
	    $html = $this->output->get_output();
	    $this->pdf->set_paper($paper_size, $orientation, $data_header);

	    $this->pdf->load_html($html);
	    $this->pdf->render();
	    $this->pdf->stream('Laporan Checking toilet Layanan-Cerah.pdf', array('Attachment' =>0));

	}
	public function edit_checking_toilet($id){

		$data['query'] = $this->Model_data->tampil_checking_toilet();
		$this->form_validation->set_rules('hari','hari','required|trim');
		$this->form_validation->set_rules('tanggal','tanggal','required|trim');
		$this->form_validation->set_rules('waktu','waktu','required|trim');
		$this->form_validation->set_rules('petugas1','petugas1','required|trim');
		$this->form_validation->set_rules('petugas2','petugas2','required|trim');
		if( $this->form_validation->run()==false){
			$this->checking_toilet();

		}else{

			$data = [
                'hari' => $this->input->post('hari', true),
                'tanggal' => $this->input->post('tanggal', true),
                'waktu' => $this->input->post('waktu', true),
                'petugas1' => $this->input->post('petugas1', true),
                'petugas2' => $this->input->post('petugas2', true)
            ];

            	$this->db->set($data);
				$this->db->where('id', $id);
				$this->db->update('checking_toilet');
				$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"><h6> Data berhasil ditambah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
				redirect('welcome/checking_toilet');
		}

		}
		public function hapus_checking_toilet($id){
		$data = $this->Model_data->hapus_checking_toilet($id);
		if (!$data) {
			$this->session->set_flashdata('message','<div class ="alert alert-success " roles="alert"><h6> Data berhasil dihapus ! 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
			redirect('welcome/checking_toilet');
		} else {
			$this->session->set_flashdata('message','<div class ="alert alert-danger  " roles="alert"><h6> Data gagal dihapus ! 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
			redirect('welcome/checking_toilet');
			
		}
	}
	//////////////////////////////////////////////////////////////////////////////

		public function checking_atm(){
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		// $data['objek'] = $this->db->get('objek_checking');
		// $data['kondisi'] = $this->db->get('kondisi_checking');
		// $id= $this->session->userdata('id_pengguna');
		
		$data['query'] = $this->Model_data->tampil_checking_atm();

		$this->load->view('template/header',$data);
		$this->load->view('checking_atm',$data);
		$this->load->view('template/footer');
	}

	public function pdf_checking_atm(){
		/* Create PDF File*/
      	$this->load->library('pdf');
		$data ['query']= $this->Model_data->tampil_checking_atm();
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$this->load->view('pdf_checking_atm',$data);

	    $paper_size='Legal';
	    $orientation='potrait';
	    $data_header= array('title' => 'Convert to Pdf');
	    $html = $this->output->get_output();
	    $this->pdf->set_paper($paper_size, $orientation, $data_header);

	    $this->pdf->load_html($html);
	    $this->pdf->render();
	    $this->pdf->stream('Laporan Checking atm Layanan-Cerah.pdf', array('Attachment' =>0));

	}
	public function print_checking_atm($id){
		/* Create PDF File*/
      	$this->load->library('pdf');
		$data ['query']= $this->Model_data->print_checking_atm_by_id($id);
		$data['user'] =  $this->db->get_where('pengguna', ['username' => $this->session->userdata('user')])->row_array();
		$this->load->view('print_checking_atm_by_id',$data);

	    $paper_size='Legal';
	    $orientation='potrait';
	    $data_header= array('title' => 'Convert to Pdf');
	    $html = $this->output->get_output();
	    $this->pdf->set_paper($paper_size, $orientation, $data_header);

	    $this->pdf->load_html($html);
	    $this->pdf->render();
	    $this->pdf->stream('Laporan Checking atm Layanan-Cerah.pdf', array('Attachment' =>0));

	}
	public function edit_checking_atm($id){

		$data['query'] = $this->Model_data->tampil_checking_atm();
		$this->form_validation->set_rules('hari','hari','required|trim');
		$this->form_validation->set_rules('tanggal','tanggal','required|trim');
		$this->form_validation->set_rules('waktu','waktu','required|trim');
		$this->form_validation->set_rules('petugas1','petugas1','required|trim');
		$this->form_validation->set_rules('petugas2','petugas2','required|trim');
		if( $this->form_validation->run()==false){
			$this->checking_atm();

		}else{

			$data = [
                'hari' => $this->input->post('hari', true),
                'tanggal' => $this->input->post('tanggal', true),
                'waktu' => $this->input->post('waktu', true),
                'petugas1' => $this->input->post('petugas1', true),
                'petugas2' => $this->input->post('petugas2', true)
            ];

            	$this->db->set($data);
				$this->db->where('id', $id);
				$this->db->update('checking_atm');
				$this->session->set_flashdata('message','<div class ="alert alert-success" roles="alert"><h6> Data berhasil ditambah ! 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
				redirect('welcome/checking_atm');
		}

		}
		public function hapus_checking_atm($id){
		$data = $this->Model_data->hapus_checking_atm($id);
		if (!$data) {
			$this->session->set_flashdata('message','<div class ="alert alert-success " roles="alert"><h6> Data berhasil dihapus ! 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
			redirect('welcome/checking_atm');
		} else {
			$this->session->set_flashdata('message','<div class ="alert alert-danger  " roles="alert"><h6> Data gagal dihapus ! 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </h6></div>');
			redirect('welcome/checking_atm');
			
		}
	}

}
