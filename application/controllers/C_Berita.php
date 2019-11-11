<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_Berita extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_Berita');
	}
 
	// public function index(){
	// 	echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	// }
 
	public function berita(){
		$data['berita_all'] = $this->M_Berita->berita_all()->result();
		$this->load->view('berita',$data);
	}

	function berita_tampil($id_berita){
		$where = array('id_berita' => $id_berita );
		$data['berita'] = $this->M_Berita->edit_data_berita($where,'berita')->result();
		$this->load->view('berita_tampil',$data);
	}

	function hapus_data_berita($id_berita){
		$where = array('id_berita' => $id_berita );
		$this->M_Berita->hapus_data_berita($where,'berita');
		redirect('C_Berita/berita');
	}

	public function tambah_berita(){
		$this->load->view('tambah_berita');
	}

	function tambah_data_berita(){
		$gambar = $this->input->post('gambar');
		$judul = $this->input->post('judul');
		$tgl = $this->input->post('tgl');
		$berita = $this->input->post('berita');

		$data = array(
			'gambar' => $gambar,
			'judul' => $judul,
			'tgl' => $tgl,
			'berita' => $berita
			 );
		$this->M_Berita->tambah_data_berita($data,'berita');
		redirect('C_Berita/berita');
	}

	function edit_data_berita($id_berita){
		$where = array('id_berita' => $id_berita );
		$data['berita'] = $this->M_Berita->edit_data_berita($where,'berita')->result();
		$this->load->view('edit_berita',$data);
	}

	function update_data_berita(){
		$id_berita = $this->input->post('id_berita');
		$gambar = $this->input->post('gambar');
		$judul = $this->input->post('judul');
		$tgl = $this->input->post('tgl');
		$berita = $this->input->post('berita');
 
		$data = array(
			'gambar' => $gambar,
			'judul' => $judul,
			'tgl' => $tgl,
			'berita' => $berita
			 );
 
		$where = array(
			'id_berita' => $id_berita
		);
 
		$this->M_Berita->update_data_berita($where,$data,'berita');
		redirect('C_Berita/berita');
	}
 
}