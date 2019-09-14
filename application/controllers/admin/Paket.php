<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends User_Controller {

	function __construct(){
		parent::__construct();
	} // end cons


	public function index(){
		$result = $this->db->get('paket')->result_array();
		
		$data['data'] = $result;
		$this->load->view('admin/paket', $data);
	} // end func


	public function tambah(){
		$this->load->view('admin/paket-tambah');
	} // end func


	public function edit($id){
		$this->db->where('id', $id);
		$result = $this->db->get('paket')->result_array();

		if( ! $result):
			exit("ID Tidak Valid");
		endif;

		$data['data'] = @$result[0];
		$this->load->view('admin/paket-edit', $data);
	} // end func


	public function simpan(){
		$folder = FCPATH.'upload/paket/';

		$config['upload_path']          = $folder;
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2000;
		$config['max_width']            = 4000;
		$config['max_height']           = 4000;
		$config['encrypt_name']         = TRUE;

		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('gambar')):
			$upload = $this->upload->display_errors();
			$this->session->set_flashdata('alert', $upload);
			return redirect('admin/paket/tambah');
		endif;

		$upload = $this->upload->data();

		$simpan = $this->db->insert('paket', [
			'nama_paket' => $_POST['nama_paket'],
			'harga' => $_POST['harga'],
			'gambar' => $upload['file_name'],
			'keterangan' => $_POST['keterangan'],
		]);


		$this->session->set_flashdata('alert', "Data Tersimpan");
		return redirect('admin/paket');
	} // end func


	public function update(){
		$folder = FCPATH.'upload/paket/';

		if( ! empty($_FILES['gambar']['name'])):
			$config['upload_path']          = $folder;
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$config['max_width']            = 4000;
			$config['max_height']           = 4000;
			$config['encrypt_name']         = TRUE;

			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('gambar')):
				$upload = $this->upload->display_errors();
				$this->session->set_flashdata('alert', $upload);
				return redirect('admin/paket/edit/'.$_POST['id']);
			endif;

			$upload = $this->upload->data();
		endif;

		$update_data = [
			'nama_paket' => $_POST['nama_paket'],
			'harga' => $_POST['harga'],
			'keterangan' => $_POST['keterangan'],
		];

		if( ! empty($upload['file_name'])):
			$update_data['gambar'] = $upload['file_name'];
		endif;

		$this->db->where('id', $_POST['id']);
		$simpan = $this->db->update('paket', $update_data);


		$this->session->set_flashdata('alert', "Data Tersimpan");
		return redirect('admin/paket');
	} // end func


	public function hapus($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('paket');

		redirect(site_url('admin/paket'));
	} // end func

}