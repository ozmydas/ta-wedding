<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class galeri extends User_Controller {

	function __construct(){
		parent::__construct();
	} // end cons


	public function index(){
		$this->db->order_by('id', 'DESC');
		$result = $this->db->get('galeri')->result_array();
		
		$data['data'] = $result;
		$this->load->view('admin/galeri', $data);
	} // end func


	public function tambah(){
		$this->load->view('admin/galeri-tambah');
	} // end func



	public function simpan(){
		$folder = FCPATH.'upload/galeri/';

		// var_dump($_FILES);

		$config['upload_path']          = $folder;
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2000;
		$config['max_width']            = 4000;
		$config['max_height']           = 4000;
		$config['encrypt_name']         = TRUE;
        $n = count($_FILES["gambar"]['name']);

		for($i=0; $i < $n; $i++):
			if(empty($_FILES["gambar"]['name'][$i]))
				continue;

			$_FILES["gambar".$i]['name'] = $_FILES["gambar"]['name'][$i];
			$_FILES["gambar".$i]['type'] = $_FILES["gambar"]['type'][$i];
			$_FILES["gambar".$i]['tmp_name'] = $_FILES["gambar"]['tmp_name'][$i];
			$_FILES["gambar".$i]['error'] = $_FILES["gambar"]['error'][$i];
			$_FILES["gambar".$i]['size'] = $_FILES["gambar"]['size'][$i];

			$this->upload->initialize($config);

			if( ! $this->upload->do_upload("gambar".$i) ):

				exit($this->upload->display_errors());
			
			else:

				$upload = $this->upload->data();

				$simpan = $this->db->insert('galeri', [
					'gambar' => $upload['file_name'],
					'info' => $_POST['info'],
				]);

			endif;
		endfor;

		$this->session->set_flashdata('alert', "Data Tersimpan");
		return redirect('admin/galeri');
	} // end func


	public function hapus($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('galeri');

		redirect(site_url('admin/galeri'));
	} // end func


}