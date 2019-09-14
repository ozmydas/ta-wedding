<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends User_Controller {

	function __construct(){
		parent::__construct();
	} // end cons


	public function index(){
		$this->db->select('beli_barang.*, user.nama');
		$this->db->join('user', 'beli_barang.user_id = user.id');
		$result = $this->db->get('beli_barang')->result_array();
		
		$data['barang'] = $result;
		$this->load->view('admin/barang', $data);
	} // end func


	public function lihat(){
		$this->db->order_by('nama_barang', 'ASC');
		$result = $this->db->get('barang')->result_array();

		$data['barang'] = $result;

		// var_dump($data);
		$this->load->view('admin/baranglist', $data);
	} // end func


	public function baru(){
		$this->load->view('admin/barangbaru');
	} // end func

	public function edit($id){
		$this->db->where('id', $id);
		$result = $this->db->get('barang')->result_array();

		if( ! $result):
			exit("ID Barang Tidak Valid");
		endif;

		$data['barang'] = @$result[0];
		$this->load->view('admin/barangedit', $data);
	} // end func

	public function simpan(){
		$folder = FCPATH.'upload/barang/';

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
			return redirect('admin/barang/baru');
		endif;

		$upload = $this->upload->data();

		$simpan = $this->db->insert('barang', [
			'nama_barang' => $_POST['nama_barang'],
			'harga' => $_POST['harga'],
			'gambar' => $upload['file_name'],
			'keterangan' => $_POST['keterangan'],
		]);


		$this->session->set_flashdata('alert', "Barang Tersimpan");
		return redirect('admin/barang/baru');
	} // end func


	public function update(){
		$folder = FCPATH.'upload/barang/';

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
				return redirect('admin/barang/edit/'.$_POST['id']);
			endif;

			$upload = $this->upload->data();
		endif;

		$update_data = [
			'nama_barang' => $_POST['nama_barang'],
			'harga' => $_POST['harga'],
			'keterangan' => $_POST['keterangan'],
		];

		if( ! empty($upload['file_name'])):
			$update_data['gambar'] = $upload['file_name'];
		endif;

		$this->db->where('id', $_POST['id']);
		$simpan = $this->db->update('barang', $update_data);


		$this->session->set_flashdata('alert', "Barang Tersimpan");
		return redirect('admin/barang/edit/'.$_POST['id']);
	} // end func


	public function lunas($id){
		$this->db->where('id', $id);
		$result = $this->db->update('beli_barang', ['is_lunas' => 1]);

		redirect(site_url('admin/barang'));
	} // end func

	public function hapus($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('barang');

		redirect(site_url('admin/barang/lihat'));
	} // end func

}