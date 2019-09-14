<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends User_Controller {

	function __construct(){
		parent::__construct();
	} // end cons


	public function index(){
		$this->db->order_by('id', 'DESC');
		$result = $this->db->get('testimoni')->result_array();
		
		$data['data'] = $result;
		$this->load->view('admin/testimoni', $data);
	} // end func


	public function tambah(){
		$this->load->view('admin/testimoni-tambah');
	} // end func



	public function simpan(){
		$folder = FCPATH.'upload/testimoni/';

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
			return redirect('admin/testimoni/tambah');
		endif;

		$upload = $this->upload->data();

		$simpan = $this->db->insert('testimoni', [
			'nama' => $_POST['nama'],
			'gambar' => $upload['file_name'],
			'testimoni' => $_POST['testimoni'],
		]);


		$this->session->set_flashdata('alert', "Data Tersimpan");
		return redirect('admin/testimoni');
	} // end func


	public function hapus($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('testimoni');

		redirect(site_url('admin/testimoni'));
	} // end func


}