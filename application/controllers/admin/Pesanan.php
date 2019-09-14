<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends User_Controller {

	function __construct(){
		parent::__construct();
	} // end cons


	public function index(){
		// $user_id = $this->session->userdata('userdata')['id'];
		// tampilkan list yg dibeli
		// $this->db->where('user_id', $user_id);
		$result = $this->db->order_by('id', 'DESC')->get('pesanan')->result_array();
		
		$data['data'] = $result;
		$this->load->view('admin/pesanan', $data);
	} // end func


	public function detail($id){
		$this->db->where('id', $id);
		$result = $this->db->get('pesanan')->result_array();

		if( ! $result):
			exit("ID Tidak Valid");
		endif;

		$data['data'] = @$result[0];
		$this->load->view('admin/pesanan-detail', $data);
	} // end func


	public function tambah(){
		$result = $this->db->get('paket')->result_array();
		$data['paket'] = $result;
		$this->load->view('admin/pesanan-tambah', $data);
	} // end func


	public function simpan(){
		if(empty($_SESSION['invoice'])):
			$_SESSION['invoice'] = date('ymd').rand(1000, 9999);
		endif;


		// $user_id = $this->session->userdata('userdata')['id'];

		// ambil data pesanan
		$this->db->where('id', $_POST['paket_id']);
		$result = $this->db->get('paket')->result_array();

		if(empty($result)):
			$data['pesanan'] = [];
			$this->load->view('admin/pesanan', $data);
		endif;

		$harga = $_POST['harga'] < 1 ? $result[0]['harga'] : $_POST['harga'];
		$bayar = $_POST['bayar'] > $result[0]['harga'] ? $result[0]['harga'] : $_POST['bayar'];

		// insert ke tabel beli pesanan
		$insert_data = [
			// 'user_id' => $user_id,
			'invoice' => $_SESSION['invoice'],
			'nama_user' => $_POST['nama_user'],
			'paket_id' => $_POST['paket_id'],
			'pesta_date' => date('Y-m-d', strtotime($_POST['pesta_date'])),
			'nama_paket' => $result[0]['nama_paket'],
			'gambar' => $result[0]['gambar'],
			'harga' => $harga,
			'bayar' => $bayar,
			'keterangan' => $_POST['keterangan'],
			'created_datetime' => date('Y-m-d H:i:s'),
		];

		$this->db->insert('pesanan', $insert_data);
		redirect(site_url('admin/pesanan'));
	} // end func



	public function bayar($id){
		$this->db->where('id', $id);
		$data = $this->db->get('pesanan')->result_array();

		if( ! $data):
			exit("Tidak Valid");
		endif;

		$new_bayar = intval($data[0]['bayar']) + intval($_POST['bayaran']);
		$new_lunas = $new_bayar >= $data[0]['harga'] ? 1 : 0;

		$this->db->where('id', $id);
		$result = $this->db->update('pesanan', [
			'bayar' => $new_bayar,
			'keterangan' => $_POST['keterangan'],
			'is_lunas' => $new_lunas,
		]);

		redirect(site_url('admin/pesanan'));
	} // end func

}