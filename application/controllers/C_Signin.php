<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_Signin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_Signin');
	}
 
	// public function index(){
	// 	echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	// }
 
	public function signin(){
		$data['error']='';
		$this->load->view('signin',$data);
	}

	function ceklogin(){
		if (isset($_POST['login'])) {
			$user = $this->input->post('user',true);
			$pass = $this->input->post('pass',true);
			$cek = $this->M_Signin->proseslogin($user, $pass);
			$hasil = count($cek);
			if ($hasil > 0) {
				$yglogin = $this->db->get_where('user', array('nama' => $user, 'password' => $pass ))->row();
				$data = array('udhmasuk' => true,
					'nama' => $yglogin->nama);
				$this->session->set_userdata($data);
				if ($yglogin->level == 1) {
					redirect(base_url("C_Berita/berita"));
				}
			}else{
				$data['error']='Username / Password Salah';
				$this->load->view('signin',$data);
			}
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('C_Home/home'));
	}
 
}