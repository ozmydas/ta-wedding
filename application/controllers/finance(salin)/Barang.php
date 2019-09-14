<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends User_Controller {

	function __construct(){
		parent::__construct();
	} // end cons


	public function index($id=null){
		$barang = $this->db->order_by('nama_barang', 'ASC');

		if(empty($id)):
			$barang = $barang->get('barang');
		else:
			$barang = $barang->where('kategori', $id)->get('barang');
		endif;


		$data['kategori'] = $this->db->order_by('id', 'ASC')->get('kategori')->result_array();
		$data['barang'] = $barang->result_array();
		$this->load->view('user/barang', $data);
	} // end func


	public function sewa($id){
		if(empty($_SESSION['invoice'])):
			$_SESSION['invoice'] = date('ymd').rand(1000, 9999);
		endif;


		$user_id = $this->session->userdata('userdata')['id'];

		// ambil data barang
		$this->db->where('id', $id);
		$result = $this->db->get('barang')->result_array();

		if(empty($result)):
			$data['barang'] = [];
			$this->load->view('user/barangbeli', $data);
		endif;

		// insert ke tabel beli barang
		$insert_data = [
			'user_id' => $user_id,
			'invoice' => $_SESSION['invoice'],
			'nama_barang' => $result[0]['nama_barang'],
			'gambar' => $result[0]['gambar'],
			'harga' => $result[0]['harga'],
		];

		$this->db->insert('sewa_barang', $insert_data);
		$this->session->set_flashdata('alert', "Barang Tersimpan. <br/><a href='".site_url('member/barang/koleksi')."'>Lihat Daftar Barang Dibeli</a>");
		redirect(site_url('member/barang/keranjang'));
	} // end func

	public function keranjang(){
		$user_id = $this->session->userdata('userdata')['id'];

		// tampilkan list yg dibeli
		$this->db->where('user_id', $user_id);
		$this->db->where('is_fix', 0);
		$result = $this->db->get('sewa_barang')->result_array();
		
		$data['barang'] = $result;
		$this->load->view('user/keranjang', $data);
	} // end func


	public function proses(){
		$data = [
			'start_sewa' => $this->input->post('tgl_start'),
			'end_sewa' => $this->input->post('tgl_end'),
			'is_fix' => 1,
		];

		$this->db->where('invoice', $_SESSION['invoice']);

		if( ! $this->db->update('sewa_barang', $data)):
			redirect(site_url('member/barang/keranjang'));
		else:
			$_SESSION['invoice'] = date('ymd').rand(1000, 9999);
			redirect(site_url('member/barang/transaksi'));
		endif;
	} // end function


	public function transaksi(){
		$user_id = $this->session->userdata('userdata')['id'];

		// tampilkan list yg dibeli
		$this->db->where('user_id', $user_id);
		$this->db->where('is_fix', 1);
		$this->db->order_by('invoice', 'DESC');
		$result = $this->db->get('sewa_barang')->result_array();

		$fix_result = [];
		$prev_inv = "";
		foreach ($result as $key => $value):
			if($value['invoice'] != $prev_inv):
				$fix_result[$value['invoice']] = $value;
				$prev_inv = $value['invoice'];
			else:
				$fix_result[$value['invoice']]['nama_barang'] .= "<br/>".$value['nama_barang'];
				$fix_result[$value['invoice']]['harga'] += $value['harga'];
			endif;
		endforeach;

		$data['barang'] = $fix_result;
		$this->load->view('user/transaksi', $data);
	} // end func


	public function hapus($id){
		$this->db->where('id', $id);
		$result = $this->db->delete('sewa_barang');

		redirect(site_url('member/barang/keranjang'));
	} // end func


	public function hapusinv($inv){
		$this->db->where('invoice', $inv);
		$result = $this->db->delete('sewa_barang');

		redirect(site_url('member/barang/transaksi'));
	} // end func

}