<?php 
 
class M_Berita extends CI_Model{
	function berita(){
		$this->db->select('*');
		$this->db->order_by('tgl desc');
		$this->db->limit('3');
		return $this->db->get('berita');
	}

	function berita_all(){
		return $this->db->get('berita');
	}

	function tambah_data_berita($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data_berita($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data_berita($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data_berita($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	// // Fungsi untuk melakukan proses upload file
 //  public function upload(){
 //    $config['upload_path'] = './images/';
 //    $config['allowed_types'] = 'jpg|png|jpeg';
 //    $config['max_size']  = '2048';
 //    $config['remove_space'] = TRUE;
  
 //    $this->load->library('upload', $config); // Load konfigurasi uploadnya
 //    if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
 //      // Jika berhasil :
 //      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
 //      return $return;
 //    }else{
 //      // Jika gagal :
 //      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
 //      return $return;
 //    }
 //  }

 //  // Fungsi untuk menyimpan data ke database
 //  public function save($upload){
 //    $data = array(
 //      'deskripsi'=>$this->input->post('input_deskripsi'),
 //      'nama_file' => $upload['file']['file_name'],
 //      'ukuran_file' => $upload['file']['file_size'],
 //      'tipe_file' => $upload['file']['file_type']
 //    );
    
 //    $this->db->insert('gambar', $data);
 //  }
}