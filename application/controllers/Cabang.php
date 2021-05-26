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
		$this->load->view('template/header',$data);
		$this->load->view('checking_kenyamanan');
		$this->load->view('template/footer');
	}
}
