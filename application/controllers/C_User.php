<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_User extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('udhmasuk') !="login") {
			redirect(base_url("C_Signin/signin"));
		}
		$this->load->helper('url');
		$this->load->model('M_User');
	}
 
	// public function index(){
	// 	echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	// }
 
	public function user(){
		$data['user'] = $this->M_User->user()->result();
		$this->load->view('user',$data);
	}

	public function tambah_user(){
		$this->load->view('tambah_user');
	}

	function tambah_data_user(){
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');

		$data = array(
			'nama' => $nama,
			'hak_akses' => 'admin',
			'level' => '1',
			'password' => $password
			 );
		$this->M_User->tambah_data_user($data,'user');
		redirect('C_User/user');
	}

	function hapus_data_user($id_user){
		$where = array('id_user' => $id_user );
		$this->M_User->hapus_data_user($where,'user');
		redirect('C_User/user');
	}

	function edit_data_user($id_user){
		$where = array('id_user' => $id_user );
		$data['user'] = $this->M_User->edit_data_user($where,'user')->result();
		$this->load->view('edit_user',$data);
	}

	function update_data_user(){
		$id_user = $this->input->post('id_user');
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
 
		$data = array(
			'nama' => $nama,
			'hak_akses' => 'admin',
			'level' => '1',
			'password' => $password
			 );
 
		$where = array(
			'id_user' => $id_user
		);
 
		$this->M_User->update_data_user($where,$data,'user');
		redirect('C_User/user');
	}
 
}