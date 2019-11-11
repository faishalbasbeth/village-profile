<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_Berita');
	}
 
	// public function index(){
	// 	echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	// }
 
	public function home(){
		$data['berita'] = $this->M_Berita->berita()->result();
		$this->load->view('home',$data);
	}

	public function bpd(){
		$this->load->view('bpd');
	}

	public function babinsa(){
		$this->load->view('babinsa');
	}

	public function bhabinkamtibmas(){
		$this->load->view('bhabinkamtibmas');
	}

	public function karang_taruna(){
		$this->load->view('karang_taruna');
	}

	public function linmas(){
		$this->load->view('linmas');
	}

	public function lpm(){
		$this->load->view('lpm');
	}

	public function pembuatan_kk(){
		$this->load->view('pembuatan_kk');
	}

	public function pembuatan_ktp(){
		$this->load->view('pembuatan_ktp');
	}

	public function pkk(){
		$this->load->view('pkk');
	}

	public function posyandu(){
		$this->load->view('posyandu');
	}

	public function potensi(){
		$this->load->view('potensi');
	}

	public function sejarah(){
		$this->load->view('sejarah');
	}

	public function geografis(){
		$this->load->view('geografis');
	}

	public function struktur_organisasi(){
		$this->load->view('struktur_organisasi');
	}

	public function hippa(){
		$this->load->view('hippa');
	}

	public function akta_kelahiran(){
		$this->load->view('akta_kelahiran');
	}

	public function visi_misi(){
		$this->load->view('visi_misi');
	}

 
}