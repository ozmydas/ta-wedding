<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends User_Controller {

	function __construct(){
		parent::__construct();
	} // end cons


	public function index(){
		$this->db->where('is_visible', 1);
		$result = $this->db->get('pesanan')->result_array();
		
		$data['data'] = $result;
		$this->load->view('finance/pesanan', $data);
	} // end func


	public function laporan(){
		$this->load->view('finance/laporan');
	} // end func



	public function excel(){
		$filename = "Laporan Lizza Wedding ".date('ymdhi').".xls";
		header("Content-Disposition: attachment; filename=\"$filename\"");
		header("Content-Type: application/vnd.ms-excel");

		$this->db->where('is_visible', 1);
		$result = $this->db->get('pesanan')->result_array();
		
		$data['data'] = $result;
		$this->load->view('finance/excel', $data);
	} // end func


	public function detail($id){
		$this->db->where('id', $id);
		$result = $this->db->get('pesanan')->result_array();

		if( ! $result):
			exit("ID Tidak Valid");
		endif;

		$data['data'] = @$result[0];
		$this->load->view('finance/pesanan-detail', $data);
	} // end func


	public function invoice($id){
		$this->db->where('id', $id);
		$result = $this->db->get('pesanan')->result_array();

		if( ! $result):
			exit("ID Tidak Valid");
		endif;

		$data['data'] = @$result[0];
		$this->load->view('finance/pesanan-invoice', $data);
	} // end func


	public function hutang(){
		$this->db->where('is_visible', 1);
		$this->db->where('is_lunas', 0);
		$result = $this->db->get('pesanan')->result_array();
		
		$data['data'] = $result;
		$data['title'] = "Belum Lunas";
		$this->load->view('finance/pesanan', $data);
	} // end func


	public function lunas(){
		$this->db->where('is_visible', 1);
		$this->db->where('is_lunas', 1);
		$result = $this->db->get('pesanan')->result_array();
		
		$data['data'] = $result;
		$data['title'] = "Sudah Lunas";
		$this->load->view('finance/pesanan', $data);
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

		redirect(site_url('finance/pesanan'));
	} // end func

}